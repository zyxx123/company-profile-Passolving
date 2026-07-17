<x-layouts.app>
    <!-- Background blobs -->
    <div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background: white;">
        <div style="position: absolute; top: -10%; right: -5%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%); border-radius: 50%;"></div>
        <div style="position: absolute; top: 40%; left: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
    </div>

    <x-hero-banner 
        title="About PASSolving" 
        subtitle="Pioneer in Agility Assessment & National Soft Skill Certification. We work when leadership is ready to face uncomfortable realities."
        bgImage="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="section" style="padding: 4rem 0 8rem;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 4rem; align-items: center;">
                <div style="animation: fadeIn 1s ease-out;">
                    <div class="card" style="padding: 3rem; border-radius: 24px;">
                        <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: var(--color-secondary);">The Iceberg of Ignorance</h2>
                        <p style="font-size: 1.1rem; color: var(--color-text-light); margin-bottom: 2rem; line-height: 1.8;">
                            Menurut Sidney Yoshida, <strong>96% masalah tersembunyi dari Manajemen Senior</strong>. Pendekatan kami menembus zona buta ini.
                        </p>
                        <ul style="display: flex; flex-direction: column; gap: 1rem; color: var(--color-secondary); font-weight: 500; list-style: none; padding: 0;">
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <span style="background: var(--color-accent); color: white; padding: 0.3rem 1rem; border-radius: 20px; font-weight: bold;">4%</span>
                                Executives see 4% of the problems
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <span style="background: var(--color-primary-dark); color: white; padding: 0.3rem 1rem; border-radius: 20px; font-weight: bold;">9%</span>
                                Team Managers see 9% of the problems
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <span style="background: var(--color-primary); color: white; padding: 0.3rem 1rem; border-radius: 20px; font-weight: bold;">74%</span>
                                Team Leaders see 74% of the problems
                            </li>
                            <li style="display: flex; gap: 1rem; align-items: center;">
                                <span style="background: var(--color-secondary); color: white; padding: 0.3rem 1rem; border-radius: 20px; font-weight: bold;">100%</span>
                                Staff sees 100% of the problems
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="animation: fadeIn 1s ease-out 0.2s both;">
                    <div class="card" style="padding: 3rem; border-radius: 24px; background: rgba(11,36,71,0.03);">
                        <h3 style="font-size: 1.8rem; margin-bottom: 1rem; color: var(--color-primary);">Mengapa PASS?</h3>
                        <p style="color: var(--color-text-light); line-height: 1.8; font-style: italic; margin-bottom: 2.5rem;">
                            "Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."
                        </p>
                        <div style="display: grid; gap: 1.5rem;">
                            <div style="padding-left: 1.5rem; border-left: 3px solid var(--color-primary);">
                                <h4 style="color: var(--color-secondary); margin-bottom: 0.3rem;">Berpengalaman Lintas Industri</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-light); margin: 0;">Berkolaborasi dengan BUMN, Kementerian, OJK, BNI, Indosat.</p>
                            </div>
                            <div style="padding-left: 1.5rem; border-left: 3px solid var(--color-accent);">
                                <h4 style="color: var(--color-secondary); margin-bottom: 0.3rem;">Berbasis Sistem & Data</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-light); margin: 0;">Menggunakan Empathy–System–Result Framework.</p>
                            </div>
                            <div style="padding-left: 1.5rem; border-left: 3px solid var(--color-secondary);">
                                <h4 style="color: var(--color-secondary); margin-bottom: 0.3rem;">Pendekatan Humanis</h4>
                                <p style="font-size: 0.9rem; color: var(--color-text-light); margin: 0;">Transformasi berhasil hanya jika manusia di dalamnya ikut berubah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
