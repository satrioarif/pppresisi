@extends('layouts.main')
@section('title', 'HSE - CSR')

@section('content')
<div class="bg-amber-500 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Health, Safety & Environment</h1>
        <p class="text-amber-100 text-lg max-w-2xl mx-auto">Safety is our core value. Zero accidents is our goal.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <!-- Safety First -->
        <div>
            <div class="inline-block px-4 py-2 bg-amber-50 text-amber-600 rounded-full font-bold text-sm mb-6 border border-amber-200">
                ZERO ACCIDENT POLICY
            </div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Uncompromising Safety Standards</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                At PT PP Presisi Tbk, there is nothing more important than the health and safety of our employees, subcontractors, and the surrounding environment. We implement rigorous HSE protocols across all civil work and mining operations.
            </p>
            
            <div class="grid grid-cols-2 gap-6 mt-8">
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center">
                    <h3 class="text-4xl font-bold text-amber-500 mb-2">ISO</h3>
                    <p class="text-gray-900 font-bold">45001:2018</p>
                    <p class="text-xs text-gray-500 mt-1">Occupational Health & Safety</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center">
                    <h3 class="text-4xl font-bold text-green-500 mb-2">ISO</h3>
                    <p class="text-gray-900 font-bold">14001:2015</p>
                    <p class="text-xs text-gray-500 mt-1">Environmental Management</p>
                </div>
            </div>
        </div>
        
        <!-- Image -->
        <div class="relative">
            <div class="absolute inset-0 bg-amber-200 transform translate-x-4 translate-y-4 rounded-3xl -z-10"></div>
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356f12?q=80&w=800" alt="Construction Safety Worker" class="rounded-3xl shadow-xl w-full h-[500px] object-cover">
        </div>
    </div>
</div>
@endsection
