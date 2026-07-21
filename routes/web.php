<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Portfolio;

Route::get('/', function () {
    return view('welcome', [
        'services' => Service::take(5)->get(),
        'portfolios' => Portfolio::take(3)->get(),
    ]);
});

Route::get('/services', function () {
    return view('services', [
        'services' => Service::all()
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio/{slug}', function ($slug) {
    $portfolios = [
        'bni' => [
            'client' => 'PT Bank Negara Indonesia (Persero) Tbk',
            'title' => 'BNI Corporate University',
            'category' => 'Training',
            'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80',
            'context' => 'Kebutuhan untuk mempercepat transformasi kapabilitas SDM di seluruh cabang secara serentak agar selaras dengan tuntutan digital banking.',
            'focus' => 'Learning by Transforming, Adaptive Leadership, Action Learning Project.',
            'role' => 'Merancang dan mengeksekusi program pembelajaran aplikatif di mana peserta langsung menyelesaikan proyek bisnis nyata.',
            'impact' => ['Peningkatan drastis adopsi inisiatif digital.', 'Penyelesaian 50+ Action Learning Project sukses.']
        ],
        'indosat' => [
            'client' => 'Indosat Ooredoo Hutchison',
            'title' => 'People Transformation',
            'category' => 'Consulting',
            'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
            'context' => 'Tantangan merger raksasa yang membutuhkan peleburan dua budaya kerja besar tanpa menurunkan performa bisnis.',
            'focus' => 'People Transformation, Change Management, Culture Alignment.',
            'role' => 'Menjadi katalisator transformasi budaya, mendampingi proses perubahan secara end-to-end di level manajerial hingga akar rumput.',
            'impact' => ['Keberhasilan merger yang harmonis.', 'Pertumbuhan pendapatan di kuartal pasca-merger.']
        ],
        'lkpp' => [
            'client' => 'Lembaga Kebijakan Pengadaan Barang/Jasa (LKPP)',
            'title' => 'Agile Team Leadership',
            'category' => 'Training',
            'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80',
            'context' => 'Keharusan meningkatkan responsivitas birokrasi dan kolaborasi antartim dalam menangani proyek pemerintah yang kompleks.',
            'focus' => 'Agile Team Leadership, Collaborative Mindset.',
            'role' => 'Fasilitasi pelatihan kelincahan berbasis simulasi (Agility Simulation) untuk mendobrak ego sektoral.',
            'impact' => ['Percepatan alur kerja antar-divisi.', 'Perubahan pola pikir lebih adaptif.']
        ],
        'doi' => [
            'client' => 'Digital Optima Integra',
            'title' => 'Collaborative Agility',
            'category' => 'Transformation',
            'image' => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=800&q=80',
            'context' => 'Start-up berkembang pesat yang mulai menghadapi bottleneck akibat struktur organisasi yang tidak siap melaju lebih cepat.',
            'focus' => 'Collaborative Agility, Organizational Design.',
            'role' => 'Merekonstruksi arsitektur organisasi dan menanamkan prinsip kolaborasi agil antar-tim produk.',
            'impact' => ['Peluncuran produk 2x lebih cepat.', 'Hilangnya birokrasi internal redudansi.']
        ],
    ];

    if (!array_key_exists($slug, $portfolios)) {
        abort(404);
    }

    return view('portfolio-detail', ['portfolio' => $portfolios[$slug]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
