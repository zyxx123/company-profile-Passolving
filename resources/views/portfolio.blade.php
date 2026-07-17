<x-layouts.app>
    <x-hero-banner 
        title="{{ __('PASS Projects') }}" 
        subtitle="{{ __('We don\'t just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record.') }}"
        bgImage="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-24 md:py-32 bg-white relative">
        <div class="container mx-auto px-6 max-w-6xl relative z-10">
            <div class="space-y-12">
                
                @php
                $caseStudies = [
                    [
                        'client' => "BNI Corporate University",
                        'title' => "Learning by Transforming: From Insights to Execution",
                        'context' => "Program 'Learning by Transforming' untuk menerapkan insight secara langsung ke eksekusi nyata.",
                        'role' => "Merancang dan memfasilitasi program menggunakan pendekatan Agile & Design Thinking, menghubungkan pembelajaran ke KPI target, serta mendampingi implementasi pasca-pelatihan.",
                        'focus' => "Mendorong transfer pembelajaran – memastikan hasil pelatihan diterapkan dan memicu perubahan perilaku terukur dalam 30 hari.",
                        'color' => 'primary'
                    ],
                    [
                        'client' => "Indosat Ooredoo Hutchison (IOH)",
                        'title' => "People Transformation Enablement",
                        'context' => "Inisiatif transformasi SDM untuk memperkuat agility, kolaborasi, dan pemikiran berpusat pada pengguna (user-centered thinking).",
                        'role' => "Merancang dan memfasilitasi pengalaman belajar terintegrasi untuk memungkinkan perubahan perilaku dan kapabilitas.",
                        'focus' => "Perubahan kapabilitas nyata (Capability shift), bukan sekadar pelatihan satu kali.",
                        'color' => 'secondary'
                    ],
                    [
                        'client' => "Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP)",
                        'title' => "Agile Team Leadership",
                        'context' => "Lingkungan kerja sektor publik dengan kompleksitas tinggi, tuntutan akuntabilitas, dan penyesuaian regulasi yang cepat.",
                        'role' => "Mendukung pimpinan direktorat & tim membangun kepemimpinan adaptif, kolaboratif, dan efektif di bawah tekanan.",
                        'focus' => "Perubahan perilaku kepemimpinan dan cara kerja tim yang berkelanjutan.",
                        'color' => 'primary'
                    ],
                    [
                        'client' => "Medical Centre",
                        'title' => "Margin Improvement",
                        'context' => "Pusat medis stagnan dengan persaingan ketat, kurangnya diferensiasi, dan alur layanan tidak optimal.",
                        'role' => "Redesain alur layanan medis dan penerapan sistem manajemen pasien berbasis digital.",
                        'focus' => "Masuk Top 5 nasional, volume pasien melonjak menjadi >10.000 per bulan, dan revenue meningkat hingga 1000%.",
                        'color' => 'secondary'
                    ],
                    [
                        'client' => "Perusahaan Agribisnis",
                        'title' => "Efisiensi Biaya HR",
                        'context' => "Biaya operasional tinggi tidak sebanding dengan produktivitas karena tata kelola konvensional dan kompleksitas SBU.",
                        'role' => "Perapihan struktur, pemetaan bottle-neck proses bisnis, dan implementasi strategi efisiensi iteratif.",
                        'focus' => "Menekan biaya operasional HR dari Rp 12 Miliar menjadi Rp 5 Miliar per bulan dalam satu tahun.",
                        'color' => 'primary'
                    ],
                    [
                        'client' => "Pos Indonesia",
                        'title' => "Productivity Enhancement - Change Management",
                        'context' => "Kebutuhan menerjemahkan arah strategis dengan tenggat waktu 3 bulan, hanya melibatkan tim HR.",
                        'role' => "Perumusan kerangka Change Management, menyelaraskan narasi, dan transfer pemahaman kepada tim internal.",
                        'focus' => "Menjadikan dokumen strategi sebagai referensi tunggal pelaksanaan peningkatan produktivitas.",
                        'color' => 'secondary'
                    ]
                ];
                @endphp

                @foreach($caseStudies as $index => $study)
                    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">
                        <div class="block bg-white border-2 border-slate-100 hover:border-secondary transition-all duration-300 group relative overflow-hidden">
                            
                            <!-- Solid color block that slides in from left -->
                            <div class="absolute left-0 top-0 bottom-0 w-3 bg-{{ $study['color'] }} group-hover:w-full transition-all duration-500 ease-out z-0 opacity-100 group-hover:opacity-10"></div>
                            
                            <div class="p-8 md:p-12 flex flex-col gap-6 relative z-10">
                                <!-- Client Badge -->
                                <div>
                                    <span class="inline-block px-4 py-1 bg-secondary text-white font-black text-xs uppercase tracking-widest mb-4 group-hover:bg-primary group-hover:text-secondary transition-colors">{{ __($study['client']) }}</span>
                                </div>
                                
                                <!-- Content -->
                                <div>
                                    <h2 class="text-3xl font-black text-secondary mb-8 group-hover:text-primary transition-colors duration-300">
                                        {{ __($study['title']) }}
                                    </h2>
                                    
                                    <div class="grid md:grid-cols-3 gap-8 mb-4">
                                        <div class="border-l-2 border-slate-200 pl-4 group-hover:border-secondary transition-colors">
                                            <h5 class="text-xs uppercase tracking-widest font-black text-slate-800 mb-2">{{ __('Context') }}</h5>
                                            <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ __($study['context']) }}</p>
                                        </div>
                                        <div class="border-l-2 border-slate-200 pl-4 group-hover:border-secondary transition-colors">
                                            <h5 class="text-xs uppercase tracking-widest font-black text-slate-800 mb-2">{{ __('PASS Role') }}</h5>
                                            <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ __($study['role']) }}</p>
                                        </div>
                                        <div class="bg-secondary p-6 text-white group-hover:bg-primary group-hover:text-secondary transition-colors duration-300 relative overflow-hidden">
                                            <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white/10 transform rotate-45 pointer-events-none"></div>
                                            <h5 class="text-xs uppercase tracking-widest font-black mb-2 opacity-80">{{ __('Focus & Result') }}</h5>
                                            <p class="text-sm font-bold leading-relaxed">{{ __($study['focus']) }}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layouts.app>
