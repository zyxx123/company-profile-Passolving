

<!-- HEADER WRAPPER -->
<div x-data="{ scrolled: false, mobileMenuOpen: false }"
     @scroll.window="scrolled = (window.pageYOffset > 40)"
     class="w-full">

    <!-- Spacer to prevent layout shift -->
    <div x-show="scrolled" style="display: none;" class="h-[88px] w-full"></div>

    <!-- HEADER -->
    <header :class="{ 'fixed top-0 shadow-md bg-white/95 backdrop-blur-md z-50 text-[#141414] border-gray-100': scrolled, 'relative bg-primary z-40 text-primary-dark border-transparent': !scrolled }"
            class="w-full transition-all duration-300 h-[88px] flex items-center border-b">
    
    <div class="container mx-auto px-6 max-w-[1320px]">
        <div class="flex items-center justify-between">
            
            <!-- Logo -->
            <a href="/" class="flex flex-col shrink-0">
                <img :src="scrolled ? '{{ asset('logo-black-trimmed.png') }}' : '{{ asset('logo-white-trimmed.png') }}'" alt="Passolving Logo" class="h-8 md:h-10 w-auto object-contain">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                <x-ui.nav-link href="/" :active="request()->is('/')">{{ __('Home') }}</x-ui.nav-link>
                <x-ui.nav-link href="/services" :active="request()->is('services*')">{{ __('Service') }}</x-ui.nav-link>
                <x-ui.nav-link href="/portfolio" :active="request()->is('portfolio*')">{{ __('Portfolio') }}</x-ui.nav-link>
                <x-ui.nav-link href="/about" :active="request()->is('about*')">{{ __('About') }}</x-ui.nav-link>
                <x-ui.nav-link href="/contact" :active="request()->is('contact*')">{{ __('Contact') }}</x-ui.nav-link>
            </nav>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex items-center gap-4 xl:gap-6">
                <x-ui.button href="/contact" variant="primary">
                    {{ __('Get in Touch') }}
                </x-ui.button>
                
                <!-- Language Switcher -->
                <div class="relative group flex items-center">
                    <button :class="scrolled || {{ request()->is('/') ? 'false' : 'true' }} ? 'text-[#141414]' : 'text-white'" class="flex items-center gap-1.5 font-bold text-[15px] hover:text-accent-hover transition-colors py-2">
                        <img src="https://flagcdn.com/w20/{{ app()->getLocale() == 'en' ? 'gb' : 'id' }}.png" class="w-5 h-auto rounded-[2px] shadow-sm border border-black/5" alt="{{ app()->getLocale() }}">
                        {{ strtoupper(app()->getLocale()) }}
                        <x-icon name="lucide-chevron-down" class="w-4 h-4" />
                    </button>
                    <!-- Dropdown Container with Hover Bridge -->
                    <div class="absolute right-0 top-full pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="w-36 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden flex flex-col p-1.5">
                            <a href="/lang/en" class="lang-switch-btn flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-bold transition-colors {{ app()->getLocale() == 'en' ? 'bg-primary/10 text-primary' : 'text-[#141414] hover:bg-gray-50' }}">
                                <img src="https://flagcdn.com/w20/gb.png" class="w-5 h-auto rounded-[2px] shadow-sm border border-black/5" alt="EN">
                                English
                            </a>
                            <a href="/lang/id" class="lang-switch-btn flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-bold transition-colors {{ app()->getLocale() == 'id' ? 'bg-primary/10 text-primary' : 'text-[#141414] hover:bg-gray-50' }}">
                                <img src="https://flagcdn.com/w20/id.png" class="w-5 h-auto rounded-[2px] shadow-sm border border-black/5" alt="ID">
                                Indonesia
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = true" class="lg:hidden w-11 h-11 flex items-center justify-center hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-primary rounded-lg">
                <x-icon name="lucide-menu" class="w-7 h-7" />
            </button>
        </div>
    </div>
