@extends('layouts.main')
@section('title', 'Prospectus - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Prospectus</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Official documents detailing investment offerings and corporate actions.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($documents) && $documents->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($documents as $doc)
                <div class="bg-white border border-gray-100 rounded-3xl p-8 shadow-sm hover:shadow-xl transition group">
                    <div class="w-16 h-16 bg-blue-50 text-ppblue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-ppblue-600 group-hover:text-white transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">{{ $doc->year }}</span>
                    <h3 class="font-bold text-xl text-gray-900 mt-1 mb-3">{{ $doc->title }}</h3>
                    <p class="text-gray-500 mb-6">{{ $doc->description }}</p>
                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="text-ppblue-600 font-bold hover:text-ppblue-800 transition flex items-center">
                        Download Prospectus
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200 border-dashed max-w-4xl mx-auto">
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No Prospectus Documents</h3>
            <p class="text-gray-500">Official prospectus documents will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
