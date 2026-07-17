<x-layouts.app>
    <!-- Background blobs -->
    <div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background: white;">
        <div style="position: absolute; top: -10%; right: -5%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%); border-radius: 50%;"></div>
        <div style="position: absolute; top: 40%; left: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
    </div>

    <x-hero-banner 
        title="Get In Touch" 
        subtitle="Ready to transform your organization? Reach out to us for a consultation or any inquiries regarding our capabilities."
        bgImage="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
    />

    <section class="section" style="padding: 2rem 0 8rem;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 4rem;">
                
                <div style="animation: fadeIn 1s ease-out;">
                    <div class="card" style="padding: 4rem; border-radius: 24px;">
                        <h2 style="font-size: 2.5rem; color: var(--color-secondary); margin-bottom: 2rem;">Send a Message</h2>
                        
                        <!-- LIVEWIRE CONTACT FORM COMPONENT -->
                        @livewire('contact-form')
                        
                    </div>
                </div>

                <div style="animation: fadeIn 1s ease-out 0.2s both;">
                    <div style="display: flex; flex-direction: column; gap: 2rem; padding: 2rem 0;">
                        <h3 style="font-size: 1.5rem; color: var(--color-secondary); margin-bottom: 1rem;">Our Offices</h3>
                        
                        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.1rem; color: var(--color-secondary); margin-bottom: 0.25rem;">Headquarters</h4>
                                <p style="color: var(--color-text-light); line-height: 1.6;">Sudirman Central Business District (SCBD)<br/>Jakarta Selatan, 12190<br/>Indonesia</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.1rem; color: var(--color-secondary); margin-bottom: 0.25rem;">Email</h4>
                                <p style="color: var(--color-text-light); line-height: 1.6;">info@passolving.com<br/>partnerships@passolving.com</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                            <div style="width: 50px; height: 50px; background: var(--color-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.1rem; color: var(--color-secondary); margin-bottom: 0.25rem;">Phone</h4>
                                <p style="color: var(--color-text-light); line-height: 1.6;">+62 21 1234 5678<br/>Mon-Fri, 9am - 6pm</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
