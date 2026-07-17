<x-layouts.app>
    <x-hero-banner 
        title="Get In Touch" 
        subtitle="Setiap kolaborasi dapat dimulai dari berbagai entry point, dirancang terintegrasi untuk memastikan dampak terukur dan berkelanjutan."
        bgImage="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
    />

    <section class="py-32 bg-[#F8FAFC] bg-grid-lines relative">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">
                
                <!-- Contact Form -->
                <div class="lg:col-span-3" data-aos="fade-right">
                    <div class="bg-white p-10 md:p-14 rounded-[2rem] border border-slate-100 shadow-xl">
                        <div class="mb-12">
                            <h2 class="text-4xl font-black text-secondary mb-4 tracking-tight">Solving What Matters</h2>
                            <p class="text-slate-500 text-lg">Hubungi kami untuk sesi Discovery, rancangan program kontekstual, hingga uji kelayakan dampak awal.</p>
                        </div>
                        
                        <!-- LIVEWIRE CONTACT FORM COMPONENT -->
                        @livewire('contact-form')
                        
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-2" data-aos="fade-left">
                    <div class="bg-secondary rounded-[2rem] p-10 md:p-14 h-full flex flex-col justify-center shadow-2xl relative overflow-hidden">
                        
                        <!-- Abstract Background -->
                        <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/20 blur-[80px] rounded-full pointer-events-none"></div>

                        <div class="relative z-10">
                            <h3 class="text-3xl font-bold text-white mb-10">Working With Intent</h3>
                            
                            <div class="space-y-10">
                                <!-- Phone -->
                                <div class="flex items-start gap-6 group">
                                    <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center shrink-0 border border-white/20 group-hover:bg-accent group-hover:border-transparent transition-all duration-300">
                                        <svg class="w-8 h-8 text-white group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Phone</h4>
                                        <p class="text-slate-400 leading-relaxed">
                                            +62 897 9515 205
                                        </p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start gap-6 group">
                                    <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center shrink-0 border border-white/20 group-hover:bg-accent group-hover:border-transparent transition-all duration-300">
                                        <svg class="w-8 h-8 text-white group-hover:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Email</h4>
                                        <p class="text-slate-400 leading-relaxed">
                                            <a href="mailto:bersama@passolving.com" class="hover:text-white transition-colors block">bersama@passolving.com</a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Instagram -->
                                <div class="flex items-start gap-6 group">
                                    <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center shrink-0 border border-white/20 group-hover:bg-accent group-hover:border-transparent transition-all duration-300">
                                        <svg class="w-8 h-8 text-white group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-white mb-2 group-hover:text-accent transition-colors">Instagram</h4>
                                        <p class="text-slate-400 leading-relaxed">
                                            @passolving
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
