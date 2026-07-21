@props([
    'ctaText' => null,
    'ctaHref' => null,
    'align' => 'left',
    'subtitle' => null,
    'dark' => false,
])

@php
    $wrapClass = $align === 'center'
        ? 'text-center mb-16'
        : 'flex flex-col md:flex-row justify-between items-end gap-6 mb-16';

    $headingClass = $dark ? 'text-white' : 'text-gray-900';
    $subtitleClass = $dark ? 'text-gray-400' : 'text-gray-600';

    $ctaClass = $dark
        ? 'bg-white/10 backdrop-blur-md text-white border border-white/20 hover:bg-white hover:text-gray-900 shadow-xl'
        : 'bg-white text-gray-900 border border-gray-200 shadow-card hover:bg-ppblue-900 hover:text-white hover:border-ppblue-900';
@endphp

<div {{ $attributes->class([$wrapClass]) }}>
    <div>
        <h2 class="text-4xl md:text-display font-heading font-black leading-tight tracking-tight {{ $headingClass }}">
            {{ $slot }}
        </h2>
        @if($subtitle)
            <p class="text-lg mt-4 max-w-2xl {{ $subtitleClass }} {{ $align === 'center' ? 'mx-auto' : '' }}">{{ $subtitle }}</p>
        @endif
    </div>

    @if($ctaText && $ctaHref)
        <a
            href="{{ $ctaHref }}"
            class="shrink-0 px-8 py-4 font-semibold rounded-pill transition duration-300 {{ $ctaClass }} {{ $align === 'center' ? 'inline-block mt-6' : '' }}"
        >
            {{ $ctaText }}
        </a>
    @endif
</div>
