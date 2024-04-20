@props([
    // supported values are date, password, text, number
    'type' => 'text',
    'name',
    'label',
    'id'
])
<div class="w-full mb-4 flex flex-col">
    <label for="{{ $id ?? $name }}" class="mb-3 font-sans font-medium text-base @error($name) text-red-500 @enderror">{{ $label }}</label>
    <input {{ $attributes->except(['label', 'type']) }} id="{{ $id }}" type="{{ $type }}" class="border-2 border-solid rounded-md leading-10 px-2 outline-blue-300 @if($errors->has($name)) border-red-500 @else border-slate-200 @endif">
</div>
