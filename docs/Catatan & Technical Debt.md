---
tags: [tech-debt, todo, review]
updated: 2026-07-20
---

# Catatan & Technical Debt

Kembali ke [[00 - PP Presisi MOC]].

Temuan dari penelusuran kode 20 Juli 2026. Diurutkan dari yang paling berdampak.

> [!abstract] Performa
> Isu performa load pertama dipisah ke note sendiri: [[Analisa Performa Load Pertama]]. **Status: sudah diperbaiki (20 Juli 2026)** — homepage turun dari 22 MB ke ~66 KB. Detail lengkap di note tersebut.

## 🔴 Bug / Berpotensi Error

### ✅ 1. Kolom `company` — form kontak homepage kemungkinan besar error — **FIXED (20 Juli 2026)**
- `Contact::$fillable` memuat `'company'`
- `POST /contact` memanggil `$request->only([... 'company' ...])`
- Migration `create_contacts_table` **tidak punya kolom `company`**

Ada **dua form kontak** yang berbeda dan hanya salah satunya mengirim `company`:

| Form | Punya `<input name="company">`? |
|---|---|
| `contact/index.blade.php` (halaman `/contact`) | ❌ tidak |
| `welcome.blade.php` baris 378 (section "Get In Touch" di homepage) | ✅ **ya** |

**Resolusi**: dicek dengan `Schema::hasColumn('contacts','company')` → hasilnya `false` (kolom belum ada). Dibuat migration `2026_07_20_105017_add_company_to_contacts_table.php` (`string`, `nullable`, `after('email')`) dan sudah di-`migrate`. Kolom sekarang ada di DB dan sinkron dengan repo — form kontak homepage tidak lagi berpotensi error 500.

