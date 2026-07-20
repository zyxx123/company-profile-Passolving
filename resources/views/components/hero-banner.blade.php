@props(['title', 'subtitle', 'bgImage'])

<section class="relative w-full min-h-[50vh] bg-secondary text-white overflow-hidden pt-[100px] z-20 flex items-center">
    <!-- Background Image on the right -->
    <div class="absolute inset-y-0 right-0 w-full md:w-[60%] z-0">
        <img src="{{ $bgImage }}" 
             class="w-full h-full object-cover object-[60%_center] filter grayscale"
             alt="Hero Image">
    </div>

    <!-- Curved SVG Separator -->
    <div class="absolute inset-y-0 left-0 w-full md:w-[60%] z-0 h-full pointer-events-none hidden md:block">
        <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="w-full h-full fill-secondary">
            <path d="M0,0 L80,0 C90,30 50,70 90,100 L0,100 Z" />
        </svg>
        <!-- Yellow Swoosh -->
        <svg preserveAspectRatio="none" viewBox="0 0 100 100" class="absolute top-0 left-0 w-full h-full fill-primary opacity-90 -z-10 transform translate-x-2">
            <path d="M0,0 L85,0 C100,40 45,75 95,100 L0,100 Z" />
        </svg>
    </div>

    <!-- Mobile gradient overlay to ensure text readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/90 to-transparent md:hidden z-0"></div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10 py-16">
        <div class="w-full md:w-[55%] lg:w-[50%]">
            <!-- Decorative line -->
            <div class="w-16 md:w-20 h-2 bg-primary mb-6 transform -skew-x-12" data-aos="fade-right" data-aos-duration="600"></div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tighter leading-[1.05] mb-6 uppercase drop-shadow-md" data-aos="fade-up" data-aos-duration="800">
                {{ $title }}
            </h1>
            
            @if($subtitle)
                <p class="text-white/90 font-medium text-base md:text-lg leading-relaxed max-w-lg mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    </div>
</section>
