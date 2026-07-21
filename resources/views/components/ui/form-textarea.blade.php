@props(['label', 'id', 'name', 'placeholder' => '', 'rows' => 4])

<div class="mb-4">
    <label for="{{ $id }}" class="block text-sm font-bold text-[#141414] mb-2">{{ $label }}</label>
    <textarea 
        id="{{ $id }}" 
        name="{{ $name }}" 
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'w-full px-4 py-3 rounded-xl border border-gray-200 bg-[#F7F7F9] focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-colors text-[#585857] resize-none']) }}
    ></textarea>
    @error($name) <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
</div>
