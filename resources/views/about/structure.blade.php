@extends('layouts.main')
@section('title', 'Company Structure - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Company Structure</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Understanding our organizational ecosystem and strategic positioning within the PT PP (Persero) Tbk group.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500 flex items-center justify-start text-left">
        <a href="{{ url('/') }}" class="hover:text-ppblue-700 transition">Home</a>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="hover:text-ppblue-700 transition cursor-pointer">About Us</span>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="text-gray-900 font-semibold">Company Structure</span>
    </div>

    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto text-left">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('about/profile') }}" class="pb-3 transition {{ request()->is('about/profile') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="pb-3 transition {{ request()->is('about/structure') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="pb-3 transition {{ request()->is('about/boards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="pb-3 transition {{ request()->is('about/miscellaneous') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="pb-3 transition {{ request()->is('about/awards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Awards</a>
        </div>
    </div>
    <div class="inline-block bg-white p-10 rounded-3xl shadow-xl border border-gray-100 w-full max-w-5xl relative">
        <h2 class="text-2xl font-bold text-gray-800 mb-10">Corporate Ownership Structure</h2>
        
        <div class="flex flex-col items-center gap-12">
            <div class="w-full hover:scale-[1.01] transition-transform duration-300">
                <img src="{{ asset('images/aboutus/SO.jpeg') }}" alt="Company Structure" class="w-full h-auto rounded-xl shadow-lg border border-gray-100">
            </div>
            
            <div class="w-full hover:scale-[1.01] transition-transform duration-300">
                <img src="{{ asset('images/aboutus/SO2.jpg') }}" alt="Board of Directors" class="w-full h-auto rounded-xl shadow-lg border border-gray-100">
            </div>
        </div>
    </div>
</div>
@endsection
