@extends('layouts.main')
@section('title', 'RUPS / GMS - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            General Meeting of <span class="text-blue-300">Shareholders</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Access documents, invitations, and results of our GMS / RUPS.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'rups'])

{{-- ===================== MAIN CONTENT ===================== --}}
<section class="py-16 min-h-screen" style="background: #ffffff;">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="flex items-start gap-5 mb-10">
            <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md"
                 style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                    <span class="font-extrabold" style="color: #111827;">RUPS / GMS Documents</span>
                </h2>
                <p class="text-gray-500 text-sm mt-1">Annual General Meeting and Extraordinary General Meeting documents.</p>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <h3 class="text-lg font-bold text-gray-600 mb-1">No RUPS Documents</h3>
                <p class="text-gray-400 text-sm">Documents related to RUPS / GMS will be uploaded here.</p>
            </div>
        @endif

    </div>
</section>

@endsection
