---
tags: [filament, admin, cms]
updated: 2026-07-20
---

# Panel Admin Filament

Kembali ke [[00 - PP Presisi MOC]].

**Filament 5.6** · URL: `http://localhost:8083/pppresisi/admin`

## Konfigurasi Panel

`app/Providers/Filament/AdminPanelProvider.php`

```php
->default()
->id('admin')
->path('admin')
->login()                              // auth pakai tabel users
->profile()                            // halaman edit profil sendiri
->brandName('PP Presisi')
->brandLogo(asset('images/logo-pp.png'))
->brandLogoHeight('4rem')
->favicon(asset('images/logo-pp.png'))
->colors(['primary' => Color::Amber])
->discoverResources(in: app_path('Filament/Resources'), ...)
->discoverPages(in: app_path('Filament/Pages'), ...)
->discoverWidgets(in: app_path('Filament/Widgets'), ...)
->pages([Dashboard::class])
->authMiddleware([Authenticate::class])
```

> [!warning] Tidak ada authorization layer
> Tidak ada policy, role, atau permission. **Siapapun yang ada di tabel `users` punya akses penuh ke seluruh panel**, termasuk `UserResource` untuk bikin user baru.

Login default (dari `.antigravityrules`): `satrioarif21@gmail.com`.

## Struktur Resource (konvensi Filament 5)

Filament 5 memecah tiap resource jadi beberapa file:

```
app/Filament/Resources/<Nama>/
├── <Nama>Resource.php          ← $model, $navigationIcon, getPages()
├── Schemas/<Nama>Form.php      ← definisi form (::configure(Schema))
├── Tables/<Nama>Table.php      ← definisi tabel (::configure(Table))
└── Pages/
    ├── Create<Nama>.php
    ├── Edit<Nama>.php
    └── List<Nama>.php
```

## Daftar Resource

| Resource | Model | Pages | Catatan |
|---|---|---|---|
| BannerResource | Banner | List/Create/Edit | slider homepage |
| BoardResource | Board | List/Create/Edit | recordTitle: `name` |
| ContactResource | Contact | List/Create/Edit | inbox form kontak |
| DocumentResource | Document | List/Create/Edit | **paling kompleks** |
| NewsResource | News | List/Create/Edit | |
| ProjectResource | Project | List/Create/Edit | |
| SettingResource | Setting | List/Create/Edit | key-value mentah |
| UserResource | User | **ManageUsers** (single page) | pakai modal, bukan halaman terpisah |

Semua resource pakai `navigationIcon = Heroicon::OutlinedRectangleStack` (default hasil generate — belum dikustom). Tidak ada `navigationGroup` atau `navigationSort`, jadi urutan sidebar mengikuti default alfabetis.

> [!missing] Tidak ada `ServiceResource`. Model `Service` dipakai di homepage tapi tidak bisa dikelola dari admin.

## DocumentResource — form dinamis

`Schemas/DocumentForm.php` adalah bagian paling pintar di panel ini. Field-nya reaktif (`->live()`):

```
title       (required, full width)
type        (Select, required, LIVE)
   └─► category   muncul HANYA jika type === 'report'
                  options: annual / sustainability / financial
                  (LIVE, required saat visible)
   └─► sub_type   muncul jika:
                    type === 'presentation'  ATAU
                    (type === 'report' DAN category terisi)
                  label berubah:
                    presentation → "Sub-Kategori Presentasi"
                    lainnya      → "Sub-Type / Laporan"
year        (numeric, required)
file_path   (FileUpload, PDF only, required, full width)
description (Textarea, 3 baris)
```

### DocumentsTable
- Kolom: title (searchable, limit 50), type (badge berwarna), category (badge), sub_type, year, created_at & updated_at (hidden by default)
- Filter: `SelectFilter` untuk `type` dan `category`
- Default sort: `year desc`
- Actions: Edit · Bulk Delete

Mapping label & warna badge ada di `formatStateUsing()` / `color()` — perlu diupdate manual tiap kali menambah `type` baru.

## NewsForm

```
title       (required)
slug        (required)   ← MANUAL, tidak auto-generate dari title
content     (Textarea, required, full width)
image       (FileUpload, image, "Thumbnail Image")
attachment  (FileUpload, PDF, "PDF Attachment")
published_date (DatePicker)
is_published   (Toggle, required)
```

> [!success] Resize otomatis saat upload (20 Juli 2026)
> Field `image` di `BannerForm`, `NewsForm`, `ProjectForm`, `BoardForm` sekarang punya `->imageResizeMode('contain')->imageResizeTargetWidth('1920')->imageResizeTargetHeight('1080')->maxSize(2048)`. Mencegah foto mentah dari kamera (bisa 7MB+) tersimpan apa adanya. Field `attachment`/`file_path` (PDF) **tidak** disentuh. Detail: [[Analisa Performa Load Pertama#✅ Prioritas 2 — Cegah terulang: resize otomatis saat upload]].

> [!tip] Slug harus diisi manual dan wajib unik. Kalau bentrok → error unique constraint dari SQL Server, bukan pesan validasi yang ramah.

Konten pakai Textarea biasa (bukan RichEditor). Saat render, `news/show.blade.php` memakai `{!! clean($article->content) !!}` — helper dari `mews/purifier` — sehingga HTML mentah yang diketik admin tetap dirender tapi sudah disanitasi. Helper `clean()` juga dipakai di `welcome.blade.php` untuk `$service->icon` (menyimpan SVG inline).

## UserResource

Pakai `ManageUsers` — satu halaman dengan modal create/edit.

- `email` dan `email_verified_at` di-**disable saat edit** (hanya bisa diisi saat create)
- `password` di-`dehydrated(fn ($state) => filled($state))` → tidak ikut tersimpan kalau dikosongkan saat edit
- `password` required hanya saat operation `create`

## Custom Page: CompanyProfileSettings

`app/Filament/Pages/CompanyProfileSettings.php` · view `resources/views/filament/pages/company-profile-settings.blade.php`

- Navigation group: **Settings** · icon `heroicon-o-document-text`
- Dua `FileUpload` PDF (max 50MB) ke direktori `company-profiles`:
  - `company_profile_en_url`
  - `company_profile_id_url`
- `mount()` mengisi form dari tabel `settings`
- `save()` pakai `Setting::updateOrCreate(['key' => ...], ['value' => ...])` lalu kirim `Notification::make()->success()`

Hasilnya dibaca di `/about/profile` lewat `$settings`. Alur lengkapnya di [[Alur Konten End-to-End#Company Profile PDF]].

## Widget Dashboard

Auto-discovered dari `app/Filament/Widgets/`, urut `$sort`:

| Sort | Widget | Isi |
|---|---|---|
| 1 | `StatsOverview` | 4 kartu: Total Projects, Documents, News, Contacts |
| 2 | `ProjectStatusChart` | doughnut, `groupBy('status')` |
| 3 | `DocumentTypeChart` | pie, `groupBy('type')` |

> [!bug] Kedua chart hanya mendefinisikan **3 warna** di `backgroundColor`. `DocumentTypeChart` bisa punya 12 `type` berbeda → warna akan berulang/kosong.

## Lihat Juga
- [[Database & Schema]]
- [[Alur Konten End-to-End]]
- [[Catatan & Technical Debt]]
