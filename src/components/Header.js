"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { usePathname } from 'next/navigation';
import { Menu, X } from 'lucide-react';
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
          <Link href="/" className={`${styles.navLink} ${isActive('/')}`}>Home</Link>
          <Link href="/about" className={`${styles.navLink} ${isActive('/about')}`}>About Us</Link>
          <Link href="/services" className={`${styles.navLink} ${isActive('/services')}`}>Services</Link>
          <Link href="/portfolio" className={`${styles.navLink} ${isActive('/portfolio')}`}>Portfolio</Link>
          <Link href="#contact" className={styles.navLink}>Contact</Link>
          <Link href="#login" className={styles.ctaBtn}>Log In/Request a Demo</Link>
        </nav>

        {/* Mobile Hamburger Icon */}
        <button className={styles.mobileMenuBtn} onClick={toggleMobileMenu} aria-label="Toggle Menu">
          {isMobileMenuOpen ? <X size={28} /> : <Menu size={28} />}
        </button>
      </div>

      {/* Mobile Nav Menu */}
      <div className={`${styles.mobileNav} ${isMobileMenuOpen ? styles.mobileNavOpen : ''}`}>
        <Link href="/" className={styles.mobileNavLink} onClick={toggleMobileMenu}>Home</Link>
        <Link href="/about" className={styles.mobileNavLink} onClick={toggleMobileMenu}>About Us</Link>
        <Link href="/services" className={styles.mobileNavLink} onClick={toggleMobileMenu}>Services</Link>
        <Link href="/portfolio" className={styles.mobileNavLink} onClick={toggleMobileMenu}>Portfolio</Link>
        <Link href="#contact" className={styles.mobileNavLink} onClick={toggleMobileMenu}>Contact</Link>
        <Link href="#login" className={styles.mobileCtaBtn} onClick={toggleMobileMenu}>Log In/Request a Demo</Link>
      </div>
    </header>
  );
}
