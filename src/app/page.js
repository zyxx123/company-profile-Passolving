import Header from '@/components/Header';
import Footer from '@/components/Footer';
import ServiceCard from '@/components/ServiceCard';
import FadeIn from '@/components/animations/FadeIn';
import styles from './page.module.css';
import { ArrowRight, GraduationCap, Handshake, Search } from 'lucide-react';
import Link from 'next/link';

export default function Home() {
  return (
    <div className={styles.main}>
      <Header />
      
      {/* Vibrant Background Blobs */}
      <div className={styles.pageBg}></div>

      {/* Hero Section (Vibrant & Colorful) */}
      <section className={styles.hero}>
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
                <Link href="/services" className={styles.heroBtn}>
                  Explore Our Services <ArrowRight size={18} />
                </Link>
              </FadeIn>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section with Dark Transition */}
      <section className={styles.servicesWrapper}>
        
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
              href="/services/training"
              icon={GraduationCap}
            />
          </FadeIn>
          <FadeIn delay={0.3}>
            <ServiceCard 
              title="Consulting"
              description="Strategic guidance to drive structural change, operational efficiency, and digital evolution using Empathy-System-Result."
              buttonText="View Solutions"
              href="/services/consulting"
              icon={Handshake}
            />
          </FadeIn>
          <FadeIn delay={0.5}>
            <ServiceCard 
              title="Research"
              description="Data-driven insights, market analysis, and pioneering studies for informed decision-making and performance tracking."
              buttonText="Discover Insights"
              href="/services/research"
              icon={Search}
            />
          </FadeIn>
        </div>
      </section>
      
      {/* Colorful Impact Teaser */}
      <section style={{ backgroundColor: 'var(--color-secondary)', padding: '6rem 0 8rem' }}>
        <div className="container">
          <FadeIn>
            <div style={{ textAlign: 'center', maxWidth: '800px', margin: '0 auto', color: 'white' }}>
              <h2 style={{ fontSize: '3rem', fontWeight: 'bold', marginBottom: '1.5rem', color: 'white', textShadow: '0 4px 20px rgba(0,0,0,0.3)' }}>Solving What Matters, Scaling What Works</h2>
              <p style={{ fontSize: '1.2rem', color: 'rgba(255,255,255,0.9)', lineHeight: '1.8', marginBottom: '3rem' }}>
                Senior management often only sees 4% of the issues in their companies. We work in the unseen 96% that determines the true quality of decision impacts. 
                Trusted by top organizations operating in highly complex, regulated, and demanding environments across industries.
              </p>
              <Link href="/portfolio" className={styles.heroBtn} style={{ background: 'white', color: 'var(--color-primary)' }}>
                View Our Case Studies <ArrowRight size={18} />
              </Link>
            </div>
          </FadeIn>
        </div>
      </section>

      <Footer />
    </div>
  );
}
