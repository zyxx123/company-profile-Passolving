@props(['title', 'subtitle', 'bgImage'])

<section class="relative w-full overflow-hidden pb-12 pt-8 md:pt-16 lg:pt-20 px-4 md:px-8">
    <div class="container mx-auto max-w-7xl">
        <div class="relative w-full h-[60vh] min-h-[450px] max-h-[700px] rounded-[2rem] overflow-hidden shadow-2xl">
            <!-- Background Image -->
            <div 
                class="absolute inset-0 bg-cover bg-center transition-transform duration-[20s] hover:scale-110" 
                style="background-image: url('{{ $bgImage }}');"
            ></div>
            
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-secondary/50 to-transparent"></div>

            <!-- Content -->
            <div class="relative h-full flex flex-col justify-center px-8 md:px-16 lg:px-24">
                <div class="max-w-3xl">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight drop-shadow-xl animate-[fade-in-up_0.8s_ease-out_forwards]">
                        {{ $title }}
                    </h1>
                    
                    @if($subtitle)
                        <p class="text-lg md:text-xl lg:text-2xl text-slate-200 font-light leading-relaxed max-w-2xl drop-shadow-md animate-[fade-in-up_0.8s_ease-out_0.2s_both]">
                            {{ $subtitle }}
                        </p>
                    @endif
                </div>
            </div>
            
            <!-- Decorative Elements -->
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary/20 blur-[100px] rounded-full pointer-events-none"></div>
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent/20 blur-[120px] rounded-full pointer-events-none"></div>
        </div>
    </div>
</section>
