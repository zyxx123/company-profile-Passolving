import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';

export default function Services() {
  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title="Our Capabilities" 
        subtitle="Integrating engineering discipline, management, and human learning into three main pillars: Training, Consulting, and Research."
        bgImage="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
      />

      <section className="section" style={{ padding: '2rem 0 8rem' }}>
        <div className="container">
          
          <FadeIn>
            <div style={{ marginBottom: '6rem' }}>
              <div style={{ display: 'flex', alignItems: 'center', gap: '1.5rem', marginBottom: '2.5rem', justifyContent: 'center' }}>
                <h2 style={{ fontSize: '2.8rem', color: 'var(--color-secondary)', textShadow: '0 2px 10px rgba(0,0,0,0.05)' }}>Training Methodology</h2>
              </div>
              <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '3rem' }}>
                <div className="glass" style={{ padding: '3rem', borderRadius: '24px', textAlign: 'center' }}>
                  <div style={{ width: '80px', height: '80px', background: 'white', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', margin: '0 auto 1.5rem', boxShadow: '0 10px 20px rgba(0, 155, 159, 0.15)' }}>
                    <h3 style={{ fontSize: '1.5rem', color: 'var(--color-primary)', margin: 0 }}>80%</h3>
                  </div>
                  <h4 style={{ fontSize: '1.5rem', color: 'var(--color-secondary)', marginBottom: '1rem' }}>Activity</h4>
                  <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8' }}>Aktivitas interaktif seperti simulasi, studi kasus, role play, bermain dan praktik langsung agar peserta dapat belajar melalui pengalaman saat itu (learning by doing).</p>
                </div>
                <div className="glass" style={{ padding: '3rem', borderRadius: '24px', textAlign: 'center' }}>
                  <div style={{ width: '80px', height: '80px', background: 'white', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', margin: '0 auto 1.5rem', boxShadow: '0 10px 20px rgba(226, 63, 136, 0.15)' }}>
                    <h3 style={{ fontSize: '1.5rem', color: 'var(--color-accent)', margin: 0 }}>20%</h3>
                  </div>
                  <h4 style={{ fontSize: '1.5rem', color: 'var(--color-secondary)', marginBottom: '1rem' }}>Insight</h4>
                  <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8' }}>Refleksi, penguatan konsep, dan kunci pembelajaran dari setiap aktivitas yang telah dilakukan untuk dibawa ke dunia kerja.</p>
                </div>
              </div>
            </div>
          </FadeIn>

          <FadeIn delay={0.2}>
            <div className="glass-dark" style={{ marginBottom: '6rem', padding: '4rem', borderRadius: '30px', color: 'white', textAlign: 'center', position: 'relative', overflow: 'hidden' }}>
              <div style={{ position: 'absolute', top: 0, right: 0, width: '300px', height: '300px', background: 'radial-gradient(circle, var(--color-primary) 0%, transparent 70%)', opacity: 0.2, borderRadius: '50%' }}></div>
              <h2 style={{ fontSize: '2.8rem', marginBottom: '1.5rem', color: 'white', position: 'relative', zIndex: 1 }}>LEGO® Serious Play®</h2>
              <p style={{ fontSize: '1.2rem', color: 'rgba(255,255,255,0.9)', marginBottom: '2.5rem', maxWidth: '800px', margin: '0 auto 2.5rem', lineHeight: '1.8', position: 'relative', zIndex: 1 }}>
                Metode global yang menghadirkan pendekatan unik dan partisipatif untuk berpikir bersama. Melalui proses membangun dan bercerita (building & storytelling), setiap individu memiliki ruang yang setara untuk berkontribusi.
              </p>
              <button className="btn btn-primary" style={{ position: 'relative', zIndex: 1 }}>
                Pelatihan Intensif 1 Hari
              </button>
            </div>
          </FadeIn>

          <FadeIn delay={0.4}>
            <div>
              <div style={{ textAlign: 'center', marginBottom: '3rem' }}>
                <h2 style={{ fontSize: '2.8rem', color: 'var(--color-secondary)' }}>Engagement Approach (Consulting)</h2>
                <p style={{ color: 'var(--color-text-light)', fontSize: '1.1rem' }}>The 4S Framework for Sustainable Transformation</p>
              </div>
              <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(200px, 1fr))', gap: '2rem' }}>
                {[
                  { title: 'SCAN', color: 'var(--color-primary)', desc: 'Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.' },
                  { title: 'SHIFT', color: 'var(--color-accent)', desc: 'Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif.' },
                  { title: 'SCALE', color: '#00d4d8', desc: 'Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja organisasi.' },
                  { title: 'SCRIBE', color: 'var(--color-secondary-light)', desc: 'Menyusun story of impact untuk seluruh pemangku kepentingan.' }
                ].map((item, idx) => (
                  <div key={idx} className="glass serviceFeatureCard" style={{ padding: '2.5rem 2rem', borderRadius: '24px', textAlign: 'center', transition: 'transform 0.3s ease' }}>
                    <h3 style={{ color: item.color, marginBottom: '1rem', fontSize: '1.5rem' }}>{item.title}</h3>
                    <p style={{ fontSize: '0.95rem', color: 'var(--color-text-light)', lineHeight: '1.6' }}>{item.desc}</p>
                  </div>
                ))}
              </div>
            </div>
          </FadeIn>

        </div>
      </section>

      <Footer />
    </main>
  );
}
