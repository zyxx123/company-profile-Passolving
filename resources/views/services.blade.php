<x-layouts.app>
    <!-- Background blobs -->
    <div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background: white;">
        <div style="position: absolute; top: -10%; right: -5%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%); border-radius: 50%;"></div>
        <div style="position: absolute; top: 40%; left: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
    </div>

    <x-hero-banner 
        title="Our Capabilities" 
        subtitle="Integrating engineering discipline, management, and human learning into three main pillars: Training, Consulting, and Research."
        bgImage="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="section" style="padding: 2rem 0 8rem;">
        <div class="container">
            
            <div style="margin-bottom: 6rem; animation: fadeIn 1s ease-out;">
                <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 2.5rem; justify-content: center;">
                    <h2 style="font-size: 2.8rem; color: var(--color-secondary); text-shadow: 0 2px 10px rgba(0,0,0,0.05);">Training Methodology</h2>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
                    <div class="card" style="padding: 3rem; border-radius: 24px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 20px rgba(0, 155, 159, 0.15);">
                            <h3 style="font-size: 1.5rem; color: var(--color-primary); margin: 0;">80%</h3>
                        </div>
                        <h4 style="font-size: 1.5rem; color: var(--color-secondary); margin-bottom: 1rem;">Activity</h4>
                        <p style="color: var(--color-text-light); line-height: 1.8;">Aktivitas interaktif seperti simulasi, studi kasus, role play, bermain dan praktik langsung agar peserta dapat belajar melalui pengalaman saat itu (learning by doing).</p>
                    </div>
                    <div class="card" style="padding: 3rem; border-radius: 24px; text-align: center;">
                        <div style="width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 20px rgba(226, 63, 136, 0.15);">
                            <h3 style="font-size: 1.5rem; color: var(--color-accent); margin: 0;">20%</h3>
                        </div>
                        <h4 style="font-size: 1.5rem; color: var(--color-secondary); margin-bottom: 1rem;">Insight</h4>
                        <p style="color: var(--color-text-light); line-height: 1.8;">Refleksi, penguatan konsep, dan kunci pembelajaran dari setiap aktivitas yang telah dilakukan untuk dibawa ke dunia kerja.</p>
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 6rem; padding: 4rem; border-radius: 30px; color: white; text-align: center; position: relative; overflow: hidden; background: linear-gradient(180deg, rgba(11,36,71,0.95) 0%, rgba(11,36,71,0.85) 100%); animation: fadeIn 1s ease-out 0.2s both;">
                <div style="position: absolute; top: 0; right: 0; width: 300px; height: 300px; background: radial-gradient(circle, var(--color-primary) 0%, transparent 70%); opacity: 0.2; border-radius: 50%;"></div>
                <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; color: white; position: relative; z-index: 1;">LEGO® Serious Play®</h2>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 2.5rem; max-width: 800px; margin: 0 auto 2.5rem; line-height: 1.8; position: relative; z-index: 1;">
                    Metode global yang menghadirkan pendekatan unik dan partisipatif untuk berpikir bersama. Melalui proses membangun dan bercerita (building & storytelling), setiap individu memiliki ruang yang setara untuk berkontribusi.
                </p>
                <button class="heroBtn" style="position: relative; z-index: 1; border: none; cursor: pointer;">
                    Pelatihan Intensif 1 Hari
                </button>
            </div>

            <div style="animation: fadeIn 1s ease-out 0.4s both;">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <h2 style="font-size: 2.8rem; color: var(--color-secondary);">Engagement Approach (Consulting)</h2>
                    <p style="color: var(--color-text-light); font-size: 1.1rem;">The 4S Framework for Sustainable Transformation</p>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
                    @php
                        $approaches = [
                            ['title' => 'SCAN', 'color' => 'var(--color-primary)', 'desc' => 'Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.'],
                            ['title' => 'SHIFT', 'color' => 'var(--color-accent)', 'desc' => 'Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif.'],
                            ['title' => 'SCALE', 'color' => '#00d4d8', 'desc' => 'Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja organisasi.'],
                            ['title' => 'SCRIBE', 'color' => 'var(--color-secondary-light)', 'desc' => 'Menyusun story of impact untuk seluruh pemangku kepentingan.']
                        ];
                    @endphp

                    @foreach($approaches as $item)
                        <div class="card" style="padding: 2.5rem 2rem; border-radius: 24px; text-align: center; transition: transform 0.3s ease;">
                            <h3 style="color: {{ $item['color'] }}; margin-bottom: 1rem; font-size: 1.5rem;">{{ $item['title'] }}</h3>
                            <p style="font-size: 0.95rem; color: var(--color-text-light); line-height: 1.6;">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-layouts.app>
