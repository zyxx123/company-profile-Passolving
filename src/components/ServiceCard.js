import styles from './ServiceCard.module.css';
import { ArrowRight } from 'lucide-react';
import Link from 'next/link';

export default function ServiceCard({ title, description, buttonText, href, icon: Icon }) {
  return (
    <div className={styles.card}>
      <div className={styles.iconWrapper}>
        {Icon && <Icon size={24} color="white" strokeWidth={1.5} />}
      </div>
      <h3 className={styles.title}>{title}</h3>
      <p className={styles.description}>{description}</p>
      {href ? (
        <Link href={href} className={styles.button}>
          {buttonText} <ArrowRight size={16} />
        </Link>
      ) : (
        <button className={styles.button}>
          {buttonText} <ArrowRight size={16} />
        </button>
      )}
    </div>
  );
}
