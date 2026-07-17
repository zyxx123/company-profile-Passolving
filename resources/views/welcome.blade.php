<x-layouts.app>
    <!-- Vibrant Background Blobs -->
    <div class="pageBg"></div>

    <!-- Hero Section (Vibrant & Colorful) -->
    <section class="hero">
        <div class="heroImageContainer">
            <div class="heroOverlay">
                <div class="heroContent">
                    <h1 class="heroTitle" style="animation: fadeIn 1s ease-out;">
                        Empowering<br/>
                        Agility & Digital<br/>
                        Transformation
                    </h1>
                    <p class="heroDescription" style="animation: fadeIn 1s ease-out 0.2s both;">
                        Unlock your organization's potential through expert consulting, training, and insight. Pioneer in Agility Assessment & National Soft Skill Certification.
                    </p>
                    <a href="/services" class="heroBtn" style="animation: fadeIn 1s ease-out 0.4s both;">
                        Explore Our Services &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section with Dark Transition -->
    <section class="servicesWrapper">
        <div class="sectionHeader">
            <h2 class="sectionTitle">Our Core Pillars</h2>
        </div>
        
        <div class="servicesGrid">
            <x-service-card 
                title="Training"
                description="Equip your teams with agile methodologies, leadership skills, and innovation frameworks through interactive learning."
                buttonText="Learn More"
                href="/services/training"
            >
                <x-slot:icon>
                    <!-- Graduation Cap Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                </x-slot>
            </x-service-card>

            <x-service-card 
                title="Consulting"
                description="Strategic guidance to drive structural change, operational efficiency, and digital evolution using Empathy-System-Result."
                buttonText="View Solutions"
                href="/services/consulting"
            >
                <x-slot:icon>
                    <!-- Handshake Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3a1 1 0 0 1 3-3l-3.88-3.88"/></svg>
                </x-slot>
            </x-service-card>

            <x-service-card 
                title="Research"
                description="Data-driven insights, market analysis, and pioneering studies for informed decision-making and performance tracking."
                buttonText="Discover Insights"
                href="/services/research"
            >
                <x-slot:icon>
                    <!-- Search Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </x-slot>
            </x-service-card>
        </div>
    </section>
    
    <!-- Colorful Impact Teaser -->
    <section style="background-color: var(--color-secondary); padding: 6rem 0 8rem;">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto; color: white;">
                <h2 style="font-size: 3rem; font-weight: bold; margin-bottom: 1.5rem; color: white; text-shadow: 0 4px 20px rgba(0,0,0,0.3);">Solving What Matters, Scaling What Works</h2>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9); line-height: 1.8; margin-bottom: 3rem;">
                    Senior management often only sees 4% of the issues in their companies. We work in the unseen 96% that determines the true quality of decision impacts. 
                    Trusted by top organizations operating in highly complex, regulated, and demanding environments across industries.
                </p>
                <a href="/portfolio" class="heroBtn" style="background: white; color: var(--color-primary);">
                    View Our Case Studies &rarr;
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
