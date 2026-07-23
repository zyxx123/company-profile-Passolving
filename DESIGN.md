# DESIGN.md — PASSolving Company Profile Website

> **Single Source of Truth** for recreating the PASSolving company profile website.
> All values are extracted directly from the codebase. Where exact values cannot be determined, they are labeled as **(Estimated)**.

---

## 1. Design Philosophy

| Attribute        | Description                                                                                                                                                                                                                         |
|------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Style**        | Modern Corporate / Professional Consulting                                                                                                                                                                                          |
| **Tone**         | Premium, clean, confident, data-driven                                                                                                                                                                                              |
| **Aesthetic**    | Flat design with soft shadows, generous whitespace, rounded corners, subtle decorative elements (dot patterns, curved SVG lines, ambient glowing orbs). No glassmorphism; relies on color blocking and clean typography for hierarchy. |
| **Brand Voice**  | Bilingual (Indonesian primary, English secondary). Professional consulting language focused on transformation, agility, and measurable results.                                                                                      |
| **Layout Model** | Section-based vertical scroll. Each section alternates between white (`#FFFFFF`), light gray (`#F8FAFB`), and primary teal (`#00a6a6`) backgrounds to create visual rhythm.                                                          |
| **Framework**    | Laravel 11 + Blade + Livewire + TailwindCSS v4 + Alpine.js + AOS (Animate On Scroll)                                                                                                                                                |

---

## 2. Color System

### Primary Palette

| Token              | HEX Value   | Usage                                                       |
|--------------------|-------------|-------------------------------------------------------------|
| `--color-primary`      | `#00a6a6`   | Brand teal. Hero backgrounds, nav default bg, footer bg, accent elements, icon backgrounds, stat numbers, active states |
| `--color-primary-dark` | `#081f5b`   | Dark navy blue. Text on primary bg, logo text, hero heading on teal bg |
| `--color-accent`       | `#00a6a6`   | Same as primary. Active nav link border/text, section labels |
| `--color-cta`          | `#f5c242`   | Yellow/gold. CTA buttons, badges, decorative dots, stat highlights, section labels, paper plane fills |
| `--color-cta-hover`    | `#dfb038`   | Darker gold. CTA button hover state                         |

### Neutral Palette

| Token                    | HEX Value   | Usage                                              |
|--------------------------|-------------|------------------------------------------------------|
| `--color-neutral-heading`    | `#1F2937`   | Headings on light backgrounds                        |
| `--color-neutral-text`       | `#6B7280`   | Body text, paragraphs                                |
| `--color-neutral-light`      | `#9CA3AF`   | Lighter text, placeholders                           |
| `--color-neutral-border`     | `#E5E7EB`   | Card borders, dividers                               |
| `--color-neutral-bg`         | `#F8FAFB`   | Section backgrounds (alternating light)              |
| `--color-neutral-surface`    | `#FFFFFF`   | Cards, surfaces, white backgrounds                   |

### Additional Named Colors (used inline)

| Color       | HEX Value   | Usage                                                   |
|-------------|-------------|-----------------------------------------------------------|
| Dark text   | `#141414`   | Card headings, nav links, bold text on light bg           |
| Body text   | `#585857`   | Card descriptions, secondary text                         |
| Gray 400    | `text-gray-400` ≈ `#9CA3AF` | Client labels, section meta labels              |
| Gray 500    | `text-gray-500` ≈ `#6B7280` | Trusted-by logos text                           |
| Gray 800    | `text-gray-800` ≈ `#1F2937` | Client logo text (portfolio page)               |
| Light teal bg | `#E8F5F5` | Service overview icon backgrounds                         |
| Mid teal    | `#3FB5B5`   | Decorative circle (service card)                          |
| Pale teal   | `#A7DFDF`   | Decorative circle (research card)                         |
| Testimonial bg | `#0B9B9A` | Portfolio page testimonial card backgrounds               |
| Form bg     | `#F7F7F9`   | Form input backgrounds (form-input component)             |

### Opacity Patterns

- `primary/5` — Very subtle teal tint for section backgrounds
- `primary/10` — Icon background circles
- `primary/20` — Decorative elements, checkmark circles, image overlays
- `white/5` — Cards on teal backgrounds
- `white/10` — Borders on teal backgrounds, stat item icon bg
- `white/20` — Border on hero stat circles, category badges on dark bg
- `primary-dark/10` — Large background step numbers
- `primary-dark/70` — Muted text on teal backgrounds
- `primary-dark/80` — Secondary text on teal backgrounds
- `cta/10` — Ambient glow orb
- `cta/20` — Impact checkmark circles

---

## 3. Typography

### Font Family

| Property         | Value                                                           |
|------------------|-----------------------------------------------------------------|
| Primary Font     | `Poppins`                                             |
| Fallback Stack   | `ui-sans-serif, system-ui, sans-serif`                          |
| CSS Variable     | `--font-sans`                                                   |
| Loaded Weights   | 300 (light), 400 (regular), 500 (medium), 600 (semibold), 700 (bold), 800 (extrabold) |
| Source           | Google Fonts CDN                                                |

### Heading Scale

| Level | Font Size | Line Height | Font Weight           | Text Color | Text Transform      |
|-------|-----------|-------------|----------------------|------------|----------------------|
| H1    | `80px`    | `0.9`       | `font-black` (900)   | `#1F2937`  | Varies (some `uppercase`) |
| H2    | `56px`    | `1.1`       | `font-extrabold` (800) | `#1F2937` | None                 |
| H3    | `36px`    | `1.2`       | `font-bold` (700)    | `#1F2937`  | None                 |

### Contextual Heading Overrides (inline)

| Context                      | Font Size         | Font Weight    | Line Height |
|------------------------------|-------------------|----------------|-------------|
| Hero H1 (Home)               | `60px` (lg), `text-4xl` (mobile) | `font-black` | `1.1`       |
| Page H1 (Services, Portfolio, About) | `56px` (lg), `text-4xl` (mobile) | `font-black`/`font-bold` | `1.2` |
| Section H2                   | `44px` (lg), `text-3xl` (mobile) | `font-bold`  | `1.2`       |
| Card H3                      | `text-xl` (20px)  | `font-bold`    | default     |
| Card H3 (Service Overview)   | `26px`            | `font-black`   | default     |
| Stat number                  | `text-4xl`/`text-5xl` | `font-black` | default   |
| Sub-heading H4               | `text-lg` (18px)  | `font-bold`    | default     |
| Footer heading H4            | `text-base` (16px) | `font-bold`   | default     |

### Body Text

| Class        | Font Size | Line Height | Font Weight | Color     |
|--------------|-----------|-------------|-------------|-----------|
| `.text-body` | `20px`    | `1.8`       | `normal`    | `#6B7280` |
| `.text-small` | `16px`   | `normal`    | `normal`    | `#6B7280` |
| Body default | `20px`    | `1.8`       | `normal`    | `#6B7280` |
| Card description | `text-sm` (14px) | `leading-relaxed` | `normal` | `#585857` |
| Section label | `text-sm` (14px) | default | `font-bold` | `--color-accent` |
| Nav link     | `text-xs` (12px) | default | `font-bold` | inherited |
| Stat label   | `text-sm` (14px) | default | `font-bold` | `#585857` |
| Category badge | `text-[10px]` (10px) | default | `font-bold` | varies |

### Letter Spacing & Text Transform

| Element                  | Letter Spacing         | Text Transform |
|--------------------------|------------------------|----------------|
| Section labels           | `tracking-[0.2em]`     | `uppercase`    |
| Nav links                | `tracking-widest`      | `uppercase`    |
| Stat labels              | `tracking-widest`      | `uppercase`    |
| Category badges          | `tracking-widest`      | `uppercase`    |
| Client labels            | `tracking-widest`      | `uppercase`    |
| Engagement process titles| `tracking-wider`      | `uppercase`    |
| Hero sub-label           | `tracking-widest`      | `uppercase`    |
| Hero H1 (Home)           | default                | `uppercase`    |

---

## 4. Spacing System

### Tailwind Scale (Estimated usage frequency)

| Value | Pixels | Common Usage                                      |
|-------|--------|--------------------------------------------------|
| `1`   | 4px    | Fine adjustments, mt-1                             |
| `2`   | 8px    | Small gaps, mb-2, py-2                             |
| `3`   | 12px   | mb-3, gap-3, py-3                                  |
| `4`   | 16px   | mb-4, gap-4, px-4, mt-4                            |
| `6`   | 24px   | mb-6, gap-6, px-6 (container padding), space-y-6  |
| `8`   | 32px   | p-8, gap-8, mb-8                                   |
| `10`  | 40px   | p-10, mb-10                                        |
| `12`  | 48px   | gap-12, mb-12, pt-12                               |
| `16`  | 64px   | gap-16, mb-16                                      |
| `20`  | 80px   | py-20, mb-20, space-y-20                           |
| `24`  | 96px   | py-24, gap-24, lg:py-24                            |
| `28`  | 112px  | lg:py-28 (large section padding)                   |

