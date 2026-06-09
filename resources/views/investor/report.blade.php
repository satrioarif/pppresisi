@extends('layouts.main')
@section('title', 'Financial Reports - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Financial & Annual Reports</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Transparent and comprehensive financial information for our stakeholders.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($documents) && $documents->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($documents as $doc)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl transition group flex items-start">
                    <div class="w-12 h-12 bg-red-50 text-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:bg-red-500 group-hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-ppblue-500 uppercase tracking-wider">{{ $doc->year }}</span>
                        <h3 class="font-bold text-gray-900 mt-1 mb-2">{{ $doc->title }}</h3>
                        <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $doc->description }}</p>
                        <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="text-ppblue-600 text-sm font-semibold flex items-center hover:text-ppblue-800">
                            Download PDF
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No Reports Available</h3>
            <p class="text-gray-500">Financial reports will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
