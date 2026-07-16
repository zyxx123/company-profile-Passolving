import styles from './ServiceCard.module.css';

export default function ServiceCard({ title, description, buttonText, icon: Icon }) {
  return (
    <div className={styles.card}>
      <div className={styles.iconWrapper}>
        <Icon size={48} strokeWidth={1.5} color="var(--color-primary)" />
      </div>
      <h3 className={styles.title}>{title}</h3>
      <p className={styles.description}>{description}</p>
      <button className={styles.cardBtn}>{buttonText}</button>
    </div>
  );
}
