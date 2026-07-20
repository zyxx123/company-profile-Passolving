<x-layouts.app>
    <div class="font-sans selection:bg-secondary selection:text-white overflow-x-hidden">
        
        <!-- ==============================================
             1. HERO SECTION (Vinx Style)
             ============================================== -->
        <section class="relative bg-secondary text-white overflow-visible pt-[128px] z-30">
            <!-- Background Image on the right -->
            <div class="absolute inset-y-0 right-0 w-full md:w-[60%] z-0">
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                     class="w-full h-full object-cover object-[60%_center] filter grayscale"
                     alt="Professionals">
            </div>

            <!-- Curved SVG Separator -->
            <div class="absolute inset-y-0 left-0 w-full md:w-[60%] z-0 h-full pointer-events-none hidden md:block">
                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="w-full h-full fill-secondary">
                    <path d="M0,0 L80,0 C90,30 50,70 90,100 L0,100 Z" />
                </svg>
                <!-- Yellow Swoosh -->
                <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="absolute top-0 left-0 w-full h-full fill-primary opacity-90 -z-10 transform translate-x-2">
                    <path d="M0,0 L85,0 C100,40 45,75 95,100 L0,100 Z" />
                </svg>
            </div>

            <div class="container mx-auto px-6 max-w-7xl relative z-10 min-h-[70vh] flex items-center pb-32">
                <!-- Left Content -->
                <div class="w-full md:w-[50%] lg:w-[45%] pt-12">
                    <div class="flex gap-3 mb-6">
                        <span class="border border-white/50 rounded-full px-4 py-1 text-[10px] font-black uppercase tracking-widest">ASSESSMENT</span>
                        <span class="border border-white/50 rounded-full px-4 py-1 text-[10px] font-black uppercase tracking-widest">TRAINING</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-[4.5rem] font-black tracking-tighter leading-[1.05] mb-6 capitalize">
                        Mentransformasi<br/>Organisasi<br/>Dengan Agility.
                    </h1>
                    
                    <p class="text-white/90 font-medium mb-10 text-sm leading-relaxed max-w-sm">
                        {{ __('Pelopor asesmen agility & sertifikasi soft skill nasional. Kami bekerja saat kepemimpinan siap menghadapi realitas yang menantang.') }}
                    </p>
                    
                    <div class="flex items-center gap-6">
                        <div class="flex flex-col">
                            <span class="text-xs text-primary font-black uppercase tracking-widest">MULAI DARI</span>
                            <div class="text-3xl font-black flex items-baseline gap-1">
                                <span>10+</span> <span class="text-sm font-medium italic text-primary">tahun</span>
                            </div>
                        </div>
                        <a href="/services" class="bg-primary text-secondary-dark font-black text-xs uppercase tracking-widest px-8 py-3 rounded-full hover:bg-white transition-colors">
                            {{ __('Lebih Lanjut') }}
                        </a>
                    </div>
                </div>

            </div>

            <!-- Floating White Box (Bottom Overlap) -->
            <div class="absolute bottom-0 left-0 right-0 z-20 flex justify-center transform translate-y-1/2 px-6">
                <div class="bg-white rounded-xl shadow-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between w-full max-w-5xl gap-6">
                    <div class="flex items-center gap-4">
                        <div class="bg-secondary p-3 rounded-lg text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-secondary-dark font-black text-xl uppercase">10+ TAHUN PENGALAMAN</h3>
                            <p class="text-gray-500 text-xs">Membangun organisasi bertransformasi.</p>
                        </div>
                    </div>
                    
                    <div class="flex-1 w-full max-w-md hidden md:flex items-center gap-4">
                        <div class="flex-1 border border-gray-200 rounded-md p-3 bg-gray-50">
                            <span class="block text-[9px] uppercase font-bold text-gray-400 mb-1">Total Proyek</span>
                            <span class="text-sm font-bold text-gray-800">2,000+ Klien Aktif</span>
                        </div>
                        <div class="flex-1 border border-gray-200 rounded-md p-3 bg-gray-50">
                            <span class="block text-[9px] uppercase font-bold text-gray-400 mb-1">Sertifikasi</span>
                            <span class="text-sm font-bold text-gray-800">BNSP Nasional</span>
                        </div>
                    </div>

                    <a href="/contact" class="bg-primary text-secondary-dark font-black text-xs uppercase tracking-widest px-8 py-4 rounded-full hover:bg-primary-dark transition-colors whitespace-nowrap">
                        Pelajari Layanan
                    </a>
                </div>
            </div>
        </section>

        <!-- ==============================================
             2. SERVICES SECTION (White bg, circular icons)
             ============================================== -->
        <section class="bg-[#F8F9FA] relative z-20 pb-16 md:pb-32 pt-32">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 shadow-2xl" data-aos="fade-up" data-aos-duration="800">
                    <div class="bg-white p-10 border-r border-slate-100 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-accent uppercase text-sm mb-2">{{ __('Pendekatan Berbasis Sistem') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Menggunakan Empathy–System–Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.') }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-10 border-r border-slate-100 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-accent uppercase text-sm mb-2">{{ __('Lintas Industri') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Berkolaborasi dengan Pertamina, BAPPENAS, Kemenkes, UNDP, OJK, BNI, dan lembaga nasional lainnya.') }}</p>
                        </div>
                    </div>
                    <div class="bg-white p-10 flex gap-6 hover:bg-slate-50 transition-colors">
                        <div class="w-10 h-10 bg-primary rounded-none flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-black text-accent uppercase text-sm mb-2">{{ __('Humanis & Adaptif') }}</h4>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ __('Transformasi berhasil hanya jika manusia di dalamnya ikut berubah. Program kami membangun sistem, bukan sekedar dihafal.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================
             3. BANNER SECTION (Dark Teal + Gold Badge)
             ============================================== -->
        <section class="relative flex flex-col md:flex-row min-h-[400px]">
            <!-- Left Dark Teal -->
            <div class="w-full md:w-1/2 bg-secondary-dark p-12 md:p-20 flex flex-col justify-center text-white relative">
                <!-- Gold Badge Overlapping Center -->
                <div class="absolute -right-16 top-1/2 transform -translate-y-1/2 hidden md:flex items-center justify-center w-32 h-32 rounded-full border-4 border-white bg-primary text-secondary-dark font-black shadow-2xl z-20 text-center text-xs p-4 leading-tight">
                    Tumbuh<br/>Bersama<br/>Komunitas
                </div>
                
                <h2 class="text-3xl md:text-5xl font-black uppercase mb-6 leading-tight">
                    Temukan Peluang<br/>Tanpa Batas
                </h2>
                <p class="text-gray-400 mb-8 max-w-md">
                    Mitra transformasi organisasi yang bekerja berdampingan hingga hasilnya berkelanjutan. Kami menerapkan pendekatan berbasis sistem.
                </p>
                <a href="/services" class="bg-primary text-secondary-dark font-black text-xs uppercase tracking-widest px-8 py-3 rounded-full hover:bg-white transition-colors w-max">
                    Lebih Lanjut
                </a>
            </div>
            
            <!-- Right Image -->
            <div class="w-full md:w-1/2 min-h-[300px] md:min-h-full">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale" alt="Team Working">
            </div>
        </section>

        <!-- ==============================================
             4. RECENT CLIENT PROJECTS (White Background Grid)
             ============================================== -->
        <section class="py-16 md:py-24 bg-white relative">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="text-center mb-16">
                    <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">OUR COMPLETED WORKS</span>
                    <h2 class="text-3xl md:text-4xl font-black text-secondary-dark capitalize mb-6">Recent Client Projects</h2>
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
                    <div class="group relative overflow-hidden h-[300px] rounded-xl shadow-lg cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" alt="Project">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-5 border-t-4 border-primary transform translate-y-2 group-hover:translate-y-0 transition-transform">
                            <p class="text-primary text-[10px] font-black uppercase tracking-widest mb-1">{{ $project['client'] }}</p>
                            <h4 class="text-secondary-dark font-black text-sm leading-tight">{{ $project['title'] }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ==============================================
             5. FOUNDER'S MESSAGE
             ============================================== -->
        <x-founder-message />

    </div>
</x-layouts.app>
