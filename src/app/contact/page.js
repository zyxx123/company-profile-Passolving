import Header from '@/components/Header';
import Footer from '@/components/Footer';
import FadeIn from '@/components/animations/FadeIn';
import HeroBanner from '@/components/HeroBanner';
import { Mail, MapPin, Phone } from 'lucide-react';

export default function Contact() {
  return (
    <main style={{ minHeight: '100vh', position: 'relative', overflow: 'hidden' }}>
      {/* Background blobs */}
      <div style={{ position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: -1, background: 'white' }}>
        <div style={{ position: 'absolute', top: '-10%', right: '-5%', width: '50vw', height: '50vw', background: 'radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%)', borderRadius: '50%' }}></div>
        <div style={{ position: 'absolute', top: '40%', left: '-10%', width: '60vw', height: '60vw', background: 'radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%)', borderRadius: '50%' }}></div>
      </div>

      <Header />
      
      <HeroBanner 
        title="Get In Touch" 
        subtitle="Ready to transform your organization? Reach out to us for a consultation or any inquiries regarding our capabilities."
        bgImage="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
      />

      <section className="section" style={{ padding: '2rem 0 8rem' }}>
        <div className="container">
          <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(400px, 1fr))', gap: '4rem' }}>
            
            <FadeIn>
              <div className="glass" style={{ padding: '4rem', borderRadius: '24px' }}>
                <h2 style={{ fontSize: '2.5rem', color: 'var(--color-secondary)', marginBottom: '2rem' }}>Send a Message</h2>
                <form style={{ display: 'flex', flexDirection: 'column', gap: '1.5rem' }}>
                  <div style={{ display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
                    <label style={{ fontSize: '0.9rem', fontWeight: '600', color: 'var(--color-secondary)' }}>Full Name</label>
                    <input type="text" style={{ padding: '1rem', borderRadius: '8px', border: '1px solid rgba(0,0,0,0.1)', background: 'rgba(255,255,255,0.8)' }} placeholder="John Doe" />
                  </div>
                  <div style={{ display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
                    <label style={{ fontSize: '0.9rem', fontWeight: '600', color: 'var(--color-secondary)' }}>Corporate Email</label>
                    <input type="email" style={{ padding: '1rem', borderRadius: '8px', border: '1px solid rgba(0,0,0,0.1)', background: 'rgba(255,255,255,0.8)' }} placeholder="john@company.com" />
                  </div>
                  <div style={{ display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
                    <label style={{ fontSize: '0.9rem', fontWeight: '600', color: 'var(--color-secondary)' }}>Message</label>
                    <textarea rows="5" style={{ padding: '1rem', borderRadius: '8px', border: '1px solid rgba(0,0,0,0.1)', background: 'rgba(255,255,255,0.8)' }} placeholder="How can we help you?"></textarea>
                  </div>
                  <button type="button" className="btn btn-primary" style={{ marginTop: '1rem' }}>Submit Inquiry</button>
                </form>
              </div>
            </FadeIn>

            <FadeIn delay={0.2}>
              <div style={{ display: 'flex', flexDirection: 'column', gap: '2rem', padding: '2rem 0' }}>
                <h3 style={{ fontSize: '1.5rem', color: 'var(--color-secondary)', marginBottom: '1rem' }}>Our Offices</h3>
                
                <div style={{ display: 'flex', gap: '1.5rem', alignItems: 'flex-start' }}>
                  <div style={{ width: '50px', height: '50px', background: 'var(--color-primary)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center', color: 'white', flexShrink: 0 }}>
                    <MapPin size={24} />
                  </div>
                  <div>
                    <h4 style={{ fontSize: '1.1rem', color: 'var(--color-secondary)', marginBottom: '0.25rem' }}>Headquarters</h4>
                    <p style={{ color: 'var(--color-text-light)', lineHeight: '1.6' }}>Sudirman Central Business District (SCBD)<br/>Jakarta Selatan, 12190<br/>Indonesia</p>
                  </div>
                </div>

                <div style={{ display: 'flex', gap: '1.5rem', alignItems: 'flex-start' }}>
                  <div style={{ width: '50px', height: '50px', background: 'var(--color-primary)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center', color: 'white', flexShrink: 0 }}>
                    <Mail size={24} />
                  </div>
                  <div>
                    <h4 style={{ fontSize: '1.1rem', color: 'var(--color-secondary)', marginBottom: '0.25rem' }}>Email</h4>
                    <p style={{ color: 'var(--color-text-light)', lineHeight: '1.6' }}>info@passolving.com<br/>partnerships@passolving.com</p>
                  </div>
                </div>

                <div style={{ display: 'flex', gap: '1.5rem', alignItems: 'flex-start' }}>
                  <div style={{ width: '50px', height: '50px', background: 'var(--color-primary)', borderRadius: '12px', display: 'flex', alignItems: 'center', justifyContent: 'center', color: 'white', flexShrink: 0 }}>
                    <Phone size={24} />
                  </div>
                  <div>
                    <h4 style={{ fontSize: '1.1rem', color: 'var(--color-secondary)', marginBottom: '0.25rem' }}>Phone</h4>
                    <p style={{ color: 'var(--color-text-light)', lineHeight: '1.6' }}>+62 21 1234 5678<br/>Mon-Fri, 9am - 6pm</p>
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
