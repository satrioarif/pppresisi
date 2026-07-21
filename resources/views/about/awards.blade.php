@extends('layouts.main')
@section('title', 'Awards - PT PP Presisi Tbk')

@section('content')
<x-page-header subtitle="A testament to our unwavering commitment to quality, safety, and corporate excellence." class="reveal fade-bottom">
    Awards &amp; Recognitions
</x-page-header>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-10 text-sm text-gray-500 flex items-center reveal fade-bottom">
        <a href="{{ url('/') }}" class="hover:text-accent transition font-semibold">Home</a>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="hover:text-accent transition cursor-pointer font-semibold">About Us</span>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="text-gray-900 font-bold">Awards</span>
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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start mb-24">
        <!-- Award 1 -->
        <div class="bg-white border border-gray-100 rounded-[2.5rem] p-6 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:border-accent hover:-translate-y-2 transition-all duration-500 flex flex-col group reveal fade-up">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-[2rem] flex items-center justify-center p-4 bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-transparent transition-colors">
                <img src="{{ asset('images/awards/Sertifikat1.jpg') }}" alt="Sertifikat BUMN Track Best CMO Branding" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl" width="658" height="874" loading="lazy">
            </div>
            <div class="text-left w-full px-2">
                <p class="text-sm text-gray-500 mb-2 font-bold tracking-widest uppercase">Sertifikat BUMN Track</p>
                <h3 class="font-black text-gray-900 text-xl leading-tight mb-4 group-hover:text-accent transition-colors">Best CMO Branding & Marketing High Impact Operational Marketing Excellence</h3>
                <span class="inline-block px-5 py-2 bg-ppblue-900 text-white text-xs font-bold rounded-full shadow-md">2025</span>
            </div>
        </div>

        <!-- Award 2 -->
        <div class="bg-white border border-gray-100 rounded-[2.5rem] p-6 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:border-accent hover:-translate-y-2 transition-all duration-500 flex flex-col group reveal fade-up" style="transition-delay: 100ms;">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-[2rem] flex items-center justify-center p-4 bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-transparent transition-colors">
                <img src="{{ asset('images/awards/Sertifikat2.jpg') }}" alt="Sertifikat BUMN Track Transformation Brand" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl" width="652" height="876" loading="lazy">
            </div>
            <div class="text-left w-full px-2">
                <p class="text-sm text-gray-500 mb-2 font-bold tracking-widest uppercase">Sertifikat BUMN Track</p>
                <h3 class="font-black text-gray-900 text-xl leading-tight mb-4 group-hover:text-accent transition-colors">Transformation Brand and Marketing in Digital Era Best Sustainable Branding Initiative</h3>
            </div>
        </div>

        <!-- Award 3 -->
        <div class="bg-white border border-gray-100 rounded-[2.5rem] p-6 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:border-accent hover:-translate-y-2 transition-all duration-500 flex flex-col group reveal fade-up" style="transition-delay: 200ms;">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-[2rem] flex items-center justify-center p-4 bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-transparent transition-colors">
                <img src="{{ asset('images/awards/Sertifikat3.png') }}" alt="Top Corporate Award 2025" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl" width="1920" height="1920" loading="lazy">
            </div>
            <div class="text-left w-full px-2">
                <h3 class="font-black text-gray-900 text-xl leading-tight mb-4 group-hover:text-accent transition-colors">Top Corporate Award</h3>
                <span class="inline-block px-5 py-2 bg-ppblue-900 text-white text-xs font-bold rounded-full shadow-md">2025</span>
            </div>
        </div>

        <!-- Award 4 -->
        <div class="bg-white border border-gray-100 rounded-[2.5rem] p-6 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:border-accent hover:-translate-y-2 transition-all duration-500 flex flex-col group reveal fade-up">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-[2rem] flex items-center justify-center p-4 bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-transparent transition-colors">
                <img src="{{ asset('images/awards/Sertifikat4.jpg') }}" alt="Top GRC Award 2023" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl" width="1241" height="1778" loading="lazy">
            </div>
            <div class="text-left w-full px-2">
                <h3 class="font-black text-gray-900 text-xl leading-tight mb-4 group-hover:text-accent transition-colors">Top GRC Award</h3>
                <span class="inline-block px-5 py-2 bg-ppblue-900 text-white text-xs font-bold rounded-full shadow-md">2023</span>
            </div>
        </div>

        <!-- Award 5 -->
        <div class="bg-white border border-gray-100 rounded-[2.5rem] p-6 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:border-accent hover:-translate-y-2 transition-all duration-500 flex flex-col group reveal fade-up" style="transition-delay: 100ms;">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-[2rem] flex items-center justify-center p-4 bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-transparent transition-colors">
                <img src="{{ asset('images/awards/Sertifikat5.jpg') }}" alt="TJSL & CSR AWARD 2023" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-700 drop-shadow-xl" width="1920" height="1467" loading="lazy">
            </div>
            <div class="text-left w-full px-2">
                <h3 class="font-black text-gray-900 text-xl leading-tight mb-4 group-hover:text-accent transition-colors">TJSL & CSR AWARD</h3>
                <span class="inline-block px-5 py-2 bg-ppblue-900 text-white text-xs font-bold rounded-full shadow-md">2023</span>
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
