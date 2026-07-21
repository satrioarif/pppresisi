---
tags: [database, sqlserver, schema]
updated: 2026-07-20
---

# Database & Schema

Kembali ke [[00 - PP Presisi MOC]].

## Koneksi

Dari `.env` (kredensial lengkap ada di file `.env`, jangan di-commit):

```
DB_CONNECTION=sqlsrv
DB_HOST=(local)\DEV        ← named instance, bukan hostname biasa
DB_PORT=1433
DB_DATABASE=pp_presisi
DB_USERNAME=sa
```

Config di `config/database.php` → block `sqlsrv`. Opsi `encrypt` dan `trust_server_certificate` **sengaja dikomentari** — kalau nanti pindah ke SQL Server yang memaksa TLS, dua baris itu perlu diaktifkan.

Driver lain yang pakai DB: `SESSION_DRIVER=database`, `QUEUE_CONNECTION=database`, `CACHE_STORE=database`. Jadi tabel `sessions`, `jobs`, `cache` aktif dipakai.

## Kenapa perlu SqlServer2008Grammar

`app/Database/SqlServer2008Grammar.php` meng-extend `SqlServerGrammar` bawaan Laravel dan meng-override `compileSelect()`.

**Masalahnya**: Laravel 12 men-generate `OFFSET ... FETCH NEXT ...` yang baru ada di **SQL Server 2012+**. Kalau server-nya SQL Server 2008, sintaks itu error.

**Solusinya**: kalau query punya `offset`, grammar ini membungkus query dengan `ROW_NUMBER() OVER (...)` (gaya ANSI offset) yang kompatibel dengan 2008.

> [!important] Implikasi
> Semua paginasi — termasuk tabel di [[Panel Admin Filament]] — melewati grammar custom ini. Kalau ada bug paginasi aneh, cek file ini dulu.

## Daftar Tabel

### Tabel Laravel Bawaan
`users`, `password_reset_tokens`, `sessions`, `cache`, `cache_locks`, `jobs`, `job_batches`, `failed_jobs`

### settings
Migration: `2026_05_29_075130`

| Kolom | Tipe | Catatan |
|---|---|---|
| id | bigint PK | |
| key | string UNIQUE | |
| value | text nullable | |
| timestamps | | |

Key-value store. Dibaca dengan `Setting::pluck('value','key')` lalu diakses `$settings['nama_key']` di Blade. Key yang diketahui dipakai: `company_profile_en_url`, `company_profile_id_url`.

### services
Migration: `2026_05_29_075131`

`id`, `title`, `description` (text), `icon`, `image`, `is_active` (bool, default true), timestamps.

> [!warning] Tidak ada `ServiceResource` di Filament. Data services hanya bisa diubah lewat DB langsung atau seeder. Lihat [[Catatan & Technical Debt]].

### projects
Migration: `2026_06_02_014805`

`id`, `title`, `description`, `image`, `location`, `status` (default `'ongoing'`, nilai lain `'completed'`), `project_date` (date), timestamps.

### news
Migration: `2026_06_02_014806` + `2026_06_03_033854` (tambah `attachment`)

`id`, `title`, `slug` (UNIQUE), `content` (longText), `image`, `attachment` (PDF, nullable), `published_date` (date), `is_published` (bool default true), timestamps.

Slug dipakai untuk route `/news/{slug}`. **Slug diisi manual** di form admin, bukan auto-generate.

### contacts
Migration: `2026_06_02_014807` + `2026_07_20_105017` (tambah `company`)

`id`, `name`, `email`, `company` (string, nullable, after `email`), `phone`, `subject`, `message` (text), `is_read` (bool default false), timestamps.

> [!success] Kolom `company` sudah ditambahkan (20 Juli 2026). Sebelumnya `Contact::$fillable` menyertakan `'company'` tapi kolomnya tidak ada di migration awal — sudah sinkron sekarang. Lihat [[Catatan & Technical Debt]] poin 1.

### boards
Migration: `2026_06_02_014808`

`id`, `name`, `position` (mis. President Director), `type` (`direksi` / `komisaris`), `image`, `description` (text), `order` (int default 0), timestamps.

### documents
Migration: `2026_06_02_014808` + `2026_07_02_000001` (tambah `category`, `sub_type`)

| Kolom | Tipe | Catatan |
|---|---|---|
| id | bigint PK | |
| title | string | |
| **type** | string | diskriminator utama |
| **category** | string nullable | hanya dipakai saat `type='report'` |
| **sub_type** | string nullable | label bebas, mis. "Full Year Audited" |
| file_path | string | path relatif di disk `public` |
| year | int nullable | |
| description | text nullable | |

**Ini tabel paling penting.** Satu tabel melayani ~11 halaman berbeda, dibedakan oleh kolom `type`.

Nilai `type` yang valid (dari `DocumentForm`):

| type | Halaman publik |
|---|---|
| `report` | `/investor/report` |
| `presentation` | `/investor/presentation` |
| `rups` | `/investor/rups` |
| `prospectus` | `/investor/prospectus` |
| `capital_market` | `/investor/capital-market` |
| `transparency` | `/investor/transparency-of-information` |
| `code_of_conduct` | `/code-of-conduct` |
| `charters` | `/charters` |
| `committees` | `/committees` |
| `internal_audit` | `/internal-audit-unit` |
| `whistleblowing` | `/whistleblowing-system` |
| `miscellaneous` | `/about/miscellaneous` |

Nilai `category` (hanya saat `type='report'`): `annual`, `sustainability`, `financial` → memisah 3 seksi di halaman `/investor/report`.

Nilai `sub_type` untuk `type='presentation'` yang dikenali route: `Presentation`, `Newsletter`, `Press Release`. Kalau kosong, otomatis masuk grup `Presentation`.

> [!bug] Ada nilai `type='gcg'` yang muncul di `DocumentsTable` (label & filter) tapi **tidak ada di dropdown `DocumentForm`** dan tidak dipakai route manapun. Sisa iterasi lama.

### banners
Migration: `2026_06_30_081705`

`id`, `title`, `subtitle` (nullable), `image` (required), `is_active` (bool default true), `order` (int default 0), timestamps.

## Seeder

`database/seeders/DatabaseSeeder.php` hanya membuat satu user dummy `test@example.com`. Tidak ada seeder konten. User admin asli (`satrioarif21@gmail.com`) dibuat manual.

## Diagram Relasi

Tidak ada foreign key sama sekali antar tabel domain. Semua tabel berdiri sendiri:

```
banners    services   projects   news     boards   contacts   settings
   │          │          │         │         │        │          │
   └──────────┴──────────┴────── (tidak ada relasi) ──┴──────────┘

documents  ← dipisah secara logika lewat kolom type/category/sub_type
```

## Lihat Juga
- [[Routing & Halaman Publik]] — konsumen data
- [[Panel Admin Filament]] — produsen data
