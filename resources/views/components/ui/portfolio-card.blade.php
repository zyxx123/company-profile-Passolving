@props(['portfolio'])

<div class="card-hover overflow-hidden flex flex-col h-full bg-white group border border-gray-100 shadow-sm">
    <!-- Thumbnail -->
    <div class="relative h-[200px] overflow-hidden">
        <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
    </div>
    
    <!-- Content -->
    <div class="p-8 flex flex-col flex-grow">
        <div class="text-[10px] font-bold text-accent mb-3 uppercase tracking-widest">{{ $portfolio->category }}</div>
        <h3 class="text-xl font-black text-[#141414] mb-4 leading-snug">{{ $portfolio->title }}</h3>
        <p class="text-[#585857] mb-8 flex-grow text-sm leading-relaxed">
            {{ Str::limit($portfolio->description, 100) }}
        </p>
        
        <a href="/portfolio/{{ $portfolio->id }}" class="inline-flex items-center text-primary text-sm font-bold hover:text-accent transition-colors mt-auto group/link">
            Lihat Detail 
            <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>
</div>
