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
    }
}
