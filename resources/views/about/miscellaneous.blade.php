@extends('layouts.main')
@section('title', 'Miscellaneous - PT PP Presisi Tbk')

@section('content')
<x-page-header subtitle="Miscellaneous company documents and resources." class="reveal fade-bottom">
    Miscellaneous
</x-page-header>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-10 text-sm text-gray-500 flex items-center reveal fade-bottom">
        <a href="{{ url('/') }}" class="hover:text-accent transition font-semibold">Home</a>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="hover:text-accent transition cursor-pointer font-semibold">About Us</span>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="text-gray-900 font-bold">Miscellaneous</span>
    </div>

    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('about/profile') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/profile') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/structure') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/boards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/miscellaneous') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/awards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Awards</a>
        </div>
    </div>

    @if(isset($documents) && $documents->count() > 0)
        <div class="overflow-hidden shadow-2xl shadow-gray-200/50 border border-gray-100 bg-white rounded-[2.5rem] mb-24 reveal fade-up">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-ppblue-900 text-white text-sm uppercase tracking-widest">
                        <th class="py-6 px-8 font-bold">Title</th>
                        <th class="py-6 px-8 font-bold w-48 text-center">Download</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($documents as $doc)
                        <tr class="border-b border-gray-100 {{ $loop->even ? 'bg-gray-50/50' : 'bg-white' }} hover:bg-gray-50 transition-colors group">
                            <td class="py-6 px-8 text-gray-800 text-lg font-bold group-hover:text-accent transition-colors">{{ $doc->title }}</td>
                            <td class="py-6 px-8 text-center">
                                <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="inline-flex items-center justify-center bg-ppblue-900 hover:bg-ppblue-600 text-white text-xs font-bold uppercase tracking-widest px-6 py-3 rounded-full transition-all duration-300 shadow-md shadow-ppblue-900/10 hover:shadow-lg hover:shadow-ppblue-600/30 hover:-translate-y-1">
                                    DOWNLOAD 
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-24 bg-gray-50 rounded-[2.5rem] border-2 border-gray-200 border-dashed reveal fade-up mb-24">
            <svg class="w-20 h-20 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <h3 class="text-3xl font-black text-gray-800 mb-3">No Documents Available</h3>
            <p class="text-gray-500 text-lg">Miscellaneous documents will be uploaded here.</p>
        </div>
    @endif
</div>
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
