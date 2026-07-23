@props(['href', 'active' => false])

<a href="{{ $href }}" wire:navigate
   :class="{
       'inline-flex items-center px-1 pt-1 border-b-[3px] text-xs font-bold uppercase tracking-widest transition-colors duration-200': true,
       '{{ $active ? 'border-cta text-white' : 'border-transparent text-primary-dark hover:text-white hover:border-white/50' }}': !scrolled,
       '{{ $active ? 'border-accent text-accent' : 'border-transparent text-gray-500 hover:text-accent hover:border-accent/50' }}': scrolled
   }"
   {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</a>
