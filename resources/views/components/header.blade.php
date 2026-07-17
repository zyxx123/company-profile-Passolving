<header 
    x-data="{ isScrolled: false, isMobileMenuOpen: false }" 
    @scroll.window="isScrolled = (window.pageYOffset > 10)"
    :class="{ 'header': true, 'scrolled': isScrolled }"
>
    <div class="container">
        <a href="/" class="logo">
            <img 
                src="{{ asset('passolving_logo.jpg') }}" 
                alt="PASSolving Logo" 
                width="180" 
                height="45" 
                class="logoImg"
            />
        </a>
        
        <!-- Desktop Nav -->
        <nav class="nav">
            <div class="navItem">
                <a href="/" class="navLink {{ request()->is('/') ? 'active' : '' }}">Home</a>
            </div>
            
            <div class="navItem">
                <span class="navLink {{ request()->is('services*') ? 'active' : '' }}" style="cursor: pointer;">
                    Expertise 
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </span>
                <div class="megaMenu">
                    <div class="megaSection">
                        <h4>Core Pillars</h4>
                        <div class="megaList">
                            <a href="/services/training">Training &rarr;</a>
                            <a href="/services/consulting">Consulting &rarr;</a>
                            <a href="/services/research">Research &rarr;</a>
                        </div>
                    </div>
                    <div class="megaSection">
                        <h4>Specialized Focus</h4>
                        <div class="megaList">
                            <a href="/services/lego-serious-play">LEGO® Serious Play® &rarr;</a>
                            <a href="/services/agility-assessment">Agility Assessment &rarr;</a>
                            <a href="/services/soft-skill-certification">Soft Skill Certification &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navItem">
                <a href="/portfolio" class="navLink {{ request()->is('portfolio*') ? 'active' : '' }}">Case Studies</a>
            </div>
            
            <div class="navItem">
                <a href="/insights" class="navLink {{ request()->is('insights*') ? 'active' : '' }}">Insights</a>
            </div>
            
            <div class="navItem">
                <a href="/about" class="navLink {{ request()->is('about') ? 'active' : '' }}">Our Firm</a>
            </div>

            <a href="/contact" class="ctaBtn">Contact Us</a>
        </nav>

        <!-- Mobile Hamburger Icon -->
        <button class="mobileMenuBtn" @click="isMobileMenuOpen = !isMobileMenuOpen" aria-label="Toggle Menu">
            <svg x-show="!isMobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            <svg x-show="isMobileMenuOpen" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>
</header>
