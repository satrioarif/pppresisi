@props(['value', 'label'])

<div {{ $attributes->class(['text-left']) }}>
    <p class="text-4xl md:text-5xl font-black text-ppblue-600 mb-2">{{ $value }}</p>
    <span class="text-sm text-gray-500 font-semibold uppercase tracking-wider">{{ $label }}</span>
</div>
