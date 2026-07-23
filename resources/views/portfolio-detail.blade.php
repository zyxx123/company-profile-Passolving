<x-layouts.app>
    <!-- PAGE HEADER -->
    <section class="pt-[140px] pb-[80px] bg-primary text-primary-dark">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <a href="/portfolio" class="inline-flex items-center gap-2 text-primary-dark/70 hover:text-primary-dark transition-colors mb-8 font-medium">
                <x-icon name="lucide-arrow-left" class="w-4 h-4" />
                Kembali ke Portfolio
            </a>
            
            <span class="inline-block px-4 py-1.5 bg-white/20 text-primary-dark text-xs font-bold uppercase tracking-widest rounded-full mb-6">
                {{ $portfolio->category }}
            </span>
            <h1 class="text-4xl lg:text-[56px] font-bold leading-[1.1] mb-6 max-w-4xl">
                {{ $portfolio->title }}
            </h1>
            <p class="text-primary-dark/80 text-xl font-medium max-w-2xl">
                Client: {{ $portfolio->client }}
            </p>
        </div>
    </section>

    <!-- CASE STUDY CONTENT -->
    <section class="py-20 lg:py-24 bg-white relative">
        <div class="container mx-auto px-6 max-w-[1320px]">
            
            <!-- Hero Image overlap -->
            <div class="-mt-[160px] mb-20 relative z-10 rounded-[40px] overflow-hidden shadow-2xl border-4 border-white">
                <img src="{{ Str::startsWith($portfolio->image_url, 'http') ? $portfolio->image_url : Storage::url($portfolio->image_url) }}" alt="{{ $portfolio->title }}" class="w-full h-[400px] lg:h-[600px] object-cover" fetchpriority="high">
            </div>

            <!-- Content Grid -->
            <div class="max-w-4xl mx-auto space-y-16">
                
                <!-- Context & Focus -->
                <div class="grid md:grid-cols-2 gap-12 border-b border-gray-100 pb-16">
                    <div>
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                            <x-icon name="lucide-alert-circle" class="w-5 h-5 text-primary" /> Context
                        </h3>
                        <p class="text-[#585857] text-lg leading-relaxed">{{ $portfolio->context }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                            <x-icon name="lucide-target" class="w-5 h-5 text-primary" /> Focus Area
                        </h3>
                        <p class="text-[#585857] text-lg leading-relaxed">{{ $portfolio->focus }}</p>
                    </div>
                </div>

                <!-- PASS Role -->
                <div>
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                        <x-icon name="lucide-zap" class="w-5 h-5 text-cta" /> PASS Role
                    </h3>
                    <p class="text-[#141414] text-2xl font-medium leading-relaxed">
                        "{{ $portfolio->role }}"
                    </p>
                </div>

                <!-- Impact -->
                <div class="bg-[#F8FAFB] p-10 md:p-14 rounded-[40px] border border-gray-100">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-8 flex items-center gap-2">
                        <x-icon name="lucide-trending-up" class="w-5 h-5 text-primary" /> Business Impact
                    </h3>
                    <ul class="space-y-6">
                        @foreach($portfolio->impact as $impact)
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-cta/20 flex items-center justify-center shrink-0 mt-1">
                                    <x-icon name="lucide-check" class="w-5 h-5 text-cta" />
                                </div>
                                <span class="text-xl font-bold text-[#141414]">{{ $impact }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </section>



</x-layouts.app>
