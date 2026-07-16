"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { usePathname } from 'next/navigation';
import { Menu, X, ChevronDown, ArrowRight } from 'lucide-react';
import styles from './Header.module.css';

export default function Header() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const pathname = usePathname();

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 10);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const toggleMobileMenu = () => {
    setIsMobileMenuOpen(!isMobileMenuOpen);
  };

  const isActive = (path) => pathname === path ? styles.active : '';

  return (
    <header className={`${styles.header} ${isScrolled ? styles.scrolled : ''}`}>
      <div className={styles.container}>
        <Link href="/" className={styles.logo}>
          <Image 
            src="/passolving_logo.jpg" 
            alt="PASSolving Logo" 
            width={180} 
            height={45} 
            className={styles.logoImg}
            priority
          />
        </Link>
        
        {/* Desktop Nav */}
        <nav className={styles.nav}>
          <div className={styles.navItem}>
            <Link href="/" className={`${styles.navLink} ${isActive('/')}`}>Home</Link>
          </div>
          
          <div className={styles.navItem}>
            <span className={`${styles.navLink} ${isActive('/services')}`} style={{cursor: 'pointer'}}>
              Expertise <ChevronDown size={14} />
            </span>
            <div className={styles.megaMenu}>
              <div className={styles.megaSection}>
                <h4>Core Pillars</h4>
                <div className={styles.megaList}>
                  <Link href="/services">Training <ArrowRight size={14} /></Link>
                  <Link href="/services">Consulting <ArrowRight size={14} /></Link>
                  <Link href="/services">Research <ArrowRight size={14} /></Link>
                </div>
              </div>
              <div className={styles.megaSection}>
                <h4>Specialized Focus</h4>
                <div className={styles.megaList}>
                  <Link href="/services">LEGO® Serious Play® <ArrowRight size={14} /></Link>
                  <Link href="/services">Agility Assessment <ArrowRight size={14} /></Link>
                  <Link href="/services">Soft Skill Certification <ArrowRight size={14} /></Link>
                </div>
              </div>
            </div>
          </div>

          <div className={styles.navItem}>
            <Link href="/portfolio" className={`${styles.navLink} ${isActive('/portfolio')}`}>Case Studies</Link>
          </div>
          
          <div className={styles.navItem}>
            <Link href="/insights" className={`${styles.navLink} ${isActive('/insights')}`}>Insights</Link>
          </div>
          
          <div className={styles.navItem}>
            <Link href="/about" className={`${styles.navLink} ${isActive('/about')}`}>Our Firm</Link>
          </div>

          <Link href="#contact" className={styles.ctaBtn}>Contact Us</Link>
        </nav>

        {/* Mobile Hamburger Icon */}
        <button className={styles.mobileMenuBtn} onClick={toggleMobileMenu} aria-label="Toggle Menu">
          {isMobileMenuOpen ? <X size={28} /> : <Menu size={28} />}
        </button>
      </div>
    </header>
  );
}
