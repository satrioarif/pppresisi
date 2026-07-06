@extends('layouts.main')
@section('title', 'Awards - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Awards & Recognitions</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">A testament to our unwavering commitment to quality, safety, and corporate excellence.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500 flex items-center">
        <a href="{{ url('/') }}" class="hover:text-ppblue-700 transition">Home</a>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="hover:text-ppblue-700 transition cursor-pointer">About Us</span>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="text-gray-900 font-semibold">Awards</span>
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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
        <!-- Award 1 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 flex flex-col group">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-xl flex items-center justify-center p-2">
                <img src="{{ asset('images/awards/Sertifikat1.jpg') }}" alt="Sertifikat BUMN Track Best CMO Branding" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
            </div>
            <div class="text-left w-full">
                <p class="text-sm text-gray-500 mb-2">Sertifikat BUMN Track</p>
                <h3 class="font-bold text-gray-900 text-lg leading-tight mb-4">Best CMO Branding & Marketing High Impact Operational Marketing Excellence</h3>
                <span class="inline-block px-4 py-1.5 bg-amber-50 text-amber-700 text-xs font-bold rounded-full">2025</span>
            </div>
        </div>

        <!-- Award 2 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 flex flex-col group">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-xl flex items-center justify-center p-2">
                <img src="{{ asset('images/awards/Sertifikat2.jpg') }}" alt="Sertifikat BUMN Track Transformation Brand" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
            </div>
            <div class="text-left w-full">
                <p class="text-sm text-gray-500 mb-2">Sertifikat BUMN Track</p>
                <h3 class="font-bold text-gray-900 text-lg leading-tight">Transformation Brand and Marketing in Digital Era Best Sustainable Branding Initiative</h3>
            </div>
        </div>

        <!-- Award 3 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 flex flex-col group">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-xl flex items-center justify-center p-2">
                <img src="{{ asset('images/awards/Sertifikat3.png') }}" alt="Top Corporate Award 2025" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
            </div>
            <div class="text-left w-full">
                <h3 class="font-bold text-gray-900 text-lg leading-tight mb-4">Top Corporate Award</h3>
                <span class="inline-block px-4 py-1.5 bg-amber-50 text-amber-700 text-xs font-bold rounded-full">2025</span>
            </div>
        </div>

        <!-- Award 4 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 flex flex-col group">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-xl flex items-center justify-center p-2">
                <img src="{{ asset('images/awards/Sertifikat4.jpg') }}" alt="Top GRC Award 2023" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
            </div>
            <div class="text-left w-full">
                <h3 class="font-bold text-gray-900 text-lg leading-tight mb-4">Top GRC Award</h3>
                <span class="inline-block px-4 py-1.5 bg-amber-50 text-amber-700 text-xs font-bold rounded-full">2023</span>
            </div>
        </div>

        <!-- Award 5 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 flex flex-col group">
            <div class="w-full h-[300px] mb-6 overflow-hidden rounded-xl flex items-center justify-center p-2">
                <img src="{{ asset('images/awards/Sertifikat5.jpg') }}" alt="TJSL & CSR AWARD 2023" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-md">
            </div>
            <div class="text-left w-full">
                <h3 class="font-bold text-gray-900 text-lg leading-tight mb-4">TJSL & CSR AWARD</h3>
                <span class="inline-block px-4 py-1.5 bg-amber-50 text-amber-700 text-xs font-bold rounded-full">2023</span>
            </div>
        </div>
    </div>
</div>
@endsection
