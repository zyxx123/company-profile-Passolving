@props(['title', 'subtitle', 'bgImage'])

<section class="relative w-full h-[60vh] min-h-[500px] bg-secondary flex items-center overflow-hidden">
    <!-- Geometric Background Cuts -->
    <div class="absolute top-0 right-0 w-[50%] h-full bg-primary transform origin-bottom-left skew-x-[-20deg] translate-x-32 hidden lg:block opacity-20 pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 border-[40px] border-primary/20 transform rotate-45 pointer-events-none"></div>
    
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center grayscale mix-blend-overlay opacity-30" style="background-image: url('{{ $bgImage }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/90 to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <div class="max-w-3xl">
            <!-- Decorative line -->
            <div class="w-20 h-2 bg-primary mb-8 transform -skew-x-12"></div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-6 uppercase tracking-widest drop-shadow-lg">
                {{ $title }}
            </h1>
            
            @if($subtitle)
                <p class="text-lg md:text-xl text-slate-300 font-medium leading-relaxed max-w-2xl border-l-4 border-primary pl-6 py-2">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    </div>
    
    <!-- Bottom geometric cutout to blend with next section (white) -->
    <div class="absolute bottom-0 left-0 w-full h-16 bg-white" style="clip-path: polygon(100% 0, 100% 100%, 0 100%);"></div>
</section>