### Container

| Property       | Value                                |
|----------------|---------------------------------------|
| Container class | `container mx-auto px-6 max-w-[1320px]` |
| Max width      | `1320px`                              |
| Horizontal padding | `24px` (`px-6`)                   |
| Center method  | `mx-auto`                             |

### Section Spacing

| Pattern                          | Value                    |
|----------------------------------|--------------------------|
| Standard section padding         | `py-20` (80px)           |
| Large section padding (desktop)  | `lg:py-28` (112px)       |
| Hero section min-height (Home)   | `min-h-[calc(100vh-88px)]` |
| Hero padding (subpages)          | `pt-[140px] pb-[100px]`  |
| Services hero padding            | `pt-[120px] pb-[200px]`  |
| Contact hero padding             | `pt-[140px] pb-[80px]`   |
| Section heading bottom margin    | `mb-16` (64px)           |

### Card Spacing

| Element             | Value            |
|---------------------|-------------------|
| Card padding        | `p-8` (32px)      |
| Card padding (large) | `p-10` (40px)    |
| Card internal gap   | `mb-4` to `mb-8`  |
| Grid gap            | `gap-8` (32px)    |
| Grid gap (small)    | `gap-6` (24px)    |

---

## 5. Border Radius

| Token              | Value  | Usage                                                     |
|--------------------|--------|-----------------------------------------------------------|
| `--radius-btn`     | `14px` | Primary/secondary buttons (CSS class)                     |
| `--radius-input`   | `14px` | Form inputs (CSS variable, though inline uses `rounded-xl`/`rounded-lg`) |
| `--radius-card`    | `24px` | Card hover component                                      |
| `--radius-img`     | `28px` | Images                                                    |
| `--radius-section` | `36px` | Section-level rounding                                    |
| Buttons (component) | `rounded-lg` (8px) | Button component default                           |
| Cards (inline)     | `rounded-2xl` (16px) | Featured service cards, Why Choose cards           |
| Cards (large)      | `rounded-3xl` (24px) | Testimonial cards, program cards, portfolio cards  |
| Cards (extra-large) | `rounded-[32px]` | Service overview cards, stat container           |
| Hero image         | `rounded-[48px] rounded-tl-none` | Home hero image (3 rounded, 1 sharp)     |
| CTA banner         | `rounded-[40px]` | About CTA section                                    |
| Portfolio detail image | `rounded-[40px]` | Case study hero image                           |
| Service detail images | `rounded-[24px]` | Service detail section images                    |
| About overlapping images | `rounded-3xl rounded-tr-none` / `rounded-3xl rounded-bl-none` | Overlapping image composition |
| Filter buttons     | `rounded-full` | Portfolio category filter pills                        |
| Icon containers    | `rounded-full` or `rounded-2xl` or `rounded-3xl` | Varies by context                  |
| Social media icons | `rounded-lg` (8px) | Footer social icon buttons                         |
| Methodology step icons | `rounded-2xl` (16px) | Training methodology step icons              |
| Input fields       | `rounded-xl` (12px) or `rounded-lg` (8px) | Form inputs                        |

---

## 6. Shadow System

| Token            | Value                                    | Usage                              |
|------------------|------------------------------------------|------------------------------------|
| `--shadow-card`  | `0 20px 40px rgba(0,0,0,.06)`            | Card hover component               |
| `--shadow-hero`  | `0 40px 80px rgba(0,0,0,.12)`            | Hero section elements              |
| `--shadow-btn`   | `0 10px 25px rgba(244,180,0,.20)`        | CTA buttons (gold glow)            |
| Service cards    | `0 15px 40px rgba(0,0,0,0.06)`           | Service overview cards             |
| Methodology step | `0 10px 30px rgba(15,159,164,0.3)`       | Training methodology icons (teal glow) |
| ESR Framework    | `0 10px 30px rgba(0,0,0,0.05)`           | ESR step cards                     |
| ESR Result       | `0 10px 30px rgba(244,180,0,0.15)`       | ESR Result card (gold glow)        |
| `shadow-sm`      | Tailwind default                         | Subtle cards, borders              |
| `shadow-md`      | Tailwind default                         | Scrolled navbar                    |
| `shadow-lg`      | Tailwind default                         | About overlapping images, detail images |
| `shadow-xl`      | Tailwind default                         | CTA banner                        |
| `shadow-2xl`     | Tailwind default                         | Hero image, portfolio detail image |

---

## 7. Grid System

### Breakpoints (TailwindCSS v4 defaults)

| Breakpoint | Min Width | Usage                         |
|------------|-----------|-------------------------------|
| Default    | 0px       | Mobile-first                  |
| `md`       | 768px     | Tablet layouts                |
| `lg`       | 1024px    | Desktop layouts               |

### Grid Patterns

| Section                | Mobile       | Tablet (`md`)    | Desktop (`lg`)     |
|------------------------|--------------|-------------------|--------------------|
| Featured Services      | 1 col        | `grid-cols-2`     | `grid-cols-4`      |
| Why Choose Us cards    | 1 col        | `grid-cols-2`     | `grid-cols-2`      |
| Featured Projects      | 1 col        | `grid-cols-2`     | `grid-cols-3`      |
| Testimonials (Home)    | 1 col        | `grid-cols-3`     | `grid-cols-3`      |
| Statistics             | `grid-cols-2` | `grid-cols-2`    | `grid-cols-4`      |
| Service Overview       | 1 col        | `grid-cols-3`     | `grid-cols-3`      |
| Engagement Process     | 1 col        | `grid-cols-4`     | `grid-cols-4`      |
| Training Methodology   | 1 col        | 1 col             | `grid-cols-4`      |
| Featured Programs      | 1 col        | `grid-cols-2`     | `grid-cols-3`      |
| Industries             | `grid-cols-2` | `grid-cols-4`    | `grid-cols-4`      |
| Core Values            | `grid-cols-2` | `grid-cols-3`    | `grid-cols-5`      |
| Why PASS (About)       | 1 col        | `grid-cols-2`     | `grid-cols-4`      |
| Portfolio grid         | 1 col        | `grid-cols-2`     | `grid-cols-4`      |
| Case Studies           | 1 col        | 1 col             | `grid-cols-3`      |
| Contact layout         | 1 col        | 1 col             | `grid-cols-2`      |
| Footer                 | 1 col        | `grid-cols-2`     | `grid-cols-4`      |
| Company Journey        | 1 col        | `grid-cols-4`     | `grid-cols-4`      |

### Flex Layouts

| Section             | Mobile              | Desktop              |
|---------------------|---------------------|----------------------|
| Hero (Home)         | `flex-col`          | `flex-row` (55%/45%) |
| About Preview       | `flex-col`          | `flex-row` (50%/50%) |
| Why Choose (Home)   | `flex-col`          | `flex-row` (40%/60%) |
| Service Details     | `flex-col`          | `flex-row` / `flex-row-reverse` (50%/50%) |
| ESR Framework       | `flex-col`          | `flex-row` (40%/60%) |
| Contact             | 1 col grid          | `grid-cols-2`        |

---

## 8. Iconography

| Property       | Value                                          |
|----------------|------------------------------------------------|
| Icon Library   | Lucide Icons (via Blade component `x-icon`)    |
| Style          | Outline / Stroke                               |
| Default Stroke | `2` (some explicitly set to `1.5`, `2`, `2.5`, or `3`) |
| Corner Style   | Rounded                                        |
| Sizes Used     | `w-4 h-4`, `w-5 h-5`, `w-6 h-6`, `w-8 h-8`, `w-10 h-10`, `w-12 h-12` |
| Color          | Typically `text-primary` on light bg, `text-primary-dark` on teal bg, `text-cta` for accent |

### Icons Inventory

