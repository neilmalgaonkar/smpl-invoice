@props([
    'type' => 'submit',
    'label' => 'Login'
])
<div class="w-full mb-0 flex flex-col">
    <button type="{{ $type }}" class="w-full leading-10 inline-block text-base text-white font-normal bg-blue-400 rounded-md">{{ $label }}</button>
</div>
