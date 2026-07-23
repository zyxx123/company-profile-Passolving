<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <section class="relative pt-[160px] pb-[160px] bg-primary text-primary-dark overflow-hidden z-0">
        
        <!-- DECORATIONS -->
        <!-- Top Left Planet Shadow -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-white/5 rounded-full blur-[80px] z-0 pointer-events-none"></div>

        <!-- Top Left Dots -->
        <div class="absolute top-[100px] left-10 z-0 opacity-20 pointer-events-none">
            <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#ffffff" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots)"></rect>
            </svg>
        </div>

        <!-- Right Planet Shadow & Dots -->
        <div class="absolute top-20 -right-40 w-[600px] h-[600px] bg-white/5 rounded-full blur-[80px] z-0 pointer-events-none"></div>
        <div class="absolute bottom-[20%] right-10 z-0 opacity-20 pointer-events-none hidden lg:block">
            <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                <pattern id="dots-right" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#ffffff" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots-right)"></rect>
            </svg>
        </div>

        <!-- Paper Plane and Dashed Line -->
        <div class="absolute top-[40%] left-[5%] z-0 hidden lg:block pointer-events-none">
            <svg width="300" height="150" viewBox="0 0 300 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Dashed trajectory -->
                <path d="M10 140 Q 120 180, 200 80 T 260 30" stroke="#ffffff" stroke-width="2" stroke-dasharray="6 6" fill="none" opacity="0.6"/>
                <!-- Paper Plane -->
                <g transform="translate(240, 10) rotate(25)">
                    <path d="M40 0 L0 15 L15 20 L40 0 Z" fill="#FBBF24"/>
                    <path d="M15 20 L12 30 L22 23 L15 20 Z" fill="#F59E0B"/>
                    <path d="M40 0 L15 20 L22 23 L40 0 Z" fill="#FCD34D"/>
                </g>
            </svg>
        </div>

        <!-- Cityscape Silhouette Bottom -->
        <div class="absolute bottom-0 left-0 w-full h-[250px] z-0 opacity-[0.15] pointer-events-none" 
             style="background-image: url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center bottom; mask-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0)); -webkit-mask-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0)); mix-blend-mode: luminosity;">
        </div>
        
        <div class="container relative z-10 mx-auto px-6 max-w-[1320px] text-center" data-aos="fade-up">
            <h1 class="text-[clamp(2.5rem,7vw,4.5rem)] font-black leading-[1.2] mb-4 max-w-4xl mx-auto uppercase text-white">
                PORTFOLIO
            </h1>
            
            <!-- Yellow Underline -->
            <div class="flex justify-center items-center gap-2 mb-8">
                <div class="w-10 h-1 bg-cta rounded-full"></div>
                <div class="w-2 h-1 bg-cta rounded-full"></div>
            </div>

            <p class="text-white/90 max-w-2xl mx-auto leading-relaxed text-[clamp(1rem,3vw,1.25rem)]">
                Discover how PASS has helped organizations achieve measurable transformation across industries.
            </p>
        </div>
    </section>

    <!-- 2. PORTFOLIO OVERVIEW & STATS -->
    <section class="relative z-20 -mt-10 md:-mt-16 lg:-mt-[80px]">
        <div class="container mx-auto max-w-[1400px]">
            <div class="bg-white rounded-t-[40px] lg:rounded-t-[64px] pt-12 pb-12 px-6 lg:px-16 shadow-[0_-10px_40px_rgba(0,0,0,0.05)] relative overflow-hidden flex flex-col lg:flex-row justify-between items-center gap-10 lg:gap-12" data-aos="fade-up" data-aos-delay="200">
                
                <!-- Background Dotted Pattern (Right side) -->
                <div class="absolute bottom-0 right-0 z-0 opacity-10 pointer-events-none w-[300px] h-[300px]">
                    <svg width="100%" height="100%" fill="none" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <pattern id="dots-wave" x="0" y="0" width="8" height="8" patternUnits="userSpaceOnUse">
                            <circle fill="#00a6a6" cx="2" cy="2" r="2"></circle>
                        </pattern>
                        <path d="M0,100 C30,50 70,80 100,0 L100,100 Z" fill="url(#dots-wave)" />
                    </svg>
                </div>

                <!-- Left Stats (Projects & Organizations) -->
                <div class="flex items-center justify-center lg:justify-start gap-8 md:gap-12 lg:gap-16 w-full lg:w-auto relative z-10">
                    <!-- Projects -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-[#E5F5F5] border border-primary/20 flex items-center justify-center mb-4 text-primary">
                            <x-icon name="lucide-briefcase" class="w-8 h-8" />
                        </div>
                        <span class="block text-4xl lg:text-[44px] font-black text-primary leading-none mb-2">100+</span>
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">Projects</span>
                        <div class="w-8 h-1 bg-primary mt-4 rounded-full"></div>
                    </div>
                    
                    <!-- Divider line -->
                    <div class="w-px h-24 md:h-32 bg-gray-200"></div>
                    
                    <!-- Organizations -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-[#E5F5F5] border border-primary/20 flex items-center justify-center mb-4 text-primary">
                            <x-icon name="lucide-users" class="w-8 h-8" />
                        </div>
                        <span class="block text-4xl lg:text-[44px] font-black text-primary leading-none mb-2">50+</span>
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">Organizations</span>
                        <div class="w-8 h-1 bg-primary mt-4 rounded-full"></div>
                    </div>
                </div>

                <!-- Divider between Stats and Sectors (Desktop only) -->
                <div class="hidden lg:block w-px h-24 bg-gray-200 relative z-10"></div>

                <!-- Right Sectors -->
                <div class="flex flex-wrap lg:flex-nowrap justify-center items-center gap-4 lg:gap-8 w-full lg:w-auto relative z-10">
                    <!-- Government -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-landmark" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">Government</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>
                    
                    <!-- Private -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-graduation-cap" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">Private</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>

                    <!-- Education -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-book-open" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">Education</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>

                    <!-- Healthcare -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-plus-circle" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">Healthcare</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Wrap the projects in x-data so filter works -->
    <div x-data="{ filter: 'All' }">
        
        <!-- Filter Bar -->
        <section class="pt-12 bg-[#F8FAFB]">
            <div class="container mx-auto px-6 max-w-[1320px]">
                <div class="flex flex-wrap items-center justify-center gap-3" data-aos="fade-in">
                    <template x-for="cat in ['All', 'Training', 'Consulting', 'Transformation', 'Research']" :key="cat">
                        <button @click="filter = cat"
                                :class="filter === cat ? 'bg-primary text-primary-dark shadow-md' : 'bg-white text-[#585857] hover:bg-gray-50 border border-gray-200'"
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
                    
                    @foreach($portfolios as $port)
                        <a href="/portfolio/{{ $port->slug ?? '' }}" x-show="filter === 'All' || filter === '{{ $port->category }}'" class="group bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 hover:-translate-y-2 transition-all duration-300 block" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                            <div class="h-48 overflow-hidden relative">
                                <div class="absolute inset-0 bg-primary/20 group-hover:bg-transparent transition-colors z-10"></div>
                                <img src="{{ Str::startsWith($port->image_url, 'http') ? $port->image_url : Storage::url($port->image_url) }}" alt="{{ $port->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                                <span class="absolute top-4 right-4 z-20 bg-cta text-primary-dark text-xs font-bold px-3 py-1 rounded-full">{{ $port->category }}</span>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">{{ $port->client }}</h4>
                                <h3 class="text-xl font-bold text-[#141414] group-hover:text-primary transition-colors">{{ $port->title }}</h3>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </section>
    </div> <!-- End x-data filter -->

    <!-- 5. TRANSFORMATION CASE STUDIES (THE BIG WINS) -->
    <section class="py-20 lg:py-28 bg-primary text-primary-dark">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-[44px] font-bold leading-[1.2] max-w-2xl mx-auto mb-4">
                    Transformation Case Studies
                </h2>
                <p class="text-primary-dark/70 max-w-2xl mx-auto">Kami tidak menjanjikan sekadar perubahan, tapi kepastian dampak numerik (*Return on Investment*).</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Case 1 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full" data-aos="fade-up" data-aos-delay="0">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Healthcare Transformation</span>
                    <h3 class="text-2xl font-black mb-8 text-primary-dark">Medical Centre</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-primary-dark/90 text-sm">Persaingan tinggi dan proses layanan lambat yang merugikan pasien.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-primary-dark/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-primary-dark/90 text-sm">Redesain proses bisnis (BPI) secara masif dan digitalisasi layanan.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-primary-dark/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Revenue naik <span class="text-primary-dark font-black">+1000%</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Top 5 Nasional</li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> 10.000 pasien/bulan</li>
                        </ul>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Agriculture & Supply Chain</span>
                    <h3 class="text-2xl font-black mb-8 text-primary-dark">Agribusiness</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-primary-dark/90 text-sm">Pembengkakan anggaran SDM tanpa korelasi langsung pada output panen.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-primary-dark/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-primary-dark/90 text-sm">Optimalisasi produktivitas dan restrukturisasi kompetensi tenaga kerja inti.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-primary-dark/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> HR Cost Efficiency masif</li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> HR Cost turun dari <span class="text-primary-dark font-black text-red-400">12 M</span> → <span class="text-primary-dark font-black text-green-400">5 M</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-10 relative flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-cta font-bold uppercase tracking-widest text-xs mb-3">Logistics</span>
                    <h3 class="text-2xl font-black mb-8 text-primary-dark">Warehouse Opt.</h3>
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Challenge</h4>
                            <p class="text-primary-dark/90 text-sm">Kebocoran finansial di gudang serta ketidakakuratan pergerakan barang.</p>
                        </div>
                        <div class="flex justify-center"><x-icon name="lucide-arrow-down" class="w-4 h-4 text-primary-dark/30" /></div>
                        <div>
                            <h4 class="text-xs font-bold text-primary-dark/50 uppercase tracking-widest mb-2">Solution</h4>
                            <p class="text-primary-dark/90 text-sm">Implementasi standar *Agile operations* dan audit kapabilitas tim logistik.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h4 class="text-sm font-bold text-cta uppercase tracking-widest mb-3">Result</h4>
                        <ul class="font-medium space-y-2 text-sm text-primary-dark/90">
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Stock accuracy <span class="text-primary-dark font-black">98%</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Revenue tambahan <span class="text-primary-dark font-black">+800 M</span></li>
                            <li class="flex items-center gap-2"><x-icon name="lucide-check" class="w-4 h-4 text-cta" /> Fraud/kebocoran ditemukan dan distop</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. CLIENTS & PARTNERS -->
    <section class="py-24 bg-white relative z-20 border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px] text-center" data-aos="fade-up">
            
            <div class="flex items-center justify-center gap-6 mb-16">
                <div class="w-12 h-[1px] bg-primary/30"></div>
                <h4 class="text-[14px] font-black text-primary uppercase tracking-[0.2em]">{{ __('Clients & Partners') }}</h4>
                <div class="w-12 h-[1px] bg-primary/30"></div>
            </div>
            
            <style>
                .hide-scroll::-webkit-scrollbar {
                    display: none;
                }
                .hide-scroll {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            </style>
            
            <div class="relative w-full">
                <!-- Fade Gradients -->
                <div class="absolute inset-y-0 left-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
                <div class="absolute inset-y-0 right-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
                
                <!-- Scrollable Container -->
                <div id="clients-scroll" class="flex items-center gap-12 md:gap-24 overflow-x-auto hide-scroll snap-x snap-mandatory pb-4 px-8" style="cursor: grab;" onmousedown="this.style.cursor='grabbing'" onmouseup="this.style.cursor='grab'" onmouseleave="this.style.cursor='grab'">
                    @php
                        $organizations = [
                            ['name' => 'BNI Tbk', 'logo' => 'BNI Tbk.webp'], 
                            ['name' => 'Otoritas Jasa Keuangan (OJK) Indonesia', 'logo' => 'Otoritas Jasa Keuangan.webp'],
                            ['name' => 'Kemenkes', 'logo' => 'Kemenkes.webp'],
                            ['name' => 'Pelindo Solusi Logistik', 'logo' => 'PT PELINDO SOLUSI LOGISTIK.webp'], 
                            ['name' => 'Indosat Ooredoo Hutchinson', 'logo' => 'Indosat Ooredoo.webp'], 
                            ['name' => 'LKPP', 'logo' => 'LKPP.webp'], 
                            ['name' => 'ITB', 'logo' => 'ITB.webp'], 
                            ['name' => 'UNPAD', 'logo' => 'UNPAD.webp'], 
                            ['name' => 'Heartspeaks Indonesia', 'logo' => 'Heartspeaks Indonesia.webp'], 
                            ['name' => 'PDMA-Indonesia', 'logo' => 'PDMA-Indonesia.webp'], 
                            ['name' => 'AIESEC', 'logo' => 'AIESEC-Logo.webp'], 
                            ['name' => 'Solopos Media Group', 'logo' => 'Solopos Media Group.webp'],
                            ['name' => 'Adicipta Inovasi Teknologi', 'logo' => 'Adicipta Inovasi Teknologi.webp'], 
                            ['name' => 'Biro Klasifikasi Indonesia', 'logo' => 'Biro Klasifikasi Indonesia.webp'], 
                            ['name' => 'Pos Indonesia', 'logo' => 'Pos Indonesia.webp'], 
                            ['name' => 'Asuransi Tugu Pratama Ind Tbk', 'logo' => 'Asuransi Tugu Pratama.webp'],
                            ['name' => 'Widodo Makmur Perkasa Tbk', 'logo' => 'Widodo Makmur Perkasa.webp'], 
                            ['name' => 'Widodo Makmur Unggas Tbk', 'logo' => 'Widodo Makmur Unggas.webp'],
                            ['name' => 'Prisma Surya Gemilang', 'logo' => 'Prisma Surya Gemilang.webp'], 
                            ['name' => 'Universitas Muhammadiyah Cirebon', 'logo' => 'Universitas Muhammadiya Cirebon.webp'],
                            ['name' => 'PPM Manajemen', 'logo' => 'PPM Manajemen.webp'], 
                            ['name' => 'FTUI', 'logo' => 'FTUI.webp'], 
                            ['name' => 'IKIGAI Consulting', 'logo' => 'IKIGAI Consulting.webp'],
                            ['name' => 'BDO Indonesia', 'logo' => 'BDO Indonesia.webp'], 
                            ['name' => 'Al Aaren Food Bahrain', 'logo' => 'Al Aaren Food Bahrain.webp'], 
                            ['name' => 'DataHen Canada', 'logo' => 'DataHen Canada.webp']
                        ];
                    @endphp
                    
                    <!-- Space placeholder at start for scrolling padding -->
                    <div class="shrink-0 w-4 md:w-16 snap-start"></div>
                    
                    @foreach($organizations as $org)
                        <div class="shrink-0 flex items-center justify-center snap-center hover:scale-110 transition-transform duration-300 py-4">
                            @if($org['logo'] && file_exists(public_path('images/clients/' . $org['logo'])))
                                <img src="{{ asset('images/clients/' . $org['logo']) }}" alt="{{ $org['name'] }}" class="h-10 md:h-14 lg:h-16 w-auto object-contain transition-all duration-300" title="{{ $org['name'] }}" loading="lazy">
                            @else
                                <h3 class="text-xl md:text-2xl font-black text-[#141414] whitespace-nowrap" title="{{ $org['name'] }}">{{ $org['name'] }}</h3>
                            @endif
                        </div>
                    @endforeach
                    
                    <!-- Space placeholder at end -->
                    <div class="shrink-0 w-4 md:w-16 snap-end"></div>
                </div>
            </div>
            
            <!-- Pagination Dots Decoration -->
            <div id="clients-dots" class="flex items-center justify-center gap-2 mt-12">
                <!-- Dots injected by JS -->
            </div>

            <script>
                (function() {
                    const initDots = () => {
                        const scrollContainer = document.getElementById('clients-scroll');
                        const dotsContainer = document.getElementById('clients-dots');
                        if (!scrollContainer || !dotsContainer) return;

                        const dotCount = 6; // Matching the design
                        
                        // Create dots
                        dotsContainer.innerHTML = '';
                        for (let i = 0; i < dotCount; i++) {
                            const dot = document.createElement('div');
                            dot.className = `w-2.5 h-2.5 rounded-full transition-colors duration-300 cursor-pointer ${i === 0 ? 'bg-primary' : 'bg-gray-200'}`;
                            
                            // Click dot to scroll to position
                            dot.addEventListener('click', () => {
                                const maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                                scrollContainer.scrollTo({
                                    left: (maxScroll / (dotCount - 1)) * i,
                                    behavior: 'smooth'
                                });
                            });
                            
                            dotsContainer.appendChild(dot);
                        }

                        // Update active dot on scroll
                        scrollContainer.addEventListener('scroll', () => {
                            const maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                            if (maxScroll <= 0) return;
                            
                            const scrollPercentage = scrollContainer.scrollLeft / maxScroll;
                            const activeIndex = Math.min(dotCount - 1, Math.max(0, Math.round(scrollPercentage * (dotCount - 1))));
                            
                            Array.from(dotsContainer.children).forEach((dot, index) => {
                                if (index === activeIndex) {
                                    dot.className = 'w-2.5 h-2.5 rounded-full transition-colors duration-300 cursor-pointer bg-primary';
                                } else {
                                    dot.className = 'w-2.5 h-2.5 rounded-full transition-colors duration-300 cursor-pointer bg-gray-200';
                                }
                            });
                        });
                    };
                    
                    if (document.readyState === 'loading') {
                        document.addEventListener('DOMContentLoaded', initDots);
                    } else {
                        initDots();
                    }
                })();
            </script>
        </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section class="py-16 bg-primary text-primary-dark">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-12" data-aos="fade-up">
                <x-icon name="lucide-quote" class="w-8 h-8 text-primary-dark/20 mx-auto mb-3" stroke-width="1.5" />
                <h2 class="text-2xl lg:text-3xl font-bold leading-[1.2]">
                    What Our Clients Say
                </h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 items-start">
                
                <!-- Column 1 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6" data-aos="fade-up" data-aos-delay="0">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Manager Retail Chain (Indonesia)</span>
                        <p class="text-primary-dark text-base font-medium leading-relaxed italic">
                            "Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Food Processing Manufacturer (Bahrain)</span>
                        <p class="text-primary-dark text-base font-medium leading-relaxed italic">
                            "Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada pengembangan bisnis kami."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-primary-dark font-bold">"92% Accuracy Achieved"</p>
                            <p class="text-primary-dark/80 text-xs">Retail Company</p>
                        </div>
                        <div>
                            <p class="text-primary-dark font-bold">"Waktu stock opname turun 50%"</p>
                            <p class="text-primary-dark/80 text-xs">Retail Company</p>
                        </div>
                        <div>
                            <p class="text-primary-dark font-bold">"Implementasi 5S mengungkap fraud selama 6 tahun"</p>
                            <p class="text-primary-dark/80 text-xs">Perusahaan Manufaktur</p>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Beauty Clinic (Indonesia)</span>
                        <p class="text-primary-dark text-base font-medium leading-relaxed italic">
                            "PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-primary-dark font-bold">"From Fragmented Teams to Unified Agility"</p>
                            <p class="text-primary-dark/80 text-xs">Perusahaan Telekomunikasi</p>
                        </div>
                        <div>
                            <p class="text-primary-dark font-bold">Transformasi operasional meningkatkan kinerja 1000%</p>
                            <p class="text-primary-dark/80 text-xs">Laboratorium Klinik</p>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="bg-[#0B9B9A] p-8 rounded-3xl shadow-sm text-center flex flex-col gap-6" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Founder Integrated Farm (Indonesia)</span>
                        <p class="text-primary-dark text-base font-medium leading-relaxed italic">
                            "PASSolving membantu membangun visi kuat dan peta jalannya."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div>
                        <span class="inline-block bg-[#141414]/30 text-primary-dark text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">COO Agroindustry (Indonesia)</span>
                        <p class="text-primary-dark text-base font-medium leading-relaxed italic">
                            "Kami berhasil menghemat biaya tanpa mengorbankan kualitas."
                        </p>
                    </div>
                    <hr class="border-white/20">
                    <div class="text-left space-y-4">
                        <div>
                            <p class="text-primary-dark font-bold">"Revenue trajectory in 6 Months, 800 billions"</p>
                            <p class="text-primary-dark/80 text-xs">Agro Industry</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="mt-12 text-center flex flex-col md:flex-row items-center justify-center gap-6" data-aos="fade-up" data-aos-delay="300">
                <p class="text-xl font-bold text-primary-dark">What leaders consistently experience</p>
                <div class="w-12 h-12 bg-white text-primary-dark rounded-full flex items-center justify-center">
                    <x-icon name="lucide-arrow-right" class="w-6 h-6" />
                </div>
                <p class="text-xl font-black text-cta tracking-widest uppercase">Adaptasi, Kolaborasi, Optimalisasi, Inovasi, Pertumbuhan</p>
            </div>
        </div>
    </section>


</x-layouts.app>
