@extends('layouts.main')
@section('title', 'Company Structure - PT PP Presisi Tbk')

@section('content')
<x-page-header subtitle="Understanding our organizational ecosystem and strategic positioning within the PT PP (Persero) Tbk group." class="reveal fade-bottom">
    Company Structure
</x-page-header>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
    <!-- Breadcrumb -->
    <div class="mb-10 text-sm text-gray-500 flex items-center justify-start text-left reveal fade-bottom">
        <a href="{{ url('/') }}" class="hover:text-accent transition font-semibold">Home</a>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="hover:text-accent transition cursor-pointer font-semibold">About Us</span>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="text-gray-900 font-bold">Company Structure</span>
    </div>

    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 text-left reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('about/profile') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/profile') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/structure') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/boards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/miscellaneous') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/awards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Awards</a>
        </div>
    </div>
    <div class="inline-block bg-white p-12 rounded-[2.5rem] shadow-2xl border border-gray-100 w-full max-w-5xl relative reveal fade-up mb-24">
        <h2 class="text-3xl font-black text-gray-900 mb-12 text-center">Corporate Ownership Structure</h2>
        
        <div class="flex flex-col items-center gap-16">
            <div class="w-full hover:scale-105 transition-transform duration-700 rounded-3xl overflow-hidden shadow-2xl shadow-gray-200/50">
                <img src="{{ asset('images/aboutus/SO.jpeg') }}" alt="Company Structure" class="w-full h-auto" width="1280" height="720" loading="lazy">
            </div>
            
            <div class="w-full hover:scale-105 transition-transform duration-700 rounded-3xl overflow-hidden shadow-2xl shadow-gray-200/50">
                <img src="{{ asset('images/aboutus/SO2.jpg') }}" alt="Board of Directors" class="w-full h-auto" width="1280" height="720" loading="lazy">
            </div>
        </div>
    </div>
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
