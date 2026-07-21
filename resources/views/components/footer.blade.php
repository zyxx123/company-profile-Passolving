<footer class="bg-primary-dark pt-12 pb-6 text-white text-sm">
    <div class="container mx-auto px-6 max-w-[1320px]">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            
            <!-- Column 1: Brand & About -->
            <div class="flex flex-col">
                <a href="/" class="flex flex-col shrink-0 mb-4">
                    <img src="{{ asset('logo-white-trimmed.png') }}" alt="Passolving Logo" class="h-12 w-auto object-contain">
                </a>
                <p class="text-white/80 leading-relaxed mb-6 pr-4">
                    Partner strategis Anda dalam mewujudkan kelincahan (agility) dan efektivitas tim yang berkelanjutan di era transformasi.
                </p>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cta hover:text-primary transition-all">
                        <x-icon name="lucide-linkedin" class="w-4 h-4" />
                    </a>
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cta hover:text-primary transition-all">
                        <x-icon name="lucide-instagram" class="w-4 h-4" />
                    </a>
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center hover:bg-cta hover:text-primary transition-all">
                        <x-icon name="lucide-youtube" class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="font-bold text-base mb-4 text-white/90">Navigasi</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Home</a></li>
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Service</a></li>
                    <li><a href="/portfolio" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Portfolio</a></li>
                    <li><a href="/about" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> About</a></li>
                    <li><a href="/contact" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div>
                <h4 class="font-bold text-base mb-4 text-white/90">Layanan</h4>
                <ul class="space-y-3">
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Asesmen Agility</a></li>
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Sertifikasi Soft Skill</a></li>
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Training & Workshop</a></li>
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Konsultasi Organisasi</a></li>
                    <li><a href="/services" class="text-white/80 hover:text-cta transition-colors flex items-center group"><span class="mr-2 text-cta transition-transform group-hover:translate-x-1">›</span> Research & Insight</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div>
                <h4 class="font-bold text-base mb-4 text-white/90">Hubungi Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <x-icon name="lucide-phone" class="w-5 h-5 text-cta shrink-0 mt-0.5" />
                        <span class="text-white/80">+62 21 1234 5678</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="lucide-mail" class="w-5 h-5 text-cta shrink-0 mt-0.5" />
                        <span class="text-white/80">info@passolving.com</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="lucide-map-pin" class="w-5 h-5 text-cta shrink-0 mt-0.5" />
                        <span class="text-white/80">Jl. P.P.A No.24, RT.5/RW.4, Ceger<br>Kec. Cipayung, Jakarta Timur 13820</span>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- Bottom Copyright -->
        <div class="pt-6 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
            <p class="text-white/60">
                &copy; {{ date('Y') }} Passolving. All rights reserved.
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-white/60 hover:text-white transition-colors">Kebijakan Privasi</a>
                <a href="#" class="text-white/60 hover:text-white transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
