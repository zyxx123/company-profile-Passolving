<x-layouts.app>
    <!-- PAGE HEADER -->
    <section class="relative pt-[160px] pb-[160px] bg-primary text-primary-dark overflow-hidden z-0">
        
        <!-- DECORATIONS -->
        <!-- Top Left Planet Shadow -->
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-white/5 rounded-full blur-[80px] z-0 pointer-events-none"></div>

        <!-- Top Left Dots -->
        <div class="absolute top-[100px] left-10 z-0 opacity-20 pointer-events-none">
            <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#ffffff" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots)"></rect>
            </svg>
        </div>

        <!-- Right Planet Shadow & Dots -->
        <div class="absolute top-20 -right-40 w-[600px] h-[600px] bg-white/5 rounded-full blur-[80px] z-0 pointer-events-none"></div>
        <div class="absolute bottom-[20%] right-10 z-0 opacity-20 pointer-events-none hidden lg:block">
            <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                <pattern id="dots-right" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle fill="#ffffff" cx="2" cy="2" r="2"></circle>
                </pattern>
                <rect x="0" y="0" width="100" height="100" fill="url(#dots-right)"></rect>
            </svg>
        </div>

        <!-- Paper Plane and Dashed Line -->
        <div class="absolute top-[40%] left-[5%] z-0 hidden lg:block pointer-events-none">
            <svg width="300" height="150" viewBox="0 0 300 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Dashed trajectory -->
                <path d="M10 140 Q 120 180, 200 80 T 260 30" stroke="#ffffff" stroke-width="2" stroke-dasharray="6 6" fill="none" opacity="0.6"/>
                <!-- Paper Plane -->
                <g transform="translate(240, 10) rotate(25)">
                    <path d="M40 0 L0 15 L15 20 L40 0 Z" fill="#FBBF24"/>
                    <path d="M15 20 L12 30 L22 23 L15 20 Z" fill="#F59E0B"/>
                    <path d="M40 0 L15 20 L22 23 L40 0 Z" fill="#FCD34D"/>
                </g>
            </svg>
        </div>

        <!-- Cityscape Silhouette Bottom -->
        <div class="absolute bottom-0 left-0 w-full h-[250px] z-0 opacity-[0.15] pointer-events-none" 
             style="background-image: url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center bottom; mask-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0)); -webkit-mask-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0)); mix-blend-mode: luminosity;">
        </div>

        <div class="container relative z-10 mx-auto px-6 max-w-[1320px] text-center">
            <h1 class="text-[clamp(2.5rem,7vw,3.5rem)] font-black leading-[1.2] mb-4 max-w-4xl mx-auto uppercase text-[#0B2545]">
                CONTACT US
            </h1>
            
            <!-- Yellow Underline -->
            <div class="flex justify-center items-center gap-2 mb-8">
                <div class="w-10 h-1 bg-cta rounded-full"></div>
                <div class="w-2 h-1 bg-cta rounded-full"></div>
            </div>

            <p class="text-[#0B2545]/90 max-w-2xl mx-auto leading-relaxed text-lg lg:text-xl font-bold">
                Mari Berkolaborasi untuk Masa Depan yang Lebih Baik
            </p>
            <p class="text-[#0B2545]/70 max-w-2xl mx-auto leading-relaxed mt-2 text-base">
                Punya pertanyaan atau ingin berdiskusi lebih lanjut? Kami siap membantu Anda.
            </p>
        </div>
    </section>

    <!-- CONTACT HERO & FORM -->
    <section class="relative z-20 -mt-10 md:-mt-16 lg:-mt-[60px]">
        <div class="container mx-auto max-w-[1400px]">
            <div class="bg-white rounded-t-[40px] lg:rounded-t-[64px] pt-12 pb-20 lg:pt-16 lg:pb-24 px-6 lg:px-16 shadow-[0_-10px_40px_rgba(0,0,0,0.05)] relative overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 relative z-10">
                <!-- Left: Info & Map -->
                <div class="flex flex-col gap-6">
                    <!-- Info Card -->
                    <div class="bg-[#F8FAFB] p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm">
                        <h2 class="text-xl font-bold text-[#141414] mb-6">Informasi Kontak</h2>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-map-pin" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Kantor Pusat</h4>
                                    <p class="text-xs text-[#585857] leading-relaxed">Jl. P.P.A No.24, RT.5/RW.4, Ceger,<br/>Kec. Cipayung, Kota Jakarta Timur 13820</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-mail" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Email</h4>
                                    <p class="text-xs text-[#585857]"><a href="mailto:bersama@passolving.com" class="hover:text-primary transition-colors">bersama@passolving.com</a></p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-phone" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">WhatsApp</h4>
                                    <p class="text-xs text-[#585857]"><a href="https://wa.me/628979515205" target="_blank" class="hover:text-primary transition-colors">+62 897 9515 205</a></p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-clock" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Jam Operasional</h4>
                                    <p class="text-xs text-[#585857]">Senin - Jumat, 09:00 - 17:00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Card -->
                    <div class="h-[250px] lg:h-[300px] rounded-3xl overflow-hidden shadow-sm border border-gray-100 bg-gray-200">
                        <iframe src="https://maps.google.com/maps?q=-6.3182419,106.8956369&t=&z=16&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="border-0"></iframe>
                    </div>
                </div>

                <!-- Right: Form -->
                <div>
                    <livewire:contact-form />
                </div>
            </div>
            </div>
        </div>
    </section>
</x-layouts.app>
