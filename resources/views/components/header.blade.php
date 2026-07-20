<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b"
    :class="scrolled ? 'bg-secondary border-white/10 shadow-lg py-4' : 'bg-transparent border-transparent py-6'"
>
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <img src="/logo-white.png" alt="PASSolving Logo" class="h-10 w-auto transform group-hover:-rotate-6 transition-transform">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
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
                        class="text-xs font-bold uppercase tracking-widest transition-colors hover:text-primary relative group pb-1"
                    >
                        <span class="{{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-primary' : 'text-slate-300' }}">
                            {{ $link['name'] }}
                        </span>
                        <!-- Sharp underline effect -->
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'scale-x-100' : '' }}"></span>
                    </a>
                @endforeach
                <!-- CTA Button -->
                <a href="/contact" class="bg-primary text-secondary px-8 py-3 text-xs font-black uppercase tracking-widest hover:bg-white transition-colors relative overflow-hidden group">
                    <span class="relative z-10">Contact</span>
                    <!-- Diagonal hover effect -->
                    <div class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-out z-0"></div>
                </a>
                
                <!-- Language Switcher -->
                <div class="relative ml-2" x-data="{ langOpen: false }" @click.away="langOpen = false">
                    <button @click="langOpen = !langOpen" class="flex items-center gap-1 text-xs font-bold tracking-widest uppercase text-slate-300 hover:text-primary transition-colors focus:outline-none">
                        <span x-text="'{{ strtoupper(app()->getLocale()) }}'"></span>
                        <svg class="w-4 h-4 transition-transform duration-200" :class="langOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <div x-show="langOpen" x-cloak x-transition.opacity.duration.200ms class="absolute top-full right-0 mt-6 w-20 bg-secondary border border-white/10 shadow-2xl py-2 z-50">
                        <a href="/lang/id" class="block px-4 py-2 text-xs font-bold tracking-widest uppercase hover:bg-white/5 transition-colors {{ app()->getLocale() == 'id' ? 'text-primary' : 'text-slate-300 hover:text-white' }}">ID</a>
                        <a href="/lang/en" class="block px-4 py-2 text-xs font-bold tracking-widest uppercase hover:bg-white/5 transition-colors {{ app()->getLocale() == 'en' ? 'text-primary' : 'text-slate-300 hover:text-white' }}">EN</a>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="md:hidden p-2 bg-secondary/60 rounded-md text-white hover:text-primary transition-colors focus:outline-none backdrop-blur-sm border border-white/10"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
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
        class="absolute top-full left-0 w-full bg-secondary border-t border-white/10 shadow-2xl md:hidden"
    >
        <div class="flex flex-col px-6 py-4 space-y-4">
            @foreach($links as $link)
                <a 
                    href="{{ $link['url'] }}" 
                    class="text-sm font-bold uppercase tracking-widest py-2 border-b border-white/5 {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-primary' : 'text-slate-300 hover:text-primary' }}"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach

            <!-- Language Switcher Mobile -->
            <div class="py-2 border-b border-white/5" x-data="{ langOpenMob: false }">
                <button @click="langOpenMob = !langOpenMob" class="flex items-center justify-between w-full text-sm font-bold uppercase tracking-widest text-slate-300 hover:text-primary transition-colors focus:outline-none">
                    <span>Lang: {{ strtoupper(app()->getLocale()) }}</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="langOpenMob ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="langOpenMob" x-cloak class="mt-4 flex flex-col space-y-4 pl-4 pb-2">
                    <a href="/lang/id" class="text-sm font-bold uppercase {{ app()->getLocale() == 'id' ? 'text-primary' : 'text-slate-400 hover:text-slate-200' }}">ID</a>
                    <a href="/lang/en" class="text-sm font-bold uppercase {{ app()->getLocale() == 'en' ? 'text-primary' : 'text-slate-400 hover:text-slate-200' }}">EN</a>
                </div>
            </div>

            <div class="pt-4">
                <a href="/contact" class="block w-full bg-primary text-secondary text-center px-6 py-4 text-xs font-black uppercase tracking-widest">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</header>
