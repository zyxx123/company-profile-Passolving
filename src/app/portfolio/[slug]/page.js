import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';
import Link from 'next/link';
import { ArrowLeft } from 'lucide-react';

const caseStudiesData = {
  "medical-centre": {
    title: "Margin Improvement at Scale",
    client: "National Medical Centre",
    heroImage: "https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    context: "The client faced intense competition, lack of service differentiation, and suboptimal patient flow capacities that choked revenue growth.",
    approach: "We redesigned the medical service business process from the ground up, implementing a digital-first patient management system to eliminate bottlenecks.",
    impact: "The centre successfully entered the Top 5 nationally. Patient volume surged from 300 to over 10,000 per month, increasing revenue by 1000%."
  },
  "agribusiness-hr": {
    title: "HR Cost Efficiency Restructuring",
    client: "Leading Agribusiness Conglomerate",
    heroImage: "https://images.unsplash.com/photo-1586772002130-b0f3daa6288b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    context: "High operational costs unmatched by revenue growth. Conventional governance was counter-productive, compounded by an overly complex organizational structure with multiple SBUs.",
    approach: "We streamlined the organizational structure, mapped business processes to identify absolute bottlenecks, and executed an iterative efficiency strategy.",
    impact: "Reduced HR-related operational costs from Rp 12 Billion/month to Rp 5 Billion/month within a single year without compromising output."
  },
  "sbu-optimization": {
    title: "SBU Strategic Inventory Margin",
    client: "PT XYZ (Agribusiness Sector)",
    heroImage: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    context: "Significant monthly losses due to inaccurate stock management, compounded by a slow, manual stock opname process that took up to a month.",
    approach: "Direct process observation, total redesign of the stock opname architecture, followed by intensive mentoring and 5S execution support.",
    impact: "Stock accuracy improved to 98%. Opname time reduced from 1 month to 3 days. Accelerated revenue by Rp 800 Billion in six months and uncovered a 5-year systemic fraud."
  }
};

export default async function CaseStudy({ params }) {
  const resolvedParams = await params;
  const data = caseStudiesData[resolvedParams.slug];

  if (!data) {
    return <div style={{padding: '10rem 2rem', textAlign: 'center'}}>Case Study Not Found</div>;
  }

  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title={data.title} 
        subtitle={data.client}
        bgImage={data.heroImage}
      />

      <section className="section" style={{ padding: '2rem 0 8rem' }}>
        <div className="container">
          <Link href="/portfolio" style={{ display: 'inline-flex', alignItems: 'center', gap: '0.5rem', color: 'var(--color-primary)', marginBottom: '3rem', fontSize: '0.9rem', fontWeight: 'bold', textTransform: 'uppercase', letterSpacing: '1px' }}>
            <ArrowLeft size={16} /> Back to Case Studies
          </Link>

          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '3rem' }}>
            
            <FadeIn>
              <div className="glass" style={{ padding: '3rem', borderRadius: '24px', borderLeft: '5px solid var(--color-primary)' }}>
                <h3 style={{ fontSize: '1.2rem', textTransform: 'uppercase', letterSpacing: '2px', color: 'var(--color-primary)', marginBottom: '1rem', fontWeight: 'bold' }}>01. The Context</h3>
                <p style={{ fontSize: '1.25rem', color: 'var(--color-secondary)', lineHeight: '1.8', fontWeight: '500' }}>
                  {data.context}
                </p>
              </div>
            </FadeIn>

            <FadeIn delay={0.1}>
              <div className="glass" style={{ padding: '3rem', borderRadius: '24px', borderLeft: '5px solid var(--color-accent)' }}>
                <h3 style={{ fontSize: '1.2rem', textTransform: 'uppercase', letterSpacing: '2px', color: 'var(--color-accent)', marginBottom: '1rem', fontWeight: 'bold' }}>02. Our Approach</h3>
                <p style={{ fontSize: '1.25rem', color: 'var(--color-secondary)', lineHeight: '1.8', fontWeight: '500' }}>
                  {data.approach}
                </p>
              </div>
            </FadeIn>

            <FadeIn delay={0.2}>
              <div className="glass-dark" style={{ padding: '3rem', borderRadius: '24px', borderLeft: '5px solid #00d4d8', color: 'white' }}>
                <h3 style={{ fontSize: '1.2rem', textTransform: 'uppercase', letterSpacing: '2px', color: '#00d4d8', marginBottom: '1rem', fontWeight: 'bold' }}>03. The Impact</h3>
                <p style={{ fontSize: '1.5rem', color: 'white', lineHeight: '1.6', fontWeight: '700', letterSpacing: '0.5px' }}>
                  {data.impact}
                </p>
              </div>
            </FadeIn>

          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
