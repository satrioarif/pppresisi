@extends('layouts.main')
@section('title', 'News & Events - PT PP Presisi Tbk')

@section('content')
<x-page-header subtitle="Stay updated with the latest press releases, corporate announcements, and events.">
    News &amp; Events
</x-page-header>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($news) && $news->count() > 0)
        <!-- Featured Article (Latest) -->
        @php $featured = $news->first(); @endphp
        <div class="bg-white rounded-3xl overflow-hidden shadow-xl border border-gray-100 mb-16 group">
            <div class="grid grid-cols-1 md:grid-cols-2 md:h-[450px]">
                <div class="h-80 md:h-full relative overflow-hidden">
                    @if($featured->image)
                        <img src="{{ asset('storage/' . $featured->image) }}" alt="{{ $featured->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" width="608" height="450" loading="lazy">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                    @endif
                    <div class="absolute top-6 left-6 px-3 py-1 bg-amber-500 text-white font-bold text-xs uppercase tracking-wider rounded shadow">Featured</div>
                </div>
                <div class="p-8 md:p-12 flex flex-col justify-center overflow-hidden">
                    <span class="text-sm font-semibold text-ppblue-600 mb-3">{{ \Carbon\Carbon::parse($featured->published_date)->format('F d, Y') }}</span>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-ppblue-700 transition"><a href="{{ url('news/' . $featured->slug) }}">{{ $featured->title }}</a></h2>
                    <p class="text-gray-600 mb-8 leading-relaxed" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">{{ strip_tags($featured->content) }}</p>
                    <a href="{{ url('news/' . $featured->slug) }}" class="inline-flex items-center text-ppblue-700 font-bold hover:text-ppblue-900 transition">
                        Read Full Article
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Grid Articles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($news->skip(1) as $article)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col group">
                    <a href="{{ url('news/' . $article->slug) }}" class="block h-56 overflow-hidden relative">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" width="384" height="224" loading="lazy">
                        @else
                            <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                    </a>
                    <div class="p-6 flex-grow flex flex-col">
                        <span class="text-xs font-semibold text-gray-400 mb-2 block">{{ \Carbon\Carbon::parse($article->published_date)->format('F d, Y') }}</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-ppblue-600 transition"><a href="{{ url('news/' . $article->slug) }}">{{ $article->title }}</a></h3>
                        <p class="text-gray-500 text-sm mb-6 flex-grow" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ strip_tags($article->content) }}</p>
                        <a href="{{ url('news/' . $article->slug) }}" class="text-sm font-bold text-ppblue-600 hover:text-ppblue-800 transition">Read More &rarr;</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-24 bg-white rounded-3xl shadow-sm border border-gray-100">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No News Available</h3>
            <p class="text-gray-500 mb-6">Check back soon for the latest corporate updates.</p>
        </div>
    @endif
</div>
@endsection
