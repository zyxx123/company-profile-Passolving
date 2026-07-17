<x-layouts.app>
    <x-hero-banner 
        title="{{ __('Our Capabilities') }}" 
        subtitle="{{ __('Memadukan disiplin engineering, management dan human learning dalam tiga pilar utama: Training, Consulting, Research.') }}"
        bgImage="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="py-24 md:py-32 bg-white relative">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            
            <!-- The Business Agility Assessment -->
            <div class="mb-32">
                <div class="bg-secondary p-12 md:p-20 relative overflow-hidden shadow-2xl border-l-8 border-primary group">
                    <div class="absolute -right-20 -top-20 w-64 h-64 border-4 border-primary/20 transform rotate-45 pointer-events-none group-hover:rotate-90 transition-transform duration-1000"></div>
                    
                    <div class="relative z-10 text-center max-w-4xl mx-auto">
                        <div class="inline-flex items-center gap-2 px-6 py-2 bg-primary text-secondary text-sm font-black mb-8 uppercase tracking-widest">
                            Assessment Platform
                        </div>
                        <h3 class="text-4xl md:text-5xl font-black text-white mb-8 tracking-tight uppercase">{{ __('The Business Agility Assessment™') }}</h3>
                        <p class="text-xl text-slate-300 leading-relaxed mb-12 font-medium">
                            {{ __('Digunakan untuk memahami kesiapan organisasi dalam menghadapi perubahan dan menentukan prioritas strategis. Hasilnya menjadi dasar pengambilan keputusan sebelum inisiatif perubahan ditetapkan.') }}
                        </p>
                        
                        <div class="grid sm:grid-cols-2 gap-0 text-left relative z-20 border-t border-l border-white/10">
                            <div class="bg-secondary p-8 border-b border-r border-white/10 hover:bg-primary group/card transition-colors duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-secondary transition-colors">{{ __('1. Transformation Agility') }}</h4>
                                <p class="text-slate-400 font-medium group-hover/card:text-secondary/80">{{ __('Kepemimpinan, Budaya & Arah Strategis') }}</p>
                            </div>
                            <div class="bg-secondary p-8 border-b border-r border-white/10 hover:bg-primary group/card transition-colors duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-secondary transition-colors">{{ __('2. R&D Agility') }}</h4>
                                <p class="text-slate-400 font-medium group-hover/card:text-secondary/80">{{ __('Inovasi, Pelanggan & Perbaikan Berkelanjutan') }}</p>
                            </div>
                            <div class="bg-secondary p-8 border-b border-r border-white/10 hover:bg-primary group/card transition-colors duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-secondary transition-colors">{{ __('3. Strategy Agility') }}</h4>
                                <p class="text-slate-400 font-medium group-hover/card:text-secondary/80">{{ __('Penyelarasan Enterprise & Tata Kelola') }}</p>
                            </div>
                            <div class="bg-secondary p-8 border-b border-r border-white/10 hover:bg-primary group/card transition-colors duration-300">
                                <h4 class="text-xl font-black text-white mb-2 group-hover/card:text-secondary transition-colors">{{ __('4. Operational Agility') }}</h4>
                                <p class="text-slate-400 font-medium group-hover/card:text-secondary/80">{{ __('Kesiapan Tim & Praktik Operasional') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Methodology -->
            <div class="mb-32">
                <div class="text-center mb-16">
                    <h2 class="text-primary font-black tracking-widest uppercase text-sm mb-4">{{ __('Core Approach') }}</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-secondary tracking-tight mb-6 uppercase">{{ __('Training Methodology') }}</h3>
                    <p class="text-xl text-slate-500 max-w-2xl mx-auto font-medium">{{ __('Setiap fase disesuaikan dengan konteks organisasi dan tingkat kesiapan perubahan.') }}</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-0 max-w-5xl mx-auto mb-16 border-2 border-slate-200">
                    <!-- 80% Activity -->
                    <div class="bg-white p-12 border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-500 group relative overflow-hidden">
                        <div class="text-6xl font-black text-primary mb-6 transform group-hover:scale-110 group-hover:translate-x-2 transition-transform duration-500 relative z-10">80%</div>
                        <h4 class="text-2xl font-black text-secondary mb-4 relative z-10 group-hover:text-primary transition-colors tracking-widest uppercase">ACTIVITY</h4>
                        <p class="text-slate-600 group-hover:text-slate-300 text-lg leading-relaxed relative z-10 font-medium">
                            {{ __('Aktivitas interaktif seperti simulasi, studi kasus, role play, bermain dan praktik langsung agar peserta dapat belajar melalui pengalaman saat itu (learning by doing).') }}
                        </p>
                    </div>
                    
                    <!-- 20% Insight -->
                    <div class="bg-white p-12 hover:bg-primary transition-colors duration-500 group relative overflow-hidden">
                        <div class="text-6xl font-black text-secondary mb-6 transform group-hover:scale-110 group-hover:translate-x-2 transition-transform duration-500 relative z-10">20%</div>
                        <h4 class="text-2xl font-black text-secondary mb-4 relative z-10 tracking-widest uppercase">INSIGHT</h4>
                        <p class="text-slate-600 group-hover:text-secondary/80 text-lg leading-relaxed relative z-10 font-medium">
                            {{ __('Refleksi, penguatan konsep, dan kunci pembelajaran dari setiap aktivitas yang telah dilakukan untuk dibawa dan diterapkan secara langsung ke dunia kerja.') }}
                        </p>
                    </div>
                </div>

                <!-- Design Training Steps -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-0 border-t border-l border-slate-200">
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-slate-50 transition-colors group">
                        <div class="text-sm font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform">STEP 1</div>
                        <h5 class="text-xl font-black text-secondary mb-3 uppercase">{{ __('Problem Identification') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Identifikasi permasalahan dan kebutuhan melalui sesi empathize.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-slate-50 transition-colors group">
                        <div class="text-sm font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform">STEP 2</div>
                        <h5 class="text-xl font-black text-secondary mb-3 uppercase">{{ __('Action Development') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Penyusunan modul, metode pembelajaran, dan aktivitas pelatihan.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-slate-50 transition-colors group">
                        <div class="text-sm font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform">STEP 3</div>
                        <h5 class="text-xl font-black text-secondary mb-3 uppercase">{{ __('Program Implementation') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Implementasi secara interaktif, partisipatif dengan penekanan pada praktik.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-slate-50 transition-colors group">
                        <div class="text-sm font-black tracking-widest text-primary mb-4 transform group-hover:translate-x-2 transition-transform">STEP 4</div>
                        <h5 class="text-xl font-black text-secondary mb-3 uppercase">{{ __('Evaluation') }}</h5>
                        <p class="text-slate-500 text-sm font-medium">{{ __('Mengukur efektivitas melalui pre/post test, coaching, dan report evaluation.') }}</p>
                    </div>
                </div>
            </div>

            <!-- LEGO Serious Play -->
            <div class="mb-32">
                <div class="bg-white border-4 border-secondary p-12 md:p-20 relative overflow-hidden text-center max-w-5xl mx-auto shadow-2xl group">
                    <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-primary/20 transform rotate-45 transition-transform duration-700 group-hover:scale-150 pointer-events-none"></div>
                    <h3 class="text-4xl md:text-5xl lg:text-6xl font-black text-secondary mb-4 tracking-tight">LEGO® Serious Play®</h3>
                    <h4 class="text-2xl font-black text-primary mb-8 uppercase tracking-widest">{{ __('From Bricks to Insights') }}</h4>
                    <p class="text-xl text-slate-600 leading-relaxed mb-12 max-w-3xl mx-auto font-medium">
                        {{ __('Unlocking the new design thinking through play. Facilitated workshops for strategy, team & innovation.') }}
                    </p>
                    <div class="bg-secondary p-10 text-left max-w-4xl mx-auto relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-2 h-full bg-primary"></div>
                        <h5 class="font-black tracking-widest uppercase text-primary mb-4">{{ __('Manfaat:') }}</h5>
                        <p class="text-slate-300 font-medium leading-relaxed">
                            {{ __('Menghadirkan pendekatan unik dan partisipatif untuk berpikir bersama. Melalui proses membangun dan bercerita (building & storytelling), setiap peserta punya ruang yang setara untuk berkontribusi, ide-ide kompleks dapat divisualisasikan dengan jelas, dan strategi lahir dari kolaborasi nyata.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- PASS Engagement (4S) -->
            <div class="mb-32">
                <div class="text-center mb-16">
                    <h2 class="text-primary font-black tracking-widest uppercase text-sm mb-4">{{ __('PASS Engagement') }}</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-secondary tracking-tight mb-6 uppercase">{{ __('The 4S Framework') }}</h3>
                </div>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-0 border-t border-l border-slate-200">
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group">
                        <h4 class="text-2xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">SCAN</h4>
                        <p class="font-bold text-slate-400 mb-4 text-xs uppercase tracking-widest">{{ __('(Diagnosis)') }}</p>
                        <p class="text-slate-600 group-hover:text-slate-300 text-sm mb-6 font-medium leading-relaxed">{{ __('Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.') }}</p>
                        <p class="text-xs text-primary font-bold">{{ __('Deliverables: Level Report, Org Diagnostic, Priority Mapping.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group">
                        <h4 class="text-2xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">SHIFT</h4>
                        <p class="font-bold text-slate-400 mb-4 text-xs uppercase tracking-widest">{{ __('(Behavior)') }}</p>
                        <p class="text-slate-600 group-hover:text-slate-300 text-sm mb-6 font-medium leading-relaxed">{{ __('Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif.') }}</p>
                        <p class="text-xs text-primary font-bold">{{ __('Deliverables: Learning Sessions, Retrospectives, Coaching.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group">
                        <h4 class="text-2xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">SCALE</h4>
                        <p class="font-bold text-slate-400 mb-4 text-xs uppercase tracking-widest">{{ __('(Strategy)') }}</p>
                        <p class="text-slate-600 group-hover:text-slate-300 text-sm mb-6 font-medium leading-relaxed">{{ __('Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja organisasi.') }}</p>
                        <p class="text-xs text-primary font-bold">{{ __('Deliverables: Roadmap, Process Redesign, Enablement Assets.') }}</p>
                    </div>
                    <div class="bg-white p-8 border-b border-r border-slate-200 hover:bg-secondary hover:text-white transition-colors duration-300 group">
                        <h4 class="text-2xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">SCRIBE</h4>
                        <p class="font-bold text-slate-400 mb-4 text-xs uppercase tracking-widest">{{ __('(Research)') }}</p>
                        <p class="text-slate-600 group-hover:text-slate-300 text-sm mb-6 font-medium leading-relaxed">{{ __('Menyusun story of impact untuk pemangku kepentingan.') }}</p>
                        <p class="text-xs text-primary font-bold">{{ __('Deliverables: Impact Report, Knowledge & Comm Assets.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Certification -->
            <div>
                <div class="bg-primary p-12 md:p-20 text-secondary text-center shadow-xl border-b-8 border-secondary relative overflow-hidden group">
                    <div class="absolute left-0 top-0 w-32 h-32 bg-white/10 transform rotate-45 -translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <h3 class="text-3xl md:text-4xl font-black mb-6 uppercase tracking-widest">{{ __('LSP Softskill Indonesia Kompeten') }}</h3>
                    <p class="mb-12 max-w-3xl mx-auto text-lg text-secondary/80 font-bold">{{ __('SKKNI 2020-234 tentang Penetapan Standar Kompetensi Kerja Nasional Indonesia Kategori Pendidikan Bidang Soft skills.') }}</p>
                    
                    <div class="grid md:grid-cols-3 gap-0 relative z-10 border-t border-l border-secondary/20">
                        <div class="bg-transparent p-8 border-b border-r border-secondary/20 hover:bg-secondary hover:text-white transition-colors duration-300 group/card">
                            <h4 class="text-2xl font-black mb-3">{{ __('Skema 1') }}</h4>
                            <p class="font-bold text-secondary/80 group-hover/card:text-white/80">{{ __('Pemecahan Masalah (Problem Solving)') }}</p>
                        </div>
                        <div class="bg-transparent p-8 border-b border-r border-secondary/20 hover:bg-secondary hover:text-white transition-colors duration-300 group/card">
                            <h4 class="text-2xl font-black mb-3">{{ __('Skema 2') }}</h4>
                            <p class="font-bold text-secondary/80 group-hover/card:text-white/80">{{ __('Pengembangan Kepemimpinan') }}</p>
                        </div>
                        <div class="bg-transparent p-8 border-b border-r border-secondary/20 hover:bg-secondary hover:text-white transition-colors duration-300 group/card">
                            <h4 class="text-2xl font-black mb-3">{{ __('Skema 3') }}</h4>
                            <p class="font-bold text-secondary/80 group-hover/card:text-white/80">{{ __('Pengembangan Komunikasi yang Efektif') }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
