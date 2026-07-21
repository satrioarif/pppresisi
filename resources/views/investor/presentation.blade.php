@extends('layouts.main')
@section('title', 'Corporate Presentation - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <div class="inline-flex items-center gap-2 bg-accent/20 border border-accent/30 rounded-full px-4 py-1.5 text-accent text-xs font-bold tracking-widest uppercase mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
            Investor Relations
        </div>
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-5 leading-tight">
            Corporate Presentation
        </h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto leading-relaxed">
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
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                        Presentation
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Company Update, Public Expose, and investor presentations.</p>
                </div>
            </div>

            @if(isset($presentationDocs) && $presentationDocs && $presentationDocs->count() > 0)
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white reveal fade-up">
                    {{-- Column Headers --}}
                    <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                    </div>
                    {{-- Document Rows --}}
                    <div class="divide-y divide-gray-100">
                        @foreach($presentationDocs as $doc)
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
                <div class="text-center py-14 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 font-medium text-sm">No presentation documents available.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ========== SECTION 2: NEWSLETTER ========== --}}
    <section class="py-16 border-t border-gray-100 bg-white" id="newsletter-docs">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-start gap-5 mb-10">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                        Newsletter
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Periodic newsletters and investor bulletins.</p>
                </div>
            </div>

            @if(isset($newsletterDocs) && $newsletterDocs && $newsletterDocs->count() > 0)
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white reveal fade-up">
                    <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @foreach($newsletterDocs as $doc)
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
                <div class="text-center py-14 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 font-medium text-sm">No newsletters available.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ========== SECTION 3: PRESS RELEASE ========== --}}
    <section class="py-16 border-t border-gray-100 bg-white" id="press-release-docs">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-start gap-5 mb-10">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                        Press Release
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Official press releases and public announcements.</p>
                </div>
            </div>

            @if(isset($pressReleaseDocs) && $pressReleaseDocs && $pressReleaseDocs->count() > 0)
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white reveal fade-up">
                    <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                        <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                        <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @foreach($pressReleaseDocs as $doc)
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
                <div class="text-center py-14 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                    </div>
                    <p class="text-gray-500 font-medium text-sm">No press releases available.</p>
                </div>
            @endif
        </div>
    </section>

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
