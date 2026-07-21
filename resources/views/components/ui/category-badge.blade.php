@props(['category'])

@php
    $colors = match($category) {
        'Training' => 'bg-blue-100 text-blue-800',
        'Assessment' => 'bg-purple-100 text-purple-800',
        'Certification' => 'bg-green-100 text-green-800',
        'Consulting' => 'bg-orange-100 text-orange-800',
        default => 'bg-gray-100 text-gray-800',
    };
@endphp

<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider {{ $colors }}">
    {{ $category }}
</span>
