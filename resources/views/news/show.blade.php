@extends('layouts.main')
@section('title', $article->title . ' - News')

@section('content')
<!-- Header image if exists -->
@if($article->image)
<div class="w-full h-80 md:h-[500px] mt-20 relative">
    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80"></div>
</div>
@endif

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 {{ $article->image ? '-mt-48 relative z-10' : 'pt-32' }}">
    <div class="bg-white rounded-3xl p-8 md:p-16 shadow-2xl border border-gray-100">
        <!-- Back button -->
        <a href="{{ url('news') }}" class="inline-flex items-center text-sm font-bold text-gray-500 hover:text-ppblue-600 transition mb-8">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to News
        </a>

        <!-- Metadata -->
        <div class="flex items-center text-sm text-gray-500 mb-4 gap-4">
            <span class="flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                {{ \Carbon\Carbon::parse($article->published_date)->format('F d, Y') }}
            </span>
            <span class="px-2 py-1 bg-gray-100 rounded text-xs font-semibold uppercase tracking-wider text-gray-600">Press Release</span>
        </div>

        <!-- Title -->
        <h1 class="text-3xl md:text-5xl font-heading font-bold text-gray-900 mb-10 leading-tight">
            {{ $article->title }}
        </h1>

        <!-- Content -->
        <div class="prose prose-lg max-w-none prose-a:text-ppblue-600 hover:prose-a:text-ppblue-800 prose-headings:font-heading prose-headings:font-bold prose-img:rounded-xl mb-12">
            {!! $article->content !!}
        </div>

        <!-- Attachment Download -->
        @if($article->attachment)
        <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 flex items-center justify-between mt-8 mb-8">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-red-100 text-red-500 rounded-xl flex items-center justify-center mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900">Attached Document</h4>
                    <p class="text-sm text-gray-500">Download the official PDF for more details.</p>
                </div>
            </div>
            <a href="{{ asset('storage/' . $article->attachment) }}" target="_blank" download class="px-6 py-2.5 bg-ppblue-700 text-white font-bold rounded-lg hover:bg-ppblue-900 transition shadow-md shadow-ppblue-500/30">
                Download PDF
            </a>
        </div>
        @endif

        <!-- Share Buttons (Static) -->
        <div class="mt-16 pt-8 border-t border-gray-100 flex items-center justify-between">
            <span class="font-bold text-gray-900">Share this article:</span>
            <div class="flex gap-3">
                <button class="w-10 h-10 rounded-full bg-gray-100 text-gray-600 hover:bg-ppblue-600 hover:text-white transition flex items-center justify-center">
                    <span class="sr-only">Facebook</span>f
                </button>
                <button class="w-10 h-10 rounded-full bg-gray-100 text-gray-600 hover:bg-sky-500 hover:text-white transition flex items-center justify-center">
                    <span class="sr-only">Twitter</span>t
                </button>
                <button class="w-10 h-10 rounded-full bg-gray-100 text-gray-600 hover:bg-blue-700 hover:text-white transition flex items-center justify-center">
                    <span class="sr-only">LinkedIn</span>in
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