| Icon Name               | Usage Context                                   |
|--------------------------|-------------------------------------------------|
| `lucide-search`          | Header search button, methodology step 1        |
| `lucide-menu`            | Mobile menu hamburger                           |
| `lucide-x`               | Mobile menu close                               |
| `lucide-chevron-right`   | Mobile menu service link arrow, ESR connectors  |
| `lucide-arrow-right`     | Service overview arrow buttons, CTA flow arrow  |
| `lucide-arrow-left`      | Portfolio detail back link                      |
| `lucide-arrow-down`      | Case study flow separator                       |
| `lucide-users`           | Hero stat, Core Values, Why PASS                |
| `lucide-bar-chart-2`     | Hero stat, Why PASS                             |
| `lucide-star`            | Hero stat, ESR Result badge                     |
| `lucide-quote`           | Testimonial decoration, About quote             |
| `lucide-check`           | Service detail checklist, case study results    |
| `lucide-check-circle-2`  | Mission items, success message                  |
| `lucide-globe`           | Why Choose card                                 |
| `lucide-database`        | Why Choose card, Why PASS                       |
| `lucide-target`          | Why Choose card, Why PASS, service seeder, portfolio detail |
| `lucide-heart`           | Why Choose card                                 |
| `lucide-graduation-cap`  | Training card, Industries                       |
| `lucide-briefcase`       | Consulting card, service seeder                 |
| `lucide-line-chart`      | Research card                                   |
| `lucide-pen-tool`        | Methodology step 2                              |
| `lucide-play-circle`     | Methodology step 3                              |
| `lucide-clipboard-check` | Methodology step 4                              |
| `lucide-building`        | Industries - Government                         |
| `lucide-factory`         | Industries - Manufacturing                      |
| `lucide-radio-receiver`  | Industries - Telecommunication                  |
| `lucide-landmark`        | Industries - Banking                            |
| `lucide-stethoscope`     | Industries - Healthcare                         |
| `lucide-sprout`          | Industries - Agriculture                        |
| `lucide-shopping-cart`   | Industries - Retail                             |
| `lucide-brain`           | Core Values - Empathy                           |
| `lucide-cog`             | Core Values - System Thinking                   |
| `lucide-trending-up`     | Core Values - Result Oriented, portfolio detail |
| `lucide-rocket`          | Core Values - Continuous Improvement            |
| `lucide-network`         | Why PASS - Cross-Industry                       |
| `lucide-linkedin`        | Footer/mobile social                            |
| `lucide-instagram`       | Footer/mobile social                            |
| `lucide-youtube`         | Footer/mobile social                            |
| `lucide-phone`           | Footer contact, contact page                    |
| `lucide-mail`            | Footer contact, contact page                    |
| `lucide-map-pin`         | Footer contact, contact page                    |
| `lucide-clock`           | Contact page                                    |
| `lucide-alert-circle`    | Portfolio detail - Context                      |
| `lucide-zap`             | Portfolio detail - PASS Role                    |
| `lucide-folder-open`     | Livewire empty state                            |
| `lucide-monitor`         | Fallback service icon                           |
| `lucide-award`           | Service seeder - Sertifikasi                    |
| `lucide-presentation`    | Service seeder - Training                       |

---

## 9. Buttons

### Button Component (`x-ui.button`)

| Property           | Value                                              |
|--------------------|----------------------------------------------------|
| Base classes       | `inline-flex items-center justify-center px-8 py-3 font-bold transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 text-[15px] rounded-lg` |
| Arrow icon         | SVG arrow right (`M14 5l7 7m0 0l-7 7m7-7H3`), `w-5 h-5 ml-2` |

### Variants

