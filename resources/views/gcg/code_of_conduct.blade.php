@extends('layouts.main')
@section('title', 'Code of Conduct - GCG | PP Presisi')

@section('content')

<x-page-header badge="Good Corporate Governance" subtitle="Our commitment to ethical standards and business integrity.">
    Code of <span class="text-ppblue-300">Conduct</span>
</x-page-header>

<section class="py-16 min-h-screen bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- GCG Nav --}}
        @include('gcg._nav')

        {{-- Section Header --}}
        <div class="flex items-start gap-5 mb-10 mt-8">
            <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md bg-gradient-to-br from-ppblue-900 to-ppblue-600">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                    <span class="font-extrabold">Code of Conduct Documents</span>
                </h2>
                <p class="text-gray-500 text-sm mt-1">Download guidelines, policies, and regulations.</p>
            </div>
        </div>

        @if(isset($documents) && $documents->count() > 0)
            <div class="rounded-2xl border border-ppblue-100 shadow-md overflow-hidden bg-ppblue-50 border-t-4 border-t-ppblue-600">
                {{-- Column Headers --}}
                <div class="flex items-center justify-between px-6 py-3 bg-ppblue-900">
                    <span class="text-xs font-bold uppercase tracking-widest text-ppblue-100">Title</span>
                    <span class="text-xs font-bold uppercase tracking-widest pr-2 text-ppblue-100">Download</span>
                </div>
                {{-- Document Rows --}}
                <div class="divide-y divide-ppblue-100">
                    @foreach($documents as $doc)
                        <div class="flex items-center justify-between px-6 py-4 hover:bg-ppblue-50/40 transition-colors group">
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
            <div class="text-center py-14 rounded-2xl border-2 border-ppblue-200 border-dashed bg-ppblue-50">
                <svg class="w-10 h-10 text-ppblue-200 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <h3 class="text-lg font-bold text-gray-600 mb-1">No Documents Yet</h3>
                <p class="text-gray-400 text-sm">Upload documents via the admin panel using type <strong>Code of Conduct</strong>.</p>
            </div>
        @endif

    </div>
</section>

@endsection
