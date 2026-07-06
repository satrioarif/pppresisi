@extends('layouts.main')
@section('title', 'Mining Services - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-gray-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/0bc798a5e2bf375cef74a5c5f3c69a4a.jpg') }}" alt="Mining Services" class="w-full h-full object-cover mix-blend-overlay opacity-40">
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
    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('business/civil-work') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="pb-3 transition text-ppblue-700 border-b-4 border-ppblue-700 font-bold">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-20">
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">What is Mining Services</h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-4">
                Mining services is the Company's new business line as resulting of improved engineering capacity, from only having the capability of coal hauling to have the ability to carry out integrated mining services.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed">
                The mining services business line is not new to the Company. The Company's subsidiary, LMA has been working on mining services since 2002, even before the LMA entered the civil work business in 2004.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4 h-full">
            <img src="{{ asset('images/home/0d9e6513867afcfe345e5bcbbdc245b8.jpg') }}" alt="Mining Equipment" class="rounded-2xl h-64 object-cover w-full shadow-lg transform translate-y-8">
            <img src="{{ asset('images/home/18f933c427df7d0c630d46428e682a0e - Copy.jpg') }}" alt="Mining Hauling" class="rounded-2xl h-80 object-cover w-full shadow-lg">
        </div>
    </div>
</div>
@endsection
