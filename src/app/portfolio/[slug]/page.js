import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
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

export default function CaseStudy({ params }) {
  const data = caseStudiesData[params.slug];

  if (!data) {
    return <div style={{padding: '10rem 2rem', textAlign: 'center'}}>Case Study Not Found</div>;
  }

  return (
    <main style={{ backgroundColor: '#ffffff' }}>
      <Header />
      
      {/* Article Hero */}
      <div style={{ paddingTop: '10rem', paddingBottom: '4rem', maxWidth: '1000px', margin: '0 auto', paddingLeft: '2rem', paddingRight: '2rem' }}>
        <FadeIn>
          <Link href="/portfolio" style={{ display: 'inline-flex', alignItems: 'center', gap: '0.5rem', color: '#6b7280', marginBottom: '2rem', fontSize: '0.9rem', fontWeight: '500', letterSpacing: '1px', textTransform: 'uppercase' }}>
            <ArrowLeft size={16} /> Back to Case Studies
          </Link>
          <h1 style={{ fontSize: '4.5rem', fontWeight: '800', color: '#111827', lineHeight: '1.1', letterSpacing: '-0.03em', marginBottom: '1.5rem' }}>
            {data.title}
          </h1>
          <p style={{ fontSize: '1.25rem', color: 'var(--color-primary)', fontWeight: '600', letterSpacing: '1px', textTransform: 'uppercase' }}>
            {data.client}
          </p>
        </FadeIn>
      </div>

      {/* Hero Image */}
      <FadeIn delay={0.2}>
        <div style={{ width: '100%', height: '60vh', backgroundImage: `url(${data.heroImage})`, backgroundSize: 'cover', backgroundPosition: 'center', filter: 'grayscale(50%)' }}></div>
      </FadeIn>

      {/* Content Grid */}
      <div style={{ maxWidth: '1000px', margin: '0 auto', padding: '6rem 2rem' }}>
        <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '5rem' }}>
          
          <FadeIn>
            <div style={{ borderTop: '2px solid #111827', paddingTop: '2rem' }}>
              <h3 style={{ fontSize: '1rem', textTransform: 'uppercase', letterSpacing: '2px', color: '#6b7280', marginBottom: '1rem' }}>01. The Context</h3>
              <p style={{ fontSize: '1.5rem', color: '#111827', lineHeight: '1.6', fontWeight: '400' }}>
                {data.context}
              </p>
            </div>
          </FadeIn>

          <FadeIn>
            <div style={{ borderTop: '2px solid #111827', paddingTop: '2rem' }}>
              <h3 style={{ fontSize: '1rem', textTransform: 'uppercase', letterSpacing: '2px', color: '#6b7280', marginBottom: '1rem' }}>02. Our Approach</h3>
              <p style={{ fontSize: '1.5rem', color: '#111827', lineHeight: '1.6', fontWeight: '400' }}>
                {data.approach}
              </p>
            </div>
          </FadeIn>

          <FadeIn>
            <div style={{ borderTop: '2px solid var(--color-primary)', paddingTop: '2rem' }}>
              <h3 style={{ fontSize: '1rem', textTransform: 'uppercase', letterSpacing: '2px', color: 'var(--color-primary)', marginBottom: '1rem' }}>03. The Impact</h3>
              <p style={{ fontSize: '2rem', color: '#111827', lineHeight: '1.4', fontWeight: '600', letterSpacing: '-0.02em' }}>
                {data.impact}
              </p>
            </div>
          </FadeIn>

        </div>
      </div>

      <Footer />
    </main>
  );
}