| Variant      | Background        | Text Color    | Border           | Hover                             | Shadow     |
|--------------|--------------------|---------------|------------------|-----------------------------------|------------|
| `primary`    | `bg-cta` (#f5c242) | `#1F2937`     | None             | `bg-cta-hover` (#dfb038)          | `shadow-sm` |
| `secondary`  | `bg-white`         | `text-primary` | None            | `bg-gray-50`                      | `shadow-sm` |
| `outline`    | Transparent        | `text-primary-dark` | `border-2 border-white` | `bg-white text-primary` | None       |

### CSS-defined Buttons (`.btn-primary`, `.btn-secondary`)

| Class           | Padding    | Font Size | Radius           | Shadow                |
|-----------------|------------|-----------|------------------|-----------------------|
| `.btn-primary`  | `px-8 py-4` | `16px`   | `var(--radius-btn)` (14px) | `var(--shadow-btn)` |
| `.btn-secondary`| `px-8 py-4` | `16px`   | `var(--radius-btn)` (14px) | None                |

### Inline Button (Hero outline)

```
px-8 py-4 border-2 border-white text-white font-bold rounded-[14px]
hover: bg-white text-primary-dark -translate-y-1
```

### Contact Form Submit Button

```
px-8 py-4 bg-cta text-[#1F2937] font-bold rounded-lg w-full text-[14px]
hover: bg-[#DDAA00]
disabled: opacity-50
```

### Filter Buttons (Portfolio)

```
px-6 py-2.5 rounded-full text-sm font-bold
Active: bg-primary text-primary-dark shadow-md
Inactive: bg-white text-[#585857] border border-gray-200 hover:bg-gray-50
```

### States

| State     | Effect                                           |
|-----------|--------------------------------------------------|
| Default   | Normal styling                                   |
| Hover     | `-translate-y-1`, background color change         |
| Focus     | `ring-2 ring-{color}/50`                          |
| Disabled  | `opacity-50`                                      |
| Loading   | Text changes to "MENGIRIM...", icon hidden         |

---

## 10. Forms

### Form Input Component (`x-ui.form-input`)

| Property     | Value                                                  |
|--------------|--------------------------------------------------------|
| Wrapper      | `mb-4`                                                 |
| Label        | `block text-sm font-bold text-[#141414] mb-2`          |
| Input        | `w-full px-4 py-3 rounded-xl border border-gray-200 bg-[#F7F7F9]` |
| Focus        | `ring-2 ring-accent border-accent`                     |
| Text color   | `text-[#585857]`                                       |
| Error        | `text-red-500 text-xs mt-1 block`                      |

### Livewire Contact Form (inline styles)

| Property     | Value                                                  |
|--------------|--------------------------------------------------------|
| Label        | `block text-xs font-bold text-[#141414] mb-2`          |
| Input        | `w-full px-4 py-3 rounded-lg border border-gray-200 bg-white` |
| Focus        | `ring-2 ring-primary border-primary`                   |
| Text color   | `text-sm text-[#585857]`                               |
| Textarea     | Same as input + `resize-none`, `rows="4"`              |

### Form Textarea Component (`x-ui.form-textarea`)

| Property     | Value                                                  |
|--------------|--------------------------------------------------------|
| Same as form-input, plus `resize-none`                                   |
| Default rows | `4`                                                    |

### Validation

| State   | Style                                  |
|---------|----------------------------------------|
| Error   | Red text below field: `text-red-500 text-xs mt-1 block` |
| Success | Green alert box: `bg-green-50 border-green-200 text-green-700 rounded-xl px-6 py-4` with check icon |

### Form Fields (Contact)

1. Nama Lengkap (text)
2. Email (email)
3. Perusahaan (text)
4. No. Telepon (text)
5. Pesan (textarea, 4 rows)

---

## 11. Cards

### Card Hover Component (`.card-hover`)

| Property     | Value                                           |
|--------------|--------------------------------------------------|
| Background   | `bg-white`                                       |
| Border       | `border border-[#E5E7EB]`                        |
| Radius       | `var(--radius-card)` = `24px`                    |
| Shadow       | `var(--shadow-card)` = `0 20px 40px rgba(0,0,0,.06)` |
| Hover        | `-translate-y-[10px]`                            |
| Transition   | `transition-all duration-300`                    |

### Featured Service Card (Home)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white`                                      |
| Border       | `border border-gray-100`                        |
| Radius       | `rounded-2xl` (16px)                            |
| Shadow       | `shadow-sm`                                     |
| Padding      | `p-8`                                           |
| Hover        | `-translate-y-2`                                |
| Icon box     | `w-16 h-16 rounded-2xl bg-primary/10`           |
| Link         | `text-sm font-bold text-primary` with arrow     |

### Service Overview Card (Services page)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white`                                      |
| Radius       | `rounded-[32px]`                                |
| Shadow       | `0 15px 40px rgba(0,0,0,0.06)`                  |
| Padding      | `px-8 pt-12 pb-20`                              |
| Icon box     | `w-20 h-20 bg-[#E8F5F5] rounded-3xl`            |
| Text align   | `text-center`                                   |
| Hover        | `-translate-y-2`                                |
| Arrow button | `w-12 h-12 rounded-full bg-[#E8F5F5]` hover: `bg-primary text-white` |
| Decorative   | Corner circles and dot patterns                 |

### Portfolio Project Card (Portfolio page)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white`                                      |
| Border       | `border border-gray-100`                        |
| Radius       | `rounded-3xl` (24px)                            |
| Shadow       | `shadow-sm`                                     |
| Image height | `h-48` (192px)                                  |
| Image overlay | `bg-primary/20` hover: transparent              |
| Content pad  | `p-6`                                           |
| Category badge | `absolute top-4 right-4 bg-cta text-primary-dark text-xs font-bold px-3 py-1 rounded-full` |
| Image hover  | `scale-105` over `500ms`                        |
| Card hover   | `-translate-y-2`                                |

### Testimonial Card (Home)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Variant 1    | `bg-white p-10 rounded-3xl shadow-sm border border-gray-100` |
| Variant 2    | `bg-primary p-10 rounded-3xl shadow-sm` (featured, teal bg) |
| Quote icon   | `w-12 h-12 text-primary/10 absolute top-8 left-8` |
| Quote text   | `text-lg font-medium italic`                    |

### Case Study Card (Portfolio)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white/5`                                    |
| Border       | `border border-white/10`                        |
| Radius       | `rounded-3xl` (24px)                            |
| Padding      | `p-8 lg:p-10`                                   |
| Result divider | `border-t border-white/10 pt-6 mt-8`          |

### Why Choose / Feature Card

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-[#F8FAFB]` or `bg-white`                    |
| Border       | `border border-gray-100`                        |
| Radius       | `rounded-2xl` (16px)                            |
| Padding      | `p-8`                                           |
| Icon box     | `w-12 h-12 rounded-full bg-primary/10`          |

### Featured Program Card (Services)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white`                                      |
| Border       | `border border-gray-100`                        |
| Radius       | `rounded-3xl` (24px)                            |
| Padding      | `p-8`                                           |
| Shadow       | `shadow-sm` hover: `shadow-md`                  |
| Title hover  | `text-primary`                                  |

### Core Value Card (About)

| Property     | Value                                           |
|--------------|-------------------------------------------------|
| Background   | `bg-white`                                      |
| Border       | `border border-gray-100`                        |
| Radius       | `rounded-3xl` (24px)                            |
| Padding      | `p-8`                                           |
| Shadow       | `shadow-sm`                                     |
| Text align   | `text-center`                                   |
| Icon box     | `w-16 h-16 bg-primary/10 rounded-2xl` hover: `bg-primary` |
| Card hover   | `-translate-y-2`                                |

---

## 12. Navigation

### Navbar

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Height              | `h-[88px]` (88px)                                |
| Default state       | `relative bg-primary text-primary-dark border-transparent` |
| Scrolled state      | `fixed top-0 shadow-md bg-white/95 backdrop-blur-md z-50 text-[#141414] border-gray-100` |
| Scroll threshold    | `40px` (Alpine.js: `window.pageYOffset > 40`)    |
| Transition          | `transition-all duration-300`                    |
| Container           | `container mx-auto px-6 max-w-[1320px]`         |
| Layout              | `flex items-center justify-between`              |

### Logo

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Default (teal bg)   | `logo-white-trimmed.png`, `h-10 w-auto`          |
| Scrolled (white bg) | `logo-black-trimmed.png`, `h-10 w-auto`          |
| Switching           | Alpine.js `:src` binding based on `scrolled`     |

### Nav Links (`x-ui.nav-link`)

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Base                | `inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xs font-bold uppercase tracking-widest` |
| Active              | `border-accent text-accent`                      |
| Hover               | `text-accent border-accent`                      |
| Transition          | `transition-colors duration-200`                 |

### Desktop Actions

| Element              | Details                                         |
|----------------------|-------------------------------------------------|
| Search button        | `lucide-search w-5 h-5`, `hover:opacity-80`     |
| CTA button           | `x-ui.button variant="primary"`, "Get in Touch" |
| Gap                  | `gap-6`                                          |

### Mobile Menu

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Trigger             | `md:hidden`, hamburger icon `lucide-menu w-8 h-8` |
| Type                | Slide-in panel from right                        |
| Max width           | `max-w-md`                                       |
| Overlay             | `bg-black/60`                                    |
| Panel bg            | `bg-white shadow-xl`                             |
| Logo                | `logo-black-trimmed.png h-8`                     |
| Close button        | `lucide-x w-8 h-8`                               |
| Nav items           | `text-xl font-bold`, `space-y-6`                 |
| Active link color   | `text-primary`                                   |
| Inactive link color | `text-[#141414]`                                 |
| CTA                 | Full-width "GET IN TOUCH" button                 |
| Social footer       | `bg-gray-50 border-t` with LinkedIn, Instagram, YouTube |
| Enter animation     | `translate-x-full` to `translate-x-0`, 300ms ease-in-out |
| Leave animation     | `translate-x-0` to `translate-x-full`, 300ms ease-in-out |
| Overlay animation   | `opacity-0` to `opacity-100`, 300ms             |

---

## 13. Hero Sections

### Home Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Min height          | `min-h-[calc(100vh-88px)]`                       |
| Background          | `bg-primary` (#00a6a6)                           |
| Padding             | `py-20`                                          |
| Layout              | `flex-col lg:flex-row` with `gap-12 lg:gap-20`   |
| Text column         | `lg:w-[55%]`                                     |
| Image column        | `lg:w-[45%]`                                     |
| Sub-label           | CTA yellow, `text-sm font-bold tracking-widest uppercase` |
| H1                  | `text-4xl lg:text-[60px] font-black leading-[1.1] text-white uppercase` |
| Description         | `text-lg text-white/90 leading-relaxed max-w-lg` |
| Buttons             | Primary CTA + White outline button               |
| Stats               | 3 stat items: icon circle (`w-12 h-12 rounded-full border-white/20 bg-white/5`) + number (`text-2xl font-bold`) + label (`text-xs text-white/70`) |
| Image               | `aspect-[4/3] rounded-[48px] rounded-tl-none shadow-2xl border-[4px] border-white/10` |
| Decorative elements | Grid lines, yellow glow, dot patterns (top-left 120x120, bottom-right 160x120), SVG circles, dashed curve lines with arrows |

### Services Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Padding             | `pt-[120px] pb-[200px]`                          |
| Background          | `bg-primary`                                     |
| Text align          | `text-center`                                    |
| H1                  | `text-4xl lg:text-[56px] font-black uppercase text-white` |
| Yellow underline    | `w-20 h-1.5 bg-cta rounded-full mx-auto`        |
| Description         | `text-xl text-white/90 max-w-2xl mx-auto`        |
| Decorative          | Dot patterns, large circles, paper planes (SVG with dashed paths + yellow triangles), skyline gradient |

### About Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Padding             | `pt-[140px] pb-[100px] lg:pt-[180px] lg:pb-[140px]` |
| Background          | `bg-primary` with background image (Unsplash, `opacity-20 mix-blend-overlay`) + teal overlay (`bg-primary/60`) |
| Text align          | Left-aligned, `max-w-3xl`                        |
| H1                  | `text-4xl lg:text-[64px] font-black uppercase`   |
| Description         | `text-xl lg:text-2xl font-light text-primary-dark/80` |

### Portfolio Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Padding             | `pt-[140px] pb-[100px]`                          |
| Background          | `bg-primary text-primary-dark`                   |
| Text align          | `text-center`                                    |
| H1                  | `text-4xl lg:text-[56px] font-black uppercase`   |
| Description         | `text-xl text-primary-dark/80 max-w-2xl mx-auto` |

### Contact Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Padding             | `pt-[140px] pb-[80px]`                           |
| Background          | `bg-primary text-primary-dark`                   |
| Text align          | `text-center`                                    |
| H1                  | `text-4xl lg:text-[48px] font-bold`              |
| Description         | `text-lg text-primary-dark/80 max-w-2xl mx-auto` |

### Portfolio Detail Hero

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Padding             | `pt-[140px] pb-[80px]`                           |
| Background          | `bg-primary text-primary-dark`                   |
| Back link           | `lucide-arrow-left`, "Kembali ke Portfolio"      |
| Category badge      | `px-4 py-1.5 bg-white/20 text-xs font-bold uppercase tracking-widest rounded-full` |
| H1                  | `text-4xl lg:text-[56px] font-bold`              |
| Client              | `text-xl font-medium text-primary-dark/80`       |
| Hero image overlap  | `-mt-[160px] rounded-[40px] shadow-2xl border-4 border-white`, `h-[400px] lg:h-[600px]` |

---

## 14. Every Website Section

### HOME PAGE (`welcome.blade.php`)

#### Section 1: Hero
- See Hero Sections - Home Hero above.

#### Section 2: Trusted By
- **Background**: `bg-white`, `border-b border-gray-100`
- **Padding**: `py-12`
- **Label**: `text-xs font-bold text-gray-400 uppercase tracking-widest mb-8`, centered
- **Logos**: Text-based (`text-2xl font-black text-gray-500`), some `italic`
- **Layout**: `flex flex-wrap justify-center gap-12 lg:gap-20`
- **Effect**: `opacity-60 grayscale hover:grayscale-0 transition-all duration-500`
- **Items**: PERTAMINA, Kemenkes, BAPPENAS, OJK, BNI, UNDP

#### Section 3: Company Overview (PASS at a Glance)
- **Background**: `bg-white`
- **Padding**: `py-20 lg:py-28`
- **Layout**: `flex-col lg:flex-row gap-16 lg:gap-24`, items `items-center`
- **Left column** (50%): Two overlapping images
  - Main image: `w-[60%] rounded-3xl rounded-tr-none h-[400px]`
  - Secondary image: `w-[40%] rounded-3xl rounded-bl-none h-[280px] -mb-12`
- **Right column** (50%):
  - H2: `text-3xl lg:text-[44px] font-bold text-[#141414]`
  - Accent paragraph: `text-lg font-medium text-primary`
  - Body text: `text-[#585857] leading-relaxed`
  - CTA button: "Learn More ->"

#### Section 4: Featured Services
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Heading**: Centered, H2 + subtitle
- **Grid**: `md:grid-cols-2 lg:grid-cols-4 gap-8`
- **Cards**: Featured Service Card pattern
- **Data**: First 4 services from database

#### Section 5: Why Choose Us (Mengapa PASS?)
- **Background**: `bg-white`
- **Padding**: `py-20 lg:py-28`
- **Layout**: `flex-col lg:flex-row gap-16 lg:gap-24`, items `items-start`
- **Left** (40%): H2 + quote paragraph
- **Right** (60%): 2x2 grid of feature cards
- **Cards**: `bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100`
- **Icon box**: `w-12 h-12 rounded-full bg-primary/10`
- **Points**: Berpengalaman Lintas Industri, Berbasis Sistem & Data, Fokus pada Hasil, Pendekatan Humanis

#### Section 6: Featured Projects
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Header**: Flex between H2 and "View All Projects ->" link
- **Grid**: `md:grid-cols-2 lg:grid-cols-3 gap-8`
- **Cards**: `rounded-3xl overflow-hidden shadow-sm aspect-[4/3] max-h-[360px]`
  - Full overlay: `bg-primary/70`
  - Category badge: `bg-cta text-[#141414] text-[10px] font-bold uppercase tracking-widest rounded-full`
  - Image hover: `scale-105` over 700ms

#### Section 7: Company Statistics
- **Background**: `bg-primary/5`
- **Padding**: `py-20`
- **Container**: `bg-white rounded-[32px] p-12 shadow-sm border border-primary/10`
- **Grid**: `grid-cols-2 lg:grid-cols-4`, with `lg:divide-x divide-gray-100`
- **Stats**: Counter animation using Alpine.js + IntersectionObserver
  - Number: `text-4xl lg:text-5xl font-black text-primary`
  - Label: `text-sm font-bold text-[#585857] uppercase tracking-widest`
  - Values: 150+ Projects, 50+ Clients, 98% Satisfaction, 12 Experts
  - Counter speed: increment every 30ms (faster stats) / 100ms (slower stats)

#### Section 8: Testimonials
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Heading**: Centered H2 + subtitle
- **Grid**: `md:grid-cols-3 gap-8`
- **3 cards**: 2 white + 1 teal (middle card `bg-primary`)
- **Footer link**: "View More Testimonials ->"

---

### SERVICES PAGE (`services.blade.php`)

#### Section 1: Page Header Hero
- See Hero Sections - Services Hero

#### Section 2: Service Overview (3 Pillars)
- **Background**: `bg-[#F8FAFB]` with dot pattern SVG overlay
- **Padding**: `py-20`
- **Grid**: `md:grid-cols-3 gap-8`
- **3 cards**: Training, Consulting, Research — See Service Overview Card
- **Decorative elements per card**:
  - Training: Solid teal circles (`bg-primary/20` + `bg-[#3FB5B5]`) bottom-left
  - Consulting: Dotted circle pattern bottom-right
  - Research: Solid pale teal circle (`bg-[#A7DFDF]`) bottom-right

#### Section 3: Detail Services
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-16 lg:py-24`
- **Spacing**: `space-y-20` between detail blocks
- **Layout**: Alternating `flex-row` / `flex-row-reverse` (lg), stacked on mobile
- **Text column** (50%):
  - Section label: `text-cta font-bold tracking-widest uppercase text-sm`
  - H2: `text-3xl lg:text-4xl font-bold text-[#141414]`
  - Checklist: `flex items-start gap-4`, checkmark circle `w-6 h-6 rounded-full bg-primary/20`
- **Image column** (50%): `rounded-[24px] shadow-lg aspect-[4/3] object-cover`
- **Pillars**:
  1. Training & Development (image right)
  2. Consulting Services (image left)
  3. Research & Assessment (image right)

#### Section 4: PASS Engagement Process
- **Background**: `bg-primary text-primary-dark`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `md:grid-cols-4 gap-6`
- **Cards**: `bg-white/5 border border-white/10 p-8 rounded-3xl`
- **Step number**: `text-5xl font-black text-primary-dark/10 absolute top-6 right-6`
- **Title**: `text-2xl font-black text-cta uppercase tracking-wider`
- **Steps**: 01 Scan, 02 Shift, 03 Scale, 04 Scribe

#### Section 5: Training Methodology
- **Background**: `bg-white`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `lg:grid-cols-4 gap-8`
- **Connector line**: `hidden lg:block absolute top-12 left-10 right-10 h-1 bg-gray-100`
- **Step icon**: `w-24 h-24 bg-primary rounded-2xl shadow-[0_10px_30px_rgba(15,159,164,0.3)]`
- **Text**: Centered, `text-lg font-black text-[#141414]`
- **Steps**: Problem Identification, Action Development, Program Implementation, Evaluation

#### Section 6: Featured Programs
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `md:grid-cols-2 lg:grid-cols-3 gap-6`
- **Cards**: Featured Program Card pattern
- **Programs**: Leadership Agility, Business Agility, Design Thinking, Communication, Productivity, Soft Skill Certification

#### Section 7: Industries We Serve
- **Background**: `bg-white border-b border-gray-100`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `grid-cols-2 md:grid-cols-4 gap-8`
- **Items**: `flex flex-col items-center gap-4`
- **Icon circle**: `w-20 h-20 rounded-full bg-primary`
- **Hover**: `-translate-y-2`
- **Industries**: Government, Manufacturing, Telecommunication, Banking & Finance, Healthcare, Education, Agriculture, Retail

#### Section 8: Why Choose PASS
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Layout**: `flex-col lg:flex-row gap-16 lg:gap-24`, items `items-center`
- **Left** (40%): H2 + description
- **Right** (60%): 2x2 grid
- **Cards**: `bg-white p-8 rounded-2xl shadow-sm border border-gray-100`
- **Title with icon**: `text-lg font-bold text-primary flex items-center gap-3`
- **Icon**: `text-cta w-6 h-6`
- **Points**: Data-Driven Approach, Human-Centered, Cross-Industry Experience, Measurable Results

---

### ABOUT PAGE (`about.blade.php`)

#### Section 1: Hero
- See Hero Sections - About Hero

#### Section 2: Who We Are & Our Story
- **Background**: `bg-white`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `lg:grid-cols-2 gap-16 lg:gap-24 items-center`
- **Left (Who We Are)**:
  - Section label: `text-cta`
  - H2: `text-3xl lg:text-4xl font-bold`
  - Body paragraphs
  - Quote box: `bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 border-l-4 border-l-primary`
- **Right (Our Story)**:
  - Container: `bg-[#F8FAFB] p-10 lg:p-12 rounded-[40px] border border-gray-100`
  - Section label: `text-cta`
  - H3 + body paragraphs

#### Section 3: Vision & Mission
- **Background**: `bg-primary text-primary-dark`
- **Padding**: `py-20`
- **Grid**: `lg:grid-cols-2 gap-16 lg:gap-24`
- **Vision**: Large ghost number `text-3xl font-black text-primary-dark/10 uppercase tracking-widest`, title `text-cta`
- **Mission**: List with `lucide-check-circle-2 text-cta` icons, `space-y-6`

#### Section 4: Core Values
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6`
- **Cards**: Core Value Card pattern
- **Values**: Empathy, System Thinking, Result Oriented, Collaboration, Continuous Improvement

#### Section 5: ESR Framework
- **Background**: `bg-white border-t border-gray-100`
- **Padding**: `py-20 lg:py-28`
- **Layout**: `flex-col lg:flex-row gap-16`
- **Left** (40%): Section label, H2, 2 paragraphs
- **Right** (60%): 3 step circles/cards connected by lines
  - Desktop connector: `h-1 bg-primary/20` horizontal line
  - Mobile connector: `w-1 bg-primary/20` vertical line
  - Steps 1 & 2: `bg-white rounded-full md:rounded-3xl border border-gray-100 shadow-[...]`, `w-48 h-48 md:w-auto md:h-auto`
  - Step 3 (Result): `border-cta border-2 shadow-[...(gold)]`, pulsing star badge
  - Chevron connectors between steps (desktop only)
  - Number circles: `w-12 h-12 bg-primary` (steps 1-2), `bg-cta` (step 3)

#### Section 6: Company Journey (Timeline)
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-20 lg:py-28`
- **Timeline line**: Desktop: `absolute top-1/2 w-full h-1 bg-gray-200`, Mobile: `absolute left-1/2 h-full w-1 bg-gray-200`
- **Grid**: `md:grid-cols-4 gap-12 md:gap-6`
- **Timeline dots**: `w-8 h-8 bg-gray-200 rounded-full border-4 border-white shadow-sm`
- **Today dot**: `w-10 h-10 bg-cta rounded-full border-4 border-white shadow-md animate-pulse`
- **Zigzag**: Alternating items use `md:-mt-14` / normal positioning
- **Items**: 2023, Expansion, Growth, Today

#### Section 7: Why PASS
- **Background**: `bg-white border-b border-gray-100`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `md:grid-cols-2 lg:grid-cols-4 gap-8`
- **Cards**: `bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100`
- **Icon**: `w-12 h-12 bg-white rounded-full shadow-sm text-primary` hover: `bg-primary text-primary-dark`

#### Section 8: Clients & Partners
- **Background**: `bg-white`
- **Padding**: `py-20`
- **Label**: `text-sm font-bold text-gray-400 uppercase tracking-widest mb-10`
- **Logos**: Text-based `text-2xl font-black text-gray-800 tracking-wider`
- **Effect**: `opacity-60 hover:opacity-100 transition-opacity grayscale`
- **Items**: BNI, OJK, KEMENKES, PELINDO, INDOSAT, LKPP, ITB, UNPAD

#### Section 9: CTA Bar
- **Background**: `bg-[#F8FAFB]`
- **Padding**: `py-24`
- **Inner container**: `bg-primary rounded-[40px] p-16 md:p-24 shadow-xl overflow-hidden`
- **H2**: `text-3xl lg:text-[48px] font-bold text-primary-dark max-w-3xl mx-auto`
- **Buttons**: Primary CTA + Outline button, `gap-4`

---

### PORTFOLIO PAGE (`portfolio.blade.php`)

#### Section 1: Hero
- See Hero Sections - Portfolio Hero

#### Section 2: Portfolio Overview Bar
- **Background**: `bg-white border-b border-gray-100 shadow-sm`
- **Padding**: `py-12`
- **Stats**: `100+` Projects, `50+` Organizations (with vertical dividers `w-px h-10 bg-gray-200`)
- **Industry list**: "Government - Private - Education - Healthcare" (hidden on mobile)

#### Section 3: Filter Bar + Project Grid
- **Filter**: Alpine.js `x-data="{ filter: 'All' }"`, pills: All, Training, Consulting, Transformation, Research
- **Grid**: `md:grid-cols-2 lg:grid-cols-4 gap-8`
- **Cards**: Portfolio Project Card pattern

#### Section 4: Transformation Case Studies
- **Background**: `bg-primary text-primary-dark`
- **Padding**: `py-20 lg:py-28`
- **Grid**: `lg:grid-cols-3 gap-8`
- **Cards**: Case Study Card pattern
- **Cases**: Medical Centre, Agribusiness, Warehouse Opt.
- **Bottom bar**: "What leaders consistently experience" -> arrow -> keywords in `text-cta font-black tracking-widest uppercase`

#### Section 5: Client Logos
- **Background**: `bg-white border-b border-gray-100`
- **Padding**: `py-20`
- **Same pattern as About page clients**, `opacity-70 grayscale`

#### Section 6: Testimonials (Masonry-like columns)
- **Background**: `bg-primary text-primary-dark`
- **Padding**: `py-16`
- **Grid**: `lg:grid-cols-3 gap-6 items-start`
- **Cards**: `bg-[#0B9B9A] p-8 rounded-3xl shadow-sm`
- **Content**: Multiple testimonials per column separated by `<hr class="border-white/20">`
- **Badges**: `bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full`

---

### PORTFOLIO DETAIL PAGE (`portfolio-detail.blade.php`)

- See Hero Sections - Portfolio Detail Hero
- **Image overlap**: `-mt-[160px] rounded-[40px] shadow-2xl border-4 border-white`
- **Content**: `max-w-4xl mx-auto space-y-16`
- **Context & Focus**: `grid md:grid-cols-2 gap-12 border-b border-gray-100 pb-16`
  - Meta label: `text-sm font-bold text-gray-400 uppercase tracking-widest` with icon
- **PASS Role**: `text-2xl font-medium text-[#141414]` quoted
- **Business Impact**: `bg-[#F8FAFB] p-10 md:p-14 rounded-[40px] border border-gray-100`
  - Check items: `w-8 h-8 rounded-full bg-cta/20` + `text-xl font-bold text-[#141414]`

---

### CONTACT PAGE (`contact.blade.php`)

- See Hero Sections - Contact Hero
- **Layout**: `grid lg:grid-cols-2 gap-16`
- **Left**: Info card + Map
  - Info card: `bg-[#F8FAFB] p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm`
  - Contact items: icon circles `w-10 h-10 bg-white rounded-full shadow-sm` hover: `bg-primary`
  - Map: `h-[250px] lg:h-[300px] rounded-3xl overflow-hidden shadow-sm border border-gray-100`
  - Map source: Google Maps embed
- **Right**: Livewire contact form

---

## 15. Footer

| Property            | Value                                            |
|---------------------|--------------------------------------------------|
| Background          | `bg-primary`                                     |
| Text color          | `text-primary-dark`                              |
| Font size           | `text-sm`                                        |
| Padding             | `pt-12 pb-6`                                     |
| Container           | `container mx-auto px-6 max-w-[1320px]`         |
| Grid                | `grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10` |

### Column 1: Brand & About
- Logo: `logo-white-trimmed.png`, `h-12`
- Description: `text-primary-dark/80 leading-relaxed pr-4`
- Social icons: `w-8 h-8 rounded-lg bg-white/10` hover: `bg-cta text-primary`
- Socials: LinkedIn, Instagram, YouTube

### Column 2: Quick Links (Navigasi)
- Heading: `font-bold text-base text-primary-dark/90 mb-4`
- Links: `text-primary-dark/80 hover:text-cta`, with `>` arrow marker (`text-cta`)
- Arrow hover: `translate-x-1`
- Items: Home, Service, Portfolio, About, Contact

### Column 3: Services (Layanan)
- Same styling as Column 2
- Items: Asesmen Agility, Sertifikasi Soft Skill, Training & Workshop, Konsultasi Organisasi, Research & Insight

### Column 4: Contact (Hubungi Kami)
- Contact items with icons: `lucide-phone`, `lucide-mail`, `lucide-map-pin`
- Icons: `w-5 h-5 text-cta`
- Text: `text-primary-dark/80`

### Copyright Bar
- Divider: `border-t border-white/10 pt-6`
- Layout: `flex-col md:flex-row justify-between gap-4`
- Copyright: `text-primary-dark/60 text-xs`
- Links: Kebijakan Privasi, Syarat & Ketentuan — `text-primary-dark/60 hover:text-primary-dark`

---

## 16. Component Library

### `x-ui.button`
- **Purpose**: Universal CTA button
- **Variants**: `primary`, `secondary`, `outline`
- **Props**: `variant`, `href`, `type`, `icon` (boolean, default true)
- **States**: Default, Hover (`-translate-y-1`), Focus (`ring-2`), Disabled
- **Arrow icon**: Inline SVG, `w-5 h-5 ml-2`

### `x-ui.nav-link`
- **Purpose**: Desktop navigation link
- **Props**: `href`, `active`
- **States**: Default (transparent border), Active (accent border + text), Hover

### `x-ui.section-label`
- **Purpose**: Section category label above headings
- **Styling**: `text-accent font-bold text-sm uppercase tracking-[0.2em] mb-4 block`

### `x-ui.service-card`
- **Purpose**: Service card with icon, title, description, and link
- **Props**: `service` (Eloquent model)
- **Layout**: `card-hover p-8 flex flex-col h-full text-center`

### `x-ui.portfolio-card`
- **Purpose**: Portfolio item card with thumbnail, category, title, description, link
- **Props**: `portfolio` (Eloquent model)
- **Thumbnail**: `h-[200px]`, hover scale `105%` over 700ms

### `x-ui.stat-item`
- **Purpose**: Statistics display (icon + number + label)
- **Props**: `icon`, `number`, `label`
- **Layout**: Horizontal flex with `gap-4`

### `x-ui.category-badge`
- **Purpose**: Color-coded category tag
- **Props**: `category`
- **Colors**: Training=blue, Assessment=purple, Certification=green, Consulting=orange, default=gray
- **Styling**: `rounded-full text-xs font-bold uppercase tracking-wider px-3 py-1`

### `x-ui.form-input`
- **Purpose**: Labeled text input with validation
- **Props**: `label`, `type`, `id`, `name`, `placeholder`

### `x-ui.form-textarea`
- **Purpose**: Labeled textarea with validation
- **Props**: `label`, `id`, `name`, `placeholder`, `rows`

### `x-icon`
- **Purpose**: Dynamic icon component wrapper
- **Props**: `name` (Lucide icon name)
- **Implementation**: `<x-dynamic-component :component="$name" />`

### `x-header`
- **Purpose**: Global site header/navbar
- **Behavior**: Sticky on scroll with Alpine.js

### `x-footer`
- **Purpose**: Global site footer

### `livewire:contact-form`
- **Purpose**: Interactive contact form with server-side validation
- **States**: Default, Loading ("MENGIRIM..."), Success (green alert)

### `livewire:portfolio-list`
- **Purpose**: Filterable/paginated portfolio grid
- **Filter categories**: Semua, Training, Assessment, Certification, Consulting
- **Empty state**: Folder icon + "Belum ada portofolio" message

---

## 17. Interaction Design

### Hover Effects

| Element              | Effect                                     | Duration |
|----------------------|--------------------------------------------|----------|
| Buttons              | `-translate-y-1`, bg color change          | `300ms`  |
| Cards (general)      | `-translate-y-2`                           | `300ms`  |
| Card hover component | `-translate-y-[10px]`                      | `300ms`  |
| Portfolio images     | `scale-105`                                | `500ms` or `700ms` |
| Service overview arrow | `bg-primary text-white`                  | default  |
| Core value icon bg   | `bg-primary/10` to `bg-primary`            | default  |
| Nav links            | `text-accent border-accent`                | `200ms`  |
| Footer links         | Arrow `translate-x-1`                      | default  |
| Client logos         | `grayscale-0` / `opacity-100`              | `500ms`  |
| Trusted by logos     | `grayscale-0`                              | `500ms`  |
| Contact info icons   | `bg-white` to `bg-primary`                 | default  |
| Featured program title | `text-primary`                            | default  |
| Filter button shadow | `shadow-md` (active)                       | `300ms`  |

### Focus States

| Element     | Effect                              |
|-------------|-------------------------------------|
| Buttons     | `ring-2 ring-{color}/50`            |
| Form inputs | `ring-2 ring-accent border-accent` or `ring-2 ring-primary border-primary` |
| Mobile menu btn | `ring-2 ring-primary rounded-lg` |

### Scroll Animations (AOS)

| Property    | Value                                |
|-------------|--------------------------------------|
| Library     | AOS (Animate On Scroll) v2.3.1      |
| Duration    | `800ms`                              |
| Once        | `true` (animate only once)           |
| Offset      | `100px`                              |
| Easing      | `ease-out-cubic`                     |

### Alpine.js Animations

| Element           | Animation                                  |
|-------------------|--------------------------------------------|
| Mobile menu overlay | Fade in/out `opacity`, `300ms ease-in-out` |
| Mobile menu panel  | Slide `translate-x-full` to `translate-x-0`, `300ms ease-in-out` |
| Counter numbers   | IntersectionObserver + setInterval counter increments |
| Scroll tracking   | `window.pageYOffset > 40` triggers navbar state |

### Background Animations

| Element              | Animation                                   |
|----------------------|---------------------------------------------|
| Ambient orbs (layout) | `animate-pulse`, duration `8s` and `12s`   |
| ESR Result star badge | `animate-pulse`                             |
| Timeline "Today" dot  | `animate-pulse`                             |

### Transition Defaults

| Property              | Value                       |
|-----------------------|-----------------------------|
| General transition    | `transition-all duration-300` |
| Color transitions     | `transition-colors`          |
| Transform transitions | `transition-transform duration-300` |
| Shadow transitions    | `transition-shadow`          |
| Opacity transitions   | `transition-opacity`         |

---

## 18. Responsive Behavior

### Desktop (>=1024px / `lg`)
- Full multi-column grids
- Side-by-side flex layouts (Hero, About, Services details)
- Desktop nav visible, mobile menu hidden
- Timeline horizontal with zigzag positioning
- Larger font sizes (`text-[60px]`, `text-[56px]`, `text-[44px]`)
- Container max-width `1320px`
- Stat dividers visible (`lg:divide-x`)

### Tablet (768px-1023px / `md`)
- 2-3 column grids
- Desktop nav still visible (`md:flex`)
- Hero layouts stack vertically
- Timeline still horizontal with 4 columns
- Medium font sizes

### Mobile (<768px)
- Single column layouts
- Mobile hamburger menu (`md:hidden`)
- Full-width cards
- Stacked hero sections
- Timeline switches to vertical (centered line)
- Smaller font sizes (`text-4xl`)
- Trusted-by industry list hidden
- Social icons horizontal in mobile menu footer
- Hero images full width
- Filter pills wrap
- Stats 2x2 grid

### Key Responsive Patterns
- All images use `w-full` and `object-cover`
- Grid gaps remain consistent (`gap-8`) at all breakpoints
- Container padding stays `px-6` at all sizes
- Text `max-w-*` constraints prevent overly wide text
- `overflow-x-hidden` applied at body and wrapper level

---

## 19. Design Tokens

```css
/* === COLORS === */
--color-primary: #00a6a6;
--color-primary-dark: #081f5b;
--color-accent: #00a6a6;
--color-cta: #f5c242;
--color-cta-hover: #dfb038;
--color-neutral-heading: #1F2937;
--color-neutral-text: #6B7280;
--color-neutral-light: #9CA3AF;
--color-neutral-border: #E5E7EB;
--color-neutral-bg: #F8FAFB;
--color-neutral-surface: #FFFFFF;

/* === TYPOGRAPHY === */
--font-sans: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif;

/* === SHADOWS === */
--shadow-card: 0 20px 40px rgba(0,0,0,.06);
--shadow-hero: 0 40px 80px rgba(0,0,0,.12);
--shadow-btn: 0 10px 25px rgba(244,180,0,.20);

/* === RADIUS === */
--radius-btn: 14px;
--radius-input: 14px;
--radius-card: 24px;
--radius-img: 28px;
--radius-section: 36px;

/* === BREAKPOINTS (TailwindCSS v4 defaults) === */
/* md: 768px */
/* lg: 1024px */

/* === TRANSITIONS === */
/* duration-200: 200ms (nav links) */
/* duration-300: 300ms (general, cards, buttons) */
/* duration-500: 500ms (portfolio images, logo hover) */
/* duration-700: 700ms (featured project images) */
/* ease-out-cubic: AOS easing */

/* === SPACING === */
/* Container: max-w-[1320px] px-6 mx-auto */
/* Section: py-20 lg:py-28 */
/* Grid gap: gap-6 / gap-8 */
/* Card padding: p-8 / p-10 */
```

---

## 20. Accessibility

### Contrast
- Primary text `#1F2937` on white bg — **passes WCAG AA** (Estimated: ~13:1)
- Body text `#6B7280` on white bg — **passes WCAG AA** (Estimated: ~5:1)
- White text on primary teal `#00a6a6` — **marginal** (Estimated: ~3.5:1, may fail AA for small text)
- CTA button `#1F2937` on `#f5c242` — **passes WCAG AA** (Estimated: ~10:1)

### Heading Hierarchy
- Each page has a single `<h1>`
- `<h2>` used for section titles
- `<h3>` used for card titles and subsection headings
- `<h4>` used for stat labels, feature titles, footer headings

### Button & Touch Targets
- Primary buttons: `px-8 py-3` / `px-8 py-4` (minimum ~48px height) **(Estimated)**
- Mobile menu button: `p-2` with `w-8 h-8` icon — adequate target
- Filter pills: `px-6 py-2.5` — ~40px height **(Estimated)**
- Social icons: `w-8 h-8` — 32px (below recommended 44px minimum)

### Focus States
- All interactive elements have `focus:outline-none focus:ring-2 focus:ring-{color}/50`
- Mobile menu close button has explicit focus ring
- Form inputs have focus ring with border color change

### Keyboard Navigation
- Standard HTML links and buttons (keyboard accessible by default)
- Alpine.js mobile menu can be closed via overlay click
- No custom keyboard trap handling detected

### Screen Reader
- Mobile menu overlay: `role="dialog" aria-modal="true" aria-labelledby="slide-over-title"`
- Close button: `<span class="sr-only">Close panel</span>`
- Images have `alt` attributes

---

## 21. Visual Consistency Rules

1. **Container width** always `max-w-[1320px]` with `px-6` and `mx-auto`.
2. **Section padding** follows `py-20` (standard) or `py-20 lg:py-28` (prominent) pattern.
3. **Section heading** is always `text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto` when centered.
4. **Section labels** are always `text-cta font-bold tracking-widest uppercase text-sm mb-4 block` (or via `x-ui.section-label`).
5. **Card border radius** follows a scale: `rounded-2xl` (16px) for feature cards, `rounded-3xl` (24px) for testimonial/program cards, `rounded-[32px]` for service overview cards.
6. **Card padding** is consistently `p-8` (standard) or `p-10` (large/testimonials).
7. **Card borders** are always `border border-gray-100` on light backgrounds, `border border-white/10` on teal backgrounds.
8. **Heading text color** on light backgrounds is always `text-[#141414]` (inline) or `text-[#1F2937]` (CSS).
9. **Body text color** is `text-[#585857]` (inline) or `text-[#6B7280]` (CSS).
10. **CTA buttons** always use `bg-cta text-[#1F2937] font-bold`.
11. **Background alternation** follows: white -> light gray -> white -> light gray (for light sections); teal for accent sections.
12. **Icon containers** follow `w-{size} h-{size} rounded-{shape} bg-primary/10 flex items-center justify-center` pattern.
13. **Grid gaps** are `gap-8` (standard) or `gap-6` (compact).
14. **Image aspect ratio** is `4/3` for hero images and service detail images.
15. **Service detail sections** alternate `flex-row` and `flex-row-reverse` on desktop.
16. **Hover translate** is `-translate-y-2` for cards, `-translate-y-1` for buttons.
17. **Text links** use `font-bold text-primary hover:text-accent` with arrow and hover translate.
18. **"Learn More" links** always include an inline SVG chevron with `group-hover:translate-x-1`.

---

## 22. Asset Inventory

### Images

| Asset                      | Type | Location                           | Usage                         |
|----------------------------|------|------------------------------------|-------------------------------|
| `logo-white-trimmed.png`   | PNG  | `/public/logo-white-trimmed.png`   | Header (default), Footer      |
| `logo-black-trimmed.png`   | PNG  | `/public/logo-black-trimmed.png`   | Header (scrolled), Mobile menu |
| `logo-white-final.png`     | PNG  | `/public/logo-white-final.png`     | Alternative white logo        |
| `passolving_logo.jpg`      | JPG  | `/public/passolving_logo.jpg`      | Favicon                       |
| `logo.png`                 | PNG  | `/logo.png` (root)                 | Source logo                   |
| `founder.png`              | PNG  | `/public/images/founder.png`       | Founder image (unused in views) |
| `Compro PASS 2026.pdf`     | PDF  | `/public/Compro PASS 2026.pdf`     | Company profile download      |

### External Images (Unsplash)

| URL Pattern | Usage |
|-------------|-------|
| `photo-1552664730-d307ca884978` | Team workshop — Hero (Home), Portfolio (Indosat), About bg |
| `photo-1542744173-8e7e53415bb0` | Meeting room — About overview, Portfolio (BNI), Service (Training) |
| `photo-1600880292203-757bb62b4baf` | Office collaboration — About overview, Portfolio (LKPP), Service (Consulting) |
| `photo-1551288049-bebda4e38f71` | Data/research — Service (Research) |
| `photo-1515169067868-5387ec356754` | Workshop — Portfolio (DOI) |

### Decorative SVG Elements

| Element                 | Location        | Description                              |
|-------------------------|-----------------|------------------------------------------|
| Dot grid pattern        | Layout bg       | Base64 encoded SVG circles in `bg-[url(...)]` |
| Ambient orbs            | Layout bg       | CSS gradient blur circles (`blur-[120px]`, `blur-[100px]`) |
| Grid lines              | Home hero       | CSS linear-gradient pattern, 80px spacing |
| Dot patterns            | Home hero, Services hero | SVG `<pattern>` with circles, `r="2"` |
| Circle arcs             | Home hero       | SVG `<circle>` strokes, white and yellow |
| Dashed curves           | Home hero       | SVG `<path>` with `stroke-dasharray="6 6"` |
| Paper planes            | Services hero   | SVG triangles (yellow `#f5c242` + dark yellow `#dfb038`) with dashed flight paths |
| Large decorative circles | Services hero  | CSS `rounded-full bg-white/5 blur-sm` |
| Card corner decorations | Services overview | Solid circles, dotted circle patterns |

---

## 23. Motion Design

### Entrance Animations (AOS)

| Property    | Value            |
|-------------|------------------|
| Duration    | `800ms`          |
| Easing      | `ease-out-cubic` |
| Trigger     | On scroll, once  |
| Offset      | `100px`          |

> Note: AOS `data-aos` attributes are initialized globally but no `data-aos` attributes were found in the current view files. The system is set up and ready for use.

### Counter Animation

| Property    | Value                                         |
|-------------|------------------------------------------------|
| Trigger     | IntersectionObserver (on viewport entry)       |
| Speed       | `30ms` interval (fast counters), `100ms` (slow counters) |
| Increment   | `+1`, `+2`, or `+3` per tick depending on target |
| Once        | Yes (`started` flag prevents re-animation)     |

### Hover Animations

| Element              | Transform                | Duration |
|----------------------|--------------------------|----------|
| Buttons              | `translateY(-4px)`       | `300ms`  |
| Cards                | `translateY(-8px)`       | `300ms`  |
| Portfolio thumbnails | `scale(1.05)`            | `500ms`-`700ms` |
| Link arrows          | `translateX(4px)`        | default  |
| Icon backgrounds     | Color change             | default  |

### Background Animations

| Element              | Type            | Duration                  |
|----------------------|-----------------|---------------------------|
| Ambient orb 1        | CSS `pulse`     | `8s` infinite             |
| Ambient orb 2        | CSS `pulse`     | `12s` infinite, `2s` delay |
| ESR Result star      | CSS `pulse`     | default (1s)              |
| Timeline "Today" dot | CSS `pulse`     | default (1s)              |

### Page Transitions
- No explicit page transition animations. Standard browser navigation.

---

## 24. Implementation Notes

### Critical Rules

1. **Never change the container pattern.** All containers must use `container mx-auto px-6 max-w-[1320px]`.
2. **Preserve the color token system.** All colors should reference the CSS custom properties defined in `@theme`. Do not introduce new color values without adding them to the theme.
3. **Keep border radius consistent.** Follow the established scale: buttons `14px`, cards `16px`-`24px`-`32px`, images `24px`-`28px`-`48px`.
4. **Maintain section background alternation.** White -> Light Gray (`#F8FAFB`) -> White -> Teal (for accent sections).
5. **Always use `Plus Jakarta Sans`.** Do not substitute with other fonts.
6. **Preserve responsive breakpoints.** Use `md:` (768px) and `lg:` (1024px) consistently.
7. **Icon consistency.** All icons are Lucide style. Do not mix icon libraries.
8. **Component reuse.** Use existing Blade components (`x-ui.button`, `x-ui.nav-link`, etc.) instead of duplicating inline styles.
9. **Alpine.js for interactivity.** Navbar scroll state, mobile menu, portfolio filters, and counter animations all use Alpine.js. Do not replace with other JS solutions.
10. **AOS for scroll animations.** AOS is initialized globally with `duration: 800, once: true, offset: 100, easing: 'ease-out-cubic'`. Do not change these defaults.
11. **TailwindCSS v4.** The project uses Tailwind v4 with `@import 'tailwindcss'` syntax and `@theme` blocks. Configuration is done via CSS, not `tailwind.config.js`.
12. **Livewire for dynamic components.** Contact form and portfolio list use Livewire. Preserve `wire:` directives.
13. **Hero padding accounts for fixed navbar.** Page heroes use `pt-[120px]`-`pt-[180px]` to clear the 88px fixed header.
14. **Image hover effect** on portfolio cards uses `group` + `group-hover:scale-105`.
15. **Link arrows** use inline SVG chevrons with `group-hover:translate-x-1` animation.
16. **Decorative SVG elements** should not be removed — they define the premium visual character of hero sections.
17. **Text content is bilingual.** Headings tend to be English, body text tends to be Indonesian. Maintain this pattern.
18. **Logo switching** on scroll is handled via Alpine.js `:src` binding, not CSS.
19. **`overflow-x-hidden`** is applied at multiple levels (html, body, wrapper) to prevent horizontal scroll from decorative elements.
20. **Do not add a CTA section or footer-adjacent section on pages that don't have one.** Only the About page has the explicit CTA bar. Home and Services end with their respective final sections before the footer.