</header>

    <!-- Mobile Slide-in Menu -->
    <div x-show="mobileMenuOpen" 
         style="display: none;"
         class="fixed inset-0 z-[100] md:hidden"
         aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        
        <!-- Background overlay -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="ease-in-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black/60 transition-opacity" 
             @click="mobileMenuOpen = false"></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    
                    <!-- Slide-in panel -->
                    <div x-show="mobileMenuOpen"
                         x-transition:enter="transform transition ease-in-out duration-300"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-300"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full"
                         class="pointer-events-auto relative w-screen max-w-md h-full">
                        
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="px-6 pt-6 pb-4 flex items-center justify-between border-b border-gray-100">
                                <a href="/" class="flex flex-col shrink-0">
                                    <img src="{{ asset('logo-black-trimmed.png') }}" alt="Passolving Logo" class="h-8 w-auto object-contain">
                                </a>
                                <button type="button" @click="mobileMenuOpen = false" class="rounded-md text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <span class="sr-only">Close panel</span>
                                    <x-icon name="lucide-x" class="w-8 h-8" />
                                </button>
                            </div>
                            
                            <div class="relative mt-6 flex-1 px-6 sm:px-6">
                                <nav class="space-y-6 flex flex-col mt-4">
                                    <a href="/" class="text-xl font-bold {{ request()->is('/') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">{{ __('Home') }}</a>
                                    <a href="/services" class="text-xl font-bold {{ request()->is('services*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors flex items-center justify-between">{{ __('Service') }} <x-icon name="lucide-chevron-right" class="w-5 h-5 text-gray-400"/></a>
                                    <a href="/portfolio" class="text-xl font-bold {{ request()->is('portfolio*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">{{ __('Portfolio') }}</a>
                                    <a href="/about" class="text-xl font-bold {{ request()->is('about*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">{{ __('About') }}</a>
                                    <a href="/contact" class="text-xl font-bold {{ request()->is('contact*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">{{ __('Contact') }}</a>
                                    
                                    <div class="pt-4 flex items-center justify-between border-t border-gray-100">
                                        <span class="text-sm font-bold text-gray-500">Language</span>
                                        <div class="flex items-center gap-2">
                                            <a href="/lang/en" class="lang-switch-btn flex items-center gap-2 px-3 py-1.5 rounded-md text-sm font-bold transition-colors {{ app()->getLocale() == 'en' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600' }}">
                                                <img src="https://flagcdn.com/w20/gb.png" class="w-4 h-auto rounded-[2px]" alt="EN"> EN
                                            </a>
                                            <a href="/lang/id" class="lang-switch-btn flex items-center gap-2 px-3 py-1.5 rounded-md text-sm font-bold transition-colors {{ app()->getLocale() == 'id' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600' }}">
                                                <img src="https://flagcdn.com/w20/id.png" class="w-4 h-auto rounded-[2px]" alt="ID"> ID
                                            </a>
                                        </div>
                                    </div>

                                    <div class="pt-4">
                                        <x-ui.button href="/contact" variant="primary" class="w-full justify-center">
                                            {{ __('Get in Touch') }}
                                        </x-ui.button>
                                    </div>
                                </nav>
                            </div>
                            
                            <!-- Socials Mobile -->
                            <div class="p-6 bg-gray-50 border-t border-gray-100 flex items-center justify-center gap-4 text-[#585857]">
                                <a href="#" class="hover:text-primary transition-colors"><x-icon name="lucide-linkedin" class="w-5 h-5" /></a>
                                <a href="https://www.instagram.com/passolving?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="hover:text-primary transition-colors"><x-icon name="lucide-instagram" class="w-5 h-5" /></a>
                                <a href="https://www.youtube.com/@passolving9836" target="_blank" class="hover:text-primary transition-colors"><x-icon name="lucide-youtube" class="w-5 h-5" /></a>
                                <a href="https://facebook.com/kita.passolving.7" target="_blank" class="hover:text-primary transition-colors"><x-icon name="lucide-facebook" class="w-5 h-5" /></a>
                                <a href="https://www.threads.net/@passolving" target="_blank" class="hover:text-primary transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 192 192"><path d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX Language Switcher Script -->
<script>
    if (!window.langSwitcherInitialized) {
        window.langSwitcherInitialized = true;
        
        document.body.addEventListener('click', async (e) => {
            const btn = e.target.closest('.lang-switch-btn');
            if (!btn) return;
            
            e.preventDefault();
            const url = btn.getAttribute('href');
            
            // Add fade effect
            document.body.style.transition = 'opacity 0.3s ease';
            document.body.style.opacity = '0.3';
            
            try {
                const response = await fetch(url);
                const html = await response.text();
                
                const parser = new DOMParser();
                const newDoc = parser.parseFromString(html, 'text/html');
                
                const currentWrapper = document.querySelector('.min-h-screen');
                const newWrapper = newDoc.querySelector('.min-h-screen');
                
                if (currentWrapper && newWrapper) {
                    currentWrapper.innerHTML = newWrapper.innerHTML;
                    
                    if (typeof AOS !== 'undefined') {
                        setTimeout(() => {
                            AOS.refreshHard();
                        }, 100);
                    }
                } else {
                    window.location.href = url;
                    return;
                }
            } catch (error) {
                console.error('Language switch failed:', error);
                window.location.href = url;
            } finally {
                document.body.style.opacity = '1';
            }
        });
    }
</script>
