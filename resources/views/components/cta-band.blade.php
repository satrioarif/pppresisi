@props([
    'subtitle' => null,
    'buttonText' => 'Discuss with our Experts',
    'buttonHref' => '#',
])

<div {{ $attributes->class(['bg-ppblue-900 py-section-md relative overflow-hidden']) }}>
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6">{{ $slot }}</h2>
        @if($subtitle)
            <p class="text-gray-400 mb-10 text-lg">{{ $subtitle }}</p>
        @endif
        <a
            href="{{ $buttonHref }}"
            class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-gray-900 bg-accent rounded-pill hover:bg-accent-light transition-colors shadow-cta uppercase tracking-widest group focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-accent/40"
        >
            {{ $buttonText }}
            <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
</div>
