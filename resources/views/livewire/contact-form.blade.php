<div>
    @if ($successMessage)
        <div style="padding: 1rem; background-color: #d4edda; color: #155724; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #c3e6cb;">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit="submit" style="display: flex; flex-direction: column; gap: 1.5rem;">
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label style="font-size: 0.9rem; font-weight: 600; color: var(--color-secondary);">Full Name</label>
            <input type="text" wire:model="name" style="padding: 1rem; border-radius: 8px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.8);" placeholder="John Doe" />
            @error('name') <span style="color: red; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label style="font-size: 0.9rem; font-weight: 600; color: var(--color-secondary);">Corporate Email</label>
            <input type="email" wire:model="email" style="padding: 1rem; border-radius: 8px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.8);" placeholder="john@company.com" />
            @error('email') <span style="color: red; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label style="font-size: 0.9rem; font-weight: 600; color: var(--color-secondary);">Message</label>
            <textarea rows="5" wire:model="message" style="padding: 1rem; border-radius: 8px; border: 1px solid rgba(0,0,0,0.1); background: rgba(255,255,255,0.8);" placeholder="How can we help you?"></textarea>
            @error('message') <span style="color: red; font-size: 0.8rem;">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="heroBtn" style="margin-top: 1rem; cursor: pointer; border: none; width: 100%; justify-content: center;">
            <span wire:loading.remove>Submit Inquiry</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>
</div>
