<form wire:submit="submit" class="space-y-4">
    @if ($successMessage)
        <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-6 flex items-center gap-3">
            <x-icon name="lucide-check-circle-2" class="w-6 h-6 text-green-500 shrink-0" />
            <span class="font-medium">{{ $successMessage }}</span>
        </div>
    @endif

    <div class="mb-4">
        <label for="name" class="block text-xs font-bold text-[#141414] mb-2">{{ __('Nama Lengkap') }}</label>
        <input 
            type="text" 
            id="name" 
            wire:model="name"
            placeholder="{{ __('Masukkan nama lengkap Anda') }}"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-sm text-[#585857]"
        >
        @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-xs font-bold text-[#141414] mb-2">{{ __('Email') }}</label>
        <input 
            type="email" 
            id="email" 
            wire:model="email"
            placeholder="{{ __('Masukkan email Anda') }}"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-sm text-[#585857]"
        >
        @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="company" class="block text-xs font-bold text-[#141414] mb-2">{{ __('Perusahaan') }}</label>
        <input 
            type="text" 
            id="company" 
            wire:model="company"
            placeholder="{{ __('Masukkan nama perusahaan') }}"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-sm text-[#585857]"
        >
        @error('company') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="phone" class="block text-xs font-bold text-[#141414] mb-2">{{ __('No. Telepon') }}</label>
        <input 
            type="text" 
            id="phone" 
            wire:model="phone"
            placeholder="{{ __('Masukkan nomor telepon Anda') }}"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-sm text-[#585857]"
        >
        @error('phone') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label for="message" class="block text-xs font-bold text-[#141414] mb-2">{{ __('Pesan') }}</label>
        <textarea 
            id="message" 
            wire:model="message"
            rows="4"
            placeholder="{{ __('Tulis pesan Anda di sini...') }}"
            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition-colors text-sm text-[#585857] resize-none"
        ></textarea>
        @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="inline-flex items-center justify-center px-8 py-4 bg-cta text-[#1F2937] font-bold transition-all duration-300 hover:bg-[#DDAA00] focus:outline-none focus:ring-2 focus:ring-cta/50 text-[14px] rounded-lg w-full disabled:opacity-50 mt-4" wire:loading.attr="disabled">
        <span wire:loading.remove wire:target="submit">{{ __('KIRIM PESAN') }}</span>
        <span wire:loading wire:target="submit">{{ __('MENGIRIM...') }}</span>
        <svg wire:loading.remove wire:target="submit" class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </button>
</form>
