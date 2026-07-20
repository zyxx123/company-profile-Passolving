<x-layouts.app>
    <x-hero-banner 
        title="{{ __('PASS Projects') }}" 
        subtitle="{{ __('We don\'t just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record.') }}"
        bgImage="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-16 md:py-24 lg:py-32 bg-[#F8F9FA] relative">
        <!-- Decorative SVG Wave Background -->
        <div class="absolute inset-0 z-0 opacity-10 pointer-events-none overflow-hidden">
            <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="w-full h-full fill-secondary-dark transform rotate-180 scale-150">
                <path d="M0,0 L100,0 C90,30 50,70 0,100 Z" />
            </svg>
        </div>
        
        <div class="container mx-auto px-6 max-w-6xl relative z-10">
            <div class="space-y-8 md:space-y-12">
                
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
                        <div class="bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary transition-all duration-300 group relative overflow-hidden">
                            
                            <!-- Solid color block that slides in from left (Vinx Hover Effect) -->
                            <div class="absolute left-0 top-0 bottom-0 w-2 bg-primary group-hover:w-full transition-all duration-500 ease-out z-0 opacity-100 group-hover:opacity-5"></div>
                            
                            <div class="p-6 md:p-8 lg:p-10 flex flex-col gap-4 md:gap-6 relative z-10">
                                <!-- Client Badge -->
                                <div>
                                    <span class="inline-block px-4 py-1.5 bg-secondary-dark text-white rounded-full font-black text-[10px] uppercase tracking-widest mb-2 group-hover:bg-primary group-hover:text-secondary-dark transition-colors shadow-sm">{{ __($study['client']) }}</span>
                                </div>
                                
                                <!-- Content -->
                                <div>
                                    <h2 class="text-2xl sm:text-3xl font-black text-secondary-dark mb-6 tracking-tight group-hover:text-primary transition-colors duration-300">
                                        {{ __($study['title']) }}
                                    </h2>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                                        <div class="border-l-2 border-gray-200 pl-4 group-hover:border-primary transition-colors">
                                            <h5 class="text-[10px] uppercase tracking-widest font-black text-gray-400 mb-2">{{ __('Context') }}</h5>
                                            <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ __($study['context']) }}</p>
                                        </div>
                                        <div class="border-l-2 border-gray-200 pl-4 group-hover:border-primary transition-colors">
                                            <h5 class="text-[10px] uppercase tracking-widest font-black text-gray-400 mb-2">{{ __('PASS Role') }}</h5>
                                            <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ __($study['role']) }}</p>
                                        </div>
                                        <div class="bg-secondary-dark p-5 md:p-6 rounded-xl text-white group-hover:bg-primary group-hover:text-secondary-dark transition-colors duration-300 relative overflow-hidden shadow-md">
                                            <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
                                            <h5 class="text-[10px] uppercase tracking-widest font-black mb-2 opacity-80">{{ __('Focus & Result') }}</h5>
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
