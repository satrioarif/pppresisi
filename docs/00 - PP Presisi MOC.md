---
tags: [moc, pppresisi, laravel]
updated: 2026-07-20
---

# 00 - PP Presisi MOC

Peta utama dokumentasi project **web company profile PT PP Presisi Tbk (IDX: PPRE)**.

> [!info] Identitas Project
> - **Stack**: PHP 8.2 · Laravel 12 · Filament 5.6 · Tailwind (via Vite)
> - **Database**: Microsoft SQL Server (`sqlsrv`), DB `pp_presisi`
> - **Web Server**: IIS + `php-cgi.exe` di `C:\php-82`
> - **Root project**: `D:\DataPPRE\Deploy\pppresisi`
> - **URL publik**: http://localhost:8083/pppresisi
> - **URL admin**: http://localhost:8083/pppresisi/admin
> - **Referensi konten**: pp-presisi.co.id

## Peta Note

| Note | Isi |
|---|---|
| [[Arsitektur Aplikasi]] | Struktur folder, provider, request lifecycle |
| [[Database & Schema]] | Koneksi SQL Server, tabel, migration, grammar custom |
| [[Routing & Halaman Publik]] | Semua route web + view yang dipakai |
| [[Panel Admin Filament]] | Resource, page, widget, alur CRUD |
| [[Alur Konten End-to-End]] | Dari input admin sampai tampil di halaman publik |
| [[Deployment IIS & Environment]] | web.config, storage link, env, cara jalanin |
| [[Analisa Performa Load Pertama]] | **Kenapa load pertama berat** + rencana perbaikan |
| [[Catatan & Technical Debt]] | Hal-hal yang perlu dirapikan |

> [!warning] Isu terbesar saat ini
> Homepage mengirim **22 MB** ke browser di load pertama — 90%-nya dari 4 foto mentah yang tidak dikompresi. Detail dan solusinya di [[Analisa Performa Load Pertama]].

## Domain Konten

Ada 8 model utama. Alur besarnya sama semua: **admin input via Filament → tabel SQL Server → dibaca closure di `routes/web.php` → dirender Blade.**

- [[Database & Schema#banners|Banner]] — slider homepage
- [[Database & Schema#services|Service]] — layanan (⚠️ tanpa Filament resource)
- [[Database & Schema#projects|Project]] — portfolio proyek
- [[Database & Schema#news|News]] — berita + slug + lampiran PDF
- [[Database & Schema#documents|Document]] — **model paling sentral**, dipakai ~11 halaman IR & GCG
- [[Database & Schema#boards|Board]] — direksi & komisaris
- [[Database & Schema#contacts|Contact]] — inbox form kontak
- [[Database & Schema#settings|Setting]] — key-value config situs

## Entry Point Cepat

- Route publik → `routes/web.php` (semua closure, tidak pakai controller)
- Panel admin → `app/Providers/Filament/AdminPanelProvider.php`
- Layout publik → `resources/views/layouts/main.blade.php`
- Override SQL Server → `app/Providers/AppServiceProvider.php` + `app/Database/SqlServer2008Grammar.php`
