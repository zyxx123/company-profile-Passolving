<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <!-- Full screen (100vh) adjustment: using min-h-[calc(100vh-88px)] assuming header is 88px, or just min-h-screen with flex -->
    <section class="relative min-h-[calc(100vh-88px)] flex items-center overflow-hidden bg-primary py-12 lg:py-16 xl:py-20">
        <!-- 1. Background Grid -->
        <div class="absolute inset-0 z-0 opacity-[0.07]" style="background-image: linear-gradient(rgba(255,255,255,.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.3) 1px, transparent 1px); background-size: 80px 80px; background-position: center center;"></div>
        
        <!-- 2. Yellow Glow Behind Image -->
        <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[800px] h-[800px] bg-cta rounded-full blur-[120px] opacity-30 z-0 pointer-events-none translate-x-1/4"></div>

        <!-- 3. Top Left Dots -->
        <div class="absolute top-10 left-10 z-0 opacity-40">
            <svg width="120" height="120" fill="none" viewBox="0 0 120 120">
                <pattern id="dots" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="2" fill="#fff"/>
                </pattern>
                <rect width="120" height="120" fill="url(#dots)"/>
            </svg>
        </div>

        <!-- 4. Bottom Right Dots -->
        <div class="absolute bottom-10 right-10 z-0 opacity-40">
            <svg width="160" height="120" fill="none" viewBox="0 0 160 120">
                <pattern id="dots-bottom" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="2" fill="#fff"/>
                </pattern>
                <rect width="160" height="120" fill="url(#dots-bottom)"/>
            </svg>
        </div>

        <!-- 5. Curved Lines (Arcs) -->
        <!-- Top subtle circle -->
        <svg class="absolute -top-40 left-1/3 z-0 opacity-10 pointer-events-none" width="600" height="600" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="300" cy="300" r="299" stroke="white" stroke-width="1"/>
        </svg>
        
        <!-- Right side yellow arc -->
        <svg class="absolute -top-20 -right-20 z-0 opacity-60 pointer-events-none" width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="200" cy="200" r="199" stroke="#f5c242" stroke-width="1.5"/>
        </svg>
        
        <!-- Dotted curve line with arrow -->
        <svg class="absolute top-[10%] left-[45%] z-0 opacity-60 w-[250px] pointer-events-none" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 200 Q 150 0 300 50" stroke="white" stroke-width="1.5" stroke-dasharray="6 6" fill="none"/>
            <path d="M 290 40 L 300 50 L 285 55" stroke="white" stroke-width="1.5" fill="none" stroke-linejoin="round"/>
        </svg>
        
        <!-- Bottom curve line -->
        <svg class="absolute -bottom-20 left-0 z-0 opacity-30 w-[600px] pointer-events-none" viewBox="0 0 600 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 100 Q 300 200 600 50" stroke="white" stroke-width="1" stroke-dasharray="4 4" fill="none"/>
            <circle cx="250" cy="175" r="4" fill="#f5c242" />
        </svg>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Text Content -->
                <div class="w-full lg:w-[55%]" data-aos="fade-right">
                    <p class="text-cta font-bold tracking-widest uppercase text-[clamp(0.75rem,2vw,0.875rem)] mb-4 lg:mb-6">{!! __('Pioneer in Agility Assesment & National Soft Skill Certification') !!}</p>
                    <h1 class="text-[clamp(2.5rem,6vw,3.75rem)] font-black leading-[1.1] text-white mb-4 lg:mb-6 uppercase">
                        {!! __('AGILITY &<br/>TRANSFORMATION') !!}
                    </h1>
                    <p class="text-[clamp(1rem,3vw,1.125rem)] text-white/90 mb-6 lg:mb-8 xl:mb-10 leading-relaxed max-w-lg">
                        {{ __('Determine for Execution Deliveries. Kami hadir untuk membantu organisasi Anda menghadapi realitas yang menantang dengan solusi berbasis data dan sistem yang adaptif.') }}
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <x-ui.button href="/services" variant="primary">
                            {{ __('Explore Services') }}
                        </x-ui.button>
                        <!-- Ensure outline button looks good on dark bg -->
                        <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 lg:px-8 lg:py-4 border-2 border-white text-white font-bold transition-all duration-300 hover:bg-white hover:text-primary-dark hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-white/50 text-sm lg:text-[16px] rounded-[14px]">
                            {{ __('Contact Us') }}
                        </a>
                    </div>

                    <!-- Stats / Achievements -->
                    <div class="mt-8 lg:mt-10 xl:mt-16 flex flex-wrap items-center gap-6 lg:gap-10 text-white">
                        <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center bg-white/5">
                                <x-icon name="lucide-users" class="w-6 h-6 text-cta" />
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold leading-none mb-1">500+</h4>
                                <p class="text-xs text-white/70 leading-tight">{!! __('Organizations<br/>Empowered') !!}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center bg-white/5">
                                <x-icon name="lucide-bar-chart-2" class="w-6 h-6 text-cta" />
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold leading-none mb-1">20+</h4>
                                <p class="text-xs text-white/70 leading-tight">{!! __('Years of<br/>Experience') !!}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center bg-white/5">
                                <x-icon name="lucide-star" class="w-6 h-6 text-cta" />
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold leading-none mb-1">98%</h4>
                                <p class="text-xs text-white/70 leading-tight">{!! __('Client<br/>Satisfaction') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-[45%]" data-aos="fade-left" data-aos-delay="200">
                    <div class="relative w-full aspect-[4/3] rounded-[48px] rounded-tl-none overflow-hidden shadow-2xl border-[4px] border-white/10">
                        <img src="{{ asset('images/foto_utama/halaman_awal.webp') }}" alt="Tim Profesional" class="w-full h-full object-cover" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. TRUSTED BY -->
    <section class="py-12 bg-white border-b border-gray-100 overflow-hidden" x-data="dragScroll()" x-init="initMarquee()">
        <style>
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .no-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        </style>
        
        <script>
            function dragScroll() {
                return {
                    isDown: false,
                    startX: 0,
                    scrollLeft: 0,
                    speed: 1,
                    velocity: 0,
                    lastX: 0,
                    isHovered: false,
                    rafId: null,
                    
                    initMarquee() {
                        this.rafId = requestAnimationFrame(() => this.animate());
                    },
                    animate() {
                        let slider = this.$refs.slider;
                        if (slider && !this.isDown) {
                            // Apply inertia (momentum)
                            if (Math.abs(this.velocity) > 0.1) {
                                slider.scrollLeft -= this.velocity;
                                this.velocity *= 0.95; // Friction multiplier
                            } else {
                                this.velocity = 0;
                                // Auto scroll when not hovered
                                if (!this.isHovered) {
                                    slider.scrollLeft += this.speed;
                                }
                            }
                            
                            // Infinite loop handling
                            if (slider.scrollLeft <= 0) {
                                slider.scrollLeft += slider.scrollWidth / 2;
                            } else if (slider.scrollLeft >= slider.scrollWidth / 2) {
                                slider.scrollLeft -= slider.scrollWidth / 2;
                            }
                        }
                        this.rafId = requestAnimationFrame(() => this.animate());
                    },
                    mouseenter() {
                        this.isHovered = true;
                    },
                    mouseleave() {
                        this.isHovered = false;
                        this.isDown = false;
                    },
                    mousedown(e) {
                        this.isDown = true;
                        const pageX = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
                        this.startX = pageX - this.$refs.slider.offsetLeft;
                        this.scrollLeft = this.$refs.slider.scrollLeft;
                        this.lastX = pageX;
                        this.velocity = 0;
                    },
                    mouseup() {
                        this.isDown = false;
                    },
                    mousemove(e) {
                        if (!this.isDown) return;
                        
                        const pageX = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
                        
                        // Calculate velocity for momentum
                        this.velocity = pageX - this.lastX;
                        this.lastX = pageX;
                        
                        const x = pageX - this.$refs.slider.offsetLeft;
                        const walk = (x - this.startX);
                        let slider = this.$refs.slider;
                        slider.scrollLeft = this.scrollLeft - walk;
                        
                        // Handle infinite loop during drag
                        if (slider.scrollLeft <= 0) {
                            slider.scrollLeft += slider.scrollWidth / 2;
                            this.scrollLeft = slider.scrollLeft;
                            this.startX = x;
                        } else if (slider.scrollLeft >= slider.scrollWidth / 2) {
                            slider.scrollLeft -= slider.scrollWidth / 2;
                            this.scrollLeft = slider.scrollLeft;
                            this.startX = x;
                        }
                    }
                }
            }
        </script>

        <div class="container mx-auto px-6 max-w-[1320px] mb-8" data-aos="fade-up">
            <p class="text-center text-xs font-bold text-gray-400 uppercase tracking-widest">{{ __('Dipercaya Oleh Organisasi Berkinerja Tinggi') }}</p>
        </div>

        <div class="relative w-full max-w-full" data-aos="fade-in" data-aos-delay="200">
            <!-- Gradient Fades -->
            <div class="absolute inset-y-0 left-0 w-24 lg:w-48 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
            <div class="absolute inset-y-0 right-0 w-24 lg:w-48 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
            
            <!-- Scrolling Content -->
            <div x-ref="slider"
                 @mouseenter="mouseenter()" 
                 @mouseleave="mouseleave()"
                 @mousedown="mousedown($event)" 
                 @mouseup="mouseup()" 
                 @mousemove="mousemove($event)"
                 @touchstart="mousedown($event)"
                 @touchend="mouseup()"
                 @touchmove="mousemove($event)"
                 class="no-scrollbar flex items-center gap-12 lg:gap-16 overflow-x-hidden cursor-grab active:cursor-grabbing w-full select-none"
                 style="display: flex; flex-wrap: nowrap;">
                <!-- Set 1 -->
                @foreach($clientLogos as $org)
                    @if($org->logo_path && file_exists(public_path('images/clients/' . $org->logo_path)))
                        <img src="{{ asset('images/clients/' . $org->logo_path) }}" alt="{{ $org->name }}" class="h-10 lg:h-12 w-auto object-contain" title="{{ $org->name }}" loading="lazy">
                    @else
                        <h3 class="text-xl lg:text-2xl font-black text-gray-500 whitespace-nowrap" title="{{ $org->name }}">{{ $org->name }}</h3>
                    @endif
                @endforeach
                
                <!-- Set 2 (Duplicate for infinite scroll loop) -->
                @foreach($clientLogos as $org)
                    @if($org->logo_path && file_exists(public_path('images/clients/' . $org->logo_path)))
                        <img src="{{ asset('images/clients/' . $org->logo_path) }}" alt="{{ $org->name }}" class="h-10 lg:h-12 w-auto object-contain" title="{{ $org->name }}" loading="lazy">
                    @else
                        <h3 class="text-xl lg:text-2xl font-black text-gray-500 whitespace-nowrap" title="{{ $org->name }}">{{ $org->name }}</h3>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- 3. COMPANY OVERVIEW (ABOUT PREVIEW) -->
    <section class="py-20 lg:py-28 bg-white relative overflow-hidden">
        <!-- Decorative dotted pattern bottom right -->
        <div class="absolute -bottom-16 -right-16 w-64 h-64 opacity-[0.15] z-0 bg-[radial-gradient(#14b8a6_3px,transparent_3px)] [background-size:20px_20px] hidden lg:block"></div>
        
        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                
                <!-- Left Images -->
                <div class="w-full lg:w-[45%] relative" data-aos="fade-right">
                    
                    <!-- Dotted pattern top-left -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 opacity-[0.15] z-0 bg-[radial-gradient(#14b8a6_3px,transparent_3px)] [background-size:20px_20px]"></div>

                    <!-- Light grey/blue background shape -->
                    <div class="absolute top-[10%] -left-8 w-[75%] h-[85%] bg-[#EEF3F7] rounded-3xl z-0 hidden md:block"></div>
                    
                    <!-- Teal border shape -->
                    <div class="absolute top-[35%] -right-4 w-[60%] h-[40%] border-[2px] border-primary rounded-[30px] rounded-tr-[50px] z-0 hidden md:block"></div>
                    
                    <!-- Images Container -->
                    <div class="relative z-10 md:pt-4 md:pl-4 pb-16 md:pb-28">
                        <!-- Main Image -->
                        <div class="w-[85%] md:w-[80%] h-[340px] md:h-[480px] rounded-3xl overflow-hidden shadow-sm relative z-10">
                            <img src="{{ asset('images/foto_utama/halaman_awal-2.webp') }}" alt="Office 1" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        
                        <!-- Overlapping Image -->
                        <div class="absolute bottom-0 right-0 w-[65%] md:w-[60%] h-[200px] md:h-[300px] rounded-3xl overflow-hidden shadow-2xl border-[6px] md:border-[10px] border-white bg-white z-20">
                            <img src="{{ asset('images/foto_utama/halaman_awal-3.webp') }}" alt="Teamwork" class="w-full h-full object-cover" loading="lazy">
                        </div>
                    </div>
                </div>
                
                <!-- Right Text -->
                <div class="w-full lg:w-[55%]" data-aos="fade-left">
                    <h4 class="text-sm font-black text-primary uppercase tracking-widest mb-3">{{ __('PASS At A Glance') }}</h4>
                    <h2 class="text-3xl lg:text-[46px] font-bold text-[#141414] leading-[1.15] mb-6">
                        {{ __('PASS at a Glance') }}
                    </h2>
                    <p class="text-[17px] font-bold text-primary mb-6 leading-relaxed">
                        {{ __('Not every organization needs PASS. PASS works when leadership is ready to face uncomfortable realities.') }}
                    </p>
                    <p class="text-[#585857] leading-relaxed mb-8">
                        {{ __('PASS bekerja bersama pimpinan organisasi untuk memastikan strategi benar-benar diterjemahkan menjadi hasil nyata. Memadukan disiplin engineering, management dan human learning dalam tiga pilar utama :') }}
                    </p>

                    <!-- 3 Pillars Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
                        <!-- Pillar 1 -->
                        <div class="flex sm:flex-col lg:flex-row items-center sm:items-start lg:items-center gap-4">
                            <div class="w-[50px] h-[50px] rounded-full bg-[#E5F4F2] flex items-center justify-center shrink-0">
                                <x-icon name="lucide-graduation-cap" class="w-6 h-6 text-primary" stroke-width="2" />
                            </div>
                            <div class="text-left">
                                <h5 class="font-bold text-[#141414] text-[15px] mb-1">{{ __('Training') }}</h5>
                                <p class="text-[13px] text-[#585857] leading-snug">{{ __('Pengembangan kapabilitas individu dan tim.') }}</p>
                            </div>
                        </div>
                        <!-- Pillar 2 -->
                        <div class="flex sm:flex-col lg:flex-row items-center sm:items-start lg:items-center gap-4">
                            <div class="w-[50px] h-[50px] rounded-full bg-[#E5F4F2] flex items-center justify-center shrink-0">
                                <x-icon name="lucide-users" class="w-6 h-6 text-primary" stroke-width="2" />
                            </div>
                            <div class="text-left">
                                <h5 class="font-bold text-[#141414] text-[15px] mb-1">{{ __('Consulting') }}</h5>
                                <p class="text-[13px] text-[#585857] leading-snug">{{ __('Pendampingan strategi dan solusi bisnis.') }}</p>
                            </div>
                        </div>
                        <!-- Pillar 3 -->
                        <div class="flex sm:flex-col lg:flex-row items-center sm:items-start lg:items-center gap-4">
                            <div class="w-[50px] h-[50px] rounded-full bg-[#E5F4F2] flex items-center justify-center shrink-0">
                                <x-icon name="lucide-search" class="w-6 h-6 text-primary" stroke-width="2" />
                            </div>
                            <div class="text-left">
                                <h5 class="font-bold text-[#141414] text-[15px] mb-1">{{ __('Research') }}</h5>
                                <p class="text-[13px] text-[#585857] leading-snug">{{ __('Riset terapan untuk menjawab tantangan nyata.') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="h-px w-full bg-gray-200 mb-8"></div>

                    <p class="text-[#585857] leading-relaxed mb-8">
                        {{ __('Dengan metodologi dan tools yang dirancang secara ekslusif, PASS menghasilkan solusi yang relevan, terukur dan berkelanjutan, yang aplikatif.') }}
                    </p>
                    
                    <x-ui.button href="/about" variant="primary" :icon="false" class="rounded-lg font-bold">
                        {{ __('Learn More') }} →
                    </x-ui.button>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FEATURED SERVICES -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    {{ __('Featured Services') }}
                </h2>
                <p class="text-[#585857] mt-4">{{ __('Solusi terintegrasi untuk organisasi yang siap bertumbuh.') }}</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($services->take(4) as $service)
                    <div class="bg-white rounded-2xl p-8 hover:-translate-y-2 transition-transform duration-300 shadow-sm border border-gray-100 flex flex-col h-full" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <x-icon name="{{ $service->icon_name ?? 'lucide-monitor' }}" class="w-8 h-8 text-primary" stroke-width="1.5" />
                        </div>
                        <h3 class="text-xl font-bold text-[#141414] mb-3">{{ $service->title }}</h3>
                        <p class="text-sm text-[#585857] mb-8 leading-relaxed flex-grow">
                            {{ Str::limit($service->description, 80) }}
                        </p>
                        <a href="/services" class="inline-flex items-center text-sm font-bold text-primary hover:text-accent-hover transition-colors group mt-auto">
                            {{ __('Learn More') }} <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 5. WHY CHOOSE US -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col lg:flex-row items-start gap-16 lg:gap-24">
                <div class="w-full lg:w-[40%]" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] mb-6">
                        {{ __('Mengapa PASS?') }}
                    </h2>
                    <p class="text-[#585857] leading-relaxed mb-8">
                        {{ __('"Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."') }}
                    </p>
                    <p class="text-[#585857] leading-relaxed font-bold">
                        {{ __('Kelas kami bukan untuk diingat, tapi membangun sistem mulai dari personal agar perubahan berjalan mulai dari diri sendiri.') }}
                    </p>
                </div>

                <div class="w-full lg:w-[60%] grid md:grid-cols-2 gap-8">
                    <!-- Point 1 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-globe" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">{{ __('Berpengalaman Lintas Industri') }}</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">{{ __('Berkolaborasi dengan lembaga besar nasional dan internasional (Pertamina, BAPPENAS, Kemenkes, UNDP, dll).') }}</p>
                    </div>

                    <!-- Point 2 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-database" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">{{ __('Berbasis Sistem & Data') }}</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">{{ __('Menggunakan Empathy-System-Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.') }}</p>
                    </div>

                    <!-- Point 3 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-target" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">{{ __('Fokus pada Hasil') }}</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">{{ __('Program dirancang dengan target terukur — peningkatan kinerja, produktifitas, efisiensi, dan kolaborasi tim.') }}</p>
                    </div>

                    <!-- Point 4 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-heart" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">{{ __('Pendekatan Humanis') }}</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">{{ __('Kami percaya transformasi berhasil hanya jika manusia di dalamnya ikut berubah dan beradaptasi.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FEATURED PROJECTS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6" data-aos="fade-up">
                <div>
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2]">
                        {{ __('Featured Projects') }}
                    </h2>
                </div>
                <a href="/portfolio" class="inline-flex items-center text-[#141414] font-bold hover:text-primary transition-colors group">
                    {{ __('View All Projects') }} <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($portfolios->take(3) as $portfolio)
                    <div class="group relative rounded-3xl overflow-hidden shadow-sm aspect-[4/3] max-h-[360px]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ Str::startsWith($portfolio->image_url, 'http') ? $portfolio->image_url : Storage::url($portfolio->image_url) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-primary/70 flex flex-col justify-end p-8">
                            <span class="inline-block px-3 py-1 bg-cta text-[#141414] text-[10px] font-bold uppercase tracking-widest rounded-full mb-4 self-start">{{ $portfolio->category }}</span>
                            <h3 class="text-xl font-bold text-primary-dark mb-2 leading-tight">{{ $portfolio->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 7. COMPANY STATISTICS -->
    <section class="py-20 bg-primary/5">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="bg-white rounded-[32px] p-12 shadow-sm border border-primary/10" data-aos="zoom-in">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:divide-x divide-gray-100">
                    
                    @foreach($statistics as $stat)
                    <div class="text-center px-4" 
                         x-data="{ count: 0, target: {{ $stat->value }}, started: false }" 
                         x-init="let step = Math.max(1, Math.ceil(target / 50)); let observer = new IntersectionObserver(e => { if(e[0].isIntersecting && !started) { started = true; let t = setInterval(() => { if(count < target) count += step; else { count = target; clearInterval(t); } }, 30); } }); observer.observe($el);">
                        <h3 class="text-4xl lg:text-5xl font-black text-primary mb-2 flex items-center justify-center">
                            <span x-text="count">0</span>{{ $stat->suffix }}
                        </h3>
                        <p class="text-sm font-bold text-[#585857] uppercase tracking-widest mt-2">{{ __($stat->label) }}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONIALS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    {{ __('What Leaders Say about PASS') }}
                </h2>
                <p class="text-[#585857] mt-4">{{ __('Unprompted reflections from leaders across industries after working with PASS.') }}</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="{{ $testimonial->is_featured ? 'bg-primary' : 'bg-white border border-gray-100' }} p-10 rounded-3xl shadow-sm relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <x-icon name="lucide-quote" class="w-12 h-12 {{ $testimonial->is_featured ? 'text-primary-dark/10' : 'text-primary/10' }} absolute top-8 left-8" />
                    <div class="relative z-10">
                        <p class="{{ $testimonial->is_featured ? 'text-primary-dark' : 'text-[#141414]' }} font-medium text-lg leading-relaxed italic mb-8 mt-4">
                            "{{ $testimonial->quote }}"
                        </p>
                        <div>
                            <h4 class="font-bold {{ $testimonial->is_featured ? 'text-primary-dark' : 'text-[#141414]' }}">{{ $testimonial->author_name }}</h4>
                            <p class="text-sm {{ $testimonial->is_featured ? 'text-cta' : 'text-primary' }}">{{ $testimonial->country }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="300">
                <a href="/portfolio" class="inline-flex items-center text-[#141414] font-bold hover:text-primary transition-colors group">
                    {{ __('View More Testimonials') }} <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>
    </section>



</x-layouts.app>
