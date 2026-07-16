import Header from '@/components/Header';
import Footer from '@/components/Footer';
import ServiceCard from '@/components/ServiceCard';
import FadeIn from '@/components/animations/FadeIn';
import styles from './page.module.css';
import { GraduationCap, Handshake, Search } from 'lucide-react';
import Link from 'next/link';

export default function Home() {
  return (
    <div className={styles.main}>
      <Header />
      
      <div className={styles.pageBg}></div>

      {/* Hero Section */}
      <section className={styles.hero} style={{paddingTop: '8rem'}}>
        <div className={styles.heroImageContainer}>
          <div className={styles.heroOverlay}>
            <div className={styles.heroContent}>
              <FadeIn>
                <h1 className={styles.heroTitle}>
                  Empowering<br/>
                  Agility & Digital<br/>
                  Transformation
                </h1>
              </FadeIn>
              <FadeIn delay={0.2}>
                <p className={styles.heroDescription}>
                  Unlock your organization's potential through expert consulting, training, and insight. Pioneer in Agility Assessment & National Soft Skill Certification.
                </p>
              </FadeIn>
              <FadeIn delay={0.4}>
                <Link href="/services" className={styles.heroBtn}>Explore Our Services</Link>
              </FadeIn>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section */}
      <section className={styles.servicesWrapper}>
        <div className={styles.darkBottom}></div>
        
        <FadeIn>
          <div className={styles.sectionHeader}>
            <h2 className={styles.sectionTitle}>Our Core Pillars</h2>
          </div>
        </FadeIn>
        
        <div className={styles.servicesGrid}>
          <FadeIn delay={0.1}>
            <ServiceCard 
              title="Training"
              description="Equip your teams with agile methodologies, leadership skills, and innovation frameworks through interactive learning."
              buttonText="Learn More"
              icon={GraduationCap}
            />
          </FadeIn>
          <FadeIn delay={0.3}>
            <ServiceCard 
              title="Consulting"
              description="Strategic guidance to drive structural change, operational efficiency, and digital evolution using Empathy-System-Result."
              buttonText="View Solutions"
              icon={Handshake}
            />
          </FadeIn>
          <FadeIn delay={0.5}>
            <ServiceCard 
              title="Research"
              description="Data-driven insights, market analysis, and pioneering studies for informed decision-making and performance tracking."
              buttonText="Discover Insights"
              icon={Search}
            />
          </FadeIn>
        </div>
      </section>
      
      {/* Quick Portfolio / Impact Teaser */}
      <section style={{ backgroundColor: 'var(--color-secondary)', padding: '8rem 0 4rem' }}>
        <div className="container">
          <FadeIn>
            <div style={{ textAlign: 'center', maxWidth: '800px', margin: '0 auto', color: 'white' }}>
              <h2 style={{ fontSize: '2.5rem', fontWeight: 'bold', marginBottom: '1.5rem' }}>Solving What Matters, Scaling What Works</h2>
              <p style={{ fontSize: '1.1rem', color: 'rgba(255,255,255,0.8)', lineHeight: '1.8', marginBottom: '3rem' }}>
                Senior management often only sees 4% of the issues in their companies. We work in the unseen areas that determine the quality of decision impacts.
                Trusted by top organizations operating in highly complex, regulated, and demanding environments across industries.
              </p>
              <Link href="/portfolio" className={styles.heroBtn} style={{ background: 'transparent', border: '1px solid white' }}>
                View Our Case Studies
              </Link>
            </div>
          </FadeIn>
        </div>
      </section>

      <Footer />
    </div>
  );
}
