import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';
import Link from 'next/link';
import { ArrowLeft } from 'lucide-react';

const serviceData = {
  "training": {
    title: "Training Programs",
    subtitle: "80% Activity, 20% Insight",
    bgImage: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "Our training methodology heavily focuses on learning by doing. We believe adults learn best through experience. Therefore, 80% of our sessions are dedicated to interactive activities such as simulations, case studies, role plays, and games. The remaining 20% is focused on reflecting, crystallizing concepts, and drawing out key insights that participants can immediately apply to their daily work."
  },
  "consulting": {
    title: "Strategic Consulting",
    subtitle: "SCAN - SHIFT - SCALE - SCRIBE",
    bgImage: "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "Transformation fails if it only stops at initiatives. Our consulting approach ensures structural and behavioral changes stick. We use the 4S Framework: SCAN to clarify the real issues, SHIFT to change work habits and leadership paradigms, SCALE to embed these changes into the organization's operating system, and SCRIBE to document the impact for all stakeholders."
  },
  "research": {
    title: "Market & Academic Research",
    subtitle: "Data-Driven Decision Making",
    bgImage: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "We provide comprehensive research services to support your strategic decisions. From market analysis to internal cultural audits, our research division ensures that every step your organization takes is backed by solid empirical data and deep analytical insights."
  },
  "lego-serious-play": {
    title: "LEGO® Serious Play®",
    subtitle: "Building Solutions Block by Block",
    bgImage: "https://images.unsplash.com/photo-1587653915936-3d2b270a4a81?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "LEGO® Serious Play® is a facilitated meeting, communication, and problem-solving process in which participants are led through a series of questions, probing deeper into the subject. Each participant builds their own 3D LEGO model in response to the facilitator's questions using specially selected LEGO elements. These 3D models serve as a basis for group discussion, knowledge sharing, problem solving, and decision making."
  },
  "agility-assessment": {
    title: "Agility Assessment",
    subtitle: "Measuring Organizational Readiness",
    bgImage: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "As pioneers in Agility Assessment, we evaluate how quickly and effectively your organization can respond to change. Our proprietary assessment tools uncover bottlenecks in decision-making, operational flows, and team dynamics, providing a clear roadmap for transformation."
  },
  "soft-skill-certification": {
    title: "Soft Skill Certification",
    subtitle: "National Standard Competency",
    bgImage: "https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80",
    content: "We are authorized to conduct National Soft Skill Certifications. We validate the capabilities of your workforce in crucial areas such as leadership, communication, problem-solving, and emotional intelligence, ensuring they meet the highest national standards."
  }
};

export default async function ServiceDetail({ params }) {
  const resolvedParams = await params;
  const data = serviceData[resolvedParams.slug];

  if (!data) {
    return <div style={{padding: '10rem 2rem', textAlign: 'center'}}>Service Not Found</div>;
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
        subtitle={data.subtitle}
        bgImage={data.bgImage}
      />

      <section className="section" style={{ padding: '2rem 0 8rem' }}>
        <div className="container" style={{ maxWidth: '900px' }}>
          <Link href="/services" style={{ display: 'inline-flex', alignItems: 'center', gap: '0.5rem', color: 'var(--color-primary)', marginBottom: '3rem', fontSize: '0.9rem', fontWeight: 'bold', textTransform: 'uppercase', letterSpacing: '1px' }}>
            <ArrowLeft size={16} /> Back to All Services
          </Link>

          <FadeIn>
            <div className="glass" style={{ padding: '4rem', borderRadius: '24px' }}>
              <h2 style={{ fontSize: '2.5rem', color: 'var(--color-secondary)', marginBottom: '2rem' }}>Overview</h2>
              <p style={{ fontSize: '1.2rem', color: 'var(--color-text-light)', lineHeight: '1.8' }}>
                {data.content}
              </p>
              
              <div style={{ marginTop: '3rem', paddingTop: '2rem', borderTop: '1px solid rgba(0,0,0,0.1)' }}>
                <button className="btn btn-primary">Request Consultation</button>
              </div>
            </div>
          </FadeIn>
        </div>
      </section>

      <Footer />
    </main>
  );
}
