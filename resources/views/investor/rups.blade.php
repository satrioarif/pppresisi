@extends('layouts.main')
@section('title', 'RUPS - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">General Meeting of Shareholders (RUPS)</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Access documents, invitations, and results of our GMS.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($documents) && $documents->count() > 0)
        <div class="space-y-4 max-w-4xl mx-auto">
            @foreach($documents as $doc)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-gray-400 uppercase">{{ $doc->year }}</span>
                            <h3 class="font-bold text-gray-900">{{ $doc->title }}</h3>
                            <p class="text-sm text-gray-500">{{ $doc->description }}</p>
                        </div>
                    </div>
                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="px-5 py-2.5 bg-gray-50 text-ppblue-700 border border-gray-200 rounded-xl font-medium hover:bg-ppblue-50 transition whitespace-nowrap text-center">
                        Download
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No RUPS Documents</h3>
            <p class="text-gray-500">Documents related to RUPS will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
