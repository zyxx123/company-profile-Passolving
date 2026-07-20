<x-layouts.app>
    <x-hero-banner 
        title="{{ __('Get In Touch') }}" 
        subtitle="{{ __('Setiap kolaborasi dapat dimulai dari berbagai entry point, dirancang terintegrasi untuk memastikan dampak terukur dan berkelanjutan.') }}"
        bgImage="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
    />

    <!-- The moved Contact Section from Homepage -->
    <section class="flex flex-col md:flex-row relative bg-secondary text-white min-h-[600px] overflow-hidden">
        <!-- Left Contact Form -->
        <div class="w-full md:w-1/2 p-8 md:p-16 lg:p-24 relative z-10 flex flex-col justify-center">
            <span class="text-[10px] font-black uppercase tracking-widest text-primary mb-2 block">GET YOUR FREE ESTIMATE</span>
            <h2 class="text-3xl md:text-5xl font-black uppercase mb-12 leading-tight">
                Let's Start Working<br/>Together
            </h2>
            
            <div class="w-full max-w-lg bg-white p-8 md:p-10 rounded-2xl shadow-2xl text-secondary-dark relative z-20">
                <h3 class="text-2xl font-black mb-6 uppercase tracking-tight">Drop us a line</h3>
                <!-- LIVEWIRE CONTACT FORM COMPONENT -->
                @livewire('contact-form')
            </div>
        </div>
        
        <!-- Right Image -->
        <div class="w-full md:w-1/2 min-h-[400px] md:absolute md:top-0 md:right-0 md:bottom-0 z-0">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover filter grayscale" alt="Consultant">
            <!-- Overlay to blend slightly with the right edge -->
            <div class="absolute inset-0 bg-secondary/20 mix-blend-multiply hidden md:block"></div>
        </div>
        
        <!-- Wavy separator overlap -->
        <div class="absolute left-1/2 top-0 bottom-0 w-32 -translate-x-1/2 hidden md:block z-10 pointer-events-none">
            <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="w-full h-full fill-secondary">
                <path d="M50,0 C100,20 0,80 50,100 L0,100 L0,0 Z" />
            </svg>
        </div>
    </section>

    <!-- Additional Contact Info -->
    <section class="py-16 md:py-24 bg-white relative">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-secondary-dark uppercase tracking-widest mb-4">Working With Intent</h2>
                <div class="w-16 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Phone -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary/50 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-16 h-16 bg-secondary/10 text-secondary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-2 group-hover:text-primary transition-colors">WhatsApp</h4>
                    <p class="text-xl font-bold text-secondary-dark"><a href="https://wa.me/628979515205" target="_blank" class="hover:text-primary transition-colors">+62 897 9515 205</a></p>
                </div>
                
                <!-- Email -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary/50 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-16 h-16 bg-secondary/10 text-secondary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-2 group-hover:text-primary transition-colors">Email</h4>
                    <p class="text-xl font-bold text-secondary-dark"><a href="mailto:bersama@passolving.com" class="hover:text-primary transition-colors">bersama@passolving.com</a></p>
                </div>
                
                <!-- Instagram -->
                <div class="text-center p-8 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary/50 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-16 h-16 bg-secondary/10 text-secondary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="0" ry="0"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                    </div>
                    <h4 class="text-sm uppercase tracking-widest font-black text-slate-400 mb-2 group-hover:text-primary transition-colors">Instagram</h4>
                    <p class="text-xl font-bold text-secondary-dark"><a href="https://www.instagram.com/passolving?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="hover:text-primary transition-colors">@passolving</a></p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
