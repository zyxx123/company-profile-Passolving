@props(['variant' => 'primary', 'href' => null, 'type' => 'button', 'icon' => true])

@php
    $baseClasses = 'inline-flex items-center justify-center px-8 py-3 font-bold transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 text-[15px] rounded-lg';
    
    $variantClasses = match($variant) {
        'primary' => 'bg-cta text-[#1F2937] hover:bg-cta-hover focus:ring-cta/50 shadow-sm',
        'secondary' => 'bg-white text-primary hover:bg-gray-50 focus:ring-primary/50 shadow-sm',
        'outline' => 'border-2 border-white text-white hover:bg-white hover:text-primary focus:ring-white/50',
        default => 'bg-cta text-[#1F2937] hover:bg-cta-hover focus:ring-cta/50',
    };
    
    $classes = $baseClasses . ' ' . $variantClasses;
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if($icon)
            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if($icon)
            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        @endif
    </button>
@endif
