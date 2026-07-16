import styles from './HeroBanner.module.css';
import FadeIn from './animations/FadeIn';

export default function HeroBanner({ title, subtitle, bgImage }) {
  return (
    <section className={styles.hero}>
      <div 
        className={styles.heroImageContainer}
        style={{ backgroundImage: `url('${bgImage}')` }}
      >
        <div className={styles.heroOverlay}>
          <div className={styles.heroContent}>
            <FadeIn>
              <h1 className={styles.title}>{title}</h1>
            </FadeIn>
            <FadeIn delay={0.2}>
              <p className={styles.subtitle}>{subtitle}</p>
            </FadeIn>
          </div>
        </div>
      </div>
    </section>
  );
}
