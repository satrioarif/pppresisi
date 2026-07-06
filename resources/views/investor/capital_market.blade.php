@extends('layouts.main')
@section('title', 'Capital Market - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Capital <span class="text-blue-300">Market</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Capital market information, supporting institutions, and regulatory fillings of PT PP Presisi Tbk.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'capital-market'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-white min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ===== SECTION 1: LEMBAGA DAN PROFESI PENUNJANG PASAR MODAL ===== --}}
        <section class="mb-16">
            <div class="flex items-start gap-5 mb-8">
                <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                     style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                        Lembaga dan Profesi Penunjang Pasar Modal
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Capital market supporting institutions and professionals.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Akuntan Publik --}}
                <div class="rounded-2xl border border-blue-200 overflow-hidden" style="background: #eff6ff; border-top: 4px solid #2563eb;">
                    <div class="px-5 py-3" style="background: #1e40af;">
                        <span class="text-xs font-bold uppercase tracking-widest" style="color: #bfdbfe;">Akuntan Publik</span>
                    </div>
                    <div class="px-5 py-5">
                        <p class="font-bold text-gray-900 mb-3">Amir Abadi Jusuf, Aryanto, Mawar &amp; Rekan</p>
                        <div class="text-sm text-gray-600 space-y-1 leading-relaxed">
                            <p class="font-semibold text-gray-700">RSM Indonesia</p>
                            <p>Plaza Asia, Level 10</p>
                            <p>Jl. Jend Sudirman Kav. 59</p>
                            <p>Jakarta 12910</p>
                            <div class="mt-3 space-y-0.5">
                                <p><span class="text-gray-400 w-5 inline-block">T:</span> +62 21 5140 1340</p>
                                <p><span class="text-gray-400 w-5 inline-block">F:</span> +62 21 5140 1350</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Biro Administrasi Efek --}}
                <div class="rounded-2xl border border-blue-200 overflow-hidden" style="background: #eff6ff; border-top: 4px solid #2563eb;">
                    <div class="px-5 py-3" style="background: #1e40af;">
                        <span class="text-xs font-bold uppercase tracking-widest" style="color: #bfdbfe;">Biro Administrasi Efek</span>
                    </div>
                    <div class="px-5 py-5">
                        <p class="font-bold text-gray-900 mb-3">PT Datindo Entrycom</p>
                        <div class="text-sm text-gray-600 space-y-1 leading-relaxed">
                            <p class="font-semibold text-gray-700">Wisma Sudirman – Puri Datindo</p>
                            <p>Jl. Jenderal Sudirman Kav. 34</p>
                            <p>Jakarta</p>
                            <div class="mt-3 space-y-0.5">
                                <p><span class="text-gray-400 w-5 inline-block">T:</span> 021-5709009</p>
                                <p><span class="text-gray-400 w-5 inline-block">F:</span> 021-5709026</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Divider --}}
        <hr class="border-gray-200 mb-14">

        {{-- ===== SECTION 2: REGULATORY FILLINGS ===== --}}
        <section>
            <div class="flex items-start gap-5 mb-8">
                <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                     style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                        Regulatory Fillings
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Monthly regulatory filings submitted to Bursa Efek Indonesia.</p>
                </div>
            </div>

            @if(isset($documents) && $documents->count() > 0)
                <div class="rounded-2xl border border-blue-200 shadow-md overflow-hidden" style="background: #eff6ff; border-top: 4px solid #2563eb;">
                    {{-- Column Headers --}}
                    <div class="flex items-center justify-between px-6 py-3" style="background: #1e40af;">
                        <span class="text-xs font-bold uppercase tracking-widest" style="color: #bfdbfe;">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest pr-2" style="color: #bfdbfe;">Download</span>
                    </div>
                    {{-- Document Rows --}}
                    <div class="divide-y divide-blue-100">
                        @foreach($documents as $doc)
                            <div class="flex items-center justify-between px-6 py-4 hover:bg-blue-50/40 transition-colors group">
                                <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                    <svg class="w-4 h-4 flex-shrink-0 text-gray-300 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <div class="min-w-0">
                                        <p class="font-semibold text-gray-800 text-sm group-hover:text-gray-900 truncate">{{ $doc->title }}</p>
                                        @if($doc->year)
                                            <p class="text-xs text-gray-400 mt-0.5">{{ $doc->year }}</p>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ asset('storage/' . $doc->file_path) }}"
                                   target="_blank" rel="noopener noreferrer"
                                   class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white transition-all duration-200 hover:opacity-90 hover:scale-105 active:scale-95"
                                   style="background: linear-gradient(135deg, #1e40af, #2563eb);">
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
                <div class="text-center py-14 rounded-2xl border-2 border-blue-200 border-dashed" style="background: #eff6ff;">
                    <svg class="w-10 h-10 text-blue-200 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3 class="text-lg font-bold text-gray-600 mb-1">No Regulatory Fillings Yet</h3>
                    <p class="text-gray-400 text-sm">Upload documents via the admin panel using type <strong>Capital Market (Regulatory Fillings)</strong>.</p>
                    <p class="text-gray-400 text-xs mt-1">Use the document title as the period name (e.g. "Mei 2026").</p>
                </div>
            @endif
        </section>

    </div>
</div>

@endsection
