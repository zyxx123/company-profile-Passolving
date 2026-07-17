@props(['title', 'subtitle', 'bgImage'])

<section class="heroBanner">
    <div class="heroImageContainer" style="background-image: url('{{ $bgImage }}')">
        <div class="heroOverlay">
            <div class="heroContent">
                <h1 class="title" style="animation: fadeIn 1s ease-out;">{{ $title }}</h1>
                <p class="subtitle" style="animation: fadeIn 1s ease-out 0.2s both;">{{ $subtitle }}</p>
            </div>
        </div>
    </div>
</section>
