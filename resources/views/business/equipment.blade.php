@extends('layouts.main')
@section('title', 'Heavy Equipment - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/1cd1ba9cfcc8b96a239cff7badabbcd6.JPG') }}" alt="Heavy Equipment" class="w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-ppblue-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold tracking-wider mb-4 border border-blue-400/30">BUSINESS UNIT</span>
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Equipment Rental</h1>
        <p class="text-blue-100 text-lg max-w-2xl">The foundation of our operational strength, featuring a massive fleet of modern heavy machinery and production plants.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('business/civil-work') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="pb-3 transition text-ppblue-700 border-b-4 border-ppblue-700 font-bold">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <!-- Image Side -->
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
                <img src="{{ asset('images/home/14b7a3cd33b167f0f0b80fd34ea3a5f7 - Copy.jpg') }}" alt="Excavator" class="rounded-2xl h-48 object-cover w-full shadow-lg">
                <img src="{{ asset('images/home/0a03e6e2c13e7c5a8ea8ddcb62de7faf.jpg') }}" alt="Dump Truck" class="rounded-2xl h-64 object-cover w-full shadow-lg">
            </div>
            <div class="space-y-4 pt-12">
                <img src="{{ asset('images/home/0b6f1467c8dbe20af76f04f024366fb7.jpg') }}" alt="Ready Mix" class="rounded-2xl h-72 object-cover w-full shadow-lg">
            </div>
        </div>
        
        <!-- Text Side -->
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">What is Equipment Rental</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                Equipment rental is the Company's business line before pursuing business transformation. Heavy equipment for rent includes tower cranes, passenger hoists, Crawler cranes, generator sets and formwork scaffolding, including the operators of heavy equipment.
            </p>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                The Company provides complete services by ensuring the availability of reliable and prime tools, futures maintenance, and the Quick Response Unit which is always ready to be contacted for 24 hours for construction project safety and security.
            </p>
        </div>
    </div>
</div>
@endsection
