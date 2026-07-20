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
                    <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">THE REALITY</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-secondary-dark mb-6 md:mb-8 tracking-tighter uppercase leading-[1.1]">{{ __('The Iceberg of Ignorance') }}</h2>
                    <p class="text-base md:text-xl text-slate-500 mb-8 md:mb-12 leading-relaxed border-l-4 border-primary pl-4 md:pl-6 font-medium">
                        {!! __('Menurut Sidney Yoshida, <strong class="text-secondary-dark">96% masalah tersembunyi dari Manajemen Senior</strong>. Dalam organisasi yang kompleks, isu-isu kritis secara sistematis tersaring saat naik ke atas hierarki. PASS bekerja di area yang sering tidak terlihat, namun paling menentukan kualitas dampak keputusan.') !!}
                    </p>
                    
                    <div class="space-y-4 relative z-10">
                        <!-- Stats Rows -->
                        <div class="flex items-center gap-6 p-4 bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 group rounded-xl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <span class="w-14 h-14 flex items-center justify-center bg-secondary/10 text-secondary font-black text-xl transform group-hover:bg-primary group-hover:text-white transition-colors rounded-lg">4%</span>
                            <span class="font-bold text-slate-700 text-sm md:text-base group-hover:text-secondary-dark transition-colors">{{ __('Senior Management only sees 4% of the issues') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 group rounded-xl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <span class="w-14 h-14 flex items-center justify-center bg-secondary/10 text-secondary font-black text-xl transform group-hover:bg-primary group-hover:text-white transition-colors rounded-lg">9%</span>
                            <span class="font-bold text-slate-700 text-sm md:text-base group-hover:text-secondary-dark transition-colors">{{ __('Team Managers see 9% of the problems') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 group rounded-xl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <span class="w-14 h-14 flex items-center justify-center bg-secondary/10 text-secondary font-black text-xl transform group-hover:bg-primary group-hover:text-white transition-colors rounded-lg">74%</span>
                            <span class="font-bold text-slate-700 text-sm md:text-base group-hover:text-secondary-dark transition-colors">{{ __('Team Leaders see 74% of the problems') }}</span>
                        </div>
                        <div class="flex items-center gap-6 p-4 bg-secondary-dark border border-secondary-dark shadow-md hover:shadow-lg hover:border-primary transition-all duration-300 group rounded-xl" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                            <span class="w-14 h-14 flex items-center justify-center bg-primary text-secondary-dark font-black text-xl rounded-lg">100%</span>
                            <span class="font-bold text-white group-hover:text-primary text-sm md:text-base transition-colors">{{ __('Staff sees 100% of the problems') }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Mengapa PASS -->
                <div class="bg-secondary-dark p-8 md:p-12 lg:p-16 shadow-2xl relative overflow-hidden text-white border-b-8 border-primary rounded-2xl" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-secondary/20 transform rotate-45 pointer-events-none blur-3xl"></div>
                    
                    <div class="relative z-10">
                        <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">WHY CHOOSE US</span>
                        <h3 class="text-3xl md:text-5xl font-black text-white mb-6 md:mb-8 uppercase tracking-tighter leading-tight">
                            {{ __('Mengapa PASS?') }}
                        </h3>
                        
                        <blockquote class="border-l-4 border-primary pl-6 py-2 mb-12 bg-white/5 rounded-r-lg">
                            <p class="text-lg md:text-xl text-white/90 font-light leading-relaxed">
                                {{ __('"Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."') }}
                            </p>
                        </blockquote>
                        
                        <div class="space-y-8">
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-primary/10 flex items-center justify-center shrink-0 rounded-xl text-xl font-black text-primary group-hover:bg-primary group-hover:text-secondary-dark transition-all transform group-hover:scale-110">1</div>
                                <div>
                                    <h4 class="text-lg font-black text-white mb-2 tracking-wide">{{ __('Berpengalaman Lintas Industri') }}</h4>
                                    <p class="text-white/60 leading-relaxed text-sm font-medium">{{ __('Berkolaborasi dengan lembaga besar nasional dan internasional (Pertamina, BAPPENAS, Kemenkes, UNDP, OJK, BNI, dan lainnya).') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-primary/10 flex items-center justify-center shrink-0 rounded-xl text-xl font-black text-primary group-hover:bg-primary group-hover:text-secondary-dark transition-all transform group-hover:scale-110">2</div>
                                <div>
                                    <h4 class="text-lg font-black text-white mb-2 tracking-wide">{{ __('Berbasis Sistem & Data') }}</h4>
                                    <p class="text-white/60 leading-relaxed text-sm font-medium">{{ __('Menggunakan Empathy–System–Result Framework untuk memastikan setiap intervensi punya jalur hasil yang jelas.') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-6 group">
                                <div class="w-12 h-12 bg-primary/10 flex items-center justify-center shrink-0 rounded-xl text-xl font-black text-primary group-hover:bg-primary group-hover:text-secondary-dark transition-all transform group-hover:scale-110">3</div>
                                <div>
                                    <h4 class="text-lg font-black text-white mb-2 tracking-wide">{{ __('Pendekatan Humanis & Adaptif') }}</h4>
                                    <p class="text-white/60 leading-relaxed text-sm font-medium">{{ __('Kami percaya transformasi berhasil hanya jika manusia di dalamnya ikut berubah. Kelas kami bukan untuk diingat, tapi membangun sistem.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 md:py-24 bg-[#F8F9FA] relative">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">{{ __('Testimonials') }}</span>
                <h2 class="text-3xl md:text-5xl font-black text-secondary-dark tracking-tighter uppercase">{{ __('What Leaders Say') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Apa yang harus dilakukan, langsung dipraktekkan! Agile-Design Thinking dari PASS berbeda dari yang biasanya."') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('Manager Retail Chain') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Indonesia') }}</p>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Tim PASS berisi profesional berpengalaman dengan solusi implementatif dalam bentuk report yang langsung berdampak pada bisnis."') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('Founder Food Manufacturer') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Bahrain') }}</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"PASSolving membantu kami melihat realita dengan objektif dan memberikan solusi yang tepat."') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('Founder Beauty Clinic') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Indonesia') }}</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"PASSolving membantu membangun visi kuat dan peta jalannya."') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('Founder Integrated Farm') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Indonesia') }}</p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"Kami berhasil menghemat biaya tanpa mengorbankan kualitas."') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('COO Agroindustry') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Indonesia') }}</p>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="absolute right-0 top-0 w-24 h-24 bg-primary/5 rounded-bl-full transform group-hover:scale-110 transition-transform"></div>
                    <svg class="w-8 h-8 text-primary/40 mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                    <p class="text-slate-600 text-lg font-medium italic mb-8 leading-relaxed relative z-10">{{ __('"From Fragmented Teams to Unified Agility"') }}</p>
                    <div class="relative z-10 mt-auto border-t border-gray-100 pt-6">
                        <p class="font-black text-secondary-dark text-sm tracking-wide uppercase">{{ __('Perusahaan Telekomunikasi') }}</p>
                        <p class="text-primary font-bold text-xs mt-1 uppercase tracking-widest">{{ __('Indonesia') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
