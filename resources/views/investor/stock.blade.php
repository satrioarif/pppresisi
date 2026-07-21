@extends('layouts.main')
@section('title', 'Stock Information - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-full px-4 py-1.5 text-accent text-xs font-bold tracking-widest uppercase mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Investor Relations
        </div>
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-5 leading-tight">
            Stock Information
        </h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto leading-relaxed">
            Track PT PP Presisi Tbk's real-time market performance and stock data (IDX: PPRE).
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'stock'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Stock Header Badge --}}
        <div class="flex flex-wrap items-center gap-4 mb-8 reveal fade-up">
            <div class="flex items-center gap-3">
                <span class="text-3xl font-black text-gray-900">PPRE</span>
                <span class="text-xs font-bold bg-accent/20 text-accent-dark border border-accent/30 px-3 py-1.5 rounded-full uppercase tracking-widest">IDX</span>
            </div>
            <span class="text-gray-300 text-sm hidden sm:block">|</span>
            <span class="text-gray-500 font-bold tracking-wide">PT PP Presisi Tbk</span>
        </div>

        {{-- Tab Container --}}
        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-gray-200/50 border border-gray-100 overflow-hidden reveal fade-up">

            {{-- Tab Buttons --}}
            <div class="flex border-b border-gray-100 bg-gray-50/50 px-6 pt-6 gap-2">
                <button id="tab-btn-intraday"
                        onclick="switchTab('intraday')"
                        class="stock-tab-btn px-6 py-3 text-sm font-bold transition-all duration-300 rounded-t-xl bg-ppblue-900 text-white shadow-md">
                    📈 Intraday
                </button>
                <button id="tab-btn-historical"
                        onclick="switchTab('historical')"
                        class="stock-tab-btn px-6 py-3 text-sm font-bold transition-all duration-300 rounded-t-xl text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50">
                    📊 Historical
                </button>
                <button id="tab-btn-calculator"
                        onclick="switchTab('calculator')"
                        class="stock-tab-btn px-6 py-3 text-sm font-bold transition-all duration-300 rounded-t-xl text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50">
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
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12 reveal fade-up">
            <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-10 h-1 bg-ppblue-900 mb-4 rounded-full group-hover:bg-accent transition-colors"></div>
                <p class="text-xs text-gray-400 mb-1 font-bold uppercase tracking-widest">Ticker</p>
                <p class="text-2xl font-black text-gray-900">PPRE</p>
            </div>
            <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-10 h-1 bg-ppblue-900 mb-4 rounded-full group-hover:bg-accent transition-colors"></div>
                <p class="text-xs text-gray-400 mb-1 font-bold uppercase tracking-widest">Exchange</p>
                <p class="text-2xl font-black text-gray-900">IDX</p>
            </div>
            <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-10 h-1 bg-ppblue-900 mb-4 rounded-full group-hover:bg-accent transition-colors"></div>
                <p class="text-xs text-gray-400 mb-1 font-bold uppercase tracking-widest">IPO Date</p>
                <p class="text-xl font-black text-gray-900">24 Nov 2017</p>
            </div>
            <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 hover:-translate-y-1 transition-transform group">
                <div class="w-10 h-1 bg-ppblue-900 mb-4 rounded-full group-hover:bg-accent transition-colors"></div>
                <p class="text-xs text-gray-400 mb-1 font-bold uppercase tracking-widest">Shares Listed</p>
                <p class="text-xl font-black text-gray-900">10,224,374,200</p>
            </div>
        </div>

    </div>
</div>

<style>
    .reveal {
        opacity: 0;
        transition: all 1s ease-out;
    }
    .reveal.active {
        opacity: 1;
        transform: translate(0, 0) scale(1);
    }
    .fade-bottom { transform: translateY(40px); }
    .fade-left { transform: translateX(-40px); }
    .fade-right { transform: translateX(40px); }
    .fade-up { transform: translateY(60px); }
</style>
<script>
function switchTab(tab) {
    // Hide all panels
    document.querySelectorAll('.stock-tab-panel').forEach(el => el.classList.add('hidden'));
    // Reset all buttons
    document.querySelectorAll('.stock-tab-btn').forEach(btn => {
        btn.classList.remove('bg-ppblue-900', 'text-white', 'shadow-md');
        btn.classList.add('text-gray-500', 'hover:text-ppblue-900', 'hover:bg-ppblue-50');
    });

    // Show target panel
    document.getElementById('tab-' + tab).classList.remove('hidden');
    // Activate button
    const activeBtn = document.getElementById('tab-btn-' + tab);
    activeBtn.classList.remove('text-gray-500', 'hover:text-ppblue-900', 'hover:bg-ppblue-50');
    activeBtn.classList.add('bg-ppblue-900', 'text-white', 'shadow-md');
}

document.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal');
    const revealOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };
    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, revealOptions);
    reveals.forEach(reveal => {
        revealOnScroll.observe(reveal);
    });
});
</script>

@endsection
