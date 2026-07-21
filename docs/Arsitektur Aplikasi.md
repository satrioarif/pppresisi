---
tags: [arsitektur, laravel]
updated: 2026-07-20
---

# Arsitektur Aplikasi

Kembali ke [[00 - PP Presisi MOC]].

## Karakter Arsitektur

Project ini **bukan** Laravel MVC standar. Pola sebenarnya:

```
Browser
  │
  ▼
IIS (web.config rewrite) ──► public/index.php
  │
  ▼
routes/web.php  ← SEMUA logic query ada di sini, dalam bentuk Closure
  │
  ▼
Eloquent Model (app/Models/*) ──► SQL Server (pp_presisi)
  │
  ▼
Blade view (resources/views/*) ──► layouts/main.blade.php
```

> [!warning] Controller tidak dipakai
> Folder `app/Http/Controllers/` berisi `BoardController`, `ContactController`, `DocumentController`, `NewsController`, `ProjectController` — tapi **tidak satupun direferensikan di `routes/web.php`**. Semua route pakai closure inline. Lihat [[Catatan & Technical Debt]].

## Struktur Folder Penting

```
app/
├── Database/SqlServer2008Grammar.php   ← override paginasi SQL Server
├── Filament/
│   ├── Pages/CompanyProfileSettings.php
│   ├── Resources/{Banners,Boards,Contacts,Documents,News,Projects,Settings,Users}/
│   └── Widgets/{StatsOverview,ProjectStatusChart,DocumentTypeChart}.php
├── Http/Controllers/                   ← DEAD CODE
├── Models/                             ← 9 model, semua thin (cuma $fillable)
└── Providers/
    ├── AppServiceProvider.php          ← daftarkan grammar custom
    └── Filament/AdminPanelProvider.php ← konfigurasi panel /admin

resources/views/
├── layouts/main.blade.php              ← navbar + footer, di-extend semua halaman
├── welcome.blade.php                   ← homepage
├── about/    (profile, structure, boards, awards, miscellaneous)
├── business/ (civil, mining, equipment)
├── investor/ (+ _nav.blade.php partial)
├── gcg/      (+ _nav.blade.php partial)
├── csr/, news/, projects/, contact/
└── filament/pages/company-profile-settings.blade.php
```

## Model Layer

Semua model di `app/Models/` sangat tipis — hanya `$fillable`, **tidak ada relasi, cast, scope, atau accessor**. `User` satu-satunya yang punya `$hidden` dan `casts()`.

Konsekuensi: field boolean seperti `is_active` / `is_published` dan tanggal `published_date` / `project_date` **tidak di-cast**, sehingga tipe datanya bergantung driver SQL Server. Lihat [[Catatan & Technical Debt]].

## Provider

### AppServiceProvider
Isinya satu hal saja: mengganti query grammar untuk koneksi `sqlsrv`.

```php
Connection::resolverFor('sqlsrv', function ($connection, $database, $prefix, $config) {
    $conn = new SqlServerConnection(...);
    $conn->setQueryGrammar(new \App\Database\SqlServer2008Grammar($conn));
    return $conn;
});
```

Detail alasannya di [[Database & Schema#Kenapa perlu SqlServer2008Grammar]].

### AdminPanelProvider
Konfigurasi panel Filament — lihat [[Panel Admin Filament]].

## Dependensi Eksternal

Dari `composer.json`:

- `filament/filament ^5.6` — panel admin
- `mews/purifier ^3.4` — HTML sanitizer (dipakai untuk render konten News)
- `guzzlehttp/guzzle 7.12.1` — versi di-pin
- `laravel/tinker`

Frontend: Vite + Tailwind (`resources/css/app.css`, `resources/js/app.js`), font Space Grotesk dari Google Fonts.

## Integrasi Eksternal: Data Saham

Homepage mengambil harga saham PPRE dengan **scraping** endpoint pihak ketiga:

```php
Cache::remember('stock_ppre', 600, function () {
    $html = @file_get_contents('https://xml.imq21.com/smart/widget/ppre/intraday.php', ...);
    preg_match('/const intradayData = JSON\.parse\(\'(\[.*?\])\'\);/', $html, $matches);
    // ambil harga terakhir & previous close, hitung change + changePercent
});
```

- Cache **600 detik** (dulu 60), timeout **1,5 detik** (dulu 3), error sekarang di-log (`Log::warning(...)`, dulu `catch {}` kosong) → kalau gagal, `$stockData` bernilai `null` tapi kegagalannya tercatat di log. Lihat [[Analisa Performa Load Pertama#✅ Prioritas 5 — Keluarkan scraping saham dari request cycle (opsi Cepat)]].
- Halaman `/investor/stock` punya widget saham sendiri (tab Intraday / Historical / Calculator) di sisi client.
- File `test_stock.php`, `test_scrape*.php`, `test_fgc*.php` di root adalah sisa eksperimen scraping ini.

## Lihat Juga
- [[Routing & Halaman Publik]]
- [[Alur Konten End-to-End]]
