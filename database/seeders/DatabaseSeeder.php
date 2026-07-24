<?php

namespace Database\Seeders;

use App\Models\ClientLogo;
use App\Models\CompanyJourney;
use App\Models\CompanyStatistic;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // SERVICES
        $services = [
            [
                'title' => 'Asesmen Agility',
                'description' => 'Mengukur tingkat kesiapan organisasi dalam menghadapi perubahan dan ketidakpastian melalui metode terstandar.',
                'icon_name' => 'lucide-target',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'title' => 'Sertifikasi Soft Skill',
                'description' => 'Program sertifikasi soft skill berstandar nasional untuk meningkatkan kompetensi individu dan tim secara terukur.',
                'icon_name' => 'lucide-award',
                'image_url' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'title' => 'Training & Workshop',
                'description' => 'Pelatihan praktis dan interaktif yang dirancang untuk meningkatkan kapabilitas dan kinerja individu & tim.',
                'icon_name' => 'lucide-presentation',
                'image_url' => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'title' => 'Konsultasi Organisasi',
                'description' => 'Pendampingan strategis untuk merancang dan menjalankan transformasi organisasi yang berkelanjutan.',
                'icon_name' => 'lucide-briefcase',
                'image_url' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1200&q=80',
            ],
            [
                'title' => 'Research & Insight',
                'description' => 'Riset dan insight berbasis data untuk mendukung pengambilan keputusan bisnis yang lebih tepat.',
                'icon_name' => 'lucide-bar-chart-2',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
            ],
        ];

        foreach ($services as $svc) {
            Service::create($svc);
        }

        // PORTFOLIOS
        $portfolios = [
            [
                'slug' => 'bni',
                'title' => 'BNI Corporate University',
                'client' => 'PT Bank Negara Indonesia (Persero) Tbk',
                'category' => 'Training',
                'description' => 'Kebutuhan untuk mempercepat transformasi kapabilitas SDM di seluruh cabang secara serentak agar selaras dengan tuntutan digital banking.',
                'image_url' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80',
                'context' => 'Kebutuhan untuk mempercepat transformasi kapabilitas SDM di seluruh cabang secara serentak agar selaras dengan tuntutan digital banking.',
                'focus' => 'Learning by Transforming, Adaptive Leadership, Action Learning Project.',
                'role' => 'Merancang dan mengeksekusi program pembelajaran aplikatif di mana peserta langsung menyelesaikan proyek bisnis nyata.',
                'impact' => ['Peningkatan drastis adopsi inisiatif digital.', 'Penyelesaian 50+ Action Learning Project sukses.']
            ],
            [
                'slug' => 'indosat',
                'title' => 'People Transformation',
                'client' => 'Indosat Ooredoo Hutchison',
                'category' => 'Consulting',
                'description' => 'Tantangan merger raksasa yang membutuhkan peleburan dua budaya kerja besar tanpa menurunkan performa bisnis.',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
                'context' => 'Tantangan merger raksasa yang membutuhkan peleburan dua budaya kerja besar tanpa menurunkan performa bisnis.',
                'focus' => 'People Transformation, Change Management, Culture Alignment.',
                'role' => 'Menjadi katalisator transformasi budaya, mendampingi proses perubahan secara end-to-end di level manajerial hingga akar rumput.',
                'impact' => ['Keberhasilan merger yang harmonis.', 'Pertumbuhan pendapatan di kuartal pasca-merger.']
            ],
            [
                'slug' => 'lkpp',
                'title' => 'Agile Team Leadership',
                'client' => 'Lembaga Kebijakan Pengadaan Barang/Jasa (LKPP)',
                'category' => 'Training',
                'description' => 'Keharusan meningkatkan responsivitas birokrasi dan kolaborasi antartim dalam menangani proyek pemerintah yang kompleks.',
                'image_url' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80',
                'context' => 'Keharusan meningkatkan responsivitas birokrasi dan kolaborasi antartim dalam menangani proyek pemerintah yang kompleks.',
                'focus' => 'Agile Team Leadership, Collaborative Mindset.',
                'role' => 'Fasilitasi pelatihan kelincahan berbasis simulasi (Agility Simulation) untuk mendobrak ego sektoral.',
                'impact' => ['Percepatan alur kerja antar-divisi.', 'Perubahan pola pikir lebih adaptif.']
            ],
            [
                'slug' => 'doi',
                'title' => 'Collaborative Agility',
                'client' => 'Digital Optima Integra',
                'category' => 'Transformation',
                'description' => 'Start-up berkembang pesat yang mulai menghadapi bottleneck akibat struktur organisasi yang tidak siap melaju lebih cepat.',
                'image_url' => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=800&q=80',
                'context' => 'Start-up berkembang pesat yang mulai menghadapi bottleneck akibat struktur organisasi yang tidak siap melaju lebih cepat.',
                'focus' => 'Collaborative Agility, Organizational Design.',
                'role' => 'Merekonstruksi arsitektur organisasi dan menanamkan prinsip kolaborasi agil antar-tim produk.',
                'impact' => ['Peluncuran produk 2x lebih cepat.', 'Hilangnya birokrasi internal redudansi.']
            ],
        ];

        foreach ($portfolios as $port) {
            Portfolio::create($port);
        }

        // TESTIMONIALS
        $testimonials = [
            [
                'quote' => 'Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya.',
                'author_name' => 'Manager Retail Chain',
                'author_role' => 'Manager',
                'company' => 'Retail Chain',
                'country' => 'Indonesia',
                'is_featured' => false,
                'sort_order' => 1,
            ],
            [
                'quote' => 'PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat.',
                'author_name' => 'Founder Beauty Clinic',
                'author_role' => 'Founder',
                'company' => 'Beauty Clinic',
                'country' => 'Indonesia',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'quote' => 'Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada pengembangan bisnis.',
                'author_name' => 'Founder Food Processing Mfr',
                'author_role' => 'Founder',
                'company' => 'Food Processing Manufacturer',
                'country' => 'Bahrain',
                'is_featured' => false,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // CLIENT LOGOS
        $clientLogos = [
            ['name' => 'Heartspeaks Indonesia', 'logo_path' => 'clients/Heartspeaks Indonesia.webp', 'sort_order' => 1],
            ['name' => 'PDMA-Indonesia', 'logo_path' => 'clients/PDMA-Indonesia.webp', 'sort_order' => 2],
            ['name' => 'AIESEC', 'logo_path' => 'clients/AIESEC-Logo.webp', 'sort_order' => 3],
            ['name' => 'Solopos Media Group', 'logo_path' => 'clients/Solopos Media Group.webp', 'sort_order' => 4],
            ['name' => 'Indosat Ooredoo Hutchinson', 'logo_path' => 'clients/Indosat Ooredoo.webp', 'sort_order' => 5],
            ['name' => 'Adicipta Inovasi Teknologi', 'logo_path' => 'clients/Adicipta Inovasi Teknologi.webp', 'sort_order' => 6],
            ['name' => 'Kemenkes', 'logo_path' => 'clients/Kemenkes.webp', 'sort_order' => 7],
            ['name' => 'LKPP', 'logo_path' => 'clients/LKPP.webp', 'sort_order' => 8],
            ['name' => 'Biro Klasifikasi Indonesia', 'logo_path' => 'clients/Biro Klasifikasi Indonesia.webp', 'sort_order' => 9],
            ['name' => 'Otoritas Jasa Keuangan (OJK) Indonesia', 'logo_path' => 'clients/Otoritas Jasa Keuangan.webp', 'sort_order' => 10],
            ['name' => 'Pos Indonesia', 'logo_path' => 'clients/Pos Indonesia.webp', 'sort_order' => 11],
            ['name' => 'BNI Tbk', 'logo_path' => 'clients/BNI Tbk.webp', 'sort_order' => 12],
            ['name' => 'Asuransi Tugu Pratama Ind Tbk', 'logo_path' => 'clients/Asuransi Tugu Pratama.webp', 'sort_order' => 13],
            ['name' => 'Pelindo Solusi Logistik', 'logo_path' => 'clients/PT PELINDO SOLUSI LOGISTIK.webp', 'sort_order' => 14],
            ['name' => 'UNPAD', 'logo_path' => 'clients/UNPAD.webp', 'sort_order' => 15],
            ['name' => 'FTUI', 'logo_path' => 'clients/FTUI.webp', 'sort_order' => 16],
            ['name' => 'IKIGAI Consulting', 'logo_path' => 'clients/IKIGAI Consulting.webp', 'sort_order' => 17],
            ['name' => 'BDO Indonesia', 'logo_path' => 'clients/BDO Indonesia.webp', 'sort_order' => 18],
            ['name' => 'Al Aaren Food Bahrain', 'logo_path' => 'clients/Al Aaren Food Bahrain.webp', 'sort_order' => 19],
            ['name' => 'DataHen Canada', 'logo_path' => 'clients/DataHen Canada.webp', 'sort_order' => 20],
        ];

        foreach ($clientLogos as $logo) {
            ClientLogo::create($logo);
        }

        // COMPANY STATISTICS
        $statistics = [
            ['label' => 'Projects', 'value' => 150, 'suffix' => '+', 'sort_order' => 1],
            ['label' => 'Clients', 'value' => 50, 'suffix' => '+', 'sort_order' => 2],
            ['label' => 'Satisfaction', 'value' => 98, 'suffix' => '%', 'sort_order' => 3],
            ['label' => 'Experts', 'value' => 12, 'suffix' => null, 'sort_order' => 4],
        ];

        foreach ($statistics as $stat) {
            CompanyStatistic::create($stat);
        }

        // COMPANY JOURNEYS
        $journeys = [
            [
                'year' => '2023',
                'title' => 'PASS Established',
                'subtitle' => 'Founded',
                'description' => 'Lahir di Jakarta di bawah PT Palsindo Utama.',
                'is_current' => false,
                'sort_order' => 1,
            ],
            [
                'year' => 'Expansion',
                'title' => 'National Projects',
                'subtitle' => 'Growth',
                'description' => 'Kepercayaan mengelola project skala nasional.',
                'is_current' => false,
                'sort_order' => 2,
            ],
            [
                'year' => 'Growth',
                'title' => 'Cross Industry',
                'subtitle' => 'Diversification',
                'description' => 'Ekspansi layanan ke berbagai vertikal industri.',
                'is_current' => false,
                'sort_order' => 3,
            ],
            [
                'year' => 'Today',
                'title' => 'Impact Realization',
                'subtitle' => 'Present',
                'description' => 'Melanjutkan misi transformasi berdampak bagi Indonesia.',
                'is_current' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($journeys as $journey) {
            CompanyJourney::create($journey);
        }

        // SITE SETTINGS
        $settings = [
            'phone' => '+62 897 9515 205',
            'email' => 'bersama@passolving.com',
            'address' => 'Jl. P.P.A No.24, RT.5/RW.4, Ceger, Kec. Cipayung, Kota Jakarta Timur 13820',
            'operational_hours' => 'Senin - Jumat, 09:00 - 17:00 WIB',
            'maps_embed_url' => 'https://maps.google.com/maps?q=-6.3182419,106.8956369&t=&z=16&ie=UTF8&iwloc=&output=embed',
            'linkedin_url' => 'https://www.linkedin.com/company/passolving/',
            'instagram_url' => 'https://www.instagram.com/passolving',
            'youtube_url' => 'https://www.youtube.com/@passolving9836',
            'facebook_url' => 'https://facebook.com/kita.passolving.7',
            'threads_url' => 'https://www.threads.net/@passolving',
            'tagline' => 'Partner strategis Anda dalam mewujudkan kelincahan (agility) dan efektivitas tim yang berkelanjutan di era transformasi.',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::create(['key' => $key, 'value' => $value]);
        }
    }
}
