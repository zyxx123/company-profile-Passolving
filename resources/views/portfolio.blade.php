<x-layouts.app>
    <!-- Background blobs -->
    <div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; background: white;">
        <div style="position: absolute; top: -10%; right: -5%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(0, 155, 159, 0.05) 0%, transparent 70%); border-radius: 50%;"></div>
        <div style="position: absolute; top: 40%; left: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(226, 63, 136, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
    </div>

    <x-hero-banner 
        title="Client Impact & Case Studies" 
        subtitle="We don't just plan strategies, we ensure they translate into measurable, sustainable structural results. Explore our track record."
        bgImage="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
    />

    <section class="section" style="padding: 4rem 0 8rem;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 2.5rem;">
                
                @php
                $caseStudies = [
                    [
                        'title' => "Margin Improvement at Scale",
                        'client' => "National Medical Centre",
                        'slug' => "medical-centre",
                        'description' => "How we redesigned medical service business processes to increase patient volume from 300 to >10,000 per month."
                    ],
                    [
                        'title' => "HR Cost Efficiency Restructuring",
                        'client' => "Leading Agribusiness Conglomerate",
                        'slug' => "agribusiness-hr",
                        'description' => "Streamlining organizational structures to reduce HR operational costs by Rp 7 Billion per month in a single year."
                    ],
                    [
                        'title' => "SBU Strategic Inventory Margin",
                        'client' => "PT XYZ",
                        'slug' => "sbu-optimization",
                        'description' => "Accelerating revenue by Rp 800 Billion in six months and uncovering systemic fraud through total process redesign."
                    ]
                ];
                @endphp

                @foreach($caseStudies as $index => $study)
                    <div style="animation: fadeIn 1s ease-out {{ $index * 0.1 }}s both;">
                        <a href="/portfolio/{{ $study['slug'] }}" class="card portfolioCard" style="display: grid; grid-template-columns: 1fr 2fr 1fr; gap: 2rem; padding: 3rem; border-radius: 24px; text-decoration: none; transition: all 0.3s ease;">
                            <div>
                                <span style="display: inline-block; padding: 0.4rem 1rem; background: var(--color-primary); color: white; border-radius: 50px; font-size: 0.85rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">
                                    {{ $study['client'] }}
                                </span>
                            </div>
                            <div>
                                <h2 style="font-size: 2rem; color: var(--color-secondary); margin: 0 0 1rem 0; font-weight: 700;">{{ $study['title'] }}</h2>
                                <p style="color: var(--color-text-light); font-size: 1.05rem; line-height: 1.6; margin: 0;">
                                    {{ $study['description'] }}
                                </p>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: flex-end; color: var(--color-primary);">
                                <div style="width: 50px; height: 50px; background: rgba(0, 155, 159, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <!-- ArrowRight Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layouts.app>
