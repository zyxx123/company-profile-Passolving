<x-layouts.app>
    <!-- 1. HERO SECTION -->
    <section class="relative pt-[140px] pb-[100px] lg:pt-[180px] lg:pb-[140px] bg-primary-dark text-white overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=80" alt="Team Workshop" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary-dark/90 to-primary-dark/40"></div>
        </div>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl lg:text-[64px] font-black leading-[1.1] mb-6 uppercase">
                    About PASS
                </h1>
                <p class="text-white/80 leading-relaxed text-xl lg:text-2xl font-light">
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
                <div>
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
                <div class="bg-[#F8FAFB] p-10 lg:p-12 rounded-[40px] border border-gray-100">
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
    <section class="py-20 bg-primary-dark text-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                <!-- Vision -->
                <div>
                    <h2 class="text-3xl font-black text-white/10 uppercase tracking-widest mb-2">01. Vision</h2>
                    <h3 class="text-3xl lg:text-4xl font-bold mb-6 text-cta">Menjadi mitra transformasi terpercaya.</h3>
                    <p class="text-white/80 leading-relaxed text-lg">
                        Membantu organisasi di seluruh Indonesia dan Asia Tenggara untuk berkembang secara adaptif, tangguh, dan berkelanjutan dalam menghadapi era disrupsi.
                    </p>
                </div>
                
                <!-- Mission -->
                <div>
                    <h2 class="text-3xl font-black text-white/10 uppercase tracking-widest mb-6">02. Mission</h2>
                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-white mb-1">Solusi Berbasis Data</h4>
                                <p class="text-white/70 text-sm">Menghasilkan keputusan strategis melalui diagnosis dan riset yang terukur.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-white mb-1">Kepemimpinan Adaptif</h4>
                                <p class="text-white/70 text-sm">Mengembangkan pemimpin yang tangkas (agile) di berbagai level manajemen.</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-white mb-1">Perubahan Terukur</h4>
                                <p class="text-white/70 text-sm">Mendorong inisiatif transformasi yang memberikan dampak bisnis nyata (ROI).</p>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="mt-1"><x-icon name="lucide-check-circle-2" class="w-6 h-6 text-cta" /></div>
                            <div>
                                <h4 class="text-lg font-bold text-white mb-1">Pendampingan Implementasi</h4>
                                <p class="text-white/70 text-sm">Berjalan berdampingan dengan klien hingga eksekusi benar-benar terwujud.</p>
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
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Our Core Values
                </h2>
                <p class="text-[#585857] mt-4">Prinsip dasar yang memandu setiap strategi dan interaksi kami.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-brain" class="w-8 h-8 text-primary group-hover:text-white transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Empathy</h4>
                </div>
                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-cog" class="w-8 h-8 text-primary group-hover:text-white transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">System Thinking</h4>
                </div>
                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-trending-up" class="w-8 h-8 text-primary group-hover:text-white transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Result Oriented</h4>
                </div>
                <!-- Value 4 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-users" class="w-8 h-8 text-primary group-hover:text-white transition-colors" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-2">Collaboration</h4>
                </div>
                <!-- Value 5 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm text-center group hover:-translate-y-2 transition-transform duration-300 col-span-2 md:col-span-1 lg:col-span-1">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <x-icon name="lucide-rocket" class="w-8 h-8 text-primary group-hover:text-white transition-colors" />
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
                <div class="w-full lg:w-[40%]">
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
                        <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-primary/30 to-cta/30 -z-10 -translate-y-1/2"></div>
                        
                        <!-- Line Connect (Mobile) -->
                        <div class="md:hidden absolute left-1/2 top-0 h-full w-1 bg-gradient-to-b from-primary/30 to-cta/30 -z-10 -translate-x-1/2"></div>

                        <!-- Empathy -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10">
                            <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mb-3 mx-auto">
                                <span class="font-black text-xl">1</span>
                            </div>
                            <h4 class="font-bold text-[#141414] text-lg">Empathy</h4>
                        </div>

                        <!-- Arrow/Spacing -->
                        <div class="hidden md:flex text-gray-300 z-10 bg-white p-2 rounded-full"><x-icon name="lucide-chevron-right" class="w-6 h-6" /></div>
                        
                        <!-- System -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10">
                            <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mb-3 mx-auto">
                                <span class="font-black text-xl">2</span>
                            </div>
                            <h4 class="font-bold text-[#141414] text-lg">System</h4>
                        </div>

                        <!-- Arrow/Spacing -->
                        <div class="hidden md:flex text-gray-300 z-10 bg-white p-2 rounded-full"><x-icon name="lucide-chevron-right" class="w-6 h-6" /></div>

                        <!-- Result -->
                        <div class="bg-white p-8 rounded-full md:rounded-3xl border-cta border-2 shadow-[0_10px_30px_rgba(244,180,0,0.15)] text-center w-48 h-48 md:w-auto md:h-auto flex flex-col justify-center items-center z-10 relative">
                            <div class="absolute -top-3 -right-3 bg-cta text-white p-2 rounded-full animate-pulse">
                                <x-icon name="lucide-star" class="w-4 h-4 fill-white" />
                            </div>
                            <div class="w-12 h-12 bg-cta text-white rounded-full flex items-center justify-center mb-3 mx-auto">
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
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Company Journey
                </h2>
                <p class="text-[#585857] mt-4">Jejak langkah pertumbuhan dan dedikasi kami.</p>
            </div>

            <div class="max-w-5xl mx-auto relative">
                <!-- Timeline Line -->
                <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -translate-y-1/2 hidden md:block"></div>
                <div class="absolute left-1/2 top-0 h-full w-1 bg-gray-200 -translate-x-1/2 md:hidden"></div>

                <div class="grid md:grid-cols-4 gap-12 md:gap-6 relative z-10">
                    
                    <!-- 2023 -->
                    <div class="text-center group">
                        <div class="w-8 h-8 mx-auto bg-gray-200 rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors border-4 border-white shadow-sm">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <h4 class="text-xl font-black text-primary mb-2">2023</h4>
                        <h5 class="font-bold text-[#141414] mb-2">PASS Established</h5>
                        <p class="text-sm text-[#585857]">Lahir di Jakarta di bawah PT Palsindo Utama.</p>
                    </div>

                    <!-- Expansion -->
                    <div class="text-center group mt-12 md:mt-0">
                        <div class="w-8 h-8 mx-auto bg-gray-200 rounded-full flex items-center justify-center mb-6 md:-mt-14 group-hover:bg-primary transition-colors border-4 border-white shadow-sm">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <h4 class="text-xl font-black text-primary mb-2 md:mt-14">Expansion</h4>
                        <h5 class="font-bold text-[#141414] mb-2">National Projects</h5>
                        <p class="text-sm text-[#585857]">Kepercayaan mengelola project skala nasional.</p>
                    </div>

                    <!-- Cross Industry -->
                    <div class="text-center group">
                        <div class="w-8 h-8 mx-auto bg-gray-200 rounded-full flex items-center justify-center mb-6 group-hover:bg-primary transition-colors border-4 border-white shadow-sm">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                        <h4 class="text-xl font-black text-primary mb-2">Growth</h4>
                        <h5 class="font-bold text-[#141414] mb-2">Cross Industry</h5>
                        <p class="text-sm text-[#585857]">Ekspansi layanan ke berbagai vertikal industri.</p>
                    </div>

                    <!-- Today -->
                    <div class="text-center group mt-12 md:mt-0">
                        <div class="w-10 h-10 mx-auto bg-cta rounded-full flex items-center justify-center mb-6 md:-mt-16 border-4 border-white shadow-md animate-pulse">
                            <div class="w-4 h-4 bg-white rounded-full"></div>
                        </div>
                        <h4 class="text-xl font-black text-cta mb-2 md:mt-[52px]">Today</h4>
                        <h5 class="font-bold text-[#141414] mb-2">Impact Realization</h5>
                        <p class="text-sm text-[#585857]">Melanjutkan misi transformasi berdampak bagi Indonesia.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8. WHY PASS -->
    <section class="py-20 lg:py-28 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="text-center mb-16">
                <span class="text-cta font-bold tracking-widest uppercase text-sm mb-4 block">The Advantage</span>
                <h2 class="text-3xl lg:text-[44px] font-bold text-[#141414] leading-[1.2] max-w-2xl mx-auto">
                    Why PASS?
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Point 1 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <x-icon name="lucide-users" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Human-Centered Transformation</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Menempatkan kapabilitas dan kelincahan tim sebagai poros utama keberhasilan perubahan sistem.</p>
                </div>
                <!-- Point 2 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <x-icon name="lucide-bar-chart-2" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Data-Driven Decisions</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Seluruh rekomendasi dan intervensi kami berakar dari asesmen faktual, bukan sekadar insting.</p>
                </div>
                <!-- Point 3 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <x-icon name="lucide-network" class="w-6 h-6" />
                    </div>
                    <h4 class="font-bold text-[#141414] mb-3 text-lg">Cross-Industry Experience</h4>
                    <p class="text-sm text-[#585857] leading-relaxed">Kaya akan perspektif praktik terbaik dari industri pemerintah, swasta, kesehatan, hingga edukasi.</p>
                </div>
                <!-- Point 4 -->
                <div class="bg-[#F8FAFB] p-8 rounded-3xl border border-gray-100 group">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm text-primary group-hover:bg-primary group-hover:text-white transition-colors">
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
        <div class="container mx-auto px-6 max-w-[1320px] text-center">
            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-10">Clients & Partners</h4>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 hover:opacity-100 transition-opacity duration-500 grayscale">
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
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="bg-gradient-to-br from-primary-dark to-primary rounded-[40px] p-16 md:p-24 relative overflow-hidden shadow-xl">
                <!-- Decorative elements -->
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_bottom_left,white,transparent)]"></div>
                
                <div class="relative z-10">
                    <h2 class="text-3xl lg:text-[48px] font-bold mb-10 text-white max-w-3xl mx-auto leading-tight">
                        Let's Create Meaningful Transformation Together
                    </h2>
                    <div class="flex flex-wrap justify-center items-center gap-4">
                        <x-ui.button href="/contact" variant="primary" class="rounded-lg">
                            Schedule Discovery Session
                        </x-ui.button>
                        <x-ui.button href="/contact" variant="outline" class="rounded-lg" :icon="false">
                            Contact Us
                        </x-ui.button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
