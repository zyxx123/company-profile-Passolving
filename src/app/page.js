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
      
      {/* Tier-1 Hero Section */}
      <section className={styles.hero}>
        <div className={styles.heroBackground}></div>
        <div className={styles.heroContent}>
          <FadeIn>
            <h1 className={styles.heroTitle}>
              Solving What Matters,<br/>
              Scaling What Works.
            </h1>
          </FadeIn>
          <FadeIn delay={0.2}>
            <p className={styles.heroDescription}>
              We are the pioneer in Agility Assessment & National Soft Skill Certification. We partner with leaders to confront uncomfortable realities and drive structural transformation.
            </p>
          </FadeIn>
          <FadeIn delay={0.4}>
            <Link href="/services" className={styles.heroBtn}>
              Discover Our Expertise <ArrowRight size={18} />
            </Link>
          </FadeIn>
        </div>
      </section>

      {/* Clean Minimalist Services Section */}
      <section className={styles.servicesWrapper}>
        <FadeIn>
          <h2 className={styles.sectionTitle}>Our Capabilities</h2>
          <p className={styles.sectionSubtitle}>
            Integrating engineering discipline, management, and human learning into three core pillars to deliver sustainable results across organizations.
          </p>
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
      
      {/* High-Impact Section */}
      <section className={styles.impactSection}>
        <div className={styles.impactBg}></div>
        <div style={{ position: 'relative', zIndex: 1, maxWidth: '1400px', margin: '0 auto', display: 'flex', alignItems: 'center', height: '100%' }}>
          <div style={{ maxWidth: '600px' }}>
            <FadeIn>
              <h2 style={{ fontSize: '3rem', fontWeight: 'bold', marginBottom: '1.5rem', lineHeight: '1.1' }}>
                The Iceberg of Ignorance
              </h2>
            </FadeIn>
            <FadeIn delay={0.2}>
              <p style={{ fontSize: '1.25rem', color: 'rgba(255,255,255,0.8)', lineHeight: '1.8', marginBottom: '3rem' }}>
                Senior management often only sees 4% of the issues in their companies. We work in the unseen 96% that determines the true quality of decision impacts. 
                Trusted by top organizations operating in highly complex environments.
              </p>
            </FadeIn>
            <FadeIn delay={0.4}>
              <Link href="/about" className={styles.heroBtn} style={{ background: 'white', color: '#111827' }}>
                Read Our Philosophy <ArrowRight size={18} />
              </Link>
            </FadeIn>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
}
