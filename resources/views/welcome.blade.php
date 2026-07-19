<x-layouts.app>
    <div class="font-sans selection:bg-secondary selection:text-white overflow-x-hidden">
        
        <!-- ==============================================
             1. HERO SECTION (Navy with Sharp Mustard Cuts)
             ============================================== -->
        <section class="relative min-h-[70vh] md:min-h-[90vh] bg-secondary text-white flex items-center pt-16 md:pt-20 overflow-hidden">
            <!-- Geometric Background Shapes -->
            <div class="absolute top-0 right-0 w-full h-full pointer-events-none overflow-hidden z-0">
                <!-- Large Top Right Mustard Triangle -->
                <div class="absolute -top-20 -right-20 w-[600px] h-[600px] bg-primary transform rotate-45 translate-x-1/4 -translate-y-1/4"></div>
                <!-- Darker Navy Triangle Overlapping it -->
                <div class="absolute -top-10 -right-10 w-[600px] h-[600px] bg-secondary-light transform rotate-45 translate-x-1/3 -translate-y-1/4"></div>
                <!-- Bottom Left Mustard Sharp Line -->
                <div class="absolute -bottom-40 -left-20 w-[800px] h-[200px] bg-primary transform -rotate-45"></div>
            </div>

            <div class="container mx-auto px-6 max-w-7xl relative z-10 flex flex-col lg:flex-row items-center">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 pt-10 md:pt-20 pb-20 md:pb-32">
                    <div class="w-16 h-1 bg-primary mb-8 transform -skew-x-12" data-aos="fade-right" data-aos-duration="600"></div>
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-[1] mb-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        {!! __('Transforming<br/>Organizations<br/>With Agility') !!}
                    </h1>
                    <p class="text-slate-400 font-medium mb-10 max-w-md" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
                        {{ __('Pioneer in Agility Assessment & National Soft Skill Certification. We work when leadership is ready to face uncomfortable realities.') }}
                    </p>
                    <a href="/contact" class="inline-block bg-primary text-secondary font-black text-sm uppercase tracking-widest px-8 py-4 hover:bg-white transition-colors relative overflow-hidden group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <span class="relative z-10">{{ __('Discover More') }}</span>
                        <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left z-0"></div>
                    </a>
                </div>

                <!-- Right Content (Image) -->
                <div class="w-full lg:w-1/2 relative hidden lg:block h-[600px]" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         class="absolute right-0 top-1/2 -translate-y-1/2 w-[500px] h-[650px] object-cover filter grayscale contrast-125"
                         alt="Professionals" 
                         style="clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);">
                </div>
            </div>
        </section>

        <!-- ==============================================
             2. ABOUT / SOLUTIONS SECTION (White)
             ============================================== -->
        <section class="py-16 md:py-32 bg-white relative">
            <!-- Small triangle pointing down from hero -->
            <div class="absolute top-0 left-1/4 w-12 h-12 bg-secondary transform rotate-45 -translate-y-1/2"></div>
            
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="flex flex-col lg:flex-row gap-16 items-center">
                    
                    <!-- Left Images -->
                    <div class="w-full lg:w-1/2 relative h-auto lg:h-[500px] mb-8 lg:mb-0" data-aos="fade-right" data-aos-duration="800">
                        <div class="hidden lg:block">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                 class="absolute top-0 left-0 w-3/4 h-[400px] object-cover grayscale hover:grayscale-0 transition-all duration-500 shadow-2xl" alt="Team">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                                 class="absolute bottom-10 right-0 w-1/2 h-[250px] object-cover grayscale hover:grayscale-0 transition-all duration-500 shadow-2xl border-8 border-white" alt="Meeting">
                        </div>
                        
                        <!-- Floating Yellow Stat Box -->
                        <div class="relative lg:absolute lg:-bottom-10 lg:left-10 bg-primary p-6 lg:p-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 lg:gap-12 shadow-2xl w-full lg:w-max">
                            <div class="flex items-center gap-4">
                                <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <div class="text-3xl font-black text-secondary">10<span class="text-white">+</span></div>
                                    <div class="text-xs font-bold uppercase tracking-widest text-secondary">{{ __('Years Experience') }}</div>
                                </div>
                            </div>
                            <div class="hidden sm:block w-px h-16 bg-secondary/20"></div>
                            <div class="sm:hidden w-3/4 h-px bg-secondary/20"></div>
                            <div class="flex items-center gap-4">
                                <svg class="w-12 h-12 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <div>
                                    <div class="text-3xl font-black text-secondary">2K<span class="text-white">+</span></div>
                                    <div class="text-xs font-bold uppercase tracking-widest text-secondary">{{ __('Projects Done') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Text -->
                    <div class="w-full lg:w-1/2 pt-8 lg:pt-0" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-4 h-4 bg-primary transform rotate-45"></div>
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-400">{{ __('About Agency') }}</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-black uppercase text-secondary mb-6 leading-tight">
                            {!! __('Ahead Of<br/>The Curve') !!}
                        </h2>
                        <p class="text-slate-500 mb-8 font-medium leading-relaxed">
                            {{ __('Through the Business Agility Assessment™ and LEGO® Serious Play®, we unlock your team\'s potential to navigate complex challenges and achieve sustainable growth. Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi.') }}
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8 mb-10">
                            <div>
                                <div class="w-12 h-12 bg-secondary rounded-none flex items-center justify-center text-primary mb-4 transform rotate-45">
                                    <svg class="w-6 h-6 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <h4 class="font-black text-secondary uppercase text-sm mb-2">{{ __('Agile Consulting') }}</h4>
                                <p class="text-slate-400 text-sm">{{ __('Transformasi strategis untuk organisasi yang adaptif dan tangguh.') }}</p>
                            </div>
                            <div>
                                <div class="w-12 h-12 bg-secondary rounded-none flex items-center justify-center text-primary mb-4 transform rotate-45">
                                    <svg class="w-6 h-6 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                </div>
                                <h4 class="font-black text-secondary uppercase text-sm mb-2">{{ __('BNSP Certified Training') }}</h4>
                                <p class="text-slate-400 text-sm">{{ __('Program sertifikasi soft skill nasional (Problem Solving, Leadership, Communication).') }}</p>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-10">
                            <div class="flex justify-between text-xs font-black uppercase text-secondary mb-2">
                                <span>{{ __('Business Transformation') }}</span>
                                <span>95%</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2">
                                <div class="bg-primary h-2 w-[95%]"></div>
                            </div>
                        </div>

                        <a href="/about" class="inline-block bg-primary text-secondary font-black text-sm uppercase tracking-widest px-8 py-4 hover:bg-secondary hover:text-white transition-colors">
                            {{ __('Discover More') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================
             3. PARTNERS LOGO STRIP (White)
             ============================================== -->
        <section class="py-12 border-t border-slate-100 bg-white overflow-hidden relative"
                 x-data="{
                    speed: 1.0,
                    isDragging: false,
                    isHovered: false,
                    startX: 0,
                    scrollLeft: 0,
                    init() {
                        this.$nextTick(() => {
                            const slider = this.$refs.slider;
                            const setWidth = slider.scrollWidth / 2;
                            slider.scrollLeft = setWidth;
                            
                            const loop = () => {
                                if (!this.isDragging && !this.isHovered) {
                                    slider.scrollLeft -= this.speed;
                                }
                                
                                if (slider.scrollLeft <= 0) {
                                    slider.scrollLeft += setWidth;
                                } else if (slider.scrollLeft >= setWidth) {
                                    slider.scrollLeft -= setWidth;
                                }
                                requestAnimationFrame(loop);
                            };
                            requestAnimationFrame(loop);
                        });
                    },
                    dragStart(e) {
                        this.isDragging = true;
                        this.startX = e.pageX || (e.touches ? e.touches[0].pageX : 0);
                        this.scrollLeft = this.$refs.slider.scrollLeft;
                    },
                    dragMove(e) {
                        if (!this.isDragging) return;
                        const x = e.pageX || (e.touches ? e.touches[0].pageX : 0);
                        const walk = (x - this.startX) * 1.5;
                        this.$refs.slider.scrollLeft = this.scrollLeft - walk;
                    },
                    dragEnd() {
                        this.isDragging = false;
                    }
                 }">
            <!-- Fade edges -->
            <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
            <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
            
            @php
                $partners = [
                    'Heartspeaks Indonesia', 'PDMA-Indonesia', 'AIESEC', 'Praktisi Pengembangan Kompetensi Softskill Indonesia',
                    'Solopos Media Group', 'Indosat Ooredoo Hutchinson', 'Adicipta Inovasi Teknologi', 'Kemenkes',
                    'LKPP', 'Biro Klasifikasi Indonesia', 'Otoritas Jasa Keuangan (OJK) Indonesia', 'Pos Indonesia',
                    'BNI Tbk', 'Asuransi Tugu Pratama Ind Tbk', 'Pelindo Solusi Logistik', 'Widodo Makmur Perkasa Tbk',
                    'Widodo Makmur Unggas Tbk', 'De Fila Integrated Farm', 'Prisma Surya Gemilang', 'Universitas Muhammadiyah Cirebon',
                    'PPM Manajemen', 'ITB', 'UNPAD', 'FTUI', 'IKIGAI Consulting', 'BDO Indonesia', 'Al Aaren Food Bahrain', 'DataHen Canada', 'Pertamina'
                ];
            @endphp
            
            <div x-ref="slider" 
                 class="flex flex-nowrap w-full overflow-x-hidden cursor-grab active:cursor-grabbing select-none"
                 @mouseenter="isHovered = true"
                 @mouseleave="isHovered = false; dragEnd()"
                 @mousedown="dragStart($event)"
                 @mousemove="dragMove($event)"
                 @mouseup="dragEnd()"
                 @touchstart="dragStart($event)"
                 @touchmove="dragMove($event)"
                 @touchend="dragEnd()">
                <!-- Set 1 -->
                <div class="flex items-center gap-8 md:gap-16 px-4 md:px-8 w-max shrink-0">
                    @foreach($partners as $partner)
                        <span class="text-sm md:text-base font-black tracking-widest uppercase text-slate-300 hover:text-secondary transition-colors whitespace-nowrap">{{ $partner }}</span>
                    @endforeach
                </div>
                <!-- Set 2 for seamless loop -->
                <div class="flex items-center gap-8 md:gap-16 px-4 md:px-8 w-max shrink-0">
                    @foreach($partners as $partner)
                        <span class="text-sm md:text-base font-black tracking-widest uppercase text-slate-300 hover:text-secondary transition-colors whitespace-nowrap">{{ $partner }}</span>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ==============================================
             4. WHAT WE OFFER (Light Gray)
             ============================================== -->
        <section class="py-16 md:py-32 bg-[#F8F9FA] relative">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                    <div class="flex items-center justify-center gap-2 mb-4">
                        <div class="w-4 h-4 bg-primary transform rotate-45"></div>
                        <span class="text-xs font-bold uppercase tracking-widest text-slate-400">{{ __('Our Services') }}</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black uppercase text-secondary">{{ __('What We Offer') }}</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 max-w-6xl mx-auto shadow-2xl relative z-10">
                    
                    @php
                        $services = [
                            ['title' => __('Agility Assessment'), 'desc' => __('Menilai kesiapan organisasi menghadapi perubahan melalui Business Agility Assessment™.'), 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'highlight' => false],
                            ['title' => __('LEGO® Serious Play®'), 'desc' => __('Workshop inovatif menggunakan LEGO® untuk strategi, kolaborasi tim, dan inovasi.'), 'icon' => 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5', 'highlight' => false],
                            ['title' => __('Soft Skill Cert.'), 'desc' => __('Sertifikasi BNSP di bidang Problem Solving, Kepemimpinan, dan Komunikasi Efektif.'), 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'highlight' => false],
                            ['title' => __('Consulting'), 'desc' => __('Pendampingan strategis dari diagnosis masalah hingga implementasi dan evaluasi dampak.'), 'icon' => 'M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z', 'highlight' => false],
                        ];
                    @endphp

                    @foreach($services as $idx => $svc)
                        <div class="border border-slate-100 p-6 md:p-10 hover:bg-secondary hover:text-white transition-colors duration-300 group flex flex-col items-center text-center {{ $svc['highlight'] ? 'bg-secondary text-white' : 'bg-white' }}" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $idx * 100 }}">
                            <div class="text-slate-200 group-hover:text-primary transition-colors mb-8 {{ $svc['highlight'] ? 'text-primary' : '' }}">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="square" stroke-linejoin="miter" d="{{ $svc['icon'] }}"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-black uppercase mb-4 {{ $svc['highlight'] ? 'text-white' : 'text-secondary group-hover:text-white' }}">{{ $svc['title'] }}</h3>
                            <p class="text-sm leading-relaxed {{ $svc['highlight'] ? 'text-slate-400' : 'text-slate-500 group-hover:text-slate-400' }}">
                                {{ $svc['desc'] }}
                            </p>
                        </div>
                    @endforeach
                    
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-500">{{ __('Layanan transformasi organisasi yang dirancang khusus untuk bisnis Anda.') }} <a href="/services" class="text-secondary hover:text-primary border-b border-secondary hover:border-primary pb-1 ml-2">{{ __('Temukan Solusi Anda') }}</a></p>
                </div>
            </div>
            
            <!-- Diagonal background element -->
            <div class="absolute bottom-0 right-0 w-1/3 h-[400px] bg-slate-200/50 transform -skew-y-12 translate-y-1/2 -z-0"></div>
        </section>

        <!-- ==============================================
             5. GROW WITH COMMUNITY (Navy)
             ============================================== -->
        <section class="bg-secondary pt-16 md:pt-32 pb-40 md:pb-64 relative">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 border-b border-white/10 pb-12">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black uppercase text-white w-full md:w-2/3 leading-tight" data-aos="fade-right" data-aos-duration="800">
                        {!! __('Grow With Community &<br/>Experience Endless Possibilities') !!}
                    </h2>
                    <a href="/about" class="mt-8 md:mt-0 bg-primary text-secondary px-8 py-4 text-xs font-black uppercase tracking-widest hover:bg-white transition-colors">
                        {{ __('Discover More') }}
                    </a>
                </div>
                <div class="flex items-center gap-4 text-slate-400 text-sm font-medium">
                    <div class="w-2 h-2 bg-primary transform rotate-45"></div>
                    {{ __('Mitra transformasi organisasi yang bekerja berdampingan hingga hasilnya berkelanjutan.') }}
                </div>
            </div>
            
            <!-- Sharp triangle cut at bottom -->
            <div class="absolute bottom-0 left-0 w-full h-[150px] bg-[#F8F9FA]" style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"></div>
        </section>

        <!-- White overlapping cards container (Pulled up into Navy section) -->
        <div class="bg-[#F8F9FA] relative z-20 pb-16 md:pb-32">
            <div class="container mx-auto px-6 max-w-7xl -mt-40">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 shadow-2xl" data-aos="fade-up" data-aos-duration="800">
                    <div class="bg-white p-10 border-r border-slate-100 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-secondary uppercase text-sm mb-2">{{ __('Pendekatan Berbasis Sistem') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Menggunakan Empathy–System–Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.') }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-10 border-r border-slate-100 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-secondary uppercase text-sm mb-2">{{ __('Lintas Industri') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Berkolaborasi dengan Pertamina, BAPPENAS, Kemenkes, UNDP, OJK, BNI, dan lembaga nasional lainnya.') }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-10 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-secondary uppercase text-sm mb-2">{{ __('Humanis & Adaptif') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Transformasi berhasil hanya jika manusia di dalamnya ikut berubah. Program kami membangun sistem, bukan sekedar dihafal.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==============================================
             6. RECENT CLIENT PROJECTS (White)
             ============================================== -->
        <section class="py-12 md:py-20 bg-white">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                    <div class="flex items-center justify-center gap-2 mb-4">
                        <div class="w-4 h-4 bg-primary transform rotate-45"></div>
                        <span class="text-xs font-bold uppercase tracking-widest text-slate-400">{{ __('Our Completed Works') }}</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black uppercase text-secondary">{{ __('Recent Client Projects') }}</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $projects = [
                            ['title' => __('Learning by Transforming'), 'client' => 'BNI Corporate University'],
                            ['title' => __('People Transformation Enablement'), 'client' => 'Indosat Ooredoo Hutchison'],
                            ['title' => __('Agile Team Leadership'), 'client' => 'LKPP'],
                            ['title' => __('Productivity Enhancement'), 'client' => 'Pos Indonesia'],
                        ];
                    @endphp
                    @foreach($projects as $project)
                    <div class="group relative overflow-hidden h-[350px] cursor-pointer" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" alt="Project">
                        <div class="absolute bottom-0 left-0 right-0 bg-secondary p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform">
                            <p class="text-primary text-xs font-bold uppercase tracking-widest mb-2">{{ $project['client'] }}</p>
                            <h4 class="text-white font-black uppercase text-sm leading-tight">{{ $project['title'] }}</h4>
                        </div>
                        <div class="absolute bottom-20 right-6 w-10 h-10 bg-primary text-secondary flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-4 group-hover:translate-y-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ==============================================
             7. TESTIMONIAL (White)
             ============================================== -->
        <section class="py-16 md:py-32 bg-[#F8F9FA]">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="flex flex-col md:flex-row items-center gap-16" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-1/3 relative flex justify-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-48 h-48 rounded-full object-cover grayscale" alt="Client">
                        <!-- Quote badge -->
                        <div class="absolute top-0 right-10 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-secondary">
                            <span class="text-3xl font-serif font-black leading-none pt-2">"</span>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="flex gap-1 mb-6 text-primary">
                            @for($i=0; $i<5; $i++)
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            @endfor
                        </div>
                        <p class="text-slate-500 font-medium italic leading-relaxed text-base md:text-lg mb-8">
                            {{ __('"Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya. Tim PASS berisi profesional berpengalaman dengan solusi implementatif yang langsung berdampak."') }}
                        </p>
                        <div>
                            <h4 class="font-black text-secondary uppercase tracking-widest text-sm">{{ __('Manager Retail Chain') }}</h4>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">{{ __('Indonesia') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================
             8. LET'S START WORKING TOGETHER (Mustard Banner)
             ============================================== -->
        <section class="bg-white py-12 md:py-20 relative overflow-hidden">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="bg-primary relative overflow-hidden shadow-2xl flex flex-col md:flex-row items-center justify-between p-8 md:p-12 lg:p-20" data-aos="zoom-in" data-aos-duration="700">
                    <!-- Left Text -->
                    <div class="relative z-10 w-full md:w-2/3">
                        <h2 class="text-3xl md:text-4xl lg:text-6xl font-black uppercase leading-[1.1]">
                            <span class="text-secondary">{!! __('Let\'s Start Working Together.') !!}</span><br/>
                            <span class="text-secondary/60">{!! __('Get In Touch With Us!') !!}</span>
                        </h2>
                    </div>
                    
                    <!-- Sharp Navy shape on the right -->
                    <div class="absolute right-0 top-0 h-full w-full md:w-1/2 bg-secondary transform skew-x-[-20deg] origin-bottom translate-x-32 z-0 hidden md:block"></div>
                    
                    <div class="relative z-10 w-full md:w-1/3 flex justify-start md:justify-end mt-8 md:mt-0">
                        <a href="/contact" class="w-16 h-16 border-2 border-white flex items-center justify-center text-white hover:bg-white hover:text-secondary transition-colors group">
                            <svg class="w-6 h-6 transform rotate-45 group-hover:rotate-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
