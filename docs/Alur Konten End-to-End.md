---
tags: [alur, workflow, cms]
updated: 2026-07-20
---

# Alur Konten End-to-End

Kembali ke [[00 - PP Presisi MOC]].

Note ini menjawab: *"kalau gua mau ubah X di website, gua harus ngapain?"*

## Alur Umum

```
Admin login /admin
      │
      ▼
Filament Resource (Form)  ── FileUpload ──► storage/app/public/<dir>/
      │                                            │
      ▼                                            ▼
Eloquent save ──► tabel SQL Server            public/storage (symlink)
      │
      ▼
Closure di routes/web.php (query + filter)
      │
      ▼
Blade view  ──► asset/Storage::url() untuk file
      │
      ▼
Halaman publik
```

## Per Fitur

### Banner Homepage
`Admin › Banners` → isi title, subtitle, image, `is_active`, `order`
→ tabel `banners`
→ `GET /` filter `is_active=true` urut `order` asc
→ `welcome.blade.php` slider

### Dokumen Investor / GCG (alur tersering)

1. `Admin › Documents › Create`
2. Pilih **type** — ini yang menentukan halaman mana yang menampilkan
3. Kalau `type = report`, wajib pilih **category** (`annual` / `sustainability` / `financial`), lalu isi **sub_type**
4. Kalau `type = presentation`, isi **sub_type** dengan salah satu dari: `Presentation`, `Newsletter`, `Press Release`
5. Isi **year**, upload PDF
6. Simpan → tabel `documents`, file ke `storage/app/public/`

Tabel mapping type → halaman ada di [[Database & Schema#documents]].

> [!warning] Jebakan `sub_type` presentasi
> Route `/investor/presentation` hanya mengambil grup `Presentation`, `Newsletter`, dan `Press Release`. Kalau admin mengetik sub_type lain (typo, huruf besar-kecil beda), dokumen **tersimpan tapi tidak muncul di web**. String-nya case-sensitive.

### News

1. `Admin › News › Create`
2. Isi title, **slug manual** (unik, format URL), content, thumbnail, optional PDF
3. Set `published_date` + toggle `is_published`
4. Tampil di `/news` (list, urut `published_date desc`) dan `/news/{slug}` (detail)

Homepage menampilkan 3 berita terbaru yang published.

### Boards (Direksi & Komisaris)

`Admin › Boards` → isi name, position, **type** (`direksi` / `komisaris`), image, description, `order`
→ `/about/boards` mengambil semua, urut `order` asc
→ pemisahan direksi/komisaris dilakukan di Blade berdasarkan `type`

### Company Profile PDF

Ini **tidak** lewat DocumentResource, tapi custom page:

1. `Admin › Settings › Company Profile Settings`
2. Upload PDF English dan/atau Indonesia (max 50MB)
3. `save()` → `Setting::updateOrCreate` dengan key `company_profile_en_url` / `company_profile_id_url`
4. `/about/profile` baca `Setting::pluck('value','key')` → tombol download

### Projects

`Admin › Projects` → title, description, image, location, `status` (`ongoing`/`completed`), `project_date`
→ homepage ambil 5 terbaru; `/projects` ambil semua

> [!note] Halaman `/projects` tidak tertaut dari navbar (link-nya dikomentari di layout). Data project tetap tampil di homepage.

### Contact (arah sebaliknya — publik → admin)

```
Pengunjung isi form /contact
      │ POST /contact (validasi name, email, message)
      ▼
Contact::create() ──► tabel contacts
      │
      ▼
Admin › Contacts (baca pesan)
```

Tidak ada notifikasi email (`MAIL_MAILER=log`). Admin harus cek panel manual.

### Services

`Service::where('is_active', true)` dipakai di homepage, **tapi tidak ada Filament resource-nya**. Untuk mengubah: query SQL langsung, tinker, atau buat `ServiceResource` dulu.

## File Upload — di mana filenya mendarat

- Disk default: `FILESYSTEM_DISK=public` → `storage/app/public/`
- Diakses publik lewat symlink `public/storage` (sudah ada, dibuat via `php artisan storage:link`)
- URL dibentuk dari `APP_URL` + `/storage` — lihat `config/filesystems.php`
- Direktori khusus: `company-profiles/` untuk PDF company profile

> [!important] Kalau file upload tidak muncul di web, cek dua hal: symlink `public/storage` masih hidup, dan `APP_URL` di `.env` benar (`http://localhost:8083/pppresisi`). Detail di [[Deployment IIS & Environment]].

## Lihat Juga
- [[Panel Admin Filament]]
- [[Routing & Halaman Publik]]
