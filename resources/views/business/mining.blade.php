@extends('layouts.main')
@section('title', 'Mining Services - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-gray-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1579970929227-2c933b9fec5a?q=80&w=2000" alt="Mining Services" class="w-full h-full object-cover mix-blend-overlay opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-amber-500/20 text-amber-400 text-sm font-semibold tracking-wider mb-4 border border-amber-400/30">BUSINESS UNIT</span>
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Mining Services</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Providing comprehensive end-to-end mining contractor services from land clearing to ore hauling.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Excellence in Mining Operations</h2>
        <p class="text-gray-600 text-lg leading-relaxed">
            As a trusted mining contractor, PP Presisi leverages its extensive heavy equipment fleet and engineering capabilities to provide safe, efficient, and sustainable mining operations for coal, nickel, and other minerals.
        </p>
    </div>

    <!-- Features Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
        <!-- Feature 1 -->
        <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group">
            <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500 mb-6 group-hover:bg-amber-500 group-hover:text-white transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Hauling Road Construction</h3>
            <p class="text-gray-600">Expertise in developing and maintaining robust hauling roads to ensure smooth and continuous transport of materials.</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group">
            <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500 mb-6 group-hover:bg-amber-500 group-hover:text-white transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Pit Services & Mining</h3>
            <p class="text-gray-600">Full-scale pit operations including overburden removal, drilling, blasting, and ore extraction with high productivity.</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 group">
            <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500 mb-6 group-hover:bg-amber-500 group-hover:text-white transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Ore Hauling</h3>
            <p class="text-gray-600">Efficient transport of extracted minerals from the pit to stockpiles or ports using large-capacity dump trucks.</p>
        </div>
    </div>
</div>
@endsection
