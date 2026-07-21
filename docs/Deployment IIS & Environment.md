---
tags: [deployment, iis, environment]
updated: 2026-07-20
---

# Deployment IIS & Environment

Kembali ke [[00 - PP Presisi MOC]].

## Lingkungan

| Item | Nilai |
|---|---|
| Web server | IIS |
| PHP | 8.2 via `php-cgi.exe` di `C:\php-82` |
| Root project | `D:\DataPPRE\Deploy\pppresisi` |
| URL publik | http://localhost:8083/pppresisi |
| URL admin | http://localhost:8083/pppresisi/admin |
| Database | SQL Server instance `(local)\DEV`, DB `pp_presisi` |

Aplikasi berjalan di **sub-path** (`/pppresisi`), bukan di root domain. Ini penting: `APP_URL` harus ikut sub-path, dan semua link harus pakai `url()` / `asset()` — jangan hardcode `/`.

## web.config

Ada **tiga** file config yang relevan:

| File | Isi |
|---|---|
| `web.config` (root) | **Aktif** — 2 rewrite rule, mengarahkan ke `public/index.php` |
| `public/web.config` | Rewrite standar Laravel + **handler FastCGI** ke `C:\php-82\php-cgi.exe` |
| `web.config_bak` | Cuma `<directoryBrowse enabled="false" />` — sisa lama |

> [!note] Handler FastCGI (`scriptProcessor="C:\php-82\php-cgi.exe"`) didefinisikan di `public/web.config`, bukan di root. Jadi kedua file sama-sama berperan: root yang me-rewrite URL, `public/` yang mengeksekusi PHP.

Isi `web.config` di root — dua rewrite rule:

```xml
<!-- 1. Static Assets: kalau file-nya ada di /public, sajikan langsung -->
<rule name="Static Assets" stopProcessing="true">
    <match url="^(.*)$" />
    <conditions>
        <add input="{DOCUMENT_ROOT}\public\{R:1}" matchType="IsFile" />
    </conditions>
    <action type="Rewrite" url="public/{R:1}" />
</rule>

<!-- 2. Laravel: sisanya lewat public/index.php -->
<rule name="Laravel" stopProcessing="true">
    <match url="^(.*)$" />
    <conditions>
        <add input="{REQUEST_FILENAME}" matchType="IsFile"      negate="true" />
        <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
    </conditions>
    <action type="Rewrite" url="public/index.php" />
</rule>
```

> [!important] Pola ini menjadikan **root project** sebagai document root, bukan folder `public/`. Konsekuensi keamanan: `.env`, `composer.json`, folder `storage/` dan `vendor/` berada di dalam document root. Rule 1 memang hanya me-rewrite kalau file-nya ada di `public/`, tapi ini setup yang lebih berisiko daripada mengarahkan IIS langsung ke `public/`. Lihat [[Catatan & Technical Debt]].

## Konfigurasi .env Penting

```
APP_ENV=local          ← ⚠️ masih 'local'
APP_DEBUG=true         ← ⚠️ masih 'true'
LOG_LEVEL=error
APP_URL=http://localhost:8083/pppresisi

DB_CONNECTION=sqlsrv
DB_HOST=(local)\DEV
DB_DATABASE=pp_presisi

SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
FILESYSTEM_DISK=public
MAIL_MAILER=log        ← email cuma masuk log, tidak terkirim
BROADCAST_CONNECTION=log
```

> [!danger] Sebelum ke produksi
> Ubah `APP_ENV=production` dan `APP_DEBUG=false`. Dengan `APP_DEBUG=true`, stack trace penuh (termasuk isi `.env`) tampil ke publik saat terjadi error.

## Storage Link

```
public/storage → storage/app/public
```

Symlink sudah dibuat. Kalau deploy ulang / copy folder, symlink bisa putus di Windows. Perbaiki dengan:

```bash
php artisan storage:link
```

Definisinya di `config/filesystems.php` → `'links'`.

## Setup Awal

`composer.json` menyediakan script `setup`:

```bash
composer setup
# = composer install
#   copy .env.example → .env (kalau belum ada)
#   php artisan key:generate
#   php artisan migrate --force
#   npm install
#   npm run build
```

Ada juga script `dev` (concurrently: serve + queue:listen + pail + vite) — berguna untuk development lokal, tapi di IIS tidak dipakai karena IIS yang serve.

`post-autoload-dump` otomatis menjalankan `php artisan filament:upgrade`.

## Perintah Rutin

```bash
# setelah ubah .env atau config
php artisan config:cache
php artisan view:cache

# setelah ubah CSS/JS
npm run build

# migrasi baru
php artisan migrate

# cek koneksi DB
php artisan tinker
>>> DB::connection()->getPdo();
```

> [!danger] Jangan jalankan `php artisan route:cache`
> Semua route di `routes/web.php` berbentuk closure. `route:cache` terbukti merusak homepage — GET `/` ditolak dengan `405 Method Not Allowed` (hanya HEAD diterima). Ditemukan & diperbaiki 20 Juli 2026 dengan `route:clear`. `config:cache` dan `view:cache` aman dipakai. Detail: [[Catatan & Technical Debt]] poin 5.

> [!tip] Cache saham homepage disimpan di cache store `database` dengan key `stock_ppre` (TTL **600 detik**, sebelumnya 60). `php artisan cache:clear` akan memaksa fetch ulang.

> [!info] ImageMagick & Node.js sudah ter-install (20 Juli 2026)
> ImageMagick Q16 7.1.2.27 dan Node.js LTS 24.18.0 di-install via `winget` untuk kebutuhan kompresi gambar dan build aset Vite. Keduanya sekarang ada di PATH sistem.

## Catatan Windows / IIS

- Permission tulis diperlukan untuk `storage/` dan `bootstrap/cache/` oleh user pool IIS (`IIS_IUSRS` / `IUSR`).
- Ekstensi PHP wajib: `pdo_sqlsrv` dan `sqlsrv`. Cek dengan `php -m | findstr sqlsrv`.
- Named instance `(local)\DEV` butuh **SQL Server Browser service** aktif.
- Queue pakai driver `database`, tapi tidak ada worker yang jalan sebagai service — job antri tanpa diproses. Saat ini tidak ada fitur yang mengandalkan queue.

## File Sisa di Root

Bukan bagian aplikasi, aman dihapus:

`test.php`, `test_fgc.php`, `test_fgc2.php`, `test_scrape.php`, `test_scrape2.php`, `test_stock.php`, `fix_links.py`, `readme_repo.md` (README skill pihak ketiga, tidak relevan), `web.config_bak`, `public/bak/`, `public/images_backup/`

> [!note] Backup baru dari kompresi gambar (20 Juli 2026)
> `public/images_ORIGINAL_BACKUP/` dan `storage/app/public_ORIGINAL_BACKUP/` — **beda** dari `public/images_backup/` lama di atas. Ini backup file asli sebelum kompresi ImageMagick (lihat [[Analisa Performa Load Pertama#✅ Prioritas 1 — Kompresi gambar (≈95% masalah selesai)]]). **Jangan hapus otomatis** — hapus manual setelah yakin hasil kompresi sudah baik.

## Lihat Juga
- [[Database & Schema]]
- [[Catatan & Technical Debt]]
