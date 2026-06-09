@extends('layouts.main')
@section('title', 'Corporate Presentations - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Corporate Presentations</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Review our strategic plans, performance highlights, and future outlooks.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($documents) && $documents->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($documents as $doc)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl transition group">
                    <div class="aspect-video bg-blue-50 rounded-xl mb-6 flex items-center justify-center text-ppblue-400 group-hover:bg-ppblue-500 group-hover:text-white transition overflow-hidden relative">
                        <svg class="w-12 h-12 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-ppblue-500 uppercase tracking-wider">{{ $doc->year }}</span>
                    <h3 class="font-bold text-gray-900 mt-1 mb-2">{{ $doc->title }}</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $doc->description }}</p>
                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="inline-flex items-center justify-center w-full px-4 py-2 bg-gray-50 text-ppblue-700 rounded-lg font-semibold hover:bg-ppblue-50 transition">
                        View Presentation
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No Presentations Available</h3>
            <p class="text-gray-500">Corporate presentations will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
