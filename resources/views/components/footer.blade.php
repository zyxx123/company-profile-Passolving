<footer class="bg-secondary text-white mt-auto pt-20 pb-10 relative z-20 overflow-hidden border-t-4 border-primary">
    <!-- Geometric Accent -->
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/10 transform rotate-45 translate-x-1/2 translate-y-1/2 pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-32 h-32 border-4 border-primary/20 transform -rotate-12 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <!-- Footer Top / Logo -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16 gap-8">
            <a href="/" class="flex items-center gap-3 group">
                <img src="/logo-white.png" alt="PASSolving Logo" class="h-12 w-auto transform group-hover:rotate-12 transition-transform">
            </a>
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 border border-white/20 flex items-center justify-center hover:bg-primary hover:text-secondary hover:border-primary transition-colors text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
        
        <hr class="border-white/10 mb-16">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 lg:gap-16 mb-20">
            <!-- Company -->
            <div>
                <h4 class="text-xs font-black mb-8 uppercase tracking-widest text-white">{{ __('Company') }}</h4>
                <ul class="space-y-4 font-bold text-slate-400 text-sm">
                    <li><a href="/about" class="hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 bg-primary"></div> {{ __('About Us') }}</a></li>
                    <li><a href="/services" class="hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 bg-primary"></div> {{ __('Our Services') }}</a></li>
                    <li><a href="/portfolio" class="hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 bg-primary"></div> {{ __('Case Studies') }}</a></li>
                    <li><a href="/contact" class="hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 bg-primary"></div> {{ __('Contact Us') }}</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="text-xs font-black mb-8 uppercase tracking-widest text-white">{{ __('Support') }}</h4>
                <ul class="space-y-4 font-bold text-slate-400 text-sm">
                    <li><a href="/contact" class="hover:text-primary transition-colors">{{ __('Help Center') }}</a></li>
                    <li><a href="/contact" class="hover:text-primary transition-colors">{{ __('FAQ') }}</a></li>
                    <li><a href="/" class="hover:text-primary transition-colors">{{ __('Privacy Policy') }}</a></li>
                    <li><a href="/" class="hover:text-primary transition-colors">{{ __('Terms of Service') }}</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h4 class="text-xs font-black mb-8 uppercase tracking-widest text-white">{{ __('Capabilities') }}</h4>
                <ul class="space-y-4 font-bold text-slate-400 text-sm">
                    <li><a href="/services" class="hover:text-primary transition-colors">{{ __('Agility Assessment') }}</a></li>
                    <li><a href="/services" class="hover:text-primary transition-colors">{{ __('LEGO® Serious Play®') }}</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-span-2 md:col-span-1">
                <h4 class="text-xs font-black mb-6 uppercase tracking-widest text-white">{{ __('Subscribe to our newsletter') }}</h4>
                <p class="text-xs font-medium text-slate-400 mb-6 leading-relaxed">{{ __('Stay updated with the latest news, updates, and exclusive offers.') }}</p>
                
                <div class="bg-transparent border-b-2 border-white/20 pb-2 flex gap-2 w-full focus-within:border-primary transition-colors group">
                    <input type="email" placeholder="{{ __('Enter your email') }}" class="bg-transparent text-white px-2 py-2 outline-none flex-1 placeholder:text-slate-600 font-bold text-sm">
                    <button class="text-white font-black group-hover:text-primary transition-colors">
                        <svg class="w-6 h-6 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4 font-bold text-slate-500 text-xs">
            <p>&copy; {{ date('Y') }} PASSolving. {{ __('All rights reserved.') }}</p>
            <div class="flex gap-4">
                <!-- Instagram -->
                <a href="https://www.instagram.com/passolving?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="hover:text-primary transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                <!-- WhatsApp -->
                <a href="https://wa.me/628979515205" target="_blank" class="hover:text-primary transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
                <!-- Threads -->
                <a href="https://www.threads.com/" target="_blank" class="hover:text-primary transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.186 24h-.007c-3.581-.024-6.334-1.205-8.184-3.509C2.35 18.44 1.5 15.586 1.472 12.01v-.017c.03-3.579.879-6.43 2.525-8.482C5.845 1.205 8.6.024 12.18 0h.014c2.746.02 5.043.725 6.826 2.098 1.677 1.29 2.858 3.13 3.509 5.467l-2.04.569c-1.104-3.96-3.898-5.984-8.304-6.015-2.91.022-5.11.936-6.54 2.717C4.307 6.504 3.616 8.914 3.589 12c.027 3.086.718 5.496 2.057 7.164 1.43 1.783 3.631 2.698 6.54 2.717 2.623-.02 4.358-.631 5.8-2.045 1.647-1.613 1.618-3.593 1.09-4.798-.31-.71-.873-1.3-1.634-1.75-.192 1.352-.622 2.446-1.284 3.272-.886 1.102-2.14 1.704-3.73 1.79-1.202.065-2.361-.218-3.259-.801-1.063-.689-1.685-1.74-1.752-2.964-.065-1.19.408-2.285 1.33-3.082.88-.76 2.119-1.207 3.583-1.291a13.853 13.853 0 0 1 3.02.142c-.126-.742-.375-1.332-.75-1.757-.513-.586-1.308-.883-2.359-.89h-.029c-.844 0-1.992.232-2.721 1.32L7.734 7.847c.98-1.454 2.568-2.256 4.478-2.256h.044c3.194.02 5.097 1.975 5.287 5.388.108.046.216.094.321.142 1.49.7 2.58 1.761 3.154 3.07.797 1.82.871 4.79-1.548 7.158-1.85 1.81-4.094 2.628-7.277 2.65Zm1.003-11.69c-.242 0-.487.007-.739.021-1.836.103-2.98.946-2.916 2.143.067 1.256 1.452 1.839 2.784 1.767 1.224-.065 2.818-.543 3.086-3.71a10.5 10.5 0 0 0-2.215-.221z"/></svg></a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/passolving/" target="_blank" class="hover:text-primary transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
            </div>
        </div>
    </div>
</footer>
