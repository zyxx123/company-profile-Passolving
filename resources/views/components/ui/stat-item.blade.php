@props(['icon', 'number', 'label'])

<div class="flex items-center gap-4 text-white">
    <div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
        <x-icon name="{{ $icon }}" class="w-6 h-6 text-white" />
    </div>
    <div>
        <div class="text-3xl font-black leading-none mb-1">{{ $number }}</div>
        <div class="text-sm font-medium text-white/80">{{ $label }}</div>
    </div>
</div>
