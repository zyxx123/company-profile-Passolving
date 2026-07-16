import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';

export default function Services() {
  return (
    <main style={{ minHeight: '100vh', backgroundColor: 'var(--color-background)' }}>
      <Header />
      
      <div style={{ paddingTop: '8rem', paddingBottom: '4rem', background: 'var(--color-secondary)', color: 'white' }}>
        <div className="container">
          <FadeIn>
            <h1 style={{ fontSize: '3.5rem', fontWeight: 'bold', marginBottom: '1.5rem', color: 'white' }}>
              Our Services
            </h1>
            <p style={{ fontSize: '1.25rem', color: 'rgba(255,255,255,0.8)', maxWidth: '800px', lineHeight: '1.8' }}>
              Integrating engineering discipline, management, and human learning into three main pillars: Training, Consulting, and Research.
            </p>
          </FadeIn>
        </div>
      </div>

      <section className="section" style={{ backgroundColor: 'white' }}>
        <div className="container">
          
          <FadeIn>
            <div style={{ marginBottom: '6rem' }}>
              <div style={{ display: 'flex', alignItems: 'center', gap: '1rem', marginBottom: '2rem' }}>
                <div style={{ width: '60px', height: '60px', background: 'rgba(0, 155, 159, 0.1)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center', color: 'var(--color-primary)', fontSize: '1.5rem', fontWeight: 'bold' }}>1</div>
                <h2 style={{ fontSize: '2.5rem', color: 'var(--color-secondary)' }}>Training Methodology</h2>
              </div>
              <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '3rem' }}>
                <div style={{ padding: '2rem', border: '1px solid var(--color-border)', borderRadius: '16px' }}>
                  <h3 style={{ fontSize: '3rem', color: 'var(--color-primary)', marginBottom: '1rem' }}>80% <span style={{fontSize: '1.5rem', color: 'var(--color-secondary)'}}>Activity</span></h3>
                  <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8' }}>Aktivitas interaktif seperti simulasi, studi kasus, role play, bermain dan praktik langsung agar peserta dapat belajar melalui pengalaman saat itu (learning by doing).</p>
                </div>
                <div style={{ padding: '2rem', border: '1px solid var(--color-border)', borderRadius: '16px' }}>
                  <h3 style={{ fontSize: '3rem', color: 'var(--color-primary)', marginBottom: '1rem' }}>20% <span style={{fontSize: '1.5rem', color: 'var(--color-secondary)'}}>Insight</span></h3>
                  <p style={{ color: 'var(--color-text-light)', lineHeight: '1.8' }}>Refleksi, penguatan konsep, dan kunci pembelajaran dari setiap aktivitas.</p>
                </div>
              </div>
            </div>
          </FadeIn>

          <FadeIn delay={0.2}>
            <div style={{ marginBottom: '6rem', background: 'var(--color-surface)', padding: '4rem', borderRadius: '24px' }}>
              <h2 style={{ fontSize: '2.5rem', marginBottom: '1.5rem', color: 'var(--color-secondary)' }}>LEGO® Serious Play®</h2>
              <p style={{ fontSize: '1.1rem', color: 'var(--color-text-light)', marginBottom: '2rem', maxWidth: '800px', lineHeight: '1.8' }}>
                Metode LEGO® Serious Play® menghadirkan pendekatan unik dan partisipatif untuk berpikir bersama. Melalui proses membangun dan bercerita (building & storytelling), setiap peserta punya ruang yang setara untuk berkontribusi.
              </p>
              <div style={{ display: 'inline-block', padding: '0.8rem 1.5rem', background: 'white', borderRadius: '50px', border: '1px solid var(--color-border)', fontWeight: '600', color: 'var(--color-primary)' }}>
                Pelatihan Intensif 1 Hari
              </div>
            </div>
          </FadeIn>

          <FadeIn delay={0.4}>
            <div>
              <div style={{ display: 'flex', alignItems: 'center', gap: '1rem', marginBottom: '2rem' }}>
                <div style={{ width: '60px', height: '60px', background: 'rgba(0, 155, 159, 0.1)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center', color: 'var(--color-primary)', fontSize: '1.5rem', fontWeight: 'bold' }}>2</div>
                <h2 style={{ fontSize: '2.5rem', color: 'var(--color-secondary)' }}>Engagement Approach (Consulting)</h2>
              </div>
              <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(200px, 1fr))', gap: '2rem' }}>
                <div style={{ padding: '2rem', background: 'var(--color-surface)', borderRadius: '16px' }}>
                  <h3 style={{ color: 'var(--color-primary)', marginBottom: '1rem' }}>SCAN</h3>
                  <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Memberikan kejelasan objective atas masalah nyata sebelum keputusan strategis diambil.</p>
                </div>
                <div style={{ padding: '2rem', background: 'var(--color-surface)', borderRadius: '16px' }}>
                  <h3 style={{ color: 'var(--color-primary)', marginBottom: '1rem' }}>SHIFT</h3>
                  <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Mengubah cara kerja dan kepemimpinan agar organisasi mampu mengambil keputusan adaptif.</p>
                </div>
                <div style={{ padding: '2rem', background: 'var(--color-surface)', borderRadius: '16px' }}>
                  <h3 style={{ color: 'var(--color-primary)', marginBottom: '1rem' }}>SCALE</h3>
                  <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Memastikan perubahan tidak berhenti di inisiatif, tetapi menjadi sistem kerja organisasi.</p>
                </div>
                <div style={{ padding: '2rem', background: 'var(--color-surface)', borderRadius: '16px' }}>
                  <h3 style={{ color: 'var(--color-primary)', marginBottom: '1rem' }}>SCRIBE</h3>
                  <p style={{ fontSize: '0.9rem', color: 'var(--color-text-light)' }}>Menyusun story of impact untuk pemangku kepentingan.</p>
                </div>
              </div>
            </div>
          </FadeIn>

        </div>
      </section>

      <Footer />
    </main>
  );
}
