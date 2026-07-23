<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <section class="relative pt-[140px] pb-[100px] lg:pt-[180px] lg:pb-[140px] bg-primary text-primary-dark overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=70" alt="Team Workshop" class="w-full h-full object-cover opacity-20 mix-blend-overlay" fetchpriority="high">
            <div class="absolute inset-0 bg-primary/60"></div>
        </div>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="max-w-3xl" data-aos="fade-up">
                <h1 class="text-[clamp(2.5rem,7vw,4rem)] font-black leading-[1.1] mb-6 uppercase">
                    About PASS
                </h1>
                <p class="text-primary-dark/80 leading-relaxed text-[clamp(1rem,3vw,1.5rem)] font-light">
                    Empowering organizations to achieve measurable transformation through agility, leadership, and strategic execution.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. WHO WE ARE & 3. OUR STORY -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <!-- Who We Are -->
                <div data-aos="fade-right">
                    <span class="text-cta font-bold tracking-widest uppercase text-sm mb-4 block">Who We Are</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#141414] leading-[1.2] mb-6">
                        Konsultan Transformasi Berbasis Dampak
                    </h2>
                    <p class="text-[#585857] leading-relaxed mb-6">
                        Beroperasi di bawah naungan <strong>PT Palsindo Utama</strong>, PASS didirikan di Jakarta pada tahun 2023. Kami mendedikasikan diri sebagai firma konsultan yang berfokus pada ekosistem <strong>Training, Consulting, dan Research</strong>.
                    </p>
                    <p class="text-[#585857] leading-relaxed mb-8">
                        Kami tidak berhenti pada tataran teori atau presentasi strategi. PASS hadir untuk mendampingi dan membantu organisasi menerjemahkan strategi besar menjadi eksekusi taktis yang berbuah hasil nyata.
                    </p>

                    <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 border-l-4 border-l-primary mt-10">
                        <x-icon name="lucide-quote" class="w-8 h-8 text-primary/30 mb-4" />
                        <p class="text-xl font-bold text-[#141414] italic leading-relaxed">
                            "PASS bekerja ketika pimpinan organisasi siap menghadapi realitas yang tidak nyaman demi menghasilkan perubahan yang nyata."
                        </p>
                    </div>
                </div>

                <!-- Our Story -->
                <div class="bg-[#F8FAFB] p-10 lg:p-12 rounded-[40px] border border-gray-100" data-aos="fade-left">
                    <span class="text-cta font-bold tracking-widest uppercase text-sm mb-4 block">Our Story</span>
                    <h3 class="text-2xl font-bold text-[#141414] mb-6">Lahir dari Tantangan Eksekusi</h3>
                    <p class="text-[#585857] leading-relaxed mb-6">
                        Sejarah kami bermula dari sebuah pola masalah yang terus berulang di banyak perusahaan: <em>gap</em> (kesenjangan) yang masif antara strategi di atas kertas dan eksekusi di lapangan. Banyak organisasi memiliki rencana hebat, namun gagal beradaptasi saat berbenturan dengan dinamika pasar.
                    </p>
                    <p class="text-[#585857] leading-relaxed">
                        Kami menyadari bahwa transformasi sejati tidak bisa didorong hanya melalui perombakan struktur (sistem). Dibutuhkan perubahan perilaku, kepemimpinan (leadership), dan kelincahan (agility) dari manusia di dalamnya. Itulah mengapa PASS lahir—untuk mengintegrasikan sisi sistem dan sisi manusia demi transformasi yang paripurna.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. VISION & MISSION -->
    <section class="py-20 bg-primary text-primary-dark">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                <!-- Vision -->
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-black text-primary-dark/10 uppercase tracking-widest mb-2">01. Vision</h2>
                    <h3 class="text-3xl lg:text-4xl font-bold mb-6 text-cta">Menjadi mitra transformasi terpercaya.</h3>
                    <p class="text-primary-dark/80 leading-relaxed text-lg">
                        Membantu organisasi di seluruh Indonesia dan Asia Tenggara untuk berkembang secara adaptif, tangguh, dan berkelanjutan dalam menghadapi era disrupsi.
                    </p>
                </div>
                
                <!-- Mission -->
                <div data-aos="fade-left">
                    <h2 class="text-3xl font-black text-primary-dark/10 uppercase tracking-widest mb-6">02. Mission</h2>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-primary-dark mb-1">Solusi Berbasis Data</h4>
                                <p class="text-primary-dark/70 text-sm">Menghasilkan keputusan strategis melalui diagnosis dan riset yang terukur.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-primary-dark mb-1">Kepemimpinan Adaptif</h4>
                                <p class="text-primary-dark/70 text-sm">Mengembangkan pemimpin yang tangkas (agile) di berbagai level manajemen.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-primary-dark mb-1">Perubahan Terukur</h4>
                                <p class="text-primary-dark/70 text-sm">Mendorong inisiatif transformasi yang memberikan dampak bisnis nyata (ROI).</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-primary-dark mb-1">Pendampingan Implementasi</h4>
                                <p class="text-primary-dark/70 text-sm">Berjalan berdampingan dengan klien hingga eksekusi benar-benar terwujud.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. OUR CORE VALUES -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Our Core Values
                </h2>
                <p class="text-[#585857] mt-4">Prinsip dasar yang memandu setiap strategi dan interaksi kami.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Value 1 -->
                <div class="bg-white p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-brain" class="w-8 h-8 text-primary group-hover:text-primary-dark transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Empathy</h4>
                </div>
                <!-- Value 2 -->
                <div class="bg-white p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-cog" class="w-8 h-8 text-primary group-hover:text-primary-dark transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">System Thinking</h4>
                </div>
                <!-- Value 3 -->
                <div class="bg-white p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-trending-up" class="w-8 h-8 text-primary group-hover:text-primary-dark transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Result Oriented</h4>
                </div>
                <!-- Value 4 -->
                <div class="bg-white p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-users" class="w-8 h-8 text-primary group-hover:text-primary-dark transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Collaboration</h4>
                </div>
                <!-- Value 5 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300 col-span-2 md:col-span-1 lg:col-span-1" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-rocket" class="w-8 h-8 text-primary group-hover:text-primary-dark transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Continuous Improvement</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. OUR APPROACH (ESR FRAMEWORK) -->
    <section class="py-20 lg:py-28 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-[40%]" data-aos="fade-right">
                    <span class="text-cta font-bold tracking-widest uppercase text-sm mb-4 block">Our Approach</span>
                    <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] mb-6">
                        The ESR Framework
                    </h2>
                    <p class="text-[#585857] leading-relaxed mb-6">
                        Kami menyadari bahwa solusi yang langgeng membutuhkan keseimbangan yang presisi. PASS menggabungkan pendekatan rasional dari <strong>Engineering & Management</strong> dengan pendekatan <strong>Human Learning</strong> yang berpusat pada manusia.
                    </p>
                    <p class="text-[#585857] leading-relaxed">
                        Perpaduan unik inilah yang melahirkan framework andalan kami: <strong>Empathy, System, Result.</strong> Solusi yang tidak hanya logis di atas kertas, tapi relevan dan dapat dijalankan oleh manusia di lapangan.
                    </p>
                </div>

                <div class="w-full lg:w-[60%]">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-6 relative">
                        
                        <!-- Line Connect (Desktop) -->
                        <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-primary/20 -z-10 -translate-y-1/2"></div>
                        
                        <!-- Line Connect (Mobile) -->
                        <div class="md:hidden absolute left-1/2 top-0 h-full w-1 bg-primary/20 -z-10 -translate-x-1/2"></div>

                        <!-- Empathy -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10" data-aos="fade-up" data-aos-delay="0">
                            <div class="w-12 h-12 bg-primary text-primary-dark rounded-full flex items-center justify-center mb-3 mx-auto">
                                <span class="font-black text-xl">1</span>
                            </div>
                            <h4 class="font-bold text-[#141414] text-lg">Empathy</h4>
                        </div>

                        <!-- Arrow/Spacing -->
                        <div class="hidden md:flex text-gray-300 z-10 bg-white p-2 rounded-full"><x-icon name="lucide-chevron-right" class="w-6 h-6" /></div>
                        
                        <!-- System -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-12 h-12 bg-primary text-primary-dark rounded-full flex items-center justify-center mb-3 mx-auto">
                                <span class="font-black text-xl">2</span>
                            </div>
                            <h4 class="font-bold text-[#141414] text-lg">System</h4>
                        </div>

                        <!-- Arrow/Spacing -->
                        <div class="hidden md:flex text-gray-300 z-10 bg-white p-2 rounded-full"><x-icon name="lucide-chevron-right" class="w-6 h-6" /></div>

                        <!-- Result -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border-cta border-2 shadow-[0_10px_30px_rgba(244,180,0,0.15)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10 relative" data-aos="fade-up" data-aos-delay="200">
                            <div class="absolute -top-3 -right-3 bg-cta text-primary-dark p-2 rounded-full animate-pulse">
                                <x-icon name="lucide-star" class="w-4 h-4 fill-white" />
                            </div>
                            <div class="w-12 h-12 bg-cta text-primary-dark rounded-full flex items-center justify-center mb-3 mx-auto">
                                <span class="font-black text-xl">3</span>
                            </div>
                            <h4 class="font-bold text-[#141414] text-lg">Result</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. COMPANY JOURNEY -->
    <section class="py-20 lg:py-28 bg-[#F8FAFB]">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Company Journey
                </h2>
                <p class="text-[#585857] mt-4">Jejak langkah pertumbuhan dan dedikasi kami.</p>
            </div>

            <div class="max-w-5xl mx-auto relative pl-4 md:pl-0">
                <!-- Timeline Line Desktop -->
                <div class="absolute top-[16px] left-0 w-full h-1 bg-gray-200 hidden md:block"></div>
                <!-- Timeline Line Mobile -->
                <div class="absolute left-[16px] top-0 h-full w-1 bg-gray-200 md:hidden"></div>

                <div class="grid md:grid-cols-4 gap-10 md:gap-6 relative z-10">
                    
                    <!-- 2023 -->
                    <div class="group flex flex-row md:flex-col items-start md:items-center text-left md:text-center" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-8 h-8 bg-gray-200 shrink-0 rounded-full flex items-center justify-center mb-0 md:mb-6 group-hover:bg-primary transition-colors border-4 border-white shadow-sm relative z-10 -ml-4 md:ml-0">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="ml-6 md:ml-0 mt-0 md:mt-2">
                            <h4 class="text-xl font-black text-primary mb-1">2023</h4>
                            <h5 class="font-bold text-[#141414] mb-2">PASS Established</h5>
                            <p class="text-sm text-[#585857]">Lahir di Jakarta di bawah PT Palsindo Utama.</p>
                        </div>
                    </div>

                    <!-- Expansion -->
                    <div class="group flex flex-row md:flex-col items-start md:items-center text-left md:text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-8 h-8 bg-gray-200 shrink-0 rounded-full flex items-center justify-center mb-0 md:mb-6 group-hover:bg-primary transition-colors border-4 border-white shadow-sm relative z-10 -ml-4 md:ml-0">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="ml-6 md:ml-0 mt-0 md:mt-2">
                            <h4 class="text-xl font-black text-primary mb-1">Expansion</h4>
                            <h5 class="font-bold text-[#141414] mb-2">National Projects</h5>
                            <p class="text-sm text-[#585857]">Kepercayaan mengelola project skala nasional.</p>
                        </div>
                    </div>

                    <!-- Cross Industry -->
                    <div class="group flex flex-row md:flex-col items-start md:items-center text-left md:text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-8 h-8 bg-gray-200 shrink-0 rounded-full flex items-center justify-center mb-0 md:mb-6 group-hover:bg-primary transition-colors border-4 border-white shadow-sm relative z-10 -ml-4 md:ml-0">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="ml-6 md:ml-0 mt-0 md:mt-2">
                            <h4 class="text-xl font-black text-primary mb-1">Growth</h4>
                            <h5 class="font-bold text-[#141414] mb-2">Cross Industry</h5>
                            <p class="text-sm text-[#585857]">Ekspansi layanan ke berbagai vertikal industri.</p>
                        </div>
                    </div>

                    <!-- Today -->
                    <div class="group flex flex-row md:flex-col items-start md:items-center text-left md:text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-8 h-8 bg-cta shrink-0 rounded-full flex items-center justify-center mb-0 md:mb-6 border-4 border-white shadow-md animate-pulse relative z-10 -ml-4 md:ml-0">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <div class="ml-6 md:ml-0 mt-0 md:mt-2">
                            <h4 class="text-xl font-black text-cta mb-1">Today</h4>
                            <h5 class="font-bold text-[#141414] mb-2">Impact Realization</h5>
                            <p class="text-sm text-[#585857]">Melanjutkan misi transformasi berdampak bagi Indonesia.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8. WHY PASS -->
    <section class="py-20 lg:py-28 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-cta font-bold tracking-widest uppercase text-sm mb-4 block">The Advantage</span>
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Why PASS?
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Point 1 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-users" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Human-Centered Transformation</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Menempatkan kapabilitas dan kelincahan tim sebagai poros utama keberhasilan perubahan sistem.</p>
                </div>
                <!-- Point 2 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-bar-chart-2" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Data-Driven Decisions</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Seluruh rekomendasi dan intervensi kami berakar dari asesmen faktual, bukan sekadar insting.</p>
                </div>
                <!-- Point 3 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-network" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Cross-Industry Experience</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Kaya akan perspektif praktik terbaik dari industri pemerintah, swasta, kesehatan, hingga edukasi.</p>
                </div>
                <!-- Point 4 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-primary-dark transition-colors">
                        <x-icon name="lucide-target" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Measurable Business Impact</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Mendefinisikan matrik keberhasilan di awal (ROI) dan mendampingi klien hingga target tersebut tercapai.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CLIENTS & PARTNERS -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px] text-center" data-aos="fade-up">
            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-10">Clients & Partners</h4>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16" data-aos="fade-in" data-aos-delay="200">
                <!-- Using Text placeholders for logos as per instruction -->
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">BNI</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">OJK</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">KEMENKES</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">PELINDO</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">INDOSAT</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">LKPP</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">ITB</h2>
                <h2 class="text-2xl font-black text-gray-800 tracking-wider">UNPAD</h2>
            </div>
        </div>
    </section>

    <!-- 10. CTA BAR -->
    <section class="py-24 bg-[#F8FAFB] text-center">
        <div class="container mx-auto px-6 max-w-[1320px]" data-aos="zoom-in">
            <div class="bg-primary rounded-[40px] p-16 md:p-24 relative overflow-hidden shadow-xl">
                <!-- Decorative elements -->
                <!-- Radial pattern removed for flat design -->
                
                <div class="relative z-10">
                    <h2 class="text-3xl lg:text-[48px] font-bold mb-10 text-primary-dark max-w-3xl mx-auto leading-tight">
                        Let's Create Meaningful Transformation Together
                    </h2>
                    <div class="flex flex-col md:flex-row justify-center items-stretch md:items-center gap-4 max-w-sm md:max-w-none mx-auto">
                        <x-ui.button href="/contact" variant="primary" class="w-full md:w-auto rounded-lg">
                            Schedule Discovery Session
                        </x-ui.button>
                        <x-ui.button href="/contact" variant="outline" class="w-full md:w-auto rounded-lg" :icon="false">
                            Contact Us
                        </x-ui.button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
