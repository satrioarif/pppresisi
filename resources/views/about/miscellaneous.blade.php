@extends('layouts.main')
@section('title', 'Miscellaneous - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Miscellaneous</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Miscellaneous company documents.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500 flex items-center">
        <a href="{{ url('/') }}" class="hover:text-ppblue-700 transition">Home</a>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="hover:text-ppblue-700 transition cursor-pointer">About Us</span>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="text-gray-900 font-semibold">Miscellaneous</span>
    </div>

    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('about/profile') }}" class="pb-3 transition {{ request()->is('about/profile') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="pb-3 transition {{ request()->is('about/structure') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="pb-3 transition {{ request()->is('about/boards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="pb-3 transition {{ request()->is('about/miscellaneous') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="pb-3 transition {{ request()->is('about/awards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Awards</a>
        </div>
    </div>

    @if(isset($documents) && $documents->count() > 0)
        <div class="overflow-hidden shadow-sm border border-gray-200 bg-white">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#4a89c8] text-white text-lg">
                        <th class="py-4 px-6 font-normal tracking-wide">Title</th>
                        <th class="py-4 px-6 font-normal tracking-wide w-48 text-center">Download</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($documents as $doc)
                        <tr class="border-b border-gray-100 {{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-blue-50 transition">
                            <td class="py-4 px-6 text-gray-700 text-[15px] font-medium">{{ $doc->title }}</td>
                            <td class="py-4 px-6 text-center">
                                <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="inline-flex items-center justify-center bg-[#4a89c8] hover:bg-blue-700 text-white text-xs font-bold px-4 py-2 w-32 transition rounded-sm">
                                    DOWNLOAD 
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-16 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No Documents Available</h3>
            <p class="text-gray-500">Miscellaneous documents will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
