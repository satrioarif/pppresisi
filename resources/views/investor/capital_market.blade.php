@extends('layouts.main')
@section('title', 'Capital Market - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-full px-4 py-1.5 text-accent text-xs font-bold tracking-widest uppercase mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
            Investor Relations
        </div>
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-5 leading-tight">
            Capital Market
        </h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto leading-relaxed">
            Capital market information, supporting institutions, and regulatory fillings of PT PP Presisi Tbk.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'capital-market'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-white min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ===== SECTION 1: LEMBAGA DAN PROFESI PENUNJANG PASAR MODAL ===== --}}
        <section class="mb-16 reveal fade-up">
            <div class="flex items-start gap-5 mb-8">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                        Lembaga dan Profesi Penunjang Pasar Modal
                    </h2>
                    <p class="text-gray-500 font-medium text-sm mt-1">Capital market supporting institutions and professionals.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Akuntan Publik --}}
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white hover:-translate-y-1 transition-transform">
                    <div class="px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Akuntan Publik</span>
                    </div>
                    <div class="p-8">
                        <p class="font-black text-lg text-gray-900 mb-4">Amir Abadi Jusuf, Aryanto, Mawar &amp; Rekan</p>
                        <div class="text-sm text-gray-600 space-y-1.5 font-medium leading-relaxed border-l-2 border-accent pl-4">
                            <p class="font-bold text-gray-900">RSM Indonesia</p>
                            <p>Plaza Asia, Level 10</p>
                            <p>Jl. Jend Sudirman Kav. 59</p>
                            <p>Jakarta 12910</p>
                            <div class="mt-4 pt-4 border-t border-gray-100 space-y-1">
                                <p><span class="text-gray-400 font-bold w-6 inline-block">T:</span> +62 21 5140 1340</p>
                                <p><span class="text-gray-400 font-bold w-6 inline-block">F:</span> +62 21 5140 1350</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Biro Administrasi Efek --}}
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white hover:-translate-y-1 transition-transform">
                    <div class="px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Biro Administrasi Efek</span>
                    </div>
                    <div class="p-8">
                        <p class="font-black text-lg text-gray-900 mb-4">PT Datindo Entrycom</p>
                        <div class="text-sm text-gray-600 space-y-1.5 font-medium leading-relaxed border-l-2 border-accent pl-4">
                            <p class="font-bold text-gray-900">Wisma Sudirman – Puri Datindo</p>
                            <p>Jl. Jenderal Sudirman Kav. 34</p>
                            <p>Jakarta</p>
                            <div class="mt-4 pt-4 border-t border-gray-100 space-y-1">
                                <p><span class="text-gray-400 font-bold w-6 inline-block">T:</span> 021-5709009</p>
                                <p><span class="text-gray-400 font-bold w-6 inline-block">F:</span> 021-5709026</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Divider --}}
        <hr class="border-gray-100 mb-14 reveal fade-up">

        {{-- ===== SECTION 2: REGULATORY FILLINGS ===== --}}
        <section class="reveal fade-up">
            <div class="flex items-start gap-5 mb-8">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                        Regulatory Fillings
                    </h2>
                    <p class="text-gray-500 font-medium text-sm mt-1">Monthly regulatory filings submitted to Bursa Efek Indonesia.</p>
                </div>
            </div>

            @if(isset($documents) && $documents->count() > 0)
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white">
                    {{-- Column Headers --}}
                    <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                    </div>
                    {{-- Document Rows --}}
                    <div class="divide-y divide-gray-100">
                        @foreach($documents as $doc)
                            <div class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                                <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                    <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <div class="min-w-0">
                                        <p class="font-bold text-gray-900 text-sm truncate">{{ $doc->title }}</p>
                                        @if($doc->year)
                                            <p class="text-xs text-gray-500 font-medium mt-0.5">{{ $doc->year }}</p>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ asset('storage/' . $doc->file_path) }}"
                                   target="_blank" rel="noopener noreferrer"
                                   class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-ppblue-900 hover:bg-ppblue-600 transition-colors">
                                    DOWNLOAD
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center py-14 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-black text-gray-900 mb-2">No Regulatory Fillings Yet</h3>
                    <p class="text-gray-500 font-medium text-sm max-w-sm mx-auto">Upload documents via the admin panel using type <strong class="text-gray-900">Capital Market (Regulatory Fillings)</strong>.</p>
                </div>
            @endif
        </section>

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
