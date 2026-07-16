import styles from './Footer.module.css';
import { MapPin, Phone, Mail, Globe, AtSign } from 'lucide-react';

export default function Footer() {
  return (
    <footer className={styles.footer} id="contact">
      <div className={styles.grid}>
        <div className={styles.col}>
          <h3 style={{display: 'flex', alignItems: 'center', gap: '0.5rem'}}>
            <img src="/passolving_logo.jpg" alt="PASSolving" style={{height: '35px', borderRadius: '4px'}} />
          </h3>
          <p style={{marginTop: '1.5rem'}}>Solving What Matters, Scaling What Works.</p>
          <p>Pioneer in Agility Assessment & National Soft Skill Certification, Determine for Execution Deliveries.</p>
        </div>
        <div className={styles.col}>
          <h3>Quick Links</h3>
          <div className={styles.footerLinks}>
            <a href="/">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#expertise">Expertise</a>
            <a href="#contact">Contact</a>
          </div>
        </div>
        <div className={styles.col}>
          <h3>Contact Us</h3>
          <div className={styles.contactInfo}>
            <div className={styles.contactItem}>
              <MapPin size={18} color="var(--color-primary)" /> Jakarta, Indonesia
            </div>
            <div className={styles.contactItem}>
              <Phone size={18} color="var(--color-primary)" /> +62 897 9515 205
            </div>
            <div className={styles.contactItem}>
              <Mail size={18} color="var(--color-primary)" /> bersama@passolving.com
            </div>
            <div className={styles.contactItem}>
              <Globe size={18} color="var(--color-primary)" /> passolving.com
            </div>
            <div className={styles.contactItem}>
              <AtSign size={18} color="var(--color-primary)" /> @passolving
            </div>
          </div>
        </div>
      </div>
      <div className={styles.bottom}>
        <p>&copy; {new Date().getFullYear()} PASSOLVING All rights reserved. Proprietary and Confidential.</p>
      </div>
    </footer>
  );
}
