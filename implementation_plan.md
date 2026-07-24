# Implementasi CRUD Admin untuk Konten Hardcoded

Membuat Filament CRUD resources untuk konten yang saat ini hardcoded di Blade templates, agar admin bisa mengelolanya tanpa edit kode. Semua mengikuti pattern Filament v5.7 yang sudah ada di project dan desain sesuai DESIGN.md.

## Scope

Hanya konten yang **sudah ada** di website tapi hardcoded. Konten baru (Team Members, FAQs, dll) **tidak** dibuatkan.

---

## Proposed Changes

### 1. Testimonials (Testimoni Klien)

> Saat ini 3 testimoni hardcoded di [welcome.blade.php:L554-L604](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php#L554-L604)

#### [NEW] Migration: `create_testimonials_table`
- Fields: `id`, `quote`, `author_name`, `author_role`, `company`, `country`, `is_featured` (bool), `sort_order` (int), `timestamps`

#### [NEW] Model: [Testimonial.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/app/Models/Testimonial.php)
- `$guarded = []`, cast `is_featured` → boolean

#### [NEW] Filament Resource: `app/Filament/Resources/Testimonials/`
- **TestimonialResource.php** — Resource definition
- **Schemas/TestimonialForm.php** — Form: quote (Textarea), author_name, author_role, company, country, is_featured (Toggle), sort_order
- **Tables/TestimonialsTable.php** — Table: author_name, company, quote (limit), is_featured (badge), sort_order, created_at
- **Pages/** — ListTestimonials, CreateTestimonial, EditTestimonial

#### [MODIFY] [welcome.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php)
- Replace hardcoded testimonials section (L554-L604) dengan `@foreach($testimonials)`

#### [MODIFY] [web.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/routes/web.php)
- Pass `testimonials` ke welcome view

#### [MODIFY] [DatabaseSeeder.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/database/seeders/DatabaseSeeder.php)
- Seed 3 testimoni yang sebelumnya hardcoded

---

### 2. Client Logos (Logo Klien/Partner)

> Saat ini 20 logo hardcoded di [welcome.blade.php:L237-L258](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php#L237-L258)

#### [NEW] Migration: `create_client_logos_table`
- Fields: `id`, `name`, `logo_path` (string), `url` (nullable), `is_active` (bool), `sort_order` (int), `timestamps`

#### [NEW] Model: [ClientLogo.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/app/Models/ClientLogo.php)

#### [NEW] Filament Resource: `app/Filament/Resources/ClientLogos/`
- **ClientLogoResource.php**
- **Schemas/ClientLogoForm.php** — Form: name, logo_path (FileUpload), url, is_active (Toggle), sort_order
- **Tables/ClientLogosTable.php** — Table: logo_path (ImageColumn), name, is_active (badge), sort_order
- **Pages/** — ListClientLogos, CreateClientLogo, EditClientLogo

#### [MODIFY] [welcome.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php)
- Replace hardcoded `$organizations` array (L236-L258) dengan `@foreach($clientLogos)`

#### [MODIFY] [web.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/routes/web.php)
- Pass `clientLogos` ke welcome view

#### [MODIFY] [DatabaseSeeder.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/database/seeders/DatabaseSeeder.php)
- Seed 20 client logos yang sebelumnya hardcoded (menggunakan file path existing dari `public/images/clients/`)

---

### 3. Company Statistics (Angka-angka Perusahaan)

> Saat ini 4 statistik hardcoded di [welcome.blade.php:L493-L542](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php#L493-L542)

#### [NEW] Migration: `create_company_statistics_table`
- Fields: `id`, `label`, `value` (int), `suffix` (string, e.g. "+", "%"), `icon` (nullable), `sort_order` (int), `timestamps`

#### [NEW] Model: [CompanyStatistic.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/app/Models/CompanyStatistic.php)

#### [NEW] Filament Resource: `app/Filament/Resources/CompanyStatistics/`
- **CompanyStatisticResource.php**
- **Schemas/CompanyStatisticForm.php** — Form: label, value (numeric), suffix, icon (icon name), sort_order
- **Tables/CompanyStatisticsTable.php** — Table: label, value, suffix, sort_order
- **Pages/** — List, Create, Edit

#### [MODIFY] [welcome.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/welcome.blade.php)
- Replace hardcoded stats section (L493-L542) dengan `@foreach($statistics)`

#### [MODIFY] [web.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/routes/web.php)
- Pass `statistics` ke welcome view

#### [MODIFY] [DatabaseSeeder.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/database/seeders/DatabaseSeeder.php)
- Seed 4 statistik existing (150+ Projects, 50+ Clients, 98% Satisfaction, 12 Experts)

---

### 4. Company Journey / Timeline

> Saat ini 4 milestone hardcoded di [about.blade.php:L296-L365](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/about.blade.php#L296-L365)

#### [NEW] Migration: `create_company_journeys_table`
- Fields: `id`, `year` (string), `title`, `subtitle`, `description`, `is_current` (bool), `sort_order` (int), `timestamps`

#### [NEW] Model: [CompanyJourney.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/app/Models/CompanyJourney.php)

#### [NEW] Filament Resource: `app/Filament/Resources/CompanyJourneys/`
- **CompanyJourneyResource.php**
- **Schemas/CompanyJourneyForm.php** — Form: year, title, subtitle, description (Textarea), is_current (Toggle), sort_order
- **Tables/CompanyJourneysTable.php** — Table: year, title, subtitle, is_current (badge), sort_order
- **Pages/** — List, Create, Edit

#### [MODIFY] [about.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/about.blade.php)
- Replace hardcoded timeline section (L296-L365) dengan `@foreach($journeys)`

#### [MODIFY] [web.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/routes/web.php)
- Pass `journeys` ke about view

#### [MODIFY] [DatabaseSeeder.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/database/seeders/DatabaseSeeder.php)
- Seed 4 milestone existing

---

### 5. Site Settings (Info Kontak & Social Media)

> Info kontak hardcoded di [contact.blade.php:L77-L118](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/contact.blade.php#L77-L118) dan [footer.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/components/footer.blade.php)

#### [NEW] Migration: `create_site_settings_table`
- Fields: `id`, `key` (string, unique), `value` (text), `timestamps`

#### [NEW] Model: [SiteSetting.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/app/Models/SiteSetting.php)
- Static helper method `get($key, $default = null)` untuk mudah dipanggil di Blade

#### [NEW] Filament Settings Page: `app/Filament/Pages/ManageSiteSettings.php`
- Dibuat sebagai custom Page (bukan Resource), berisi form dengan fields:
  - **Contact**: phone, email, address, operational_hours, maps_embed_url
  - **Social Media**: linkedin_url, instagram_url, youtube_url, facebook_url, threads_url
  - **Company**: tagline (footer description text)

#### [MODIFY] [contact.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/contact.blade.php)
- Replace hardcoded contact info dengan `SiteSetting::get('key')`

#### [MODIFY] [footer.blade.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/resources/views/components/footer.blade.php)
- Replace hardcoded contact info dan social media links dengan `SiteSetting::get('key')`

#### [MODIFY] [DatabaseSeeder.php](file:///d:/Kuliah/KP/web-passolving/company-profile-Passolving/database/seeders/DatabaseSeeder.php)
- Seed semua settings dengan nilai existing

---

## Verification Plan

### Automated Tests
```bash
php artisan migrate:fresh --seed
```
- Pastikan semua migration & seeder berjalan tanpa error

### Manual Verification
- Buka admin panel → cek semua resource baru muncul di sidebar
- Verifikasi CRUD (Create, Read, Update, Delete) di setiap resource
- Buka halaman frontend → pastikan data tampil dari database, bukan hardcoded
- Edit data di admin → pastikan frontend berubah sesuai
