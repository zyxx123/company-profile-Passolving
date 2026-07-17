<div>
    @if ($successMessage)
        <div class="mb-8 p-4 rounded-xl bg-green-50 border border-green-200 flex items-start gap-3 animate-[fade-in-up_0.5s_ease-out]">
            <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <p class="text-green-800 font-medium">{{ $successMessage }}</p>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <div class="space-y-2">
            <label class="block text-sm font-semibold text-secondary">Full Name</label>
            <input 
                type="text" 
                wire:model="name" 
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-white/50 backdrop-blur-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300" 
                placeholder="John Doe" 
            />
            @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label class="block text-sm font-semibold text-secondary">Corporate Email</label>
            <input 
                type="email" 
                wire:model="email" 
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-white/50 backdrop-blur-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300" 
                placeholder="john@company.com" 
            />
            @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label class="block text-sm font-semibold text-secondary">Message</label>
            <textarea 
                rows="5" 
                wire:model="message" 
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-white/50 backdrop-blur-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300 resize-none" 
                placeholder="How can we help your organization?"
            ></textarea>
            @error('message') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button 
            type="submit" 
            class="w-full btn-primary flex items-center justify-center gap-2 group mt-4"
        >
            <span wire:loading.remove wire:target="submit">Submit Inquiry</span>
            <svg wire:loading.remove wire:target="submit" class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            
            <span wire:loading wire:target="submit">Sending Message...</span>
            <svg wire:loading wire:target="submit" class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
        </button>
    </form>
</div>
