@props(['href', 'active' => false])

@php
    $classes = $active
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-accent text-xs font-bold text-accent uppercase tracking-widest'
                : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xs font-bold text-[#141414] hover:text-accent hover:border-accent transition-colors duration-200 uppercase tracking-widest';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
