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
                {{ __('Discover how PASS has helped organizations achieve measurable transformation across industries.') }}
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
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">{{ __('Projects') }}</span>
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
                        <span class="text-xs font-bold text-[#585857] uppercase tracking-widest">{{ __('Organizations') }}</span>
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
                        <span class="text-sm font-bold text-[#585857]">{{ __('Government') }}</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>
                    
                    <!-- Private -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-graduation-cap" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">{{ __('Private') }}</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>

                    <!-- Education -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-book-open" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">{{ __('Education') }}</span>
                    </div>
                    
                    <div class="w-1.5 h-1.5 rounded-full bg-primary/40 hidden md:block"></div>

                    <!-- Healthcare -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-[#E5F5F5] flex items-center justify-center text-primary border border-primary/20">
                            <x-icon name="lucide-plus-circle" class="w-5 h-5 lg:w-6 lg:h-6" />
                        </div>
                        <span class="text-sm font-bold text-[#585857]">{{ __('Healthcare') }}</span>
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
                <div x-data="{ categories: { 'All': '{{ __('All') }}', 'Training': '{{ __('Training') }}', 'Consulting': '{{ __('Consulting') }}', 'Transformation': '{{ __('Transformation') }}', 'Research': '{{ __('Research') }}' } }" class="flex flex-wrap items-center justify-center gap-3" data-aos="fade-in">
                    <template x-for="cat in Object.keys(categories)" :key="cat">
                        <button @click="filter = cat"
                                :class="filter === cat ? 'bg-primary text-primary-dark shadow-md' : 'bg-white text-[#585857] hover:bg-gray-50 border border-gray-200'"
                                class="px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300">
                            <span x-text="categories[cat]"></span>
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
    <section class="py-24 bg-[#FAFAFA] relative overflow-hidden">
        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block text-primary text-xs font-bold uppercase tracking-[0.2em] mb-4">{{ __('Our Impact') }}</span>
                <h2 class="text-3xl lg:text-[44px] font-bold leading-[1.2] mb-4 text-[#141414]">
                    {!! __('Transformation <span class="text-primary">Case Studies</span>') !!}
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">{!! __('Kami tidak menjanjikan sekadar perubahan,<br class="hidden md:block">tapi kepastian dampak numerik (<span class="italic">Return on Investment</span>).') !!}</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 lg:gap-8 mb-10">
                <!-- Case 1 -->
                <div class="bg-white rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.05)] p-8 lg:p-10 flex flex-col h-full border border-gray-100" data-aos="fade-up" data-aos-delay="0">
                    <span class="text-primary font-bold uppercase tracking-widest text-[10px] mb-2">{{ __('Healthcare Transformation') }}</span>
                    <h3 class="text-xl lg:text-2xl font-black mb-6 text-[#141414]">{{ __('Medical Centre') }}</h3>
                    
                    <hr class="border-gray-100 mb-6">
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Challenge') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Persaingan tinggi dan proses layanan lambat yang merugikan pasien.') }}</p>
                        </div>
                        
                        <hr class="border-gray-100">
                        
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Solution') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Redesain proses bisnis (BPI) secara masif dan digitalisasi layanan.') }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-[#F6FAFA] rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-4">{{ __('Result') }}</h4>
                        <ul class="list-disc list-outside pl-4 space-y-2 text-sm text-gray-700 font-medium marker:text-primary">
                            <li>{!! __('Revenue naik <span class="text-primary font-black\">+1000%</span>') !!}</li>
                            <li>{{ __('Top 5 Nasional') }}</li>
                            <li>{{ __('10.000 pasien/bulan') }}</li>
                        </ul>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="bg-white rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.05)] p-8 lg:p-10 flex flex-col h-full border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-primary font-bold uppercase tracking-widest text-[10px] mb-2">{{ __('Agriculture & Supply Chain') }}</span>
                    <h3 class="text-xl lg:text-2xl font-black mb-6 text-[#141414]">{{ __('Agribusiness') }}</h3>
                    
                    <hr class="border-gray-100 mb-6">
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Challenge') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Pembengkakan anggaran SDM tanpa korelasi langsung pada output panen.') }}</p>
                        </div>
                        
                        <hr class="border-gray-100">
                        
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Solution') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Optimalisasi produktivitas dan restrukturisasi kompetensi tenaga kerja inti.') }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-[#F6FAFA] rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-4">{{ __('Result') }}</h4>
                        <ul class="list-disc list-outside pl-4 space-y-2 text-sm text-gray-700 font-medium marker:text-primary">
                            <li>{{ __('HR Cost Efficiency masif') }}</li>
                            <li>{!! __('HR Cost turun dari <span class="text-primary font-black\">12 M <span class="mx-1 font-normal\">&rarr;</span> 5 M</span>') !!}</li>
                        </ul>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="bg-white rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.05)] p-8 lg:p-10 flex flex-col h-full border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-primary font-bold uppercase tracking-widest text-[10px] mb-2">{{ __('Logistics') }}</span>
                    <h3 class="text-xl lg:text-2xl font-black mb-6 text-[#141414]">{{ __('Warehouse Opt.') }}</h3>
                    
                    <hr class="border-gray-100 mb-6">
                    
                    <div class="space-y-6 flex-grow">
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Challenge') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Kebocoran finansial di gudang serta ketidakakuratan pergerakan barang.') }}</p>
                        </div>
                        
                        <hr class="border-gray-100">
                        
                        <div>
                            <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-2">{{ __('Solution') }}</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ __('Implementasi standar "Agile operations" dan audit kapabilitas tim logistik.') }}</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-[#F6FAFA] rounded-2xl p-6 border border-primary/5">
                        <h4 class="text-[10px] font-bold text-primary uppercase tracking-widest mb-4">{{ __('Result') }}</h4>
                        <ul class="list-disc list-outside pl-4 space-y-2 text-sm text-gray-700 font-medium marker:text-primary">
                            <li>{!! __('Stock accuracy <span class="text-primary font-black\">98%</span>') !!}</li>
                            <li>{!! __('Revenue tambahan <span class="text-primary font-black\">+800 M</span>') !!}</li>
                            <li>{{ __('Fraud/kebocoran ditemukan dan distop') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Values Bar -->
            <div class="bg-white rounded-2xl shadow-[0_5px_30px_rgba(0,0,0,0.04)] py-6 px-8 lg:px-12 border border-gray-100 flex flex-col md:flex-row items-center justify-between gap-6 lg:gap-10" data-aos="fade-up" data-aos-delay="300">
                <p class="text-lg md:text-xl font-bold text-[#141414] leading-tight md:max-w-[200px] text-center md:text-left">
                    What leaders consistently experience
                </p>
                
                <div class="w-full md:w-px h-[1px] md:h-12 bg-gray-200"></div>
                
                <div class="flex flex-wrap items-center justify-center md:justify-end gap-6 lg:gap-10 flex-grow">
                    <span class="text-xs font-black text-primary uppercase tracking-widest">{{ __('Adaptasi') }}</span>
                    <span class="text-xs font-black text-primary uppercase tracking-widest">{{ __('Kolaborasi') }}</span>
                    <span class="text-xs font-black text-primary uppercase tracking-widest">{{ __('Optimalisasi') }}</span>
                    <span class="text-xs font-black text-primary uppercase tracking-widest">{{ __('Inovasi') }}</span>
                    <span class="text-xs font-black text-primary uppercase tracking-widest">{{ __('Pertumbuhan') }}</span>
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
                        $organizations = \App\Models\ClientLogo::where('is_active', true)->orderBy('sort_order', 'asc')->get();
                    @endphp
                    
                    <!-- Space placeholder at start for scrolling padding -->
                    <div class="shrink-0 w-4 md:w-16 snap-start"></div>
                    
                    @foreach($organizations as $org)
                        <div class="shrink-0 flex items-center justify-center snap-center hover:scale-110 transition-transform duration-300 py-4">
                            @if($org->logo_path)
                                <img src="{{ Storage::url($org->logo_path) }}" alt="{{ $org->name }}" class="h-10 md:h-14 lg:h-16 w-auto object-contain transition-all duration-300" title="{{ $org->name }}" loading="lazy">
                            @else
                                <h3 class="text-xl md:text-2xl font-black text-[#141414] whitespace-nowrap" title="{{ $org->name }}">{{ $org->name }}</h3>
                            @endif
                        </div>
                    @endforeach
                    
                    <!-- Space placeholder at end -->
                    <div class="shrink-0 w-4 md:w-16 snap-end"></div>
                </div>
            </div>
            
            <!-- Pagination Dots Decoration -->
            <div x-data="{
                activeIndex: 0,
                dotCount: 6,
                scrollTo(i) {
                    const sc = document.getElementById('clients-scroll');
                    if (!sc) return;
                    const maxScroll = sc.scrollWidth - sc.clientWidth;
                    sc.scrollTo({ left: (maxScroll / (this.dotCount - 1)) * i, behavior: 'smooth' });
                },
                init() {
                    const sc = document.getElementById('clients-scroll');
                    if (!sc) return;
                    sc.addEventListener('scroll', () => {
                        const maxScroll = sc.scrollWidth - sc.clientWidth;
                        if (maxScroll <= 0) return;
                        const pct = sc.scrollLeft / maxScroll;
                        this.activeIndex = Math.min(this.dotCount - 1, Math.max(0, Math.round(pct * (this.dotCount - 1))));
                    });
                }
            }" class="flex items-center justify-center gap-2 mt-12">
                <template x-for="i in dotCount" :key="i">
                    <div @click="scrollTo(i - 1)"
                         :class="activeIndex === (i - 1) ? 'bg-primary' : 'bg-gray-200'"
                         class="w-2.5 h-2.5 rounded-full transition-colors duration-300 cursor-pointer">
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- 7. TESTIMONIALS -->
    <section class="py-24 bg-white relative overflow-hidden z-0">
        
        <!-- DECORATIONS -->
        <!-- Left Dots -->
        <div class="absolute top-[10%] -left-10 z-0 opacity-20 pointer-events-none hidden lg:block">
            <svg width="150" height="300" fill="none" viewBox="0 0 100 200">
                <pattern id="dots-left" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#00a6a6" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="200" fill="url(#dots-left)"></rect>
            </svg>
        </div>
        
        <!-- Right Dots -->
        <div class="absolute top-[30%] -right-10 z-0 opacity-20 pointer-events-none hidden lg:block">
            <svg width="150" height="300" fill="none" viewBox="0 0 100 200">
                <pattern id="dots-right-t" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#00a6a6" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="200" fill="url(#dots-right-t)"></rect>
            </svg>
        </div>

        <!-- Faded swoosh background -->
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] border border-primary/10 rounded-full scale-150 translate-x-[20%] translate-y-[40%] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] border border-primary/5 rounded-full scale-150 translate-x-[20%] translate-y-[40%] pointer-events-none z-0"></div>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <x-icon name="lucide-quote" class="w-12 h-12 text-primary mx-auto mb-4" stroke-width="2.5" />
                <h2 class="text-3xl lg:text-[44px] font-bold leading-[1.2] text-[#141414]">
                    {!! __('What Our <span class="text-primary\">Clients Say</span>') !!}
                </h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 lg:gap-8 items-start mb-10">
                
                <!-- Column 1 -->
                <div class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.06)] flex flex-col gap-8 h-full" data-aos="fade-up" data-aos-delay="0">
                    <!-- Testimonial 1 -->
                    <div class="text-center">
                        <span class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">{{ __('Manager Retail Chain (Indonesia)') }}</span>
                        <p class="text-gray-700 text-sm md:text-base font-medium leading-relaxed italic">
                            "Apa yang harus dilakukan, langsung dipraktikkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."
                        </p>
                    </div>
                    
                    <hr class="border-gray-100">
                    
                    <!-- Testimonial 2 -->
                    <div class="text-center">
                        <span class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">{{ __('Founder Food Processing Manufacturer (Emirah)') }}</span>
                        <p class="text-gray-700 text-sm md:text-base font-medium leading-relaxed italic">
                            "Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada pengembangan bisnis kami."
                        </p>
                    </div>
                    
                    <hr class="border-gray-100">
                    
                    <!-- Highlights -->
                    <div class="space-y-4 pt-2">
                        <!-- Highlight 1 -->
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 w-10 h-10 rounded-full border border-primary flex items-center justify-center text-primary bg-[#F0F9F9]">
                                <x-icon name="lucide-target" class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="text-primary font-bold text-sm">{{ __('92% Accuracy Achieved') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-0.5">{{ __('Retail Company') }}</p>
                            </div>
                        </div>
                        
                        <!-- Highlight 2 -->
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 w-10 h-10 rounded-full border border-primary flex items-center justify-center text-primary bg-[#F0F9F9]">
                                <x-icon name="lucide-bar-chart-2" class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="text-primary font-bold text-sm">{{ __('"Waktu stock opname turun 50%"') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-0.5">{{ __('Retail Company') }}</p>
                            </div>
                        </div>

                        <!-- Highlight 3 -->
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 w-10 h-10 rounded-full border border-primary flex items-center justify-center text-primary bg-[#F0F9F9]">
                                <x-icon name="lucide-shield-check" class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="text-primary font-bold text-sm">{{ __('"Implementasi 5S mengungkap fraud selama 6 tahun"') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-0.5">{{ __('Perusahaan Manufaktur') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.06)] flex flex-col gap-8 h-full" data-aos="fade-up" data-aos-delay="100">
                    <!-- Testimonial 1 -->
                    <div class="text-center">
                        <span class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">{{ __('Founder Beauty Clinic (Indonesia)') }}</span>
                        <p class="text-gray-700 text-sm md:text-base font-medium leading-relaxed italic">
                            "PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."
                        </p>
                    </div>
                    
                    <!-- Highlights Block 1 -->
                    <div class="bg-[#F6FAFA] rounded-2xl p-6 flex flex-col gap-6 border border-primary/5">
                        <div class="flex items-start gap-5">
                            <div class="shrink-0 w-12 h-12 rounded-full border border-primary flex items-center justify-center text-primary bg-white shadow-sm">
                                <x-icon name="lucide-users" class="w-6 h-6" stroke-width="1.5" />
                            </div>
                            <div>
                                <h4 class="text-[#141414] font-bold text-base leading-tight">{{ __('From Fragmented Teams to Unified Agility') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-2">{{ __('Perusahaan Telekomunikasi') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Highlights Block 2 -->
                    <div class="bg-[#F6FAFA] rounded-2xl p-6 flex flex-col gap-6 border border-primary/5">
                        <div class="flex items-start gap-5">
                            <div class="shrink-0 w-12 h-12 rounded-full border border-primary flex items-center justify-center text-primary bg-white shadow-sm">
                                <x-icon name="lucide-settings" class="w-6 h-6" stroke-width="1.5" />
                            </div>
                            <div>
                                <h4 class="text-[#141414] font-bold text-base leading-tight">{{ __('Transformasi operasional meningkatkan kinerja 1000%') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-2">{{ __('Laboratorium Klinik') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="bg-white p-8 lg:p-10 rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.06)] flex flex-col gap-8 h-full" data-aos="fade-up" data-aos-delay="200">
                    <!-- Testimonial 1 -->
                    <div class="text-center">
                        <span class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">{{ __('Founder Integrated Farm (Indonesia)') }}</span>
                        <p class="text-gray-700 text-sm md:text-base font-medium leading-relaxed italic">
                            "PASSolving membantu membangun visi kuat dan peta jalannya."
                        </p>
                    </div>
                    
                    <hr class="border-gray-100">
                    
                    <!-- Testimonial 2 -->
                    <div class="text-center">
                        <span class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-5">{{ __('COO Agroindustry (Indonesia)') }}</span>
                        <p class="text-gray-700 text-sm md:text-base font-medium leading-relaxed italic">
                            "Kami berhasil menghemat biaya tanpa mengorbankan kualitas."
                        </p>
                    </div>
                    
                    <hr class="border-gray-100">
                    
                    <!-- Highlights Block -->
                    <div class="bg-[#F6FAFA] rounded-2xl p-6 flex flex-col gap-6 border border-primary/5 mt-auto">
                        <div class="flex items-start gap-5">
                            <div class="shrink-0 w-12 h-12 rounded-full border border-primary flex items-center justify-center text-primary bg-white shadow-sm">
                                <x-icon name="lucide-trending-up" class="w-6 h-6" stroke-width="1.5" />
                            </div>
                            <div>
                                <h4 class="text-[#141414] font-bold text-base leading-tight">{{ __('Revenue trajectory in 6 Months, 800 billions') }}</h4>
                                <p class="text-gray-500 text-[11px] mt-2">{{ __('Agro Industry') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Bottom Icon Bar -->
            <div class="bg-white rounded-2xl shadow-[0_5px_30px_rgba(0,0,0,0.04)] py-6 px-4 md:px-10 border border-gray-100 flex flex-wrap items-center justify-center gap-6 lg:gap-12" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-3">
                    <x-icon name="lucide-users" class="w-6 h-6 text-primary" stroke-width="1.5" />
                    <span class="text-xs font-black text-[#141414] uppercase tracking-widest">{{ __('Adaptasi') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <x-icon name="lucide-handshake" class="w-6 h-6 text-primary" stroke-width="1.5" />
                    <span class="text-xs font-black text-[#141414] uppercase tracking-widest">{{ __('Kolaborasi') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <x-icon name="lucide-target" class="w-6 h-6 text-primary" stroke-width="1.5" />
                    <span class="text-xs font-black text-[#141414] uppercase tracking-widest">{{ __('Optimalisasi') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <x-icon name="lucide-lightbulb" class="w-6 h-6 text-primary" stroke-width="1.5" />
                    <span class="text-xs font-black text-[#141414] uppercase tracking-widest">{{ __('Inovasi') }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <x-icon name="lucide-bar-chart-3" class="w-6 h-6 text-primary" stroke-width="1.5" />
                    <span class="text-xs font-black text-[#141414] uppercase tracking-widest">{{ __('Pertumbuhan') }}</span>
                </div>
            </div>
        </div>
    </section>


</x-layouts.app>
