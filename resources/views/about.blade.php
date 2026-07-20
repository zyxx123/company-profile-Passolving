<x-layouts.app>
    <x-hero-banner 
        title="{{ __('About PASSolving') }}" 
        subtitle="{{ __('Not every organization needs PASS. PASS works when leadership is ready to face uncomfortable realities.') }}"
        bgImage="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-16 md:py-24 lg:py-32 bg-white relative">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center mb-16 md:mb-32">
                
                <!-- The Iceberg of Ignorance -->
                <div class="relative" data-aos="fade-right" data-aos-duration="800">
                    <div class="absolute -left-6 -top-6 w-20 h-20 bg-primary/20 transform rotate-45 -z-10"></div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-accent mb-6 md:mb-8 tracking-tight uppercase">{{ __('The Iceberg of Ignorance') }}</h2>
                    <p class="text-base md:text-xl text-slate-500 mb-8 md:mb-12 leading-relaxed border-l-4 border-primary pl-4 md:pl-6">
                        {!! __('Menurut Sidney Yoshida, <strong class="text-accent">96% masalah tersembunyi dari Manajemen Senior</strong>. Dalam organisasi yang kompleks, isu-isu kritis secara sistematis tersaring saat naik ke atas hierarki. PASS bekerja di area yang sering tidak terlihat, namun paling menentukan kualitas dampak keputusan.') !!}
                    </p>
                    
                    <div class="space-y-4 relative z-10">
                        <!-- Stats Rows -->
                        <div class="flex items-center gap-6 p-4 bg-white border border-slate-200 hover:border-secondary transition-colors duration-300 group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <span class="w-16 h-16 flex items-center justify-center bg-secondary text-white font-black text-xl transform group-hover:rotate-12 transition-transform">4%</span>
                            <span class="font-bold text-slate-700 text-lg group-hover:text-accent transition-colors">{{ __('Senior Management only sees 4% of the issues') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-white border border-slate-200 hover:border-secondary transition-colors duration-300 group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <span class="w-16 h-16 flex items-center justify-center bg-secondary text-white font-black text-xl transform group-hover:rotate-12 transition-transform">9%</span>
                            <span class="font-bold text-slate-700 text-lg group-hover:text-accent transition-colors">{{ __('Team Managers see 9% of the problems') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-white border border-slate-200 hover:border-secondary transition-colors duration-300 group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <span class="w-16 h-16 flex items-center justify-center bg-secondary text-white font-black text-xl transform group-hover:rotate-12 transition-transform">74%</span>
                            <span class="font-bold text-slate-700 text-lg group-hover:text-accent transition-colors">{{ __('Team Leaders see 74% of the problems') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-primary border border-primary hover:bg-secondary hover:border-secondary transition-colors duration-300 group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <span class="w-16 h-16 flex items-center justify-center bg-white text-accent font-black text-xl transform group-hover:rotate-12 transition-transform">100%</span>
                            <span class="font-bold text-accent group-hover:text-white text-lg transition-colors">{{ __('Staff sees 100% of the problems') }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Mengapa PASS -->
                <div class="bg-secondary p-8 md:p-12 lg:p-16 shadow-2xl relative overflow-hidden text-white border-b-8 border-primary" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="absolute -right-20 -top-20 w-64 h-64 border-4 border-primary/20 transform rotate-45 pointer-events-none"></div>
                    
                    <div class="relative z-10">
                        <h3 class="text-2xl md:text-4xl font-black text-white mb-6 md:mb-8 uppercase tracking-widest flex items-center gap-4">
                            <div class="w-8 h-1 bg-primary"></div>
                            {{ __('Mengapa PASS?') }}
                        </h3>
                        
                        <blockquote class="border-l-4 border-primary pl-6 py-2 mb-12">
                            <p class="text-xl text-white/90 font-light leading-relaxed">
                                {{ __('"Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."') }}
                            </p>
                        </blockquote>
                        
                        <div class="space-y-8">
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 text-xl font-black text-primary group-hover:bg-primary group-hover:text-accent group-hover:border-primary transition-all transform group-hover:rotate-12">1</div>
                                <div>
                                    <h4 class="text-lg uppercase tracking-widest font-black text-white mb-2">{{ __('Berpengalaman Lintas Industri') }}</h4>
                                    <p class="text-slate-400 leading-relaxed font-medium">{{ __('Berkolaborasi dengan lembaga besar nasional dan internasional (Pertamina, BAPPENAS, Kemenkes, UNDP, OJK, BNI, dan lainnya).') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 text-xl font-black text-primary group-hover:bg-primary group-hover:text-accent group-hover:border-primary transition-all transform group-hover:rotate-12">2</div>
                                <div>
                                    <h4 class="text-lg uppercase tracking-widest font-black text-white mb-2">{{ __('Berbasis Sistem & Data') }}</h4>
                                    <p class="text-slate-400 leading-relaxed font-medium">{{ __('Menggunakan Empathy–System–Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 text-xl font-black text-primary group-hover:bg-primary group-hover:text-accent group-hover:border-primary transition-all transform group-hover:rotate-12">3</div>
                                <div>
                                    <h4 class="text-lg uppercase tracking-widest font-black text-white mb-2">{{ __('Pendekatan Humanis & Adaptif') }}</h4>
                                    <p class="text-slate-400 leading-relaxed font-medium">{{ __('Kami percaya transformasi berhasil hanya jika manusia di dalamnya ikut berubah. Kelas kami bukan untuk diingat, tapi membangun sistem.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- What Leaders Say -->
            <div>
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                    <h2 class="text-primary font-black tracking-widest uppercase text-sm mb-4">{{ __('Testimonials') }}</h2>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-black text-accent tracking-tight uppercase">{{ __('What Leaders Say') }}</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-0 border-t border-l border-slate-200 bg-white">
                    <!-- Testimonial 1 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('Manager Retail Chain') }}</p>
                            <p class="text-slate-400 group-hover:text-slate-500 text-sm mt-1">{{ __('Indonesia') }}</p>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada bisnis."') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('Founder Food Manufacturer') }}</p>
                            <p class="text-slate-400 group-hover:text-slate-500 text-sm mt-1">{{ __('Bahrain') }}</p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('Founder Beauty Clinic') }}</p>
                            <p class="text-slate-400 group-hover:text-slate-500 text-sm mt-1">{{ __('Indonesia') }}</p>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"PASSolving membantu membangun visi kuat dan peta jalannya."') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('Founder Integrated Farm') }}</p>
                            <p class="text-slate-400 group-hover:text-slate-500 text-sm mt-1">{{ __('Indonesia') }}</p>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Kami berhasil menghemat biaya tanpa mengorbankan kualitas."') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('COO Agroindustry') }}</p>
                            <p class="text-slate-400 group-hover:text-slate-500 text-sm mt-1">{{ __('Indonesia') }}</p>
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="p-10 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group cursor-pointer relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 transform rotate-45 translate-x-8 -translate-y-8 group-hover:bg-primary/20 transition-colors"></div>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"From Fragmented Teams to Unified Agility"') }}</p>
                        <div class="relative z-10 mt-auto">
                            <p class="font-black text-accent text-xs tracking-widest uppercase group-hover:text-primary transition-colors">{{ __('Perusahaan Telekomunikasi') }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
