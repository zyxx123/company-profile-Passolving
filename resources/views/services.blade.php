<x-layouts.app>
    <x-hero-banner 
        title="{{ __('Our Capabilities') }}" 
        subtitle="{{ __('Memadukan disiplin engineering, management dan human learning dalam tiga pilar utama: Training, Consulting, Research.') }}"
        bgImage="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-16 md:py-24 lg:py-32 bg-white relative">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            
            <!-- The Business Agility Assessment -->
            <div class="mb-32">
                <div class="bg-secondary-dark p-8 md:p-12 lg:p-20 relative overflow-hidden shadow-2xl border-l-8 border-primary group rounded-2xl" data-aos="fade-up" data-aos-duration="800">
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-secondary/20 transform rotate-45 pointer-events-none group-hover:rotate-90 transition-transform duration-1000 blur-3xl"></div>
                    
                    <div class="relative z-10 text-center max-w-4xl mx-auto">
                        <div class="inline-flex items-center gap-2 px-6 py-2 bg-primary text-secondary-dark text-sm font-black mb-8 uppercase tracking-widest rounded-full">
                            Assessment Platform
                        </div>
                        <h3 class="text-3xl md:text-4xl lg:text-5xl font-black text-white mb-6 md:mb-8 tracking-tighter uppercase leading-[1.1]">{{ __('The Business Agility Assessment™') }}</h3>
                        <p class="text-base md:text-xl text-white/80 leading-relaxed mb-8 md:mb-12 font-medium">
                            {{ __('Digunakan untuk memahami kesiapan organisasi dalam menghadapi perubahan dan menentukan prioritas strategis. Hasilnya menjadi dasar pengambilan keputusan sebelum inisiatif perubahan ditetapkan.') }}
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-left relative z-20">
                            <div class="bg-white/5 p-8 rounded-xl border border-white/10 hover:border-primary hover:bg-white/10 group/card transition-all duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-primary transition-colors tracking-wide">{{ __('1. Transformation Agility') }}</h4>
                                <p class="text-white/60 font-medium">{{ __('Kepemimpinan, Budaya & Arah Strategis') }}</p>
                            </div>
                            <div class="bg-white/5 p-8 rounded-xl border border-white/10 hover:border-primary hover:bg-white/10 group/card transition-all duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-primary transition-colors tracking-wide">{{ __('2. R&D Agility') }}</h4>
                                <p class="text-white/60 font-medium">{{ __('Inovasi, Pelanggan & Perbaikan Berkelanjutan') }}</p>
                            </div>
                            <div class="bg-white/5 p-8 rounded-xl border border-white/10 hover:border-primary hover:bg-white/10 group/card transition-all duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-primary transition-colors tracking-wide">{{ __('3. Strategy Agility') }}</h4>
                                <p class="text-white/60 font-medium">{{ __('Penyelarasan Enterprise & Tata Kelola') }}</p>
                            </div>
                            <div class="bg-white/5 p-8 rounded-xl border border-white/10 hover:border-primary hover:bg-white/10 group/card transition-all duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-primary transition-colors tracking-wide">{{ __('4. Operational Agility') }}</h4>
                                <p class="text-white/60 font-medium">{{ __('Kesiapan Tim & Praktik Operasional') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- LEGO Serious Play -->
            <div class="mb-32">
                <div class="bg-white border-4 border-gray-100 p-8 md:p-12 lg:p-20 relative overflow-hidden text-center max-w-5xl mx-auto shadow-xl hover:shadow-2xl transition-shadow group rounded-2xl" data-aos="zoom-in" data-aos-duration="700">
                    <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-primary/10 transform rotate-45 transition-transform duration-700 group-hover:scale-150 pointer-events-none rounded-3xl"></div>
                    <h3 class="text-3xl md:text-5xl lg:text-6xl font-black text-secondary-dark mb-4 tracking-tighter uppercase">LEGO® Serious Play®</h3>
                    <h4 class="text-lg md:text-xl font-black text-primary mb-6 md:mb-8 uppercase tracking-widest">{{ __('From Bricks to Insights') }}</h4>
                    <p class="text-base md:text-xl text-slate-500 leading-relaxed mb-8 md:mb-12 max-w-3xl mx-auto font-medium">
                        {{ __('Unlocking the new design thinking through play. Facilitated workshops for strategy, team & innovation.') }}
                    </p>
                    <div class="bg-secondary-dark p-8 md:p-10 text-left max-w-4xl mx-auto relative overflow-hidden rounded-xl border-l-4 border-primary shadow-lg">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2"></div>
                        <h5 class="font-black tracking-widest uppercase text-primary mb-4">{{ __('Manfaat:') }}</h5>
                        <p class="text-white/90 font-light leading-relaxed text-lg">
                            {{ __('Menghadirkan pendekatan unik dan partisipatif untuk berpikir bersama. Melalui proses membangun dan bercerita (building & storytelling), setiap peserta punya ruang yang setara untuk berkontribusi, ide-ide kompleks dapat divisualisasikan dengan jelas, dan strategi lahir dari kolaborasi nyata.') }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Training Methodology & 4S Framework (Light BG) -->
    <section class="py-16 md:py-24 lg:py-32 bg-[#F8F9FA] relative border-t border-gray-200">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            
            <!-- Training Methodology -->
            <div class="mb-32">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                    <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">{{ __('Core Approach') }}</span>
                    <h3 class="text-3xl md:text-5xl font-black text-secondary-dark tracking-tighter mb-4 md:mb-6 uppercase">{{ __('Training Methodology') }}</h3>
                    <p class="text-base md:text-xl text-slate-500 max-w-2xl mx-auto font-medium">{{ __('Setiap fase disesuaikan dengan konteks organisasi dan tingkat kesiapan perubahan.') }}</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto mb-16">
                    <!-- 80% Activity -->
                    <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 hover:border-secondary-dark transition-all duration-500 group relative overflow-hidden" data-aos="fade-right" data-aos-duration="700">
                        <div class="text-6xl font-black text-secondary-dark/10 mb-6 transform group-hover:scale-110 group-hover:translate-x-2 transition-transform duration-500 absolute -right-4 -bottom-4">80%</div>
                        <div class="text-6xl font-black text-primary mb-6 relative z-10">80%</div>
                        <h4 class="text-2xl font-black text-secondary-dark mb-4 relative z-10 tracking-widest uppercase">ACTIVITY</h4>
                        <p class="text-slate-500 text-lg leading-relaxed relative z-10 font-medium">
                            {{ __('Aktivitas interaktif seperti simulasi, studi kasus, role play, bermain dan praktik langsung agar peserta dapat belajar melalui pengalaman saat itu (learning by doing).') }}
                        </p>
                    </div>
                    
                    <!-- 20% Insight -->
                    <div class="bg-secondary-dark p-8 md:p-12 rounded-2xl shadow-xl transition-transform duration-500 hover:-translate-y-2 group relative overflow-hidden" data-aos="fade-left" data-aos-duration="700" data-aos-delay="150">
                        <div class="absolute inset-0 bg-primary/5 transform rotate-12 scale-150 group-hover:rotate-45 transition-transform duration-1000 pointer-events-none"></div>
                        <div class="text-6xl font-black text-primary mb-6 relative z-10">20%</div>
                        <h4 class="text-2xl font-black text-white mb-4 relative z-10 tracking-widest uppercase">INSIGHT</h4>
                        <p class="text-white/80 text-lg leading-relaxed relative z-10 font-medium">
                            {{ __('Refleksi, penguatan konsep, dan kunci pembelajaran dari setiap aktivitas yang telah dilakukan untuk dibawa dan diterapkan secara langsung ke dunia kerja.') }}
                        </p>
                    </div>
                </div>

                <!-- Design Training Steps -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md border border-gray-100 transition-all group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        <div class="text-[10px] font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform uppercase border border-primary/30 inline-block px-3 py-1 rounded-full">STEP 1</div>
                        <h5 class="text-lg font-black text-secondary-dark mb-3 uppercase tracking-wide">{{ __('Problem Identification') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Identifikasi permasalahan dan kebutuhan melalui sesi empathize.') }}</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md border border-gray-100 transition-all group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <div class="text-[10px] font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform uppercase border border-primary/30 inline-block px-3 py-1 rounded-full">STEP 2</div>
                        <h5 class="text-lg font-black text-secondary-dark mb-3 uppercase tracking-wide">{{ __('Action Development') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Penyusunan modul, metode pembelajaran, dan aktivitas pelatihan.') }}</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md border border-gray-100 transition-all group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="text-[10px] font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform uppercase border border-primary/30 inline-block px-3 py-1 rounded-full">STEP 3</div>
                        <h5 class="text-lg font-black text-secondary-dark mb-3 uppercase tracking-wide">{{ __('Program Implementation') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Implementasi secara interaktif, partisipatif dengan penekanan pada praktik.') }}</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md border border-gray-100 transition-all group" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <div class="text-[10px] font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform uppercase border border-primary/30 inline-block px-3 py-1 rounded-full">STEP 4</div>
                        <h5 class="text-lg font-black text-secondary-dark mb-3 uppercase tracking-wide">{{ __('Evaluation') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Mengukur efektivitas melalui pre/post test, coaching, dan report evaluation.') }}</p>
                    </div>
                </div>
            </div>

            <!-- PASS Engagement (4S) -->
            <div>
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
                    <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">{{ __('PASS Engagement') }}</span>
                    <h3 class="text-3xl md:text-5xl font-black text-secondary-dark tracking-tighter mb-4 md:mb-6 uppercase">{{ __('The 4S Framework') }}</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 rounded-bl-full transform group-hover:scale-150 transition-transform"></div>
                        <h4 class="text-2xl font-black text-secondary-dark mb-2 group-hover:text-primary transition-colors tracking-widest uppercase">SCAN</h4>
                        <p class="font-bold text-slate-400 mb-6 text-xs uppercase tracking-widest">{{ __('(Diagnosis)') }}</p>
                        <p class="text-slate-500 text-sm mb-6 font-medium leading-relaxed">{{ __('Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.') }}</p>
                        <div class="pt-4 border-t border-gray-100 mt-auto">
                            <p class="text-[10px] text-secondary-dark font-black uppercase tracking-widest">{{ __('Deliverables: Level Report, Org Diagnostic, Priority Mapping.') }}</p>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 rounded-bl-full transform group-hover:scale-150 transition-transform"></div>
                        <h4 class="text-2xl font-black text-secondary-dark mb-2 group-hover:text-primary transition-colors tracking-widest uppercase">SHIFT</h4>
                        <p class="font-bold text-slate-400 mb-6 text-xs uppercase tracking-widest">{{ __('(Behavior)') }}</p>
                        <p class="text-slate-500 text-sm mb-6 font-medium leading-relaxed">{{ __('Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif.') }}</p>
                        <div class="pt-4 border-t border-gray-100 mt-auto">
                            <p class="text-[10px] text-secondary-dark font-black uppercase tracking-widest">{{ __('Deliverables: Learning Sessions, Retrospectives, Coaching.') }}</p>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 rounded-bl-full transform group-hover:scale-150 transition-transform"></div>
                        <h4 class="text-2xl font-black text-secondary-dark mb-2 group-hover:text-primary transition-colors tracking-widest uppercase">SCALE</h4>
                        <p class="font-bold text-slate-400 mb-6 text-xs uppercase tracking-widest">{{ __('(Strategy)') }}</p>
                        <p class="text-slate-500 text-sm mb-6 font-medium leading-relaxed">{{ __('Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja organisasi.') }}</p>
                        <div class="pt-4 border-t border-gray-100 mt-auto">
                            <p class="text-[10px] text-secondary-dark font-black uppercase tracking-widest">{{ __('Deliverables: Roadmap, Process Redesign, Enablement Assets.') }}</p>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary transition-all duration-300 border border-gray-100 group relative overflow-hidden" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <div class="absolute right-0 top-0 w-16 h-16 bg-primary/10 rounded-bl-full transform group-hover:scale-150 transition-transform"></div>
                        <h4 class="text-2xl font-black text-secondary-dark mb-2 group-hover:text-primary transition-colors tracking-widest uppercase">SCRIBE</h4>
                        <p class="font-bold text-slate-400 mb-6 text-xs uppercase tracking-widest">{{ __('(Research)') }}</p>
                        <p class="text-slate-500 text-sm mb-6 font-medium leading-relaxed">{{ __('Menyusun story of impact untuk pemangku kepentingan.') }}</p>
                        <div class="pt-4 border-t border-gray-100 mt-auto">
                            <p class="text-[10px] text-secondary-dark font-black uppercase tracking-widest">{{ __('Deliverables: Impact Report, Knowledge & Comm Assets.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
