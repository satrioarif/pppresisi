{{--
    Investor Relations Sub-Navigation Bar
    Usage: @include('investor._nav', ['active' => 'report'])
    Active values: report | stock | presentation | rups | corporate-action | prospectus | capital-market
--}}
@php
    $active = $active ?? '';

    $tabs = [
        ['key' => 'report',           'label' => 'Report',           'url' => url('/investor/report')],
        ['key' => 'stock',            'label' => 'Stock',            'url' => url('/investor/stock')],
        ['key' => 'presentation',     'label' => 'Presentation',     'url' => url('/investor/presentation')],
        ['key' => 'rups',             'label' => 'RUPS',             'url' => url('/investor/rups')],
        ['key' => 'corporate-action', 'label' => 'Corporate Action', 'url' => url('/investor/corporate-action')],
        ['key' => 'prospectus',       'label' => 'Prospectus',       'url' => url('/investor/prospectus')],
        ['key' => 'capital-market',   'label' => 'Capital Market',   'url' => url('/investor/capital-market')],
        ['key' => 'transparency',     'label' => 'Transparency of Information', 'url' => url('/investor/transparency-of-information')],
    ];

    $activeLabel = collect($tabs)->firstWhere('key', $active)['label'] ?? 'Investor Relations';
@endphp


<div class="bg-white border-b border-gray-200 shadow-sm sticky top-[70px] z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm text-gray-500 pt-6 pb-4 reveal fade-bottom">
            <a href="{{ url('/') }}" class="hover:text-accent font-semibold transition-colors">Home</a>
            <span class="text-gray-300 font-bold">/</span>
            <span class="hover:text-accent font-semibold cursor-default transition-colors">Investor Relations</span>
            <span class="text-gray-300 font-bold">/</span>
            <span class="font-bold text-gray-900">{{ $activeLabel }}</span>
        </div>

        {{-- Tab Navigation --}}
        <div class="mb-10 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
            <nav class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max investor-subnav" aria-label="Investor Relations navigation">
                @foreach($tabs as $tab)
                    @php $isActive = ($active === $tab['key']); @endphp
                    <a href="{{ $tab['url'] }}"
                       class="px-6 py-3 rounded-full transition-all duration-300 whitespace-nowrap {{ $isActive ? 'bg-ppblue-900 text-white font-bold shadow-md shadow-ppblue-900/20' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">
                        {{ $tab['label'] }}
                    </a>
                @endforeach
            </nav>
        </div>
    </div>
</div>

<style>
.investor-subnav::-webkit-scrollbar { display: none; }
.investor-subnav { -ms-overflow-style: none; scrollbar-width: none; }
</style>
