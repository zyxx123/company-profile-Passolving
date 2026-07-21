<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <section class="pt-[140px] pb-[100px] bg-gradient-to-br from-primary-dark to-primary text-white">
        <div class="container mx-auto px-6 max-w-[1320px] text-center">
            <h1 class="text-4xl lg:text-[56px] font-black leading-[1.2] mb-6 max-w-4xl mx-auto uppercase">
                Portfolio
            </h1>
            <p class="text-white/80 max-w-2xl mx-auto leading-relaxed text-xl">
                Discover how PASS has helped organizations achieve measurable transformation across industries.
            </p>
        </div>
    </section>

    <!-- 2. PORTFOLIO OVERVIEW & FILTER -->
    <section class="py-12 bg-white border-b border-gray-100 z-10 relative shadow-sm">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-8">
                <!-- Stats Overview -->
                <div class="flex items-center gap-8 text-[#141414]">
                    <div class="text-center">
                        <span class="block text-3xl font-black text-primary">100+</span>
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">Projects</span>
                    </div>
                    <div class="w-px h-10 bg-gray-200"></div>
                    <div class="text-center">
                        <span class="block text-3xl font-black text-primary">50+</span>
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">Organizations</span>
                    </div>
                    <div class="hidden md:flex w-px h-10 bg-gray-200"></div>
                    <div class="hidden md:flex text-sm font-medium text-[#585857]">
                        Government &bull; Private &bull; Education &bull; Healthcare
                    </div>
                </div>

                <!-- AlpineJS Filter Context Starts Here for the rest of the page -->
                <!-- Note: To make Alpine work across sections, we can wrap the main content in x-data -->
            </div>
        </div>
    </section>

    <!-- Wrap the projects in x-data so filter works -->
    <div x-data="{ filter: 'All' }">
        
        <!-- Filter Bar -->
        <section class="pt-12 bg-[#F8FAFB]">
            <div class="container mx-auto px-6 max-w-[1320px]">
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <template x-for="cat in ['All', 'Training', 'Consulting', 'Transformation', 'Research']" :key="cat">
                        <button @click="filter = cat"
                                :class="filter === cat ? 'bg-primary text-white shadow-md' : 'bg-white text-[#585857] hover:bg-gray-50 border border-gray-200'"
                                class="px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300">
                            <span x-text="cat"></span>
                        </button>
                    </template>
                </div>
            </div>
        </section>

        <!-- 3. FEATURED PROJECTS (GRID LAYOUT) -->
        <section class="py-16 bg-[#F8FAFB]">
            <div class="container mx-auto px-6 max-w-[1320px]">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <!-- Project 1 -->
                    <a href="/portfolio/bni" x-show="filter === 'All' || filter === 'Training'" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:-translate-y-2 transition-all duration-300 block">
                        <div class="h-48 overflow-hidden relative">
                            <div class="absolute inset-0 bg-primary-dark/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80" alt="BNI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 right-4 z-20 bg-cta text-white text-xs font-bold px-3 py-1 rounded-full">Training</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">PT Bank Negara Indonesia</h4>
                            <h3 class="text-xl font-bold text-[#141414] group-hover:text-primary transition-colors">BNI Corporate University</h3>
                        </div>
                    </a>

                    <!-- Project 2 -->
                    <a href="/portfolio/indosat" x-show="filter === 'All' || filter === 'Consulting'" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:-translate-y-2 transition-all duration-300 block">
                        <div class="h-48 overflow-hidden relative">
                            <div class="absolute inset-0 bg-primary-dark/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Indosat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 right-4 z-20 bg-cta text-white text-xs font-bold px-3 py-1 rounded-full">Consulting</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Indosat Ooredoo Hutchison</h4>
                            <h3 class="text-xl font-bold text-[#141414] group-hover:text-primary transition-colors">People Transformation</h3>
                        </div>
                    </a>

                    <!-- Project 3 -->
                    <a href="/portfolio/lkpp" x-show="filter === 'All' || filter === 'Training'" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:-translate-y-2 transition-all duration-300 block">
                        <div class="h-48 overflow-hidden relative">
                            <div class="absolute inset-0 bg-primary-dark/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80" alt="LKPP" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 right-4 z-20 bg-cta text-white text-xs font-bold px-3 py-1 rounded-full">Training</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Lembaga Pengadaan Barang</h4>
                            <h3 class="text-xl font-bold text-[#141414] group-hover:text-primary transition-colors">Agile Team Leadership</h3>
                        </div>
                    </a>

                    <!-- Project 4 -->
                    <a href="/portfolio/doi" x-show="filter === 'All' || filter === 'Transformation'" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:-translate-y-2 transition-all duration-300 block">
                        <div class="h-48 overflow-hidden relative">
                            <div class="absolute inset-0 bg-primary-dark/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=800&q=80" alt="DOI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 right-4 z-20 bg-cta text-white text-xs font-bold px-3 py-1 rounded-full">Transformation</span>
                        </div>
                        <div class="p-6">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Digital Optima Integra</h4>
                            <h3 class="text-xl font-bold text-[#141414] group-hover:text-primary transition-colors">Collaborative Agility</h3>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </div> <!-- End x-data filter -->

    <!-- 5. TRANSFORMATION CASE STUDIES (THE BIG WINS) -->
    <section class="py-20 lg:py-28 bg-primary-dark text-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold leading-[1.2] max-w-2xl mx-auto mb-4">
                    Transformation Case Studies
                </h2>
                <p class="text-white/70 max-w-2xl mx-auto">Kami tidak menjanjikan sekadar perubahan, tapi kepastian dampak numerik (*Return on Investment*).</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Case 1 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Healthcare Transformation</span>
                    <h3 class="text-2xl font-black mb-8 text-white">Medical Centre</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-white/90 text-sm">Persaingan tinggi dan proses layanan lambat yang merugikan pasien.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-white/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-white/90 text-sm">Redesain proses bisnis (BPI) secara masif dan digitalisasi layanan.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-white/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Revenue naik <span class="text-white font-black">+1000%</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Top 5 Nasional</li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> 10.000 pasien/bulan</li>
                        </ul>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Agriculture & Supply Chain</span>
                    <h3 class="text-2xl font-black mb-8 text-white">Agribusiness</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-white/90 text-sm">Pembengkakan anggaran SDM tanpa korelasi langsung pada output panen.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-white/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-white/90 text-sm">Optimalisasi produktivitas dan restrukturisasi kompetensi tenaga kerja inti.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-white/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> HR Cost Efficiency masif</li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> HR Cost turun dari <span class="text-white font-black text-red-400">12 M</span> → <span class="text-white font-black text-green-400">5 M</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Logistics</span>
                    <h3 class="text-2xl font-black mb-8 text-white">Warehouse Opt.</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-white/90 text-sm">Kebocoran finansial di gudang serta ketidakakuratan pergerakan barang.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-white/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-white/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-white/90 text-sm">Implementasi standar *Agile operations* dan audit kapabilitas tim logistik.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-white/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Stock accuracy <span class="text-white font-black">98%</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Revenue tambahan <span class="text-white font-black">+800 M</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Fraud/kebocoran ditemukan dan distop</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. CLIENT LOGOS (TRUSTED BY) -->
    <section class="py-20 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px] text-center">
            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-10">Trusted By Industry Leaders</h4>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70 grayscale">
                <!-- Using Text placeholders for logos as per instruction -->
                <h2 class="text-3xl font-black text-gray-800">BNI</h2>
                <h2 class="text-3xl font-black text-gray-800">OJK</h2>
                <h2 class="text-3xl font-black text-gray-800">KEMENKES</h2>
                <h2 class="text-3xl font-black text-gray-800">PELINDO</h2>
                <h2 class="text-3xl font-black text-gray-800">INDOSAT</h2>
                <h2 class="text-3xl font-black text-gray-800">LKPP</h2>
                <h2 class="text-3xl font-black text-gray-800">ITB</h2>
                <h2 class="text-3xl font-black text-gray-800">UNPAD</h2>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section class="py-16 bg-primary-dark text-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-12">
                <x-icon name="lucide-quote" class="w-8 h-8 text-white/20 mx-auto mb-3" stroke-width="1.5" />
                <h2 class="text-2xl lg:text-3xl font-bold leading-[1.2]">
                    What Our Clients Say
                </h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 items-start">
                
                <!-- Column 1 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Manager Retail Chain (Indonesia)</span>
                        <p class="text-white text-base font-medium leading-relaxed italic">
                            "Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Food Processing Manufacturer (Bahrain)</span>
                        <p class="text-white text-base font-medium leading-relaxed italic">
                            "Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada pengembangan bisnis kami."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-white font-bold">"92% Accuracy Achieved"</p>
                            <p class="text-white/80 text-xs">Retail Company</p>
                        </div>
                        <div>
                            <p class="text-white font-bold">"Waktu stock opname turun 50%"</p>
                            <p class="text-white/80 text-xs">Retail Company</p>
                        </div>
                        <div>
                            <p class="text-white font-bold">"Implementasi 5S mengungkap fraud selama 6 tahun"</p>
                            <p class="text-white/80 text-xs">Perusahaan Manufaktur</p>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Beauty Clinic (Indonesia)</span>
                        <p class="text-white text-base font-medium leading-relaxed italic">
                            "PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-white font-bold">"From Fragmented Teams to Unified Agility"</p>
                            <p class="text-white/80 text-xs">Perusahaan Telekomunikasi</p>
                        </div>
                        <div>
                            <p class="text-white font-bold">Transformasi operasional meningkatkan kinerja 1000%</p>
                            <p class="text-white/80 text-xs">Laboratorium Klinik</p>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Integrated Farm (Indonesia)</span>
                        <p class="text-white text-base font-medium leading-relaxed italic">
                            "PASSolving membantu membangun visi kuat dan peta jalannya."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">COO Agroindustry (Indonesia)</span>
                        <p class="text-white text-base font-medium leading-relaxed italic">
                            "Kami berhasil menghemat biaya tanpa mengorbankan kualitas."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-white font-bold">"Revenue trajectory in 6 Months, 800 billions"</p>
                            <p class="text-white/80 text-xs">Agro Industry</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="mt-12 text-center flex flex-col md:flex-row items-center justify-center gap-6">
                <p class="text-xl font-bold text-white">What leaders consistently experience</p>
                <div class="w-12 h-12 bg-white text-primary-dark rounded-full flex items-center justify-center">
                    <x-icon name="lucide-arrow-right" class="w-6 h-6" />
                </div>
                <p class="text-xl font-black text-cta tracking-widest uppercase">Adaptasi, Kolaborasi, Optimalisasi, Inovasi, Pertumbuhan</p>
            </div>
        </div>
    </section>


</x-layouts.app>
