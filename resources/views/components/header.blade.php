<!-- TOP BAR -->
<div class="bg-primary-dark text-white/90 py-2 hidden md:block text-xs font-medium border-b border-white/10">
    <div class="container mx-auto px-6 max-w-[1320px] flex justify-between items-center">
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
                <x-icon name="lucide-map-pin" class="w-4 h-4" />
                <span>Jl. P.P.A No.24, Ceger, Cipayung, Jakarta Timur 13820</span>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2 hover:text-white transition-colors">
                <x-icon name="lucide-phone" class="w-4 h-4" />
                <a href="tel:+622112345678">+62 21 1234 5678</a>
            </div>
            <div class="flex items-center gap-2 hover:text-white transition-colors">
                <x-icon name="lucide-mail" class="w-4 h-4" />
                <a href="mailto:info@passolving.com">info@passolving.com</a>
            </div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header x-data="{ scrolled: false, mobileMenuOpen: false }"
        @scroll.window="scrolled = (window.pageYOffset > 40)"
        :class="{ 'fixed top-0 shadow-md bg-white/95 backdrop-blur-md z-50': scrolled, 'relative bg-white z-40': !scrolled }"
        class="w-full transition-all duration-300 h-[88px] flex items-center border-b border-gray-100">
    
    <div class="container mx-auto px-6 max-w-[1320px]">
        <div class="flex items-center justify-between">
            
            <!-- Logo -->
            <a href="/" class="flex flex-col shrink-0">
                <img src="{{ asset('logo-black-trimmed.png') }}" alt="Passolving Logo" class="h-10 w-auto object-contain">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-8">
                <x-ui.nav-link href="/" :active="request()->is('/')">Home</x-ui.nav-link>
                <x-ui.nav-link href="/services" :active="request()->is('services*')">Service</x-ui.nav-link>
                <x-ui.nav-link href="/portfolio" :active="request()->is('portfolio*')">Portfolio</x-ui.nav-link>
                <x-ui.nav-link href="/about" :active="request()->is('about*')">About</x-ui.nav-link>
                <x-ui.nav-link href="/contact" :active="request()->is('contact*')">Contact</x-ui.nav-link>
            </nav>

            <!-- Desktop Actions -->
            <div class="hidden md:flex items-center gap-6">
                <button class="text-[#141414] hover:text-primary transition-colors">
                    <x-icon name="lucide-search" class="w-5 h-5" stroke-width="2.5" />
                </button>
                <x-ui.button href="/contact" variant="primary">
                    Get in Touch
                </x-ui.button>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = true" class="md:hidden p-2 text-[#141414] hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary rounded-lg">
                <x-icon name="lucide-menu" class="w-8 h-8" />
            </button>
        </div>
    </div>

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
                         class="pointer-events-auto relative w-screen max-w-md">
                        
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
                                    <a href="/" class="text-xl font-bold {{ request()->is('/') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">Home</a>
                                    <a href="/services" class="text-xl font-bold {{ request()->is('services*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors flex items-center justify-between">Service <x-icon name="lucide-chevron-right" class="w-5 h-5 text-gray-400"/></a>
                                    <a href="/portfolio" class="text-xl font-bold {{ request()->is('portfolio*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">Portfolio</a>
                                    <a href="/about" class="text-xl font-bold {{ request()->is('about*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">About</a>
                                    <a href="/contact" class="text-xl font-bold {{ request()->is('contact*') ? 'text-primary' : 'text-[#141414]' }} hover:text-primary transition-colors">Contact Us</a>
                                    
                                    <div class="pt-8">
                                        <x-ui.button href="/contact" variant="primary" class="w-full justify-center">
                                            GET IN TOUCH
                                        </x-ui.button>
                                    </div>
                                </nav>
                            </div>
                            
                            <!-- Socials Mobile -->
                            <div class="p-6 bg-gray-50 border-t border-gray-100 flex items-center justify-center gap-6 text-[#585857]">
                                <a href="#" class="hover:text-primary transition-colors"><x-icon name="lucide-linkedin" class="w-5 h-5" /></a>
                                <a href="#" class="hover:text-primary transition-colors"><x-icon name="lucide-instagram" class="w-5 h-5" /></a>
                                <a href="#" class="hover:text-primary transition-colors"><x-icon name="lucide-youtube" class="w-5 h-5" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
