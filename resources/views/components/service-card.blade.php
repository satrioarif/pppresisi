@props([
    'image',
    'title',
    'href',
    'icon' => null,
])

<a
    href="{{ $href }}"
    {{ $attributes->class(['group relative overflow-hidden bg-gray-800 rounded-card-lg shadow-card hover:shadow-card-hover h-[30rem] block focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-ppblue-500/50']) }}
>
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-90 group-hover:scale-110 transition duration-700" loading="lazy">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent"></div>
    <div class="absolute inset-0 p-8 flex flex-col justify-end text-center items-center pointer-events-none">
        @if($icon)
            <div class="mb-4 text-white text-5xl group-hover:scale-110 group-hover:-translate-y-2 transition duration-500 drop-shadow-xl">
                {!! $icon !!}
            </div>
        @endif
        <h3 class="text-3xl font-bold text-white mb-6 tracking-wide drop-shadow-lg">{{ $title }}</h3>
        <span class="px-8 py-3 bg-accent text-white font-semibold rounded-pill shadow-cta group-hover:bg-accent-light transition opacity-0 group-hover:opacity-100 transform translate-y-8 group-hover:translate-y-0 duration-500">
            View Detail
        </span>
    </div>
</a>
