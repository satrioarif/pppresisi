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
        <div class="flex items-center gap-2 text-xs text-gray-400 pt-3 pb-1.5">
            <a href="{{ url('/') }}" class="hover:text-ppblue-600 transition-colors">Home</a>
            <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
            <span>Investor Relations</span>
            <svg class="w-3 h-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="font-semibold text-gray-700">{{ $activeLabel }}</span>
        </div>

        {{-- Tab Navigation --}}
        <nav class="flex items-end gap-0 overflow-x-auto investor-subnav -mb-px" aria-label="Investor Relations navigation">
            @foreach($tabs as $tab)
                @php $isActive = ($active === $tab['key']); @endphp
                <a href="{{ $tab['url'] }}"
                   class="relative flex-shrink-0 px-4 py-3 text-sm font-medium transition-colors duration-150 whitespace-nowrap
                          {{ $isActive
                              ? 'text-ppblue-700 border-b-2 border-ppblue-600'
                              : 'text-gray-500 border-b-2 border-transparent hover:text-ppblue-600 hover:border-ppblue-300' }}">
                    {{ $tab['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</div>

<style>
.investor-subnav::-webkit-scrollbar { display: none; }
.investor-subnav { -ms-overflow-style: none; scrollbar-width: none; }
</style>
