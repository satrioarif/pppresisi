@extends('layouts.main')
@section('title', 'Internal Audit Unit - GCG | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            Good Corporate Governance
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Internal Audit <span class="text-blue-300">Unit</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Information regarding our internal audit operations.
        </p>
    </div>
</div>

<section class="py-16 min-h-screen" style="background: #ffffff;">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- GCG Nav --}}
        @include('gcg._nav')

        {{-- Section Header --}}
        <div class="flex items-start gap-5 mb-8 mt-8">
            <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                 style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                    <span class="font-extrabold" style="color: #111827;">Internal Audit</span>
                </h2>
                <p class="text-gray-500 text-sm mt-1">Information and documents related to the Internal Audit Unit.</p>
            </div>
        </div>

        {{-- Static Content --}}
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden mb-12">
            <div class="p-8 md:p-10 flex flex-col md:flex-row gap-8">
                <div class="flex-1 prose prose-lg text-gray-600 max-w-none text-justify">
                    <p>
                        In accordance with POJK No. 56 and based on the Decree of the Board of Directors of the Company No.116/SK/DIR/PPRE/V/2023 dated May 22, 2023 regarding to the establishment and appointment of the Internal Audit Unit, the Company has appointed Wismo Suwego as Head of Internal Audit Unit. As guidance, the Company has established an Internal Audit Charter approved by the Board of Commissioners and the Board of Directors of the Company on December 15, 2017.
                    </p>
                    <p>
                        Periodically, internal audit evaluates internal control system, information system and risks associated with corporate management, the effectiveness and efficiency of operations, asset safeguards, and compliance with contracts, laws and regulations. The Internal Audit is responsible and reports its work functionally to the Audit Committee and administratively to the President Director, to achieve the required level of independence.
                    </p>
                </div>
                
                <div class="w-full md:w-64 flex-shrink-0 flex flex-col items-center">
                    <div class="w-40 h-56 bg-gray-200 rounded-xl overflow-hidden shadow-md mb-4 border border-gray-100">
                        {{-- Image from reference --}}
                        <img src="https://panelppre.pp-presisi.co.id/assets/vendor/responsive_filemanager/source/wismo_v2.jpeg" alt="Wismo Suwego" class="w-full h-full object-cover" width="160" height="224" loading="lazy">
                    </div>
                    <div class="text-center">
                        <h5 class="text-lg font-bold text-gray-900 leading-tight">Wismo Suwego</h5>
                        <h6 class="text-sm font-medium text-blue-600 mt-1">Head of Internal Audit Unit</h6>
                    </div>
                </div>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
                <h3 class="text-lg font-bold text-gray-600 mb-1">No Documents Yet</h3>
                <p class="text-gray-400 text-sm">Upload documents via the admin panel using type <strong>Internal Audit Unit</strong>.</p>
            </div>
        @endif

    </div>
</section>

@endsection
