<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm py-4' : 'bg-transparent py-6'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out"
>
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group relative z-50">
                <div class="w-10 h-10 bg-secondary rounded-lg flex items-center justify-center text-white font-black text-xl transition-transform group-hover:scale-105">
                    P
                </div>
                <span class="text-2xl font-black text-secondary tracking-tight">PASSolving<span class="text-primary">.</span></span>
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
                        class="text-sm font-semibold transition-colors hover:text-primary {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-primary' : 'text-slate-500' }}"
                    >
                        {{ $link['name'] }}
                    </a>
                @endforeach
                
                <a href="/contact" class="btn-primary ml-4 px-6 py-2.5 text-sm">
                    Contact Us
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="md:hidden relative z-50 p-2 text-slate-800 focus:outline-none"
            >
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="absolute top-full left-0 right-0 bg-white border-b border-slate-200 shadow-xl md:hidden"
    >
        <div class="flex flex-col p-6 gap-2">
            @foreach($links as $link)
                <a 
                    href="{{ $link['url'] }}" 
                    class="text-lg font-bold p-4 rounded-xl hover:bg-slate-50 {{ request()->is(ltrim($link['url'], '/')) || (request()->is('/') && $link['url'] == '/') ? 'text-primary bg-primary/5' : 'text-slate-800' }}"
                >
                    {{ $link['name'] }}
                </a>
            @endforeach
            <hr class="border-slate-100 my-4">
            <a href="/contact" class="btn-primary w-full text-center py-4">
                Contact Us
            </a>
        </div>
    </div>
</header>
