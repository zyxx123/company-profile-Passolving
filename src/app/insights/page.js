import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';

const insightsData = [
  {
    category: "Agility & Strategy",
    title: "Navigating the Iceberg of Ignorance in Enterprise Leadership",
    date: "July 2026",
    author: "PASSolving Institute",
    image: "https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
  },
  {
    category: "Organizational Behavior",
    title: "Empathy, System, Result: The Triad of True Transformation",
    date: "June 2026",
    author: "PASSolving Institute",
    image: "https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
  },
  {
    category: "Innovation Methods",
    title: "LEGO® Serious Play®: Unlocking C-Suite Creativity",
    date: "May 2026",
    author: "PASSolving Institute",
    image: "https://images.unsplash.com/photo-1587653915936-3d2b270a4a81?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
  }
];

export default function Insights() {
  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title="Featured Insights" 
        subtitle="Research, methodologies, and perspectives from PASSolving on the most critical issues facing corporate leadership today."
        bgImage="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
      />

      <section className="section" style={{ padding: '4rem 0 8rem' }}>
        <div className="container">
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(350px, 1fr))', gap: '3rem' }}>
            {insightsData.map((insight, index) => (
              <FadeIn key={index} delay={index * 0.1}>
                <article className="glass insightCard" style={{ display: 'flex', flexDirection: 'column', borderRadius: '24px', overflow: 'hidden', cursor: 'pointer', transition: 'all 0.3s ease', height: '100%' }}>
                  <div style={{ width: '100%', height: '240px', backgroundImage: `url(${insight.image})`, backgroundSize: 'cover', backgroundPosition: 'center', transition: 'all 0.4s ease' }} className="insightImage"></div>
                  <div style={{ padding: '2rem' }}>
                    <span style={{ display: 'inline-block', padding: '0.3rem 0.8rem', background: 'rgba(0, 155, 159, 0.1)', color: 'var(--color-primary)', borderRadius: '50px', fontSize: '0.8rem', fontWeight: 'bold', textTransform: 'uppercase', letterSpacing: '1px', marginBottom: '1rem' }}>
                      {insight.category}
                    </span>
                    <h3 style={{ fontSize: '1.5rem', color: 'var(--color-secondary)', fontWeight: '700', lineHeight: '1.4', marginBottom: '1.5rem' }}>
                      {insight.title}
                    </h3>
                    <div style={{ display: 'flex', gap: '1rem', color: 'var(--color-text-light)', fontSize: '0.9rem', fontWeight: '500' }}>
                      <span>{insight.author}</span>
                      <span>&bull;</span>
                      <span>{insight.date}</span>
                    </div>
                  </div>
                </article>
              </FadeIn>
            ))}
          </div>
        </div>
      </section>

      <Footer />
    </main>
  );
}
