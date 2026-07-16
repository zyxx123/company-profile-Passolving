import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';

export default function About() {
  return (
    <main style={{ minHeight: '100vh', backgroundColor: 'var(--color-background)' }}>
      <Header />
      
      <div style={{ paddingTop: '8rem', paddingBottom: '4rem', background: 'var(--color-secondary)', color: 'white' }}>
        <div className="container">
          <FadeIn>
            <h1 style={{ fontSize: '3.5rem', fontWeight: 'bold', marginBottom: '1.5rem', color: 'white' }}>
              About PASSolving
            </h1>
            <p style={{ fontSize: '1.25rem', color: 'rgba(255,255,255,0.8)', maxWidth: '800px', lineHeight: '1.8' }}>
              Pioneer in Agility Assessment & National Soft Skill Certification. We work when leadership is ready to face uncomfortable realities.
            </p>
          </FadeIn>
        </div>
      </div>

      <section className="section" style={{ backgroundColor: 'white' }}>
        <div className="container">
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '4rem', alignItems: 'center' }}>
            <FadeIn>
              <div>
                <h2 style={{ fontSize: '2.5rem', marginBottom: '1.5rem' }}>The Iceberg of Ignorance</h2>
                <p style={{ fontSize: '1.1rem', color: 'var(--color-text-light)', marginBottom: '1.5rem', lineHeight: '1.8' }}>
                  According to Sidney Yoshida, <strong>96% of problems are hidden from Senior Management</strong>.
                </p>
                <ul style={{ display: 'flex', flexDirection: 'column', gap: '1rem', color: 'var(--color-text-light)' }}>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-primary)', color: 'white', padding: '0.2rem 0.8rem', borderRadius: '20px', fontWeight: 'bold' }}>4%</span>
                    Executives see 4% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-primary-dark)', color: 'white', padding: '0.2rem 0.8rem', borderRadius: '20px', fontWeight: 'bold' }}>9%</span>
                    Team Managers see 9% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-secondary-light)', color: 'white', padding: '0.2rem 0.8rem', borderRadius: '20px', fontWeight: 'bold' }}>74%</span>
                    Team Leaders see 74% of the problems
                  </li>
                  <li style={{ display: 'flex', gap: '1rem', alignItems: 'center' }}>
                    <span style={{ background: 'var(--color-secondary)', color: 'white', padding: '0.2rem 0.8rem', borderRadius: '20px', fontWeight: 'bold' }}>100%</span>
                    Staff sees 100% of the problems
                  </li>
                </ul>
              </div>
            </FadeIn>
            <FadeIn delay={0.2}>
              <div style={{ background: 'var(--color-surface)', padding: '3rem', borderRadius: '24px', border: '1px solid var(--color-border)' }}>
                <h3 style={{ fontSize: '1.8rem', marginBottom: '1rem' }}>Mengapa PASS?</h3>
                <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8', fontStyle: 'italic', marginBottom: '2rem' }}>
                  "Kami bukan sekedar lembaga pelatihan — kami adalah mitra transformasi yang bekerja berdampingan dengan klien hingga hasilnya berkelanjutan dengan pendekatan utama Agility."
                </p>
                <div style={{ display: 'grid', gap: '1.5rem' }}>
                  <div>
                    <h4 style={{ color: 'var(--color-primary)', marginBottom: '0.5rem' }}>Berpengalaman lintas industri</h4>
                    <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Berkolaborasi dengan Pertamina, BAPPENAS, Kemenkes, UNDP, OJK, BNI.</p>
                  </div>
                  <div>
                    <h4 style={{ color: 'var(--color-primary)', marginBottom: '0.5rem' }}>Berbasis sistem & data</h4>
                    <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Menggunakan Empathy–System–Result Framework.</p>
                  </div>
                  <div>
                    <h4 style={{ color: 'var(--color-primary)', marginBottom: '0.5rem' }}>Pendekatan humanis</h4>
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
