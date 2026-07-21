---
tags: [performa, optimasi, frontend]
updated: 2026-07-20
---

# Analisa Performa Load Pertama

Kembali ke [[00 - PP Presisi MOC]].

> [!success] Status: SUDAH DIPERBAIKI (20 Juli 2026)
> Prioritas 1-4 dan 6 di bawah sudah dieksekusi dan diverifikasi. Prioritas 5 dieksekusi sebagian (opsi "Cepat", bukan "Benar"). Total transfer homepage load pertama turun dari **22,06 MB → ~66 KB** (bahkan di bawah estimasi target ~1,2 MB), karena kombinasi kompresi gambar + lazy loading membuat sebagian besar gambar baru diunduh saat halaman discroll. Detail eksekusi tiap prioritas ada di masing-masing bagian di bawah, ditandai ✅.
>
> **Bug baru ditemukan saat eksekusi**: `php artisan route:cache` merusak homepage (`405 Method Not Allowed` untuk GET `/`) karena semua route di `routes/web.php` berbentuk closure. **Jangan jalankan `route:cache` di project ini** selama route masih closure — cukup `config:cache` + `view:cache`. Lihat [[Deployment IIS & Environment#Perintah Rutin]].

Hasil pengukuran awal (sebelum perbaikan), diukur langsung di browser terhadap `http://localhost:8083/pppresisi` pada 20 Juli 2026, memakai Navigation Timing + Resource Timing API.

## Ringkasan Angka

| Metrik | Hasil |
|---|---|
| **Total transfer load pertama** | **22,06 MB** |
| Jumlah request | 20–23 |
| Request gambar | 17 req = **22,05 MB (99,9% dari total)** |
| TTFB load pertama (cold) | **1287 ms** |
| TTFB kunjungan berikutnya (warm) | 241–323 ms |
| DOMContentLoaded | 1655 ms |
| Load complete | 1872 ms |

> [!danger] Konteks penting
> Angka 1872 ms itu diukur **di localhost — tanpa latency jaringan sama sekali**. 22 MB di jaringan kantor 10 Mbps ≈ **18 detik**. Di 4G rata-rata Indonesia ≈ **25–40 detik**. Ini yang bikin terasa "berat banget".

## Penyebab, Diurutkan Berdasarkan Dampak

### 🔴 1. Gambar tidak dikompresi — 20 MB dari 4 file saja

Ini penyebab **dominan**. Empat gambar menyumbang 90% dari seluruh payload:

| Ukuran | Resolusi asli | File |
|---|---|---|
| 7,45 MB | 4608 × 3072 | `01KWTM8Y99AE9YP6FXVAAZ465M.jpg` (banner dari DB) |
| 5,83 MB | 6016 × 3384 | `01KWTMATH3Z52MQB3ZB1E422YB.JPG` (banner dari DB) |
| 5,09 MB | 4000 × 3000 | `5f3015bb6d7666c1aab0b1780b922241.JPG` (hero statis) |
| 1,57 MB | 5375 × 3023 | `01KWTM6EEXX8E74HRYT9ZPSEPK.jpg` (banner dari DB) |

Ini **foto mentah langsung dari kamera** — 6016 × 3384 itu resolusi DSLR. Slot tampilnya cuma **1707 × 764 px**.

> [!example] Perbandingan konkret
> Gambar 4000×3000 (5,09 MB) dirender di kotak 1707×764. Browser mendownload **~14 juta piksel** untuk menampilkan **~1,3 juta piksel**. 91% data yang diunduh langsung dibuang.

**Kenapa bisa begini**: `BannerResource` memakai `FileUpload` polos tanpa `->imageResizeMode()` atau `->imageResizeTargetWidth()`. Admin upload foto apa adanya, Filament simpan apa adanya. Tidak ada satupun tahap kompresi di seluruh pipeline.

Total folder aset: `public/images` = **68 MB**, `storage/app/public` = **29 MB**.

### 🔴 2. Semua gambar dimuat sekaligus, tanpa lazy loading

Hasil pemeriksaan DOM:

```
total <img>          : 23
pakai loading="lazy" : 0
punya width+height   : 0
```

Dua akibat:

1. **Semua 23 gambar diunduh bersamaan saat load**, termasuk yang ada di footer dan section paling bawah yang belum kelihatan.
2. **Slider hero merender SEMUA banner sekaligus** — kalau ada 4 banner, keempatnya diunduh penuh di awal, padahal user cuma lihat slide pertama.

Tanpa atribut `width`/`height`, browser juga tidak tahu ruang yang harus disiapkan → layout melompat-lompat saat gambar masuk satu per satu (**CLS buruk**).

### 🟠 3. Tailwind dijalankan dari CDN sebagai compiler runtime

`public/build/` **tidak ada** — artinya `npm run build` belum pernah dijalankan di environment ini. Blok fallback di `layouts/main.blade.php` aktif:

```blade
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <script src="https://cdn.tailwindcss.com"></script>   ← INI YANG JALAN SEKARANG
@endif
```

Terkonfirmasi di browser: `typeof tailwind !== 'undefined'` → `true`, `<link href="*/build/*">` → tidak ada.

Kenapa ini mahal:

- `cdn.tailwindcss.com` bukan file CSS — itu **compiler Tailwind versi browser**. Dia mengunduh JS-nya, memindai seluruh DOM, lalu **men-generate CSS saat runtime di device user**.
- Tag `<script>`-nya ada di `<head>` **tanpa `defer`** → memblokir parsing HTML.
- Butuh koneksi internet ke CDN eksternal. Di jaringan kantor yang membatasi outbound, ini bisa menggantung sampai timeout.
- Tailwind sendiri menandai mode CDN sebagai **"for development only"**.

Ditambah 3 request ke `fonts.googleapis.com` / `fonts.gstatic.com` untuk font Space Grotesk — juga render-blocking dan juga butuh internet.

### 🟠 4. TTFB load pertama 4× lebih lambat (1287 ms vs ~250 ms)

Selisih ~1000 ms di hit pertama. Tiga kontributor:

**a. Scraping harga saham di dalam request cycle**

`GET /` memanggil `file_get_contents('https://xml.imq21.com/...')` dengan `timeout => 3`. Cache-nya cuma **60 detik**.

Artinya: **setiap 60 detik, satu pengunjung yang apes menanggung latency HTTP eksternal ini di dalam waktu tunggu halamannya.** Kalau imq21 lagi lambat atau tidak reachable, pengunjung itu menunggu sampai 3 detik penuh sebelum HTML mulai dikirim.

**b. Cache store pakai database**

`CACHE_STORE=database` → tiap cek cache saham = round-trip query ke SQL Server. Untuk data yang dibaca tiap request, ini overhead yang tidak perlu.

**c. Tidak ada config/route cache**

Isi `bootstrap/cache/` cuma `packages.php` dan `services.php`. **Tidak ada `config.php` maupun `routes-v7.php`.**

Tanpa itu, tiap request Laravel harus mem-parse ulang seluruh file di `config/` dan meregistrasi ulang semua route dari nol. Di Windows + IIS FastCGI (tanpa persistent process seperti PHP-FPM), penalti ini terasa di setiap request.

### 🟡 5. Homepage menembak 5 query + 1 HTTP call

```php
Banner::where('is_active',true)->orderBy('order')->get()
Service::where('is_active',true)->get()
Project::orderBy('project_date','desc')->take(5)->get()
News::where('is_published',true)->orderBy('published_date','desc')->take(3)->get()
Setting::pluck('value','key')
Cache::remember('stock_ppre', 60, ...)   // + query cache table + HTTP eksternal
```

Bukan masalah besar sendirian, tapi menumpuk di atas poin 4.

## Rencana Perbaikan

Diurutkan berdasarkan **rasio dampak terhadap usaha**.

### ✅ Prioritas 1 — Kompresi gambar (≈95% masalah selesai)

**Selesai.** Dieksekusi dengan ImageMagick Q16 7.1.2.27 (di-install via winget), resize `1920x1920>` + quality 80 + `-strip`, tanpa konversi ke WebP (di luar scope task, tetap `.jpg`/`.png`).

| Folder | Sebelum | Sesudah |
|---|---|---|
| `public/images` | 67,43 MB | 12,95 MB |
| `storage/app/public` | 28,58 MB | 13,99 MB |

Backup file asli (sebelum kompresi) disimpan di `public/images_ORIGINAL_BACKUP/` dan `storage/app/public_ORIGINAL_BACKUP/` — **belum dihapus**, aman dihapus manual setelah yakin hasil kompresi baik.

Tidak ada lagi file gambar >1MB di kedua folder.

### ✅ Prioritas 2 — Cegah terulang: resize otomatis saat upload

**Selesai**, dengan sedikit modifikasi dari rencana awal (tidak pakai `->optimize('webp')` atau `->imageEditor()` — di luar scope task, dan `imageResizeMode` pakai `contain` bukan `cover` supaya proporsi gambar upload admin tidak terpotong paksa).

Diterapkan di `BannerForm`, `NewsForm` (field `image`, bukan `attachment` yang PDF), `ProjectForm`, `BoardForm`:

```php
FileUpload::make('image')
    ->image()
    ->imageResizeMode('contain')
    ->imageResizeTargetWidth('1920')
    ->imageResizeTargetHeight('1080')
    ->maxSize(2048)          // tolak upload > 2 MB
```

### ✅ Prioritas 3 — Lazy loading + dimensi

**Selesai.** 44 tag `<img>` di 14 file `resources/views/**/*.blade.php` sekarang punya `loading` + `width`/`height`. Hanya logo navbar (`layouts/main.blade.php`) yang sengaja tanpa `loading` (default eager, selalu dibutuhkan segera). Slide pertama hero homepage pakai `loading="eager" fetchpriority="high"`, sisanya (termasuk 3 slide hero berikutnya) `loading="lazy"`.

### ✅ Prioritas 4 — Build aset, lepas dari CDN

**Selesai.** `npm install` + `npm run build` dijalankan (Node.js LTS 24.18.0 di-install via winget). `public/build/manifest.json` terbentuk, blok `@vite` di `layouts/main.blade.php` aktif, `cdn.tailwindcss.com` tidak lagi dipanggil (terverifikasi 0 request ke domain itu di Network tab).

> [!warning] Temuan tambahan saat eksekusi
> `resources/css/app.css` hasil `laravel new` default **tidak punya** definisi warna (`ppblue-*`, `accent`, `ppyellow`) dan font `Space Grotesk` yang sebelumnya disuntik lewat `tailwind.config` di blok CDN. Tailwind v4 (`@tailwindcss/vite`) butuh ini didefinisikan lewat `@theme` di CSS, bukan JS config. Sudah ditambahkan 1:1 sesuai config CDN lama — kalau tidak, semua warna brand & font custom akan hilang begitu CDN dimatikan.

Font Space Grotesk **masih** dari Google Fonts (bukan hosted lokal) — bagian "bonus" di rencana awal ini tidak dikerjakan (di luar scope task).

### ✅ Prioritas 5 — Keluarkan scraping saham dari request cycle (opsi Cepat)

**Selesai — opsi "Cepat" saja**, opsi "Benar" (scheduled job) sengaja tidak dikerjakan (eksplisit di luar scope task terkait).

- TTL cache: 60 detik → **600 detik**
- Timeout: 3 detik → **1,5 detik**
- `catch` kosong sekarang mencatat `Log::warning('Gagal fetch harga saham PPRE: '.$e->getMessage())`

Opsi "Benar" (pindah ke scheduled command) masih berlaku sebagai perbaikan lanjutan — lihat [[Catatan & Technical Debt]] poin 16.

### ✅ Prioritas 6 — Cache config & route (dengan penyesuaian)

```bash
php artisan config:cache
php artisan view:cache
```

> [!danger] `route:cache` TIDAK dipakai
> Sempat dijalankan sesuai rencana awal, tapi **langsung merusak homepage** — GET `/` ditolak dengan `405 Method Not Allowed`, hanya HEAD yang diterima. Penyebabnya: `routes/web.php` seluruhnya pakai closure, dan caching closure route tidak berjalan benar di setup Laravel 12 + versi paket yang terpasang di sini. Sudah di-`route:clear` dan diverifikasi normal kembali. **Jangan jalankan `route:cache`** selama route masih closure (lihat [[Catatan & Technical Debt]] poin 9 soal controller dead code — kalau suatu saat route dipindah ke controller, `route:cache` kemungkinan aman dipakai lagi).

`CACHE_STORE=database` **belum diubah** ke `file` — saran ini masih berlaku sebagai perbaikan lanjutan, di luar scope task yang sudah dikerjakan.

## Hasil Setelah Perbaikan

| | Sebelum | Target Awal | **Hasil Aktual** |
|---|---|---|---|
| Total transfer (load pertama) | 22,06 MB | ~1,2 MB | **~66 KB** |
| Request gambar di awal | 17 (semua) | 3-4 (above the fold) | 2 (logo + hero eager) |
| File gambar >1MB di disk | 4 file, s/d 7,45MB | - | **0** |
| `cdn.tailwindcss.com` termuat? | Ya | Tidak | **Tidak** |

Hasil aktual jauh lebih baik dari target awal karena lazy loading membuat gambar below-the-fold benar-benar tidak diunduh sampai pengguna scroll ke situ — bukan cuma dikompresi.

TTFB dan angka load-di-4G belum diukur ulang secara formal (perlu network throttling di DevTools nyata, bukan dari environment otomatisasi) — perbaikan TTFB dari `config:cache`/`view:cache`/cache saham tetap berlaku secara teori, tapi belum ada angka before/after baru untuk baris ini.

## Lihat Juga
- [[Arsitektur Aplikasi#Integrasi Eksternal Data Saham]]
- [[Deployment IIS & Environment]]
- [[Catatan & Technical Debt]]
