@extends('layouts.main')
@section('title', 'Transparency of Information - Investor Relations | PP Presisi')

@section('content')

<x-page-header badge="Investor Relations" subtitle="Information disclosures and material facts of PT PP Presisi Tbk." class="reveal fade-bottom">
    Transparency of Information
</x-page-header>

@include('investor._nav', ['active' => 'transparency'])

{{-- ===================== MAIN CONTENT ===================== --}}
<section class="py-16 min-h-screen bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="flex items-start gap-5 mb-10 reveal fade-up">
            <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-heading font-black text-gray-900">
                    Transparency of Information
                </h2>
                <p class="text-gray-500 font-medium text-sm mt-1">Official public disclosures and material information.</p>
            </div>
        </div>

        @if(isset($documents) && $documents->count() > 0)
            <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white reveal fade-up">
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
            <div class="text-center py-14 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-black text-gray-900 mb-2">No Documents Yet</h3>
                <p class="text-gray-500 font-medium text-sm max-w-sm mx-auto">Upload documents via the admin panel using type <strong class="text-gray-900">Transparency of Information</strong>.</p>
            </div>
        @endif

    </div>
</section>

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
