import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';
import Link from 'next/link';
import { ArrowRight } from 'lucide-react';

const caseStudies = [
  {
    title: "Margin Improvement at Scale",
    client: "National Medical Centre",
    slug: "medical-centre",
    description: "How we redesigned medical service business processes to increase patient volume from 300 to >10,000 per month."
  },
  {
    title: "HR Cost Efficiency Restructuring",
    client: "Leading Agribusiness Conglomerate",
    slug: "agribusiness-hr",
    description: "Streamlining organizational structures to reduce HR operational costs by Rp 7 Billion per month in a single year."
  },
  {
    title: "SBU Strategic Inventory Margin",
    client: "PT XYZ",
    slug: "sbu-optimization",
    description: "Accelerating revenue by Rp 800 Billion in six months and uncovering systemic fraud through total process redesign."
  }
];

export default function Portfolio() {
  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title="Client Impact & Case Studies" 
        subtitle="We don't just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record."
        bgImage="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
      />

      <section className="section" style={{ padding: '4rem 0 8rem' }}>
        <div className="container">
          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '2.5rem' }}>
            {caseStudies.map((study, index) => (
              <FadeIn key={index} delay={index * 0.1}>
                <Link href={`/portfolio/${study.slug}`} className="glass portfolioCard" style={{ display: 'grid', gridTemplateColumns: '1fr 2fr 1fr', gap: '2rem', padding: '3rem', borderRadius: '24px', textDecoration: 'none', transition: 'all 0.3s ease' }}>
                  <div>
                    <span style={{ display: 'inline-block', padding: '0.4rem 1rem', background: 'var(--color-primary)', color: 'white', borderRadius: '50px', fontSize: '0.85rem', fontWeight: 'bold', textTransform: 'uppercase', letterSpacing: '1px' }}>
                      {study.client}
                    </span>
                  </div>
                  <div>
                    <h2 style={{ fontSize: '2rem', color: 'var(--color-secondary)', margin: '0 0 1rem 0', fontWeight: '700' }}>{study.title}</h2>
                    <p style={{ color: 'var(--color-text-light)', fontSize: '1.05rem', lineHeight: '1.6', margin: 0 }}>
                      {study.description}
                    </p>
                  </div>
                  <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'flex-end', color: 'var(--color-primary)' }}>
                    <div style={{ width: '50px', height: '50px', background: 'rgba(0, 155, 159, 0.1)', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center' }}>
                      <ArrowRight size={24} />
                    </div>
                  </div>
                </Link>
              </FadeIn>
            ))}
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
