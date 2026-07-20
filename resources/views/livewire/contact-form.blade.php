<div>
    @if ($successMessage)
        <div class="mb-8 p-4 bg-secondary/10 border-2 border-secondary flex items-start gap-3">
            <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <p class="text-accent font-bold">{{ $successMessage }}</p>
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <div class="space-y-2">
            <label class="block text-xs font-black uppercase tracking-widest text-accent">{{ __('Full Name') }}</label>
            <input 
                type="text" 
                wire:model="name" 
                class="w-full px-5 py-4 border-2 border-slate-200 bg-white focus:bg-white focus:ring-0 focus:border-secondary outline-none transition-all duration-300 font-medium" 
                placeholder="{{ __('John Doe') }}" 
            />
            @error('name') <span class="text-red-500 text-sm mt-1 block font-bold">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label class="block text-xs font-black uppercase tracking-widest text-accent">{{ __('Corporate Email') }}</label>
            <input 
                type="email" 
                wire:model="email" 
                class="w-full px-5 py-4 border-2 border-slate-200 bg-white focus:bg-white focus:ring-0 focus:border-secondary outline-none transition-all duration-300 font-medium" 
                placeholder="{{ __('john@company.com') }}" 
            />
            @error('email') <span class="text-red-500 text-sm mt-1 block font-bold">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label class="block text-xs font-black uppercase tracking-widest text-accent">{{ __('Message') }}</label>
            <textarea 
                rows="5" 
                wire:model="message" 
                class="w-full px-5 py-4 border-2 border-slate-200 bg-white focus:bg-white focus:ring-0 focus:border-secondary outline-none transition-all duration-300 resize-none font-medium" 
                placeholder="{{ __('How can we help your organization?') }}"
            ></textarea>
            @error('message') <span class="text-red-500 text-sm mt-1 block font-bold">{{ $message }}</span> @enderror
        </div>

        <button 
            type="submit" 
            class="w-full bg-secondary text-white px-8 py-4 font-black uppercase tracking-widest text-sm flex items-center justify-center gap-2 group hover:bg-primary hover:text-accent transition-colors duration-300 mt-4"
        >
            <span wire:loading.remove wire:target="submit">{{ __('Submit Inquiry') }}</span>
            <svg wire:loading.remove wire:target="submit" class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            
            <span wire:loading wire:target="submit">{{ __('Sending Message...') }}</span>
            <svg wire:loading wire:target="submit" class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
        </button>
    </form>
</div>
