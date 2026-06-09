@extends('layouts.main')
@section('title', 'Heavy Equipment - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1572081515254-8eb78db616f7?q=80&w=2000" alt="Heavy Equipment" class="w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-ppblue-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold tracking-wider mb-4 border border-blue-400/30">BUSINESS UNIT</span>
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Heavy Equipment</h1>
        <p class="text-blue-100 text-lg max-w-2xl">The foundation of our operational strength, featuring a massive fleet of modern heavy machinery and production plants.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <!-- Image Side -->
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=600" alt="Excavator" class="rounded-2xl h-48 object-cover w-full shadow-lg">
                <img src="https://images.unsplash.com/photo-1587843825875-c9676e693175?q=80&w=600" alt="Dump Truck" class="rounded-2xl h-64 object-cover w-full shadow-lg">
            </div>
            <div class="space-y-4 pt-12">
                <img src="https://images.unsplash.com/photo-1616422896504-20b17173b9e4?q=80&w=600" alt="Ready Mix" class="rounded-2xl h-72 object-cover w-full shadow-lg">
            </div>
        </div>
        
        <!-- Text Side -->
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Powering Projects Nationwide</h2>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                PP Presisi manages one of the largest and most well-maintained heavy equipment fleets in Indonesia. Our equipment rental and management division not only supports our internal civil and mining projects but also serves external clients.
            </p>
            
            <div class="space-y-6">
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-bold text-ppblue-700 mb-2">Equipment Rental</h4>
                    <p class="text-gray-600">Offering a wide range of reliable excavators, bulldozers, dump trucks, and cranes supported by professional operators and rigorous maintenance schedules.</p>
                </div>
                
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-bold text-ppblue-700 mb-2">Production Plant (Ready Mix & Precast)</h4>
                    <p class="text-gray-600">Supplying high-quality concrete solutions through our strategically located batching plants and precast facilities to ensure structural integrity in every project.</p>
                </div>
                
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-bold text-ppblue-700 mb-2">Maintenance & Workshop</h4>
                    <p class="text-gray-600">In-house service centers and mobile maintenance teams ensuring minimum downtime and maximum equipment availability.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
