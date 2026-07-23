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
                <h1 class="text-[clamp(2.5rem,7vw,4rem)] font-black leading-[1.1] mb-6 uppercase text-white">
                    About PASS
                </h1>
                <p class="text-white/90 leading-relaxed text-[clamp(1rem,3vw,1.5rem)] font-light">
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
    <section class="py-20 lg:py-28 bg-primary">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                <!-- Vision -->
                <div data-aos="fade-right">
                    <h2 class="text-2xl lg:text-3xl font-black text-[#015C56] uppercase tracking-widest mb-4">{{ __('01. VISION') }}</h2>
                    <h3 class="text-3xl lg:text-[42px] leading-tight font-extrabold mb-8 text-cta">{{ __('Menjadi mitra transformasi terpercaya.') }}</h3>
                    <p class="text-[#023B37] leading-relaxed text-[20px] font-medium pr-0 lg:pr-8">
                        {{ __('Membantu organisasi di seluruh Indonesia dan Asia Tenggara untuk berkembang secara adaptif, tangguh, dan berkelanjutan dalam menghadapi era disrupsi.') }}
                    </p>
                </div>
                
                <!-- Mission -->
                <div data-aos="fade-left">
                    <h2 class="text-2xl lg:text-3xl font-black text-[#015C56] uppercase tracking-widest mb-8">{{ __('02. MISSION') }}</h2>
                    <ul class="space-y-8">
                        <li class="flex gap-5">
                            <div class="mt-1 shrink-0"><x-icon name="lucide-check-circle" class="w-7 h-7 text-cta" stroke-width="2" /></div>
                            <div>
                                <h4 class="text-[20px] font-bold text-[#023B37] mb-1.5">{{ __('Solusi Berbasis Data') }}</h4>
                                <p class="text-[#023B37]/80 text-[17px] leading-relaxed">{{ __('Menghasilkan keputusan strategis melalui diagnosis dan riset yang terukur.') }}</p>
                            </div>
                        </li>
                        <li class="flex gap-5">
                            <div class="mt-1 shrink-0"><x-icon name="lucide-check-circle" class="w-7 h-7 text-cta" stroke-width="2" /></div>
                            <div>
                                <h4 class="text-[20px] font-bold text-[#023B37] mb-1.5">{{ __('Kepemimpinan Adaptif') }}</h4>
                                <p class="text-[#023B37]/80 text-[17px] leading-relaxed">{{ __('Mengembangkan pemimpin yang tangkas (agile) di berbagai level manajemen.') }}</p>
                            </div>
                        </li>
                        <li class="flex gap-5">
                            <div class="mt-1 shrink-0"><x-icon name="lucide-check-circle" class="w-7 h-7 text-cta" stroke-width="2" /></div>
                            <div>
                                <h4 class="text-[20px] font-bold text-[#023B37] mb-1.5">{{ __('Perubahan Terukur') }}</h4>
                                <p class="text-[#023B37]/80 text-[17px] leading-relaxed">{{ __('Mendorong inisiatif transformasi yang memberikan dampak bisnis nyata (ROI).') }}</p>
                            </div>
                        </li>
                        <li class="flex gap-5">
                            <div class="mt-1 shrink-0"><x-icon name="lucide-check-circle" class="w-7 h-7 text-cta" stroke-width="2" /></div>
                            <div>
                                <h4 class="text-[20px] font-bold text-[#023B37] mb-1.5">{{ __('Pendampingan Implementasi') }}</h4>
                                <p class="text-[#023B37]/80 text-[17px] leading-relaxed">{{ __('Berjalan berdampingan dengan klien hingga eksekusi benar-benar terwujud.') }}</p>
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
    <section class="py-20 lg:py-32 bg-white relative overflow-hidden">
        <!-- Optional Decorative background blobs -->
        <div class="absolute -left-32 top-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -right-32 bottom-0 w-[500px] h-[500px] bg-cta/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-[1320px] relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-12 xl:gap-20">
                
                <!-- Left Side: Texts & Quote -->
                <div class="w-full lg:w-[45%]" data-aos="fade-right">
                    <div class="inline-block bg-cta text-[#141414] font-bold text-[13px] px-5 py-1.5 rounded-full mb-6 uppercase tracking-wider shadow-sm">
                        {{ __('OUR APPROACH') }}
                    </div>
                    
                    <h2 class="text-4xl lg:text-[52px] font-bold text-[#141414] leading-[1.1] mb-8">
                        The <span class="text-primary">ESR</span> Framework
                    </h2>
                    
                    <p class="text-[#585857] leading-relaxed mb-6 text-[17px]">
                        {{ __('Kami menyadari bahwa solusi yang langgeng membutuhkan keseimbangan yang presisi. PASS menggabungkan pendekatan rasional dari') }} <span class="text-primary font-bold">{{ __('Engineering & Management') }}</span> {{ __('dengan pendekatan') }} <span class="text-primary font-bold">{{ __('Human Learning') }}</span> {{ __('yang berpusat pada manusia.') }}
                    </p>
                    
                    <p class="text-[#585857] leading-relaxed text-[17px] mb-10">
                        {{ __('Perpaduan unik inilah yang melahirkan framework andalan kami:') }} <span class="text-primary font-bold">{{ __('Empathy, System, Result.') }}</span> {{ __('Solusi yang tidak hanya logis di atas kertas, tapi relevan dan dapat dijalankan oleh manusia di lapangan.') }}
                    </p>

                    <!-- Quote Box -->
                    <div class="bg-[#F0F9F8] p-6 lg:p-7 rounded-[20px] flex items-center gap-5 relative overflow-hidden border border-primary/10 shadow-sm">
                        <div class="text-primary/40 shrink-0">
                            <!-- Large Quote Icon -->
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.039 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"/></svg>
                        </div>
                        <div class="border-l-[3px] border-primary/20 pl-5 flex-1 relative z-10">
                            <p class="text-[#4b5563] text-[15px] leading-relaxed">
                                <strong class="text-primary">{{ __('Empathy') }}</strong> {{ __('memastikan relevansi.') }}<br>
                                <strong class="text-primary">{{ __('System') }}</strong> {{ __('memastikan efektivitas.') }}<br>
                                <strong class="text-primary">{{ __('Result') }}</strong> {{ __('memastikan dampak.') }}
                            </p>
                        </div>
                        <!-- Mountain vector on the right -->
                        <div class="absolute -right-2 -bottom-2 opacity-10 pointer-events-none w-24 h-24 text-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/><path d="M4.14 15.08c2.62-1.57 5.24-1.43 7.86.42 2.74 1.94 5.49 2 8.23.19"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Diagram -->
                <div class="w-full lg:w-[55%] relative mt-8 lg:mt-0">
                    <!-- Wavy Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute inset-0 -z-10 pointer-events-none">
                        <svg width="100%" height="100%" viewBox="0 0 400 200" fill="none" preserveAspectRatio="none">
                            <path d="M 60,160 C 120,160 120,100 200,100 C 280,100 280,40 340,40" stroke="#00a6a6" stroke-width="1.5" />
                        </svg>
                    </div>
                    <!-- Vertical Connecting Line (Mobile) -->
                    <div class="lg:hidden absolute top-[10%] left-1/2 -translate-x-1/2 w-[1.5px] h-[80%] bg-primary/30 -z-10"></div>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-4 xl:gap-6 relative z-10 lg:pt-8 lg:pb-16">
                        
                        <!-- Empathy Card -->
                        <div class="bg-white rounded-[24px] p-6 text-center shadow-[0_15px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-50 w-full max-w-[260px] lg:w-[32%] relative transform lg:translate-y-16" data-aos="fade-up" data-aos-delay="0">
                            <!-- Badge 01 -->
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-primary text-white font-black rounded-full flex items-center justify-center border-4 border-white shadow-sm text-sm z-10">
                                01
                            </div>
                            
                            <div class="w-14 h-14 mx-auto text-primary flex items-center justify-center mb-4 mt-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-10 h-10"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            </div>
                            
                            <h4 class="font-bold text-[#141414] text-lg mb-2">{{ __('Empathy') }}</h4>
                            <p class="text-[13px] text-[#585857] leading-relaxed">
                                {{ __('Memahami manusia, konteks, dan kebutuhan yang sebenarnya.') }}
                            </p>
                        </div>

                        <!-- System Card -->
                        <div class="bg-white rounded-[24px] p-6 text-center shadow-[0_15px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-50 w-full max-w-[260px] lg:w-[32%] relative transform lg:translate-y-4" data-aos="fade-up" data-aos-delay="100">
                            <!-- Badge 02 -->
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-primary text-white font-black rounded-full flex items-center justify-center border-4 border-white shadow-sm text-sm z-10">
                                02
                            </div>
                            
                            <div class="w-14 h-14 mx-auto text-primary flex items-center justify-center mb-4 mt-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-10 h-10"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                            </div>
                            
                            <h4 class="font-bold text-[#141414] text-lg mb-2">{{ __('System') }}</h4>
                            <p class="text-[13px] text-[#585857] leading-relaxed">
                                {{ __('Merancang sistem dan strategi yang terstruktur, efektif, dan adaptif.') }}
                            </p>
                            
                            <!-- Arrow Circle connected to the next -->
                            <div class="hidden lg:flex absolute -right-6 top-1/2 -translate-y-1/2 w-8 h-8 bg-primary rounded-full items-center justify-center text-white shadow-md z-20">
                                <x-icon name="lucide-arrow-right" class="w-4 h-4" />
                            </div>
                        </div>

                        <!-- Result Card -->
                        <div class="bg-white rounded-[24px] p-6 text-center shadow-[10px_20px_50px_-10px_rgba(0,0,0,0.1)] w-full max-w-[260px] lg:w-[34%] relative border border-gray-100 transform lg:-translate-y-8" data-aos="fade-up" data-aos-delay="200">
                            
                            <!-- Glow Effect behind -->
                            <div class="absolute -inset-[3px] bg-gradient-to-br from-transparent to-cta/40 blur-[8px] -z-10 rounded-[28px] translate-y-2 translate-x-1 opacity-70"></div>
                            
                            <!-- Yellow Star Badge -->
                            <div class="absolute -top-4 -right-4 w-10 h-10 bg-cta text-[#141414] rounded-full flex items-center justify-center shadow-lg border-[3px] border-white z-20">
                                <x-icon name="lucide-star" class="w-5 h-5 fill-current" />
                            </div>

                            <!-- Badge 03 -->
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-primary text-white font-black rounded-full flex items-center justify-center border-4 border-white shadow-sm text-sm z-10">
                                03
                            </div>
                            
                            <div class="w-14 h-14 mx-auto text-primary flex items-center justify-center mb-4 mt-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-10 h-10"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/><line x1="12" y1="20" x2="12" y2="10" opacity="0.3"/><line x1="18" y1="20" x2="18" y2="4" opacity="0.3"/><line x1="6" y1="20" x2="6" y2="16" opacity="0.3"/></svg>
                            </div>
                            
                            <h4 class="font-bold text-[#141414] text-lg mb-2">{{ __('Result') }}</h4>
                            <p class="text-[13px] text-[#585857] leading-relaxed">
                                {{ __('Menghasilkan dampak nyata yang terukur dan berkelanjutan.') }}
                            </p>
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
    <section class="relative py-20 lg:py-32 bg-[#FAFCFC] border-b border-gray-100 overflow-hidden">
        <!-- Background Decorative Elements -->
        <!-- Dotted pattern top left -->
        <div class="absolute top-10 left-10 opacity-30 pointer-events-none hidden lg:block">
            <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="2" fill="#00a6a6"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots)"></rect>
            </svg>
        </div>
        <!-- Abstract Curve top right -->
        <div class="absolute -top-20 -right-20 pointer-events-none hidden lg:block opacity-20">
            <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="200" cy="200" r="199" stroke="#00a6a6" stroke-width="2"/>
                <circle cx="200" cy="200" r="10" fill="#00a6a6"/>
            </svg>
        </div>
        <!-- Soft waves bottom -->
        <div class="absolute bottom-0 left-0 w-full pointer-events-none opacity-30">
            <svg viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 256L48 245.3C96 235 192 213 288 218.7C384 224 480 256 576 250.7C672 245 768 203 864 192C960 181 1056 203 1152 208C1248 213 1344 203 1392 197.3L1440 192V320H1392C1344 320 1248 320 1152 320C1056 320 960 320 864 320C768 320 672 320 576 320C480 320 384 320 288 320C192 320 96 320 48 320H0V256Z" fill="#E6F4F4"/>
            </svg>
        </div>
        <!-- Huge corner wave right bottom -->
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-gradient-to-tl from-primary/20 to-transparent rounded-full blur-3xl pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-[1280px] relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="flex items-center justify-center gap-4 mb-4">
                    <div class="w-10 h-[2px] bg-cta/40"></div>
                    <span class="text-cta font-bold tracking-widest uppercase text-[12px]">{{ __('THE ADVANTAGE') }}</span>
                    <div class="w-10 h-[2px] bg-cta/40"></div>
                </div>
                
                <h2 class="text-4xl lg:text-[56px] font-black text-[#141414] leading-tight mb-6">
                    Why <span class="text-primary">PASS?</span>
                </h2>
                
                <p class="text-[#585857] text-[16px] max-w-2xl mx-auto leading-relaxed">
                    {{ __('Kami menghadirkan pendekatan yang menyeluruh untuk memastikan setiap solusi memberikan dampak nyata dan berkelanjutan.') }}
                </p>
            </div>

            <!-- Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                
                <!-- Point 1 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="0">
                    <div class="bg-white px-8 pt-10 pb-12 rounded-[32px] shadow-[0_15px_40px_-15px_rgba(0,0,0,0.08)] border-b-[8px] border-primary hover:-translate-y-2 transition-all duration-300 h-full flex flex-col relative z-10">
                        <div class="absolute top-6 right-8 text-5xl font-black text-primary/10 transition-colors duration-300 group-hover:text-primary/20">01</div>
                        <div class="w-14 h-14 bg-[#F2F9F9] rounded-full flex items-center justify-center mb-8 text-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h4 class="font-extrabold text-[#141414] mb-4 text-[19px] leading-[1.3] relative z-10">{{ __('Human-Centered') }}<br>{{ __('Transformation') }}</h4>
                        <p class="text-[14px] text-[#6b7280] leading-[1.8] relative z-10">{{ __('Menempatkan kapabilitas dan kelincahan tim sebagai poros utama keberhasilan perubahan sistem.') }}</p>
                    </div>
                    <!-- Connecting Arrow -->
                    <div class="hidden lg:flex absolute top-1/2 -right-[20px] w-[30px] items-center justify-center z-0 pointer-events-none text-primary">
                        <svg viewBox="0 0 30 20" fill="none" stroke="currentColor" stroke-width="2" class="w-full h-4"><path stroke-dasharray="3 3" d="M0 10h24"/><path d="M20 4l6 6-6 6"/></svg>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white px-8 pt-10 pb-12 rounded-[32px] shadow-[0_15px_40px_-15px_rgba(0,0,0,0.08)] border-b-[8px] border-primary hover:-translate-y-2 transition-all duration-300 h-full flex flex-col relative z-10">
                        <div class="absolute top-6 right-8 text-5xl font-black text-primary/10 transition-colors duration-300 group-hover:text-primary/20">02</div>
                        <div class="w-14 h-14 bg-[#F2F9F9] rounded-full flex items-center justify-center mb-8 text-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg>
                        </div>
                        <h4 class="font-extrabold text-[#141414] mb-4 text-[19px] leading-[1.3] relative z-10">{{ __('Data-Driven') }}<br>{{ __('Decisions') }}</h4>
                        <p class="text-[14px] text-[#6b7280] leading-[1.8] relative z-10">{{ __('Seluruh rekomendasi dan intervensi kami berakar dari asesmen faktual, bukan sekadar insting.') }}</p>
                    </div>
                    <!-- Connecting Arrow -->
                    <div class="hidden lg:flex absolute top-1/2 -right-[20px] w-[30px] items-center justify-center z-0 pointer-events-none text-primary">
                        <svg viewBox="0 0 30 20" fill="none" stroke="currentColor" stroke-width="2" class="w-full h-4"><path stroke-dasharray="3 3" d="M0 10h24"/><path d="M20 4l6 6-6 6"/></svg>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white px-8 pt-10 pb-12 rounded-[32px] shadow-[0_15px_40px_-15px_rgba(0,0,0,0.08)] border-b-[8px] border-primary hover:-translate-y-2 transition-all duration-300 h-full flex flex-col relative z-10">
                        <div class="absolute top-6 right-8 text-5xl font-black text-primary/10 transition-colors duration-300 group-hover:text-primary/20">03</div>
                        <div class="w-14 h-14 bg-[#F2F9F9] rounded-full flex items-center justify-center mb-8 text-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><rect x="14" y="14" width="6" height="6" rx="1"/><rect x="4" y="14" width="6" height="6" rx="1"/><rect x="9" y="4" width="6" height="6" rx="1"/><path d="M12 10v2"/><path d="M7 14v-2h10v2"/></svg>
                        </div>
                        <h4 class="font-extrabold text-[#141414] mb-4 text-[19px] leading-[1.3] relative z-10">{{ __('Cross-Industry') }}<br>{{ __('Experience') }}</h4>
                        <p class="text-[14px] text-[#6b7280] leading-[1.8] relative z-10">{{ __('Kaya akan perspektif praktik terbaik dari industri pemerintah, swasta, kesehatan, hingga edukasi.') }}</p>
                    </div>
                    <!-- Connecting Arrow -->
                    <div class="hidden lg:flex absolute top-1/2 -right-[20px] w-[30px] items-center justify-center z-0 pointer-events-none text-primary">
                        <svg viewBox="0 0 30 20" fill="none" stroke="currentColor" stroke-width="2" class="w-full h-4"><path stroke-dasharray="3 3" d="M0 10h24"/><path d="M20 4l6 6-6 6"/></svg>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="relative group" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white px-8 pt-10 pb-12 rounded-[32px] shadow-[0_15px_40px_-15px_rgba(0,0,0,0.08)] border-b-[8px] border-primary hover:-translate-y-2 transition-all duration-300 h-full flex flex-col relative z-10">
                        <div class="absolute top-6 right-8 text-5xl font-black text-primary/10 transition-colors duration-300 group-hover:text-primary/20">04</div>
                        <div class="w-14 h-14 bg-[#F2F9F9] rounded-full flex items-center justify-center mb-8 text-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                        </div>
                        <h4 class="font-extrabold text-[#141414] mb-4 text-[19px] leading-[1.3] relative z-10">{{ __('Measurable Business') }}<br>{{ __('Impact') }}</h4>
                        <p class="text-[14px] text-[#6b7280] leading-[1.8] relative z-10">{{ __('Mendefinisikan matrik keberhasilan di awal (ROI) dan mendampingi klien hingga target tersebut tercapai.') }}</p>
                    </div>
                </div>

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
