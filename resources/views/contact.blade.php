<x-layouts.app>
    <x-hero-banner 
        title="{{ __('Get In Touch') }}" 
        subtitle="{{ __('Setiap kolaborasi dapat dimulai dari berbagai entry point, dirancang terintegrasi untuk memastikan dampak terukur dan berkelanjutan.') }}"
        bgImage="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
    />

    <section class="py-24 md:py-32 bg-white relative">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-5 gap-0 shadow-2xl border-4 border-secondary group/main relative z-10 bg-white">
                
                <!-- Decorative background elements -->
                <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-primary transform rotate-45 -z-10 transition-transform duration-500 group-hover/main:rotate-90"></div>
                
                <!-- Contact Form -->
                <div class="lg:col-span-3 p-10 md:p-16 relative" data-aos="fade-right" data-aos-duration="800">
                    <div class="absolute top-0 left-0 w-2 h-full bg-primary"></div>
                    
                    <div class="mb-12">
                        <h2 class="text-4xl font-black text-secondary mb-4 tracking-tight uppercase">{{ __('Solving What Matters') }}</h2>
                        <p class="text-slate-500 text-lg font-medium border-l-4 border-secondary/20 pl-4">{{ __('Hubungi kami untuk sesi Discovery, rancangan program kontekstual, hingga uji kelayakan dampak awal.') }}</p>
                    </div>
                    
                    <!-- LIVEWIRE CONTACT FORM COMPONENT -->
                    <div class="font-bold">
                        @livewire('contact-form')
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-2 bg-secondary p-10 md:p-16 h-full flex flex-col justify-center relative overflow-hidden text-white border-l-4 border-secondary lg:border-l-0" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    
                    <!-- Abstract Background Cut -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-primary/10 transform translate-x-1/2 -translate-y-1/2 rotate-45 pointer-events-none"></div>

                    <div class="relative z-10">
                        <h3 class="text-3xl font-black text-white mb-12 uppercase tracking-widest flex items-center gap-4">
                            <div class="w-8 h-1 bg-primary"></div>
                            {{ __('Working With Intent') }}
                        </h3>
                        
                        <div class="space-y-10">
                            <!-- Phone -->
                            <div class="flex items-start gap-6 group/item cursor-pointer">
                                <div class="w-16 h-16 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 group-hover/item:bg-primary group-hover/item:border-primary transition-colors duration-300 transform group-hover/item:rotate-12">
                                    <svg class="w-7 h-7 text-white group-hover/item:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-1 group-hover/item:text-primary transition-colors">{{ __('Phone') }}</h4>
                                    <p class="text-xl font-bold text-white leading-relaxed">
                                        +62 897 9515 205
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-6 group/item cursor-pointer">
                                <div class="w-16 h-16 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 group-hover/item:bg-primary group-hover/item:border-primary transition-colors duration-300 transform group-hover/item:rotate-12">
                                    <svg class="w-7 h-7 text-white group-hover/item:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-1 group-hover/item:text-primary transition-colors">{{ __('Email') }}</h4>
                                    <p class="text-xl font-bold text-white leading-relaxed">
                                        <a href="mailto:bersama@passolving.com" class="hover:text-primary transition-colors block">bersama@passolving.com</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Instagram -->
                            <div class="flex items-start gap-6 group/item cursor-pointer">
                                <div class="w-16 h-16 bg-white/5 flex items-center justify-center shrink-0 border border-white/20 group-hover/item:bg-primary group-hover/item:border-primary transition-colors duration-300 transform group-hover/item:rotate-12">
                                    <svg class="w-7 h-7 text-white group-hover/item:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="0" ry="0"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-1 group-hover/item:text-primary transition-colors">{{ __('Instagram') }}</h4>
                                    <p class="text-xl font-bold text-white leading-relaxed">
                                        @passolving
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
