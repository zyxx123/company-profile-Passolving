<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <!-- Full screen (100vh) adjustment: using min-h-[calc(100vh-88px)] assuming header is 88px, or just min-h-screen with flex -->
    <section class="relative min-h-[calc(100vh-88px)] flex items-center overflow-hidden bg-gradient-to-br from-primary-dark to-primary py-20">
        <!-- Subtle dot pattern overlay or shapes -->
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_bottom_left,white,transparent)]"></div>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Text Content -->
                <div class="w-full lg:w-[55%]">
                    <p class="text-cta font-bold tracking-widest uppercase text-sm mb-4">Pioneer in Agility Assesment & National Soft Skill Certification</p>
                    <h1 class="text-4xl lg:text-[60px] font-black leading-[1.1] text-white mb-6 uppercase">
                        AGILITY &<br/>TRANSFORMATION
                    </h1>
                    <p class="text-lg text-white/80 mb-10 leading-relaxed max-w-lg">
                        Determine for Execution Deliveries. Kami hadir untuk membantu organisasi Anda menghadapi realitas yang menantang dengan solusi berbasis data dan sistem yang adaptif.
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <x-ui.button href="/services" variant="primary">
                            Explore Services
                        </x-ui.button>
                        <x-ui.button href="/contact" variant="outline" :icon="false">
                            Contact Us
                        </x-ui.button>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-[45%]">
                    <div class="relative w-full aspect-[4/3] rounded-[48px] rounded-tl-none overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" alt="Tim Profesional" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. TRUSTED BY -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <p class="text-center text-xs font-bold text-gray-400 uppercase tracking-widest mb-8">Dipercaya Oleh Organisasi Berkinerja Tinggi</p>
            <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-20 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <h3 class="text-2xl font-black text-gray-500 italic">PERTAMINA</h3>
                <h3 class="text-2xl font-black text-gray-500">Kemenkes</h3>
                <h3 class="text-2xl font-black text-gray-500 italic">BAPPENAS</h3>
                <h3 class="text-2xl font-black text-gray-500">OJK</h3>
                <h3 class="text-2xl font-black text-gray-500">BNI</h3>
                <h3 class="text-2xl font-black text-gray-500">UNDP</h3>
            </div>
        </div>
    </section>

    <!-- 3. COMPANY OVERVIEW (ABOUT PREVIEW) -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <!-- Left Images (Optech style overlapping) -->
                <div class="w-full lg:w-[50%] relative">
                    <div class="absolute -top-10 -left-10 w-40 h-40 opacity-20 z-0" style="background-image: radial-gradient(#0F9FA4 2px, transparent 2px); background-size: 16px 16px;"></div>
                    
                    <div class="relative z-10 flex items-end gap-6">
                        <div class="w-[60%] rounded-3xl rounded-tr-none overflow-hidden shadow-lg h-[400px]">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80" alt="Office 1" class="w-full h-full object-cover">
                        </div>
                        <div class="w-[40%] rounded-3xl rounded-bl-none overflow-hidden shadow-lg h-[280px] -mb-12">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=600&q=80" alt="Office 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                
                <!-- Right Text -->
                <div class="w-full lg:w-[50%]">
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] mb-6">
                        PASS at a Glance
                    </h2>
                    <p class="text-lg font-medium text-primary mb-6">
                        Not every organization needs PASS. PASS works when leadership is ready to face uncomfortable realities.
                    </p>
                    <p class="text-[#585857] leading-relaxed mb-4">
                        PASS bekerja bersama pimpinan organisasi untuk memastikan strategi benar-benar diterjemahkan menjadi hasil nyata. Memadukan disiplin engineering, management dan human learning dalam tiga pilar utama : Training, Consulting, dan Research.
                    </p>
                    <p class="text-[#585857] leading-relaxed mb-10">
                        Dengan metodologi dan tools yang dirancang secara ekslusif, PASS menghasilkan solusi yang relevan, terukur dan berkelanjutan, yang aplikatif.
                    </p>
                    <x-ui.button href="/about" variant="primary" :icon="false" class="rounded-lg">
                        Learn More →
                    </x-ui.button>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FEATURED SERVICES -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Featured Services
                </h2>
                <p class="text-[#585857] mt-4">Solusi terintegrasi untuk organisasi yang siap bertumbuh.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($services->take(4) as $service)
                    <div class="bg-white rounded-2xl p-8 hover:-translate-y-2 transition-transform duration-300 shadow-sm border border-gray-100 flex flex-col h-full">
                        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <x-icon name="{{ $service->icon_name ?? 'lucide-monitor' }}" class="w-8 h-8 text-primary" stroke-width="1.5" />
                        </div>
                        <h3 class="text-xl font-bold text-[#141414] mb-3">{{ $service->title }}</h3>
                        <p class="text-sm text-[#585857] mb-8 leading-relaxed flex-grow">
                            {{ Str::limit($service->description, 80) }}
                        </p>
                        <a href="/services" class="inline-flex items-center text-sm font-bold text-primary hover:text-accent-hover transition-colors group mt-auto">
                            Learn More <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
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
                <div class="w-full lg:w-[40%]">
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] mb-6">
                        Mengapa PASS?
                    </h2>
                    <p class="text-[#585857] leading-relaxed mb-8">
                        "Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."
                    </p>
                    <p class="text-[#585857] leading-relaxed font-bold">
                        Kelas kami bukan untuk diingat, tapi membangun sistem mulai dari personal agar perubahan berjalan mulai dari diri sendiri.
                    </p>
                </div>

                <div class="w-full lg:w-[60%] grid md:grid-cols-2 gap-8">
                    <!-- Point 1 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-globe" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">Berpengalaman Lintas Industri</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Berkolaborasi dengan lembaga besar nasional dan internasional (Pertamina, BAPPENAS, Kemenkes, UNDP, dll).</p>
                    </div>

                    <!-- Point 2 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-database" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">Berbasis Sistem & Data</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Menggunakan Empathy-System-Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.</p>
                    </div>

                    <!-- Point 3 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-target" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">Fokus pada Hasil</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Program dirancang dengan target terukur — peningkatan kinerja, produktifitas, efisiensi, dan kolaborasi tim.</p>
                    </div>

                    <!-- Point 4 -->
                    <div class="bg-[#F8FAFB] p-8 rounded-2xl border border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <x-icon name="lucide-heart" class="w-6 h-6 text-primary" stroke-width="2" />
                        </div>
                        <h4 class="text-lg font-bold text-[#141414] mb-2">Pendekatan Humanis</h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Kami percaya transformasi berhasil hanya jika manusia di dalamnya ikut berubah dan beradaptasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FEATURED PROJECTS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2]">
                        Featured Projects
                    </h2>
                </div>
                <a href="/portfolio" class="inline-flex items-center text-[#141414] font-bold hover:text-primary transition-colors group">
                    View All Projects <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($portfolios->take(3) as $portfolio)
                    <div class="group relative rounded-3xl overflow-hidden shadow-sm aspect-[4/3] max-h-[360px]">
                        <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0A6D71] via-[#0A6D71]/40 to-transparent flex flex-col justify-end p-8">
                            <span class="inline-block px-3 py-1 bg-cta text-[#141414] text-[10px] font-bold uppercase tracking-widest rounded-full mb-4 self-start">{{ $portfolio->category }}</span>
                            <h3 class="text-xl font-bold text-white mb-2 leading-tight">{{ $portfolio->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 7. COMPANY STATISTICS -->
    <section class="py-20 bg-primary/5">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="bg-white rounded-[32px] p-12 shadow-sm border border-primary/10">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:divide-x divide-gray-100">
                    
                    <!-- Stat 1 -->
                    <div class="text-center px-4" 
                         x-data="{ count: 0, target: 150, started: false }" 
                         x-init="let observer = new IntersectionObserver(e => { if(e[0].isIntersecting && !started) { started = true; let t = setInterval(() => { if(count < target) count += 3; else { count = target; clearInterval(t); } }, 30); } }); observer.observe($el);">
                        <h3 class="text-4xl lg:text-5xl font-black text-primary mb-2 flex items-center justify-center">
                            <span x-text="count">0</span>+
                        </h3>
                        <p class="text-sm font-bold text-[#585857] uppercase tracking-widest mt-2">Projects</p>
                    </div>
                    
                    <!-- Stat 2 -->
                    <div class="text-center px-4"
                         x-data="{ count: 0, target: 50, started: false }" 
                         x-init="let observer = new IntersectionObserver(e => { if(e[0].isIntersecting && !started) { started = true; let t = setInterval(() => { if(count < target) count += 1; else { count = target; clearInterval(t); } }, 30); } }); observer.observe($el);">
                        <h3 class="text-4xl lg:text-5xl font-black text-primary mb-2 flex items-center justify-center">
                            <span x-text="count">0</span>+
                        </h3>
                        <p class="text-sm font-bold text-[#585857] uppercase tracking-widest mt-2">Clients</p>
                    </div>
                    
                    <!-- Stat 3 -->
                    <div class="text-center px-4"
                         x-data="{ count: 0, target: 98, started: false }" 
                         x-init="let observer = new IntersectionObserver(e => { if(e[0].isIntersecting && !started) { started = true; let t = setInterval(() => { if(count < target) count += 2; else { count = target; clearInterval(t); } }, 30); } }); observer.observe($el);">
                        <h3 class="text-4xl lg:text-5xl font-black text-primary mb-2 flex items-center justify-center">
                            <span x-text="count">0</span>%
                        </h3>
                        <p class="text-sm font-bold text-[#585857] uppercase tracking-widest mt-2">Satisfaction</p>
                    </div>
                    
                    <!-- Stat 4 -->
                    <div class="text-center px-4"
                         x-data="{ count: 0, target: 12, started: false }" 
                         x-init="let observer = new IntersectionObserver(e => { if(e[0].isIntersecting && !started) { started = true; let t = setInterval(() => { if(count < target) count += 1; else { count = target; clearInterval(t); } }, 100); } }); observer.observe($el);">
                        <h3 class="text-4xl lg:text-5xl font-black text-primary mb-2 flex items-center justify-center">
                            <span x-text="count">0</span>
                        </h3>
                        <p class="text-sm font-bold text-[#585857] uppercase tracking-widest mt-2">Experts</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8. TESTIMONIALS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    What Leaders Say about PASS
                </h2>
                <p class="text-[#585857] mt-4">Unprompted reflections from leaders across industries after working with PASS.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 relative">
                    <x-icon name="lucide-quote" class="w-12 h-12 text-primary/10 absolute top-8 left-8" />
                    <div class="relative z-10">
                        <p class="text-[#141414] font-medium text-lg leading-relaxed italic mb-8 mt-4">
                            "Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."
                        </p>
                        <div>
                            <h4 class="font-bold text-[#141414]">Manager Retail Chain</h4>
                            <p class="text-sm text-primary">Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-primary-dark p-10 rounded-3xl shadow-sm relative">
                    <x-icon name="lucide-quote" class="w-12 h-12 text-white/10 absolute top-8 left-8" />
                    <div class="relative z-10">
                        <p class="text-white font-medium text-lg leading-relaxed italic mb-8 mt-4">
                            "PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."
                        </p>
                        <div>
                            <h4 class="font-bold text-white">Founder Beauty Clinic</h4>
                            <p class="text-sm text-cta">Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 relative">
                    <x-icon name="lucide-quote" class="w-12 h-12 text-primary/10 absolute top-8 left-8" />
                    <div class="relative z-10">
                        <p class="text-[#141414] font-medium text-lg leading-relaxed italic mb-8 mt-4">
                            "Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada pengembangan bisnis."
                        </p>
                        <div>
                            <h4 class="font-bold text-[#141414]">Founder Food Processing Mfr</h4>
                            <p class="text-sm text-primary">Bahrain</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="/portfolio" class="inline-flex items-center text-[#141414] font-bold hover:text-primary transition-colors group">
                    View More Testimonials <span class="ml-2 transition-transform group-hover:translate-x-1">→</span>
                </a>
            </div>
        </div>
    </section>



</x-layouts.app>
