<x-layouts.app>
    <!-- 1. PAGE HEADER (HERO) -->
    <section class="pt-[140px] pb-[80px] bg-gradient-to-br from-primary-dark to-primary text-white">
        <div class="container mx-auto px-6 max-w-[1320px] text-center">
            <h1 class="text-4xl lg:text-[56px] font-black leading-[1.2] mb-6 max-w-4xl mx-auto uppercase">
                Our Services
            </h1>
            <p class="text-white/80 max-w-2xl mx-auto leading-relaxed text-xl">
                Helping organizations transform through integrated Training, Consulting, and Research.
            </p>
        </div>
    </section>

    <!-- 2. SERVICE OVERVIEW (3 PILAR UTAMA) -->
    <section class="py-20 -mt-16 z-10 relative">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Training -->
                <div class="bg-white p-10 rounded-[32px] shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-graduation-cap" class="w-10 h-10 text-primary group-hover:text-primary-dark transition-colors" stroke-width="1.5" />
                    </div>
                    <h3 class="text-2xl font-black text-[#141414] mb-4">Training</h3>
                    <p class="text-[#585857] leading-relaxed">
                        Mengembangkan kompetensi individu dan tim melalui pembelajaran yang aplikatif dan interaktif.
                    </p>
                </div>
                <!-- Consulting -->
                <div class="bg-white p-10 rounded-[32px] shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-briefcase" class="w-10 h-10 text-primary group-hover:text-primary-dark transition-colors" stroke-width="1.5" />
                    </div>
                    <h3 class="text-2xl font-black text-[#141414] mb-4">Consulting</h3>
                    <p class="text-[#585857] leading-relaxed">
                        Membantu organisasi menerjemahkan strategi menjadi eksekusi yang nyata dan sistematis.
                    </p>
                </div>
                <!-- Research -->
                <div class="bg-white p-10 rounded-[32px] shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col items-center text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-line-chart" class="w-10 h-10 text-primary group-hover:text-white transition-colors" stroke-width="1.5" />
                    </div>
                    <h3 class="text-2xl font-black text-[#141414] mb-4">Research</h3>
                    <p class="text-[#585857] leading-relaxed">
                        Memberikan diagnosis organisasi berbasis data untuk mendukung keputusan strategis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. DETAIL SERVICE -->
    <section class="py-16 lg:py-24 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="space-y-20">
                
                <!-- Training Detail -->
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="w-full lg:w-1/2">
                        <span class="text-cta font-bold tracking-widest uppercase text-sm mb-3 block">Pilar 01</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#141414] leading-[1.2] mb-4">
                            Training & Development
                        </h2>
                        <p class="text-[#585857] leading-relaxed mb-6">
                            Program pelatihan kami didesain dengan metodologi "learning by doing" untuk memastikan materi langsung dapat diaplikasikan. Meliputi:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Leadership Agility:</span> <span class="text-[#585857]">Menciptakan pemimpin yang adaptif.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Design Thinking:</span> <span class="text-[#585857]">Solusi berpusat pada manusia.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Business Agility:</span> <span class="text-[#585857]">Kesiapan organisasi menghadapi perubahan.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Soft Skill Certification:</span> <span class="text-[#585857]">Sertifikasi BNSP & keahlian khusus.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">LEGO® Serious Play®:</span> <span class="text-[#585857]">Fasilitasi strategi melalui bermain yang serius.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80" alt="Training" class="rounded-[24px] shadow-lg w-full aspect-[4/3] object-cover">
                    </div>
                </div>

                <!-- Consulting Detail -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
                    <div class="w-full lg:w-1/2">
                        <span class="text-cta font-bold tracking-widest uppercase text-sm mb-3 block">Pilar 02</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#141414] leading-[1.2] mb-4">
                            Consulting Services
                        </h2>
                        <p class="text-[#585857] leading-relaxed mb-6">
                            Bermitra dengan kami untuk mengawal perubahan dari akar hingga pucuk kepemimpinan. Fokus layanan konsultasi kami mencakup:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Business Transformation:</span> <span class="text-[#585857]">Mengelola transformasi skala besar.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Change Management:</span> <span class="text-[#585857]">Memastikan adopsi perubahan yang mulus.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Organizational Development:</span> <span class="text-[#585857]">Pembangunan struktur & budaya.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Strategy Execution:</span> <span class="text-[#585857]">Penerjemahan strategi menjadi KPI dan tindakan.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Business Process Improvement:</span> <span class="text-[#585857]">Optimalisasi dan efisiensi alur kerja.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=800&q=80" alt="Consulting" class="rounded-[24px] shadow-lg w-full aspect-[4/3] object-cover">
                    </div>
                </div>

                <!-- Research Detail -->
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="w-full lg:w-1/2">
                        <span class="text-cta font-bold tracking-widest uppercase text-sm mb-3 block">Pilar 03</span>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#141414] leading-[1.2] mb-4">
                            Research & Assessment
                        </h2>
                        <p class="text-[#585857] leading-relaxed mb-6">
                            Sebelum organisasi menjalankan transformasi, diagnosis mendalam wajib dilakukan. Kami menyediakan:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Organization Assessment:</span> <span class="text-[#585857]">Mengukur tingkat kematangan kapabilitas.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Business Agility Assessment:</span> <span class="text-[#585857]">Analisis kecepatan adaptasi perusahaan.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Organizational Diagnosis:</span> <span class="text-[#585857]">Mengidentifikasi akar masalah tersembunyi.</span></div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center shrink-0 mt-0.5"><x-icon name="lucide-check" class="w-4 h-4 text-primary" stroke-width="3" /></div>
                                <div><span class="font-bold text-[#141414]">Strategic Recommendation:</span> <span class="text-[#585857]">Panduan perbaikan berbasis data objektif.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Research" class="rounded-[24px] shadow-lg w-full aspect-[4/3] object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. PASS ENGAGEMENT PROCESS -->
    <section class="py-20 lg:py-28 bg-primary-dark text-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold leading-[1.2] max-w-2xl mx-auto">
                    PASS Engagement Process
                </h2>
                <p class="text-white/70 mt-4 max-w-2xl mx-auto">Setiap fase disesuaikan dengan konteks organisasi dan tingkat kesiapan perubahan.</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <!-- SCAN -->
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl relative">
                    <div class="text-5xl font-black text-white/10 absolute top-6 right-6">01</div>
                    <h3 class="text-2xl font-black text-cta mb-4 uppercase tracking-wider relative z-10">Scan</h3>
                    <p class="text-white/80 leading-relaxed text-sm relative z-10">
                        Memahami kondisi dan tantangan organisasi. Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.
                    </p>
                </div>
                <!-- SHIFT -->
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl relative">
                    <div class="text-5xl font-black text-white/10 absolute top-6 right-6">02</div>
                    <h3 class="text-2xl font-black text-cta mb-4 uppercase tracking-wider relative z-10">Shift</h3>
                    <p class="text-white/80 leading-relaxed text-sm relative z-10">
                        Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif terhadap prioritas.
                    </p>
                </div>
                <!-- SCALE -->
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl relative">
                    <div class="text-5xl font-black text-white/10 absolute top-6 right-6">03</div>
                    <h3 class="text-2xl font-black text-cta mb-4 uppercase tracking-wider relative z-10">Scale</h3>
                    <p class="text-white/80 leading-relaxed text-sm relative z-10">
                        Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja dan budaya organisasi yang berkelanjutan.
                    </p>
                </div>
                <!-- SCRIBE -->
                <div class="bg-white/5 border border-white/10 p-8 rounded-3xl relative">
                    <div class="text-5xl font-black text-white/10 absolute top-6 right-6">04</div>
                    <h3 class="text-2xl font-black text-cta mb-4 uppercase tracking-wider relative z-10">Scribe</h3>
                    <p class="text-white/80 leading-relaxed text-sm relative z-10">
                        Mendokumentasikan dampak dan menyusun story of impact untuk pembelajaran dan pemangku kepentingan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TRAINING METHODOLOGY -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Training Methodology
                </h2>
                <p class="text-[#585857] mt-4">Bagaimana PASS merancang program pelatihan dari awal hingga evaluasi hasil.</p>
            </div>

            <div class="relative">
                <!-- Line connect (Desktop) -->
                <div class="hidden lg:block absolute top-12 left-10 right-10 h-1 bg-gray-100 z-0"></div>

                <div class="grid lg:grid-cols-4 gap-8">
                    <!-- Step 1 -->
                    <div class="relative z-10 text-center">
                        <div class="w-24 h-24 mx-auto bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_30px_rgba(15,159,164,0.3)]">
                            <x-icon name="lucide-search" class="w-10 h-10 text-white" />
                        </div>
                        <h4 class="text-lg font-black text-[#141414] mb-3">Problem Identification</h4>
                        <p class="text-sm text-[#585857]">Identifikasi masalah dan kebutuhan training peserta/organisasi melalui sesi empathize.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative z-10 text-center">
                        <div class="w-24 h-24 mx-auto bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_30px_rgba(15,159,164,0.3)]">
                            <x-icon name="lucide-pen-tool" class="w-10 h-10 text-white" />
                        </div>
                        <h4 class="text-lg font-black text-[#141414] mb-3">Action Development</h4>
                        <p class="text-sm text-[#585857]">Penyusunan modul materi, metode, serta aktivitas training secara sistematis.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative z-10 text-center">
                        <div class="w-24 h-24 mx-auto bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_30px_rgba(15,159,164,0.3)]">
                            <x-icon name="lucide-play-circle" class="w-10 h-10 text-white" />
                        </div>
                        <h4 class="text-lg font-black text-[#141414] mb-3">Program Implementation</h4>
                        <p class="text-sm text-[#585857]">Implementasi interaktif & partisipatif (learning by doing), penekanan pada praktik dan refleksi.</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="relative z-10 text-center">
                        <div class="w-24 h-24 mx-auto bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_30px_rgba(15,159,164,0.3)]">
                            <x-icon name="lucide-clipboard-check" class="w-10 h-10 text-white" />
                        </div>
                        <h4 class="text-lg font-black text-[#141414] mb-3">Evaluation</h4>
                        <p class="text-sm text-[#585857]">Mengukur efektivitas melalui pre/post test, feedback evaluation, coaching, dan report.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FEATURED PROGRAMS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Featured Programs
                </h2>
                <p class="text-[#585857] mt-4">Topik-topik andalan untuk fondasi sistem dan pemikiran yang kuat.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Program 1 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Leadership Agility</h3>
                    <p class="text-sm text-[#585857]">Strategic execution in complex organizations, adaptive leadership, building feedback culture.</p>
                </div>
                <!-- Program 2 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Business Agility</h3>
                    <p class="text-sm text-[#585857]">Fundamentals for business, cross-functional collaboration, translating strategy into action.</p>
                </div>
                <!-- Program 3 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Design Thinking</h3>
                    <p class="text-sm text-[#585857]">Humanity-centered innovation, solving complex problems with system & design thinking.</p>
                </div>
                <!-- Program 4 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Communication</h3>
                    <p class="text-sm text-[#585857]">Communication for execution, cross-team collaboration, managing self and others.</p>
                </div>
                <!-- Program 5 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Productivity</h3>
                    <p class="text-sm text-[#585857]">Agility sprint, learning by transforming, consistent performance management.</p>
                </div>
                <!-- Program 6 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                    <h3 class="text-xl font-bold text-[#141414] mb-2 group-hover:text-primary transition-colors">Soft Skill Certification</h3>
                    <p class="text-sm text-[#585857]">Sertifikasi BNSP Skema Pemecahan Masalah, Kepemimpinan, dan Komunikasi Efektif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. INDUSTRIES WE SERVE -->
    <section class="py-20 lg:py-28 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Industries We Serve
                </h2>
                <p class="text-[#585857] mt-4">Dipercaya di berbagai sektor berskala nasional hingga multinasional.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-building" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Government</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-factory" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Manufacturing</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-radio-receiver" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Telecommunication</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-landmark" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Banking & Finance</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-stethoscope" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Healthcare</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-graduation-cap" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Education</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-sprout" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Agriculture</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center group-hover:bg-primary-dark shadow-sm transition-all duration-300 group-hover:-translate-y-2">
                        <x-icon name="lucide-shopping-cart" class="w-8 h-8 text-white transition-colors" />
                    </div>
                    <span class="font-bold text-[#141414]">Retail</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. WHY CHOOSE PASS -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                <div class="w-full lg:w-[40%]">
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] mb-6">
                        Why Choose PASS
                    </h2>
                    <p class="text-[#585857] leading-relaxed">
                        Kami bukan sekedar lembaga pelatihan. Kami adalah mitra transformasi yang siap berdampingan memastikan setiap investasi perubahan organisasi Anda membuahkan dampak nyata yang berkelanjutan.
                    </p>
                </div>

                <div class="w-full lg:w-[60%] grid md:grid-cols-2 gap-8">
                    <!-- Point 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-primary mb-2 flex items-center gap-3">
                            <x-icon name="lucide-database" class="w-6 h-6 text-cta" stroke-width="2" />
                            Data-Driven Approach
                        </h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Strategi dan solusi kami dibangun di atas Empathy-System-Result Framework berbasis data diagnostik yang terukur.</p>
                    </div>

                    <!-- Point 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-primary mb-2 flex items-center gap-3">
                            <x-icon name="lucide-users" class="w-6 h-6 text-cta" stroke-width="2" />
                            Human-Centered
                        </h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Transformasi sistem organisasi hanya berhasil jika manusianya siap. Kami fokus pada kelincahan personal (Agility).</p>
                    </div>

                    <!-- Point 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-primary mb-2 flex items-center gap-3">
                            <x-icon name="lucide-globe" class="w-6 h-6 text-cta" stroke-width="2" />
                            Cross-Industry Experience
                        </h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Rekam jejak kolaborasi sukses dari lembaga pemerintah, manufaktur, BUMN, perbankan, hingga start-up.</p>
                    </div>

                    <!-- Point 4 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="text-lg font-bold text-primary mb-2 flex items-center gap-3">
                            <x-icon name="lucide-target" class="w-6 h-6 text-cta" stroke-width="2" />
                            Measurable Results
                        </h4>
                        <p class="text-sm text-[#585857] leading-relaxed">Semua intervensi memiliki jalur hasil yang jelas: kinerja naik, biaya operasional turun, kompetensi teraplikasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layouts.app>
