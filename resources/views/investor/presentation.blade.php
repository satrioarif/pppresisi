@extends('layouts.main')
@section('title', 'Corporate Presentation - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Corporate <span class="text-blue-300">Presentation</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Company updates, newsletters, and press releases for investors and the public.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'presentation'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="min-h-screen">

    {{-- ==================== HELPER MACRO ==================== --}}
    {{-- Section template is inlined below for each of the 3 sections --}}

    {{-- ========== SECTION 1: PRESENTATION ========== --}}
    <section class="py-16" id="presentation-docs" style="background: #ffffff;">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-10">
                <div class="flex-shrink-0 w-13 h-13 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                     style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                        <span class="font-extrabold text-ppblue-800">Presentation</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Company Update, Public Expose, and investor presentations.</p>
                </div>
            </div>

            @if(isset($presentationDocs) && $presentationDocs && $presentationDocs->count() > 0)
                <div class="rounded-2xl border border-blue-200 shadow-md overflow-hidden" style="background: #eff6ff; border-top: 4px solid #2563eb;">
                    {{-- Column Headers --}}
                    <div class="flex items-center justify-between px-6 py-3" style="background: #1e40af;">
                        <span class="text-xs font-bold uppercase tracking-widest" style="color: #bfdbfe;">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest pr-2" style="color: #bfdbfe;">Download</span>
                    </div>
                    {{-- Document Rows --}}
                    <div class="divide-y divide-blue-100">
                        @foreach($presentationDocs as $doc)
                            <div class="flex items-center justify-between px-6 py-4 hover:bg-blue-50/40 transition-colors group">
                                <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                    <svg class="w-4 h-4 flex-shrink-0 text-gray-300 group-hover:text-ppblue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <div class="text-center py-14 bg-white rounded-2xl border-2 border-blue-200 border-dashed">
                    <svg class="w-10 h-10 text-blue-200 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
                    <p class="text-gray-400 text-sm">No presentation documents available.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ========== SECTION 2: NEWSLETTER ========== --}}
    <section class="py-16 border-t border-blue-200" id="newsletter-docs" style="background: #ffffff;">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-start gap-5 mb-10">
                <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                     style="background: linear-gradient(135deg, #065f46, #059669);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                        <span class="font-extrabold text-ppblue-800">Newsletter</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Periodic newsletters and investor bulletins.</p>
                </div>
            </div>

            @if(isset($newsletterDocs) && $newsletterDocs && $newsletterDocs->count() > 0)
                <div class="rounded-2xl border border-blue-200 shadow-md overflow-hidden" style="background: #eff6ff; border-top: 4px solid #059669;">
                    <div class="flex items-center justify-between px-6 py-3 bg-emerald-800">
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-200">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-200 pr-2">Download</span>
                    </div>
                    <div class="divide-y divide-blue-100">
                        @foreach($newsletterDocs as $doc)
                            <div class="flex items-center justify-between px-6 py-4 hover:bg-emerald-50/40 transition-colors group">
                                <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                    <svg class="w-4 h-4 flex-shrink-0 text-gray-300 group-hover:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                   style="background: linear-gradient(135deg, #065f46, #059669);">
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
                <div class="text-center py-14 bg-white rounded-2xl border-2 border-emerald-200 border-dashed">
                    <svg class="w-10 h-10 text-emerald-200 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <p class="text-gray-400 text-sm">No newsletters available.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ========== SECTION 3: PRESS RELEASE ========== --}}
    <section class="py-16 border-t border-blue-200" id="press-release-docs" style="background: #ffffff;">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-start gap-5 mb-10">
                <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                     style="background: linear-gradient(135deg, #92400e, #d97706);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                        <span class="font-extrabold text-ppblue-800">Press Release</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Official press releases and public announcements.</p>
                </div>
            </div>

            @if(isset($pressReleaseDocs) && $pressReleaseDocs && $pressReleaseDocs->count() > 0)
                <div class="rounded-2xl border border-blue-200 shadow-md overflow-hidden" style="background: #eff6ff; border-top: 4px solid #d97706;">
                    <div class="flex items-center justify-between px-6 py-3 bg-amber-700">
                        <span class="text-xs font-bold uppercase tracking-widest text-amber-200">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-amber-200 pr-2">Download</span>
                    </div>
                    <div class="divide-y divide-blue-100">
                        @foreach($pressReleaseDocs as $doc)
                            <div class="flex items-center justify-between px-6 py-4 hover:bg-amber-50/40 transition-colors group">
                                <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                    <svg class="w-4 h-4 flex-shrink-0 text-gray-300 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                   style="background: linear-gradient(135deg, #92400e, #d97706);">
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
                <div class="text-center py-14 bg-white rounded-2xl border-2 border-amber-200 border-dashed">
                    <svg class="w-10 h-10 text-amber-200 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    <p class="text-gray-400 text-sm">No press releases available.</p>
                </div>
            @endif
        </div>
    </section>

</div>

@endsection
