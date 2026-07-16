import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';

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
    <main style={{ minHeight: '100vh', backgroundColor: '#ffffff' }}>
      <Header />
      
      <div style={{ paddingTop: '10rem', paddingBottom: '4rem', maxWidth: '1400px', margin: '0 auto', paddingLeft: '2rem', paddingRight: '2rem' }}>
        <FadeIn>
          <h1 style={{ fontSize: '4.5rem', fontWeight: '800', color: '#111827', lineHeight: '1.05', letterSpacing: '-0.03em', marginBottom: '1.5rem', maxWidth: '800px' }}>
            Featured Insights
          </h1>
          <p style={{ fontSize: '1.25rem', color: '#6b7280', maxWidth: '600px', lineHeight: '1.6' }}>
            Research, methodologies, and perspectives from PASSolving on the most critical issues facing corporate leadership today.
          </p>
        </FadeIn>
      </div>

      <section style={{ maxWidth: '1400px', margin: '0 auto', padding: '2rem 2rem 8rem' }}>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(350px, 1fr))', gap: '4rem' }}>
          {insightsData.map((insight, index) => (
            <FadeIn key={index} delay={index * 0.1}>
              <article style={{ display: 'flex', flexDirection: 'column', gap: '1.5rem', cursor: 'pointer' }} className="insightCard">
                <div style={{ width: '100%', height: '280px', backgroundImage: `url(${insight.image})`, backgroundSize: 'cover', backgroundPosition: 'center', filter: 'grayscale(30%)', transition: 'all 0.4s ease' }} className="insightImage"></div>
                <div>
                  <span style={{ fontSize: '0.8rem', textTransform: 'uppercase', letterSpacing: '1.5px', color: 'var(--color-primary)', fontWeight: '600', display: 'block', marginBottom: '0.75rem' }}>
                    {insight.category}
                  </span>
                  <h3 style={{ fontSize: '1.75rem', color: '#111827', fontWeight: '700', lineHeight: '1.3', marginBottom: '1rem', letterSpacing: '-0.01em' }}>
                    {insight.title}
                  </h3>
                  <div style={{ display: 'flex', gap: '1rem', color: '#6b7280', fontSize: '0.9rem' }}>
                    <span>{insight.author}</span>
                    <span>&mdash;</span>
                    <span>{insight.date}</span>
                  </div>
                </div>
              </article>
            </FadeIn>
          ))}
        </div>
      </section>

      <Footer />
    </main>
  );
}
