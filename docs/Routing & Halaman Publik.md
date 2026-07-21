---
tags: [routing, blade, frontend]
updated: 2026-07-20
---

# Routing & Halaman Publik

Kembali ke [[00 - PP Presisi MOC]].

Semua ada di **`routes/web.php`**, seluruhnya berupa closure. Tidak ada named route — link di Blade pakai `url('...')`.

## Homepage — `GET /`

View: `welcome.blade.php`. Route ini paling berat, mengambil 5 sumber data:

```php
$banners   = Banner::where('is_active', true)->orderBy('order')->get();
$services  = Service::where('is_active', true)->get();
$projects  = Project::orderBy('project_date','desc')->take(5)->get();
$news      = News::where('is_published', true)->orderBy('published_date','desc')->take(3)->get();
$stockData = Cache::remember('stock_ppre', 600, ...);  // scraping imq21, TTL 600s (dulu 60s)
$settings  = Setting::pluck('value','key');
```

Detail scraping saham di [[Arsitektur Aplikasi#Integrasi Eksternal Data Saham]].

## Grup `/about`

| Route | View | Data |
|---|---|---|
| `/about/profile` | `about.profile` | `$settings` (untuk link PDF company profile) |
| `/about/structure` | `about.structure` | statis |
| `/about/boards` | `about.boards` | `Board::orderBy('order')` |
| `/about/awards` | `about.awards` | statis |
| `/about/miscellaneous` | `about.miscellaneous` | `Document::where('type','miscellaneous')` |

## Grup `/business` — semua statis

| Route | View |
|---|---|
| `/business/civil-work` | `business.civil` |
| `/business/mining-services` | `business.mining` |
| `/business/heavy-equipment` | `business.equipment` |

## Grup `/investor`

Semua halaman meng-include partial `investor/_nav.blade.php` dengan variabel `$active`.

### `/investor/report`
Query paling kompleks — 3 query terpisah, masing-masing di-`groupBy('year')`:

```php
$annualDocs         = Document::type=report, category=annual         → groupBy(year)
$financialDocs      = Document::type=report, category=financial      → groupBy(year)
$sustainabilityDocs = Document::type=report, category=sustainability → groupBy(year)
```
Urutan: `year desc`, lalu `sub_type`.

### `/investor/presentation`
Satu query `type='presentation'`, lalu dikelompokkan di PHP:

```php
$grouped = $allDocs->groupBy(fn($d) => $d->sub_type ?: 'Presentation');
// diambil jadi 3 variabel: presentationDocs, newsletterDocs, pressReleaseDocs
```
Dokumen dengan `sub_type` di luar 3 nilai itu **tidak akan tampil**. Lihat [[Catatan & Technical Debt]].

### Sisanya (pola seragam)

| Route | Filter `type` |
|---|---|
| `/investor/rups` | `rups` |
| `/investor/prospectus` | `prospectus` |
| `/investor/capital-market` | `capital_market` |
| `/investor/transparency-of-information` | `transparency` |
| `/investor/stock` | — (statis, widget client-side) |
| `/investor/corporate-action` | — (statis) |

## Grup GCG — **tanpa prefix**

Perhatikan: route GCG **tidak** pakai `Route::prefix('gcg')`. URL-nya flat di root.

| Route | View | Filter `type` |
|---|---|---|
| `/gcg` | `gcg.policy` | statis |
| `/code-of-conduct` | `gcg.code_of_conduct` | `code_of_conduct` |
| `/charters` | `gcg.charters` | `charters` |
| `/committees` | `gcg.committees` | `committees` |
| `/corporate-secretary` | `gcg.corporate_secretary` | statis |
| `/internal-audit-unit` | `gcg.internal_audit` | `internal_audit` |
| `/whistleblowing-system` | `gcg.whistleblowing` | `whistleblowing` |

Semua urut `year desc`, `title desc`. Partial nav: `gcg/_nav.blade.php`.

## News

```
GET /news          → News::where('is_published',true)->orderBy('published_date','desc')->get()
GET /news/{slug}   → News::where('slug',$slug)->where('is_published',true)->firstOrFail()
```

`firstOrFail()` → artikel unpublished memberi 404, bukan 403.

## Projects

`GET /projects` → semua project urut `project_date desc`, view `projects.index`.

> [!note] Link "Projects" di navbar dan footer **dikomentari** di `layouts/main.blade.php`. Route-nya masih hidup tapi tidak tertaut dari UI.

## Contact — satu-satunya route POST

```php
GET  /contact  → view('contact.index')

POST /contact  → validate: name(required), email(required|email),
                           subject(nullable), phone(nullable), message(required)
                 Contact::create($request->only([
                     'name','email','phone','subject','company','message'
                 ]))
                 redirect()->back()->with('success', ...)
```

> [!success] `'company'` diambil dari request dan ada di `$fillable` — kolomnya sudah ditambahkan ke tabel `contacts` (20 Juli 2026). Lihat [[Database & Schema#contacts]].

Tidak ada notifikasi email — `MAIL_MAILER=log`. Pesan hanya masuk DB, dibaca lewat [[Panel Admin Filament]].

## Layout

`resources/views/layouts/main.blade.php` — di-`@extends` oleh semua halaman publik. Berisi:

- Navbar dengan dropdown: Home / About Us / Business / Investor Relations / GCG / CSR / News / Contact
- Versi mobile terpisah (menu hamburger)
- Footer
- Font Space Grotesk, palet warna custom `ppblue-*` dan `accent`
- Class animasi `reveal fade-up` / `fade-bottom` (scroll reveal)

## Lihat Juga
- [[Alur Konten End-to-End]]
- [[Database & Schema]]
