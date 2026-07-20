<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white shadow-md"
>
    <!-- Top Bar (Dark Teal) -->
    <div class="bg-secondary-dark text-white">
        <div class="container mx-auto px-6 max-w-7xl flex justify-between items-center h-16 md:h-20 gap-8 text-xs font-bold tracking-wide">
            
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('logo-white.png') }}" alt="PASSolving Logo" class="h-8 md:h-12">
            </a>

            <!-- Right side Desktop -->
            <div class="hidden md:flex items-center justify-end gap-8 flex-1">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>info@passolving.com</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>+62 897 951 5205</span>
                </div>
                <a href="/contact" class="bg-primary text-secondary-dark px-6 py-2 rounded-full uppercase tracking-widest hover:bg-primary-dark transition-colors">
                    CONTACT US
                </a>
                
                <!-- Language Switcher -->
                <div class="relative" x-data="{ langOpen: false }" @click.away="langOpen = false">
                    <button @click="langOpen = !langOpen" class="flex items-center gap-1 uppercase hover:text-primary transition-colors focus:outline-none">
                        <span x-text="'{{ strtoupper(app()->getLocale()) }}'"></span>
                        <svg class="w-3 h-3 transition-transform duration-200" :class="langOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="langOpen" x-cloak class="absolute top-full right-0 mt-2 w-20 bg-white text-gray-800 shadow-lg py-1 z-50 rounded">
                        <a href="/lang/id" class="block px-4 py-2 hover:bg-gray-100 transition-colors {{ app()->getLocale() == 'id' ? 'text-secondary-dark font-black' : '' }}">ID</a>
                        <a href="/lang/en" class="block px-4 py-2 hover:bg-gray-100 transition-colors {{ app()->getLocale() == 'en' ? 'text-secondary-dark font-black' : '' }}">EN</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="md:hidden p-2 text-white hover:text-primary transition-colors focus:outline-none"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Bottom Bar (White Nav) -->
    <div class="hidden md:block bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-7xl h-14 flex items-center justify-center">
            <!-- Desktop Navigation (Centered) -->
            <nav class="flex items-center justify-center flex-1 gap-12">
                @php
                    $links = [
                        ['name' => 'Home', 'url' => '/'],
                        ['name' => 'Services', 'url' => '/services'],
                        ['name' => 'Portfolio', 'url' => '/portfolio'],
                        ['name' => 'About', 'url' => '/about']
                    ];
                @endphp
                
                @foreach($links as $link)
                    <a 
                        href="{{ $link['url'] }}" 
                        class="text-[11px] font-black uppercase tracking-[0.2em] transition-colors hover:text-secondary {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-secondary' : 'text-gray-800' }}"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-xl md:hidden"
    >
        <div class="flex flex-col px-6 py-4 space-y-2">
            @foreach($links as $link)
                <a 
                    href="{{ $link['url'] }}" 
                    class="text-xs font-black uppercase tracking-[0.2em] py-3 border-b border-gray-50 {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-secondary' : 'text-gray-600' }}"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
            <a href="/contact" class="text-xs font-black uppercase tracking-[0.2em] py-3 border-b border-gray-50 text-primary">Contact Us</a>
            
            <div class="py-3 flex gap-4 text-xs font-black uppercase tracking-[0.2em]">
                <a href="/lang/id" class="{{ app()->getLocale() == 'id' ? 'text-secondary' : 'text-gray-400' }}">ID</a>
                <span class="text-gray-300">|</span>
                <a href="/lang/en" class="{{ app()->getLocale() == 'en' ? 'text-secondary' : 'text-gray-400' }}">EN</a>
            </div>
        </div>
    </div>
</header>
