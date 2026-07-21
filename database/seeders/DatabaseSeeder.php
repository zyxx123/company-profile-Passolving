<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Service;
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
                'title' => 'Leadership Agility Program',
                'client' => 'PT Pertamina (Persero)',
                'category' => 'Training',
                'description' => 'Meningkatkan agility leadership untuk mendukung transformasi organisasi.',
                'image_url' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bdea?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Agility Assessment',
                'client' => 'PT Telkom Indonesia',
                'category' => 'Assessment',
                'description' => 'Asesmen agility untuk memetakan kapabilitas organisasi.',
                'image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Sertifikasi Communication Skill',
                'client' => 'Bank Mandiri',
                'category' => 'Certification',
                'description' => 'Program sertifikasi komunikasi efektif karyawan frontline.',
                'image_url' => 'https://images.unsplash.com/photo-1554469384-e58fac16e23a?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Team Collaboration Workshop',
                'client' => 'PT BCA',
                'category' => 'Training',
                'description' => 'Workshop kolaborasi tim untuk meningkatkan sinergi dan produktivitas.',
                'image_url' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Organizational Transformation',
                'client' => 'PT Danamon Indonesia',
                'category' => 'Consulting',
                'description' => 'Pendampingan transformasi organisasi untuk mencapai kinerja berkelanjutan.',
                'image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Sertifikasi Leadership Essential',
                'client' => 'PT PLN (Persero)',
                'category' => 'Certification',
                'description' => 'Program sertifikasi leadership untuk membentuk pemimpin yang adaptif.',
                'image_url' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bdea?auto=format&fit=crop&w=800&q=80',
            ],
        ];

        foreach ($portfolios as $port) {
            Portfolio::create($port);
        }
    }
}
