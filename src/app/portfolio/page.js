import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
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
    <main style={{ minHeight: '100vh', backgroundColor: '#ffffff' }}>
      <Header />
      
      <div style={{ paddingTop: '10rem', paddingBottom: '4rem', maxWidth: '1400px', margin: '0 auto', paddingLeft: '2rem', paddingRight: '2rem' }}>
        <FadeIn>
          <h1 style={{ fontSize: '4.5rem', fontWeight: '800', color: '#111827', lineHeight: '1.05', letterSpacing: '-0.03em', marginBottom: '1.5rem', maxWidth: '800px' }}>
            Client Impact & Case Studies
          </h1>
          <p style={{ fontSize: '1.25rem', color: '#6b7280', maxWidth: '600px', lineHeight: '1.6' }}>
            We don't just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record.
          </p>
        </FadeIn>
      </div>

      <section style={{ maxWidth: '1400px', margin: '0 auto', padding: '4rem 2rem 8rem' }}>
        <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '2px', background: '#e5e7eb', borderTop: '2px solid #111827' }}>
          {caseStudies.map((study, index) => (
            <FadeIn key={index} delay={index * 0.1}>
              <Link href={`/portfolio/${study.slug}`} style={{ display: 'grid', gridTemplateColumns: '1fr 2fr 1fr', gap: '2rem', padding: '4rem 2rem', background: 'white', textDecoration: 'none', transition: 'background 0.3s ease' }} className="portfolioRow">
                <div>
                  <span style={{ fontSize: '0.85rem', textTransform: 'uppercase', letterSpacing: '1px', color: 'var(--color-primary)', fontWeight: '600' }}>
                    {study.client}
                  </span>
                </div>
                <div>
                  <h2 style={{ fontSize: '2.5rem', color: '#111827', margin: '0 0 1rem 0', fontWeight: '700', letterSpacing: '-0.02em' }}>{study.title}</h2>
                  <p style={{ color: '#6b7280', fontSize: '1.1rem', lineHeight: '1.6', margin: 0, maxWidth: '600px' }}>
                    {study.description}
                  </p>
                </div>
                <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'flex-end', color: '#111827' }}>
                  <ArrowRight size={32} strokeWidth={1} />
                </div>
              </Link>
            </FadeIn>
          ))}
        </div>
      </section>

      <Footer />
    </main>
  );
}
