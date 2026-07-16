import styles from './ServiceCard.module.css';
import { ArrowRight } from 'lucide-react';

export default function ServiceCard({ title, description, buttonText, icon: Icon }) {
  return (
    <div className={styles.card}>
      <div className={styles.iconWrapper}>
        {Icon && <Icon size={24} color="#111827" strokeWidth={1.5} />}
      </div>
      <h3 className={styles.title}>{title}</h3>
      <p className={styles.description}>{description}</p>
      <button className={styles.button}>
        {buttonText} <ArrowRight size={16} />
      </button>
    </div>
  );
}
