@props(['title', 'description', 'buttonText', 'href' => null])

<div class="card">
    <div class="iconWrapper">
        {{ $icon }}
    </div>
    <h3 class="title">{{ $title }}</h3>
    <p class="description">{{ $description }}</p>
    @if($href)
        <a href="{{ $href }}" class="button">
            {{ $buttonText }} &rarr;
        </a>
    @else
        <button class="button">
            {{ $buttonText }} &rarr;
        </button>
    @endif
</div>
