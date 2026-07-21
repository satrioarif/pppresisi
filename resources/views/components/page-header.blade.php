@props([
    'badge' => null,
    'subtitle' => null,
    'image' => null,
    'align' => 'center',
])

@php
    $alignClass = $align === 'left' ? 'text-left' : 'text-center mx-auto';
@endphp

<div {{ $attributes->class([
    'pt-40 pb-24 relative overflow-hidden',
    'bg-gradient-to-br from-ppblue-900 to-ppblue-800' => !$image,
    'bg-cover bg-center' => $image,
]) }} @if($image) style="background-image: url('{{ $image }}');" @endif>

    @if($image)
        <div class="absolute inset-0 bg-ppblue-900/80 z-0"></div>
    @else
        <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, var(--color-ppblue-400) 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, var(--color-ppblue-500) 0%, transparent 55%);"></div>
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 {{ $alignClass }}">
        @if($badge)
            <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-pill px-4 py-1.5 text-accent text-xs font-bold tracking-widest uppercase mb-6">
                {{ $badge }}
            </div>
        @endif

        <h1 class="text-4xl md:text-5xl lg:text-hero font-heading font-black text-white mb-5 leading-tight">
            {{ $slot }}
        </h1>

        @if($subtitle)
            <p class="text-gray-300 text-lg max-w-2xl {{ $align === 'left' ? '' : 'mx-auto' }} leading-relaxed">
                {{ $subtitle }}
            </p>
        @endif
    </div>
</div>
