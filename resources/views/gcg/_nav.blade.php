<div class="flex flex-wrap items-center gap-2 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-gray-100">
    @php
        $tabs = [
            ['key' => 'code-of-conduct', 'label' => 'Code of Conduct', 'url' => url('/code-of-conduct')],
            ['key' => 'gcg', 'label' => 'Corporate Policy', 'url' => url('/gcg')],
            ['key' => 'charters', 'label' => 'Charters', 'url' => url('/charters')],
            ['key' => 'committees', 'label' => 'Committees', 'url' => url('/committees')],
            ['key' => 'corporate-secretary', 'label' => 'Corporate Secretary', 'url' => url('/corporate-secretary')],
            ['key' => 'internal-audit-unit', 'label' => 'Internal Audit Unit', 'url' => url('/internal-audit-unit')],
            ['key' => 'whistleblowing-system', 'label' => 'Whistleblowing System', 'url' => url('/whistleblowing-system')],
        ];
    @endphp

    @foreach($tabs as $tab)
        @php
            $isActive = Request::is(ltrim(parse_url($tab['url'], PHP_URL_PATH), '/'));
        @endphp
        <a href="{{ $tab['url'] }}" 
           class="px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 {{ $isActive ? 'bg-ppblue-700 text-white shadow-md shadow-ppblue-700/20' : 'text-gray-500 hover:text-ppblue-700 hover:bg-blue-50' }}">
            {{ $tab['label'] }}
        </a>
    @endforeach
</div>
