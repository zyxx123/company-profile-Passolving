<div>
    <!-- Filters -->
    <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
        <button 
            wire:click="setCategory('')" 
            class="px-8 py-3 text-sm font-bold transition-all {{ $category === '' ? 'bg-primary text-white border border-primary' : 'bg-white text-[#585857] border border-gray-200 hover:border-primary hover:text-primary' }}"
        >
            Semua
        </button>
        <button 
            wire:click="setCategory('Training')" 
            class="px-8 py-3 text-sm font-bold transition-all {{ $category === 'Training' ? 'bg-primary text-white border border-primary' : 'bg-white text-[#585857] border border-gray-200 hover:border-primary hover:text-primary' }}"
        >
            Training
        </button>
        <button 
            wire:click="setCategory('Assessment')" 
            class="px-8 py-3 text-sm font-bold transition-all {{ $category === 'Assessment' ? 'bg-primary text-white border border-primary' : 'bg-white text-[#585857] border border-gray-200 hover:border-primary hover:text-primary' }}"
        >
            Assessment
        </button>
        <button 
            wire:click="setCategory('Certification')" 
            class="px-8 py-3 text-sm font-bold transition-all {{ $category === 'Certification' ? 'bg-primary text-white border border-primary' : 'bg-white text-[#585857] border border-gray-200 hover:border-primary hover:text-primary' }}"
        >
            Certification
        </button>
        <button 
            wire:click="setCategory('Consulting')" 
            class="px-8 py-3 text-sm font-bold transition-all {{ $category === 'Consulting' ? 'bg-primary text-white border border-primary' : 'bg-white text-[#585857] border border-gray-200 hover:border-primary hover:text-primary' }}"
        >
            Consulting
        </button>
    </div>

    <!-- Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 relative" wire:loading.class="opacity-50 pointer-events-none transition-opacity">
        @forelse($portfolios as $portfolio)
            <div wire:key="{{ $portfolio->id }}">
                <x-ui.portfolio-card :portfolio="$portfolio" />
            </div>
        @empty
            <div class="col-span-full py-12 text-center text-[#585857]">
                <x-icon name="lucide-folder-open" class="w-12 h-12 mx-auto text-gray-300 mb-4" />
                <p class="text-lg font-medium">Belum ada portofolio untuk kategori ini.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center w-full">
        <div class="w-full max-w-md">
            {{ $portfolios->links(data: ['scrollTo' => false]) }}
        </div>
    </div>
</div>
