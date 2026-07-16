import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';

export default function About() {
  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title="About PASSolving" 
        subtitle="Pioneer in Agility Assessment & National Soft Skill Certification. We work when leadership is ready to face uncomfortable realities."
        bgImage="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
      />

      <section className="section" style={{ padding: '4rem 0 8rem' }}>
        <div className="container">
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '4rem', alignItems: 'center' }}>
            <FadeIn>
              <div className="glass" style={{ padding: '3rem', borderRadius: '24px' }}>
                <h2 style={{ fontSize: '2.5rem', marginBottom: '1.5rem', color: 'var(--color-secondary)' }}>The Iceberg of Ignorance</h2>
                <p style={{ fontSize: '1.1rem', color: 'var(--color-text-light)', marginBottom: '2rem', lineHeight: '1.8' }}>
                  Menurut Sidney Yoshida, <strong>96% masalah tersembunyi dari Manajemen Senior</strong>. Pendekatan kami menembus zona buta ini.
                </p>
                <ul style={{ display: 'flex', flexDirection: 'column', gap: '1rem', color: 'var(--color-secondary)', fontWeight: '500' }}>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-accent)', color: 'white', padding: '0.3rem 1rem', borderRadius: '20px', fontWeight: 'bold' }}>4%</span>
                    Executives see 4% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-primary-dark)', color: 'white', padding: '0.3rem 1rem', borderRadius: '20px', fontWeight: 'bold' }}>9%</span>
                    Team Managers see 9% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-primary)', color: 'white', padding: '0.3rem 1rem', borderRadius: '20px', fontWeight: 'bold' }}>74%</span>
                    Team Leaders see 74% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-secondary)', color: 'white', padding: '0.3rem 1rem', borderRadius: '20px', fontWeight: 'bold' }}>100%</span>
                    Staff sees 100% of the problems
                  </li>
                </ul>
              </div>
            </FadeIn>
            <FadeIn delay={0.2}>
              <div className="glass" style={{ padding: '3rem', borderRadius: '24px', background: 'rgba(11,36,71,0.03)' }}>
                <h3 style={{ fontSize: '1.8rem', marginBottom: '1rem', color: 'var(--color-primary)' }}>Mengapa PASS?</h3>
                <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8', fontStyle: 'italic', marginBottom: '2.5rem' }}>
                  "Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."
                </p>
                <div style={{ display: 'grid', gap: '1.5rem' }}>
                  <div style={{ paddingLeft: '1.5rem', borderLeft: '3px solid var(--color-primary)' }}>
                    <h4 style={{ color: 'var(--color-secondary)', marginBottom: '0.3rem' }}>Berpengalaman Lintas Industri</h4>
                    <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Berkolaborasi dengan BUMN, Kementerian, OJK, BNI, Indosat.</p>
                  </div>
                  <div style={{ paddingLeft: '1.5rem', borderLeft: '3px solid var(--color-accent)' }}>
                    <h4 style={{ color: 'var(--color-secondary)', marginBottom: '0.3rem' }}>Berbasis Sistem & Data</h4>
                    <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Menggunakan Empathy–System–Result Framework.</p>
                  </div>
                  <div style={{ paddingLeft: '1.5rem', borderLeft: '3px solid var(--color-secondary)' }}>
                    <h4 style={{ color: 'var(--color-secondary)', marginBottom: '0.3rem' }}>Pendekatan Humanis</h4>
                    <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Transformasi berhasil hanya jika manusia di dalamnya ikut berubah.</p>
                  </div>
                </div>
              </div>
            </FadeIn>
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
