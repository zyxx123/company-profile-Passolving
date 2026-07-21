@props(['service'])

<div class="card-hover p-8 flex flex-col h-full bg-white text-center">
    <div class="w-16 h-16 rounded-full border border-gray-200 flex items-center justify-center mb-6 mx-auto shrink-0">
        <x-icon name="{{ $service->icon_name ?? 'lucide-check-circle' }}" class="w-8 h-8 text-primary" />
    </div>
    <h3 class="text-xl font-bold text-[#141414] mb-4">{{ $service->title }}</h3>
    <p class="text-[#585857] mb-8 flex-grow leading-relaxed text-sm">
        {{ Str::limit($service->description, 100) }}
    </p>
    <a href="/services#{{ Str::slug($service->title) }}" class="inline-flex items-center text-primary text-sm font-bold hover:text-accent transition-colors mt-auto group justify-center">
        Selengkapnya 
        <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </a>
</div>
