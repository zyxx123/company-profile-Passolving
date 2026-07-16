import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';

const caseStudies = [
  {
    title: "Medical Centre: Margin Improvement",
    client: "Pusat Medis Layanan TKI",
    challenge: "Persaingan ketat, kurang diferensiasi layanan, kapasitas dan alur layanan tidak optimal.",
    solution: "Redesain alur layanan medis (business process) dan penerapan sistem manajemen pasien berbasis digital.",
    result: "Pusat medis berhasil masuk Top 5 nasional. Volume pasien melonjak dari 300 menjadi >10.000 per bulan. Revenue meningkat hingga 1000%."
  },
  {
    title: "Efisiensi Biaya HR Perusahaan Agribisnis",
    client: "Perusahaan Besar Agribisnis (>20 Tahun)",
    challenge: "Biaya operasional tinggi tak sebanding pendapatan, tata kelola konvensional kontra produktif, struktur organisasi rumit (banyak SBU).",
    solution: "Perapihan struktur organisasi, pemetaan proses bisnis untuk menemukan bottle-neck, dan strategi efisiensi iteratif.",
    result: "Menekan biaya operasional terkait HR dari Rp 12 Milyar/bulan menjadi Rp 5 Milyar/bulan dalam satu tahun."
  },
  {
    title: "SBU Optimization: Strategic Inventory Margin",
    client: "PT XYZ (Perusahaan Agribisnis)",
    challenge: "Kerugian bulanan akibat stok tidak akurat, proses stock opname lambat dan manual.",
    solution: "Observasi proses, perancangan ulang stock opname, mentoring dan pendampingan eksekusi 5S.",
    result: "Akurasi stok naik 98%, waktu opname turun dari 1 bulan jadi 3 hari. Percepatan revenue 800M rupiah dalam setengah tahun. Mengungkap fraud selama 5 tahun."
  },
  {
    title: "Productivity Enhancement - Change Management",
    client: "Pos Indonesia",
    challenge: "Kebutuhan menerjemahkan arah strategis menjadi aksi terkoordinasi dalam 3 bulan, hanya melibatkan tim HR.",
    solution: "Perumusan kerangka Change Management realistis, menyelaraskan narasi perubahan, dan transfer pemahaman ke tim internal.",
    result: "Dokumen Change Management & Communication Strategy menjadi referensi tunggal dalam menjalankan program."
  }
];

export default function Portfolio() {
  return (
    <main style={{ minHeight: '100vh', backgroundColor: 'var(--color-background)' }}>
      <Header />
      
      <div style={{ paddingTop: '8rem', paddingBottom: '4rem', background: 'var(--color-secondary)', color: 'white' }}>
        <div className="container">
          <FadeIn>
            <h1 style={{ fontSize: '3.5rem', fontWeight: 'bold', marginBottom: '1.5rem', color: 'white' }}>
              PASS Projects & Case Studies
            </h1>
            <p style={{ fontSize: '1.25rem', color: 'rgba(255,255,255,0.8)', maxWidth: '800px', lineHeight: '1.8' }}>
              Our portfolio of transformation. We don't just plan strategies, we ensure they translate into measurable, sustainable results.
            </p>
          </FadeIn>
        </div>
      </div>

      <section className="section" style={{ backgroundColor: 'var(--color-surface)' }}>
        <div className="container">
          <div style={{ display: 'flex', flexDirection: 'column', gap: '3rem' }}>
            {caseStudies.map((study, index) => (
              <FadeIn key={index} delay={index * 0.1}>
                <div style={{ background: 'white', borderRadius: '24px', padding: '3rem', border: '1px solid var(--color-border)', boxShadow: '0 10px 30px rgba(0,0,0,0.03)' }}>
                  <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'flex-start', marginBottom: '2rem', flexWrap: 'wrap', gap: '1rem' }}>
                    <h2 style={{ fontSize: '2rem', color: 'var(--color-secondary)', margin: 0 }}>{study.title}</h2>
                    <span style={{ background: 'rgba(0, 155, 159, 0.1)', color: 'var(--color-primary-dark)', padding: '0.5rem 1rem', borderRadius: '50px', fontWeight: '600', fontSize: '0.9rem' }}>
                      {study.client}
                    </span>
                  </div>
                  
                  <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(250px, 1fr))', gap: '2rem' }}>
                    <div>
                      <h4 style={{ color: 'var(--color-primary)', marginBottom: '0.5rem', textTransform: 'uppercase', fontSize: '0.85rem', letterSpacing: '1px' }}>Tantangan</h4>
                      <p style={{ color: 'var(--color-text-light)', lineHeight: '1.6' }}>{study.challenge}</p>
                    </div>
                    <div>
                      <h4 style={{ color: 'var(--color-primary)', marginBottom: '0.5rem', textTransform: 'uppercase', fontSize: '0.85rem', letterSpacing: '1px' }}>Solusi</h4>
                      <p style={{ color: 'var(--color-text-light)', lineHeight: '1.6' }}>{study.solution}</p>
                    </div>
                    <div style={{ background: 'var(--color-surface)', padding: '1.5rem', borderRadius: '12px' }}>
                      <h4 style={{ color: 'var(--color-secondary)', marginBottom: '0.5rem', textTransform: 'uppercase', fontSize: '0.85rem', letterSpacing: '1px' }}>Hasil (Impact)</h4>
                      <p style={{ color: 'var(--color-text)', fontWeight: '500', lineHeight: '1.6' }}>{study.result}</p>
                    </div>
                  </div>
                </div>
              </FadeIn>
            ))}
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
