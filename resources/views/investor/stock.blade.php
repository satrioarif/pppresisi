@extends('layouts.main')
@section('title', 'Stock Information - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Stock <span class="text-blue-300">Information</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Track PT PP Presisi Tbk's real-time market performance and stock data (IDX: PPRE).
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'stock'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Stock Header Badge --}}
        <div class="flex flex-wrap items-center gap-4 mb-8">
            <div class="flex items-center gap-3">
                <span class="text-2xl font-extrabold text-ppblue-900">PPRE</span>
                <span class="text-xs font-semibold bg-ppblue-100 text-ppblue-700 px-2.5 py-1 rounded-full">IDX</span>
            </div>
            <span class="text-gray-400 text-sm hidden sm:block">|</span>
            <span class="text-gray-600 text-sm">PT PP Presisi Tbk</span>
        </div>

        {{-- Tab Container --}}
        <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden" style="border-top: 4px solid #2563eb;">

            {{-- Tab Buttons --}}
            <div class="flex border-b border-gray-200 bg-gray-50">
                <button id="tab-btn-intraday"
                        onclick="switchTab('intraday')"
                        class="stock-tab-btn px-6 py-4 text-sm font-semibold transition-colors duration-150 border-b-2 border-ppblue-600 text-ppblue-700 bg-white">
                    📈 Intraday
                </button>
                <button id="tab-btn-historical"
                        onclick="switchTab('historical')"
                        class="stock-tab-btn px-6 py-4 text-sm font-semibold transition-colors duration-150 border-b-2 border-transparent text-gray-500 hover:text-ppblue-600">
                    📊 Historical
                </button>
                <button id="tab-btn-calculator"
                        onclick="switchTab('calculator')"
                        class="stock-tab-btn px-6 py-4 text-sm font-semibold transition-colors duration-150 border-b-2 border-transparent text-gray-500 hover:text-ppblue-600">
                    🧮 Calculator
                </button>
            </div>

            {{-- Tab Panels --}}
            {{-- Intraday --}}
            <div id="tab-intraday" class="stock-tab-panel p-0">
                <iframe
                    src="https://xml.imq21.com/smart/widget/ppre/intraday.php"
                    class="w-full border-0"
                    style="height: 500px; min-height: 420px;"
                    loading="lazy"
                    title="PPRE Intraday Chart">
                </iframe>
            </div>

            {{-- Historical --}}
            <div id="tab-historical" class="stock-tab-panel p-0 hidden">
                <iframe
                    src="https://xml.imq21.com/smart/widget/ppre/historical.php"
                    class="w-full border-0"
                    style="height: 600px; min-height: 500px;"
                    loading="lazy"
                    title="PPRE Historical Data">
                </iframe>
            </div>

            {{-- Calculator --}}
            <div id="tab-calculator" class="stock-tab-panel p-0 hidden">
                <iframe
                    src="https://xml.imq21.com/smart/widget/ppre/calculator.php"
                    class="w-full border-0"
                    style="height: 420px; min-height: 380px;"
                    loading="lazy"
                    title="PPRE Investment Calculator">
                </iframe>
            </div>
        </div>

        {{-- Attribution --}}
        <p class="text-xs text-gray-400 mt-3 text-right">
            Market data provided by <a href="https://www.antara.net.id" target="_blank" rel="noopener" class="underline hover:text-gray-600">ANTARA</a>
        </p>

        {{-- Info Cards --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
            <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm" style="border-top: 3px solid #2563eb;">
                <p class="text-xs text-gray-500 mb-1 font-medium uppercase tracking-wide">Ticker</p>
                <p class="text-xl font-extrabold text-ppblue-800">PPRE</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm" style="border-top: 3px solid #2563eb;">
                <p class="text-xs text-gray-500 mb-1 font-medium uppercase tracking-wide">Exchange</p>
                <p class="text-xl font-extrabold text-ppblue-800">IDX</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm" style="border-top: 3px solid #2563eb;">
                <p class="text-xs text-gray-500 mb-1 font-medium uppercase tracking-wide">IPO Date</p>
                <p class="text-lg font-extrabold text-ppblue-800">24 Nov 2017</p>
            </div>
            <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm" style="border-top: 3px solid #2563eb;">
                <p class="text-xs text-gray-500 mb-1 font-medium uppercase tracking-wide">Shares Listed</p>
                <p class="text-base font-extrabold text-ppblue-800">10,224,374,200</p>
            </div>
        </div>

    </div>
</div>

<script>
function switchTab(tab) {
    // Hide all panels
    document.querySelectorAll('.stock-tab-panel').forEach(el => el.classList.add('hidden'));
    // Reset all buttons
    document.querySelectorAll('.stock-tab-btn').forEach(btn => {
        btn.classList.remove('border-ppblue-600', 'text-ppblue-700', 'bg-white');
        btn.classList.add('border-transparent', 'text-gray-500');
    });

    // Show target panel
    document.getElementById('tab-' + tab).classList.remove('hidden');
    // Activate button
    const activeBtn = document.getElementById('tab-btn-' + tab);
    activeBtn.classList.remove('border-transparent', 'text-gray-500');
    activeBtn.classList.add('border-ppblue-600', 'text-ppblue-700', 'bg-white');
}
</script>

@endsection
