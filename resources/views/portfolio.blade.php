<x-layouts.app>
    <x-hero-banner 
        title="PASS Projects" 
        subtitle="We don't just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record."
        bgImage="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-32 bg-[#F8FAFC] bg-grid-pattern relative">
        <div class="container mx-auto px-6 max-w-5xl relative z-10">
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
                        'color' => 'accent'
                    ],
                    [
                        'client' => "Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP)",
                        'title' => "Agile Team Leadership",
                        'context' => "Lingkungan kerja sektor publik dengan kompleksitas tinggi, tuntutan akuntabilitas, dan penyesuaian regulasi yang cepat.",
                        'role' => "Mendukung pimpinan direktorat & tim membangun kepemimpinan adaptif, kolaboratif, dan efektif di bawah tekanan.",
                        'focus' => "Perubahan perilaku kepemimpinan dan cara kerja tim yang berkelanjutan.",
                        'color' => 'primary-dark'
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
                        'color' => 'accent'
                    ]
                ];
                @endphp

                @foreach($caseStudies as $index => $study)
                    <div data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                        <div class="block bg-white p-10 md:p-12 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group relative overflow-hidden">
                            <div class="absolute left-0 top-0 bottom-0 w-2 bg-slate-200 group-hover:bg-{{ $study['color'] }} transition-colors duration-300"></div>
                            
                            <div class="flex flex-col gap-6 pl-4">
                                <!-- Client Badge -->
                                <div>
                                    <span class="inline-block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Client</span>
                                    <h4 class="text-xl font-bold text-secondary">{{ $study['client'] }}</h4>
                                </div>
                                
                                <!-- Content -->
                                <div>
                                    <h2 class="text-3xl font-black text-secondary mb-6 group-hover:text-{{ $study['color'] }} transition-colors">
                                        {{ $study['title'] }}
                                    </h2>
                                    
                                    <div class="grid md:grid-cols-3 gap-6 mb-6">
                                        <div>
                                            <h5 class="text-sm font-bold text-slate-800 mb-2">Context</h5>
                                            <p class="text-sm text-slate-600 leading-relaxed">{{ $study['context'] }}</p>
                                        </div>
                                        <div>
                                            <h5 class="text-sm font-bold text-slate-800 mb-2">PASS Role</h5>
                                            <p class="text-sm text-slate-600 leading-relaxed">{{ $study['role'] }}</p>
                                        </div>
                                        <div class="bg-[#F8FAFC] p-4 rounded-xl border border-slate-100">
                                            <h5 class="text-sm font-bold text-{{ $study['color'] }} mb-2">Focus & Result</h5>
                                            <p class="text-sm text-slate-700 font-medium leading-relaxed">{{ $study['focus'] }}</p>
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