Referensi: [[Database & Schema#contacts]], [[Routing & Halaman Publik#Contact — satu-satunya route POST]]

### 2. `sub_type` presentasi bersifat free-text tapi diperlakukan enum
Route `/investor/presentation` hanya mengenali persis `Presentation`, `Newsletter`, `Press Release`. `DocumentForm` memakai `TextInput` bebas.
→ Salah ketik = dokumen tersimpan tapi tidak pernah tampil, tanpa peringatan apapun.
**Fix**: ganti jadi `Select` dengan opsi tetap saat `type === 'presentation'`.

### 3. Warna chart kurang
`DocumentTypeChart` dan `ProjectStatusChart` hanya mendefinisikan 3 `backgroundColor`. Document punya 12 `type` → sebagian slice tanpa warna.
**Fix**: generate palet sepanjang jumlah label.

### 4. `type='gcg'` yatim piatu
Muncul di label & filter `DocumentsTable`, tapi tidak ada di dropdown `DocumentForm` dan tidak dibaca route manapun. Sisa iterasi lama — bersihkan.

### 5. `php artisan route:cache` merusak homepage — **BARU DITEMUKAN (20 Juli 2026)**
Semua route di `routes/web.php` berbentuk closure (lihat poin 10). Menjalankan `php artisan route:cache` membuat closure route ter-cache secara tidak benar, dan GET `/` (dan kemungkinan semua route GET lain) ditolak dengan `405 Method Not Allowed` — hanya HEAD yang diterima Laravel setelah cache aktif.

**Sudah ditemukan & diperbaiki saat eksekusi**: `php artisan route:clear` langsung menghilangkan masalah. `config:cache` dan `view:cache` **aman** dipakai, hanya `route:cache` yang bermasalah.

**Fix**: jangan jalankan `route:cache` selama route masih closure. Kalau nanti poin 10 dikerjakan (pindah ke controller), `route:cache` kemungkinan aman dipakai lagi — perlu diuji ulang.

Referensi: [[Analisa Performa Load Pertama#✅ Prioritas 6 — Cache config & route (dengan penyesuaian)]], [[Deployment IIS & Environment#Perintah Rutin]]

## 🟠 Keamanan

### 6. `APP_DEBUG=true` + `APP_ENV=local`
Kalau environment ini juga dipakai untuk akses non-lokal, halaman error Laravel menampilkan stack trace lengkap beserta isi environment.
**Fix**: `APP_ENV=production`, `APP_DEBUG=false`.

### 7. Document root = root project
`web.config` menjadikan folder project sebagai document root, bukan `public/`. `.env`, `vendor/`, `storage/` berada di dalamnya.
**Fix ideal**: arahkan site IIS langsung ke `D:\DataPPRE\Deploy\pppresisi\public` dan gunakan `public/web.config` saja.

### 8. Tidak ada authorization di panel admin
Tidak ada policy/role. Semua user di tabel `users` = super admin, termasuk bisa membuat user baru lewat `UserResource`.
**Fix**: minimal tambahkan `canAccessPanel()` di model `User`, idealnya role-based (Filament Shield).

### 9. Kredensial DB dan admin ada di file plain text
`.env` (password `sa`) dan `.antigravityrules` (password admin) berada di repo/folder deploy. Pastikan `.env` masuk `.gitignore` (sudah) dan `.antigravityrules` tidak ikut ter-publish.

## 🟡 Struktur Kode

### 10. Controller = dead code
5 controller (`Board`, `Contact`, `Document`, `News`, `Project`) ada tapi **tidak satupun dipakai** — semua route pakai closure.
**Fix**: pilih satu — pindahkan logic ke controller, atau hapus foldernya. Saat ini membingungkan.

### 11. Model tanpa cast & relasi
Tidak ada `casts()` untuk `is_active`, `is_published`, `published_date`, `project_date`. Di SQL Server, `bit` bisa balik sebagai `1`/`0` int, dan tanggal sebagai string.
**Fix**: tambahkan `protected function casts()` di tiap model.

### 12. Tidak ada `ServiceResource`
Model `Service` dirender di homepage tapi tidak bisa dikelola dari admin sama sekali.
**Fix**: generate `ServiceResource`.

### 13. Slug News manual
Tidak auto-generate dari title, tidak ada validasi `unique` di level form → benturan slug memunculkan error DB mentah.
**Fix**: `->live(onBlur: true)->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state)))` di field title, plus `->unique(ignoreRecord: true)` di slug.

### 14. Navigasi Filament belum ditata
Semua resource pakai icon default `OutlinedRectangleStack`, tanpa `navigationGroup` atau `navigationSort`.
**Fix**: kelompokkan jadi grup — Konten (News, Banner, Project), Investor Relations (Document), Perusahaan (Board), Pesan (Contact), Settings.

## 🟢 Kerapian

### 15. File eksperimen di root
`test.php`, `test_stock.php`, `test_scrape.php`, `test_scrape2.php`, `test_fgc.php`, `test_fgc2.php`, `fix_links.py`, `web.config_bak`, `public/bak/`, `public/images_backup/`.
Semuanya sisa debugging scraping saham dan bisa dihapus.

### 16. `readme_repo.md` bukan dokumentasi project ini
31KB README dari skill "UI UX Pro Max" pihak ketiga. Menyesatkan siapapun yang membuka repo. Hapus atau rename.

### 🟡 17. Scraping saham rapuh — **SEBAGIAN FIXED (20 Juli 2026)**
`GET /` menggunakan `file_get_contents` + regex terhadap HTML `xml.imq21.com`. Kalau struktur halaman itu berubah, regex gagal diam-diam dan blok saham hilang tanpa jejak di log.

**Sudah dikerjakan** (opsi cepat, lihat [[Analisa Performa Load Pertama#✅ Prioritas 5 — Keluarkan scraping saham dari request cycle (opsi Cepat)]]): TTL cache 60→600 detik, timeout 3→1,5 detik, `catch` sekarang `Log::warning(...)` alih-alih diam-diam kosong.

**Belum dikerjakan** (opsi "Benar", masih relevan): pindahkan ke scheduled job (`php artisan schedule:run`) supaya nol HTTP call di request cycle homepage sama sekali.

### 18. Halaman `/projects` tidak tertaut
Route dan view hidup, tapi link di navbar & footer dikomentari. Putuskan: aktifkan atau hapus.

### 19. `SqlServer2008Grammar` — pastikan masih perlu
Grammar custom ini hanya dibutuhkan kalau target server benar-benar SQL Server 2008. Kalau instance `(local)\DEV` sudah 2012+, override ini bisa dilepas agar paginasi kembali ke jalur bawaan Laravel yang lebih teruji.
Cek dengan: `SELECT @@VERSION`.

## Lihat Juga
- [[Arsitektur Aplikasi]]
- [[Deployment IIS & Environment]]
