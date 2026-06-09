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
    
    <div class="inline-block bg-white p-10 rounded-3xl shadow-xl border border-gray-100 w-full max-w-4xl relative">
        <h2 class="text-2xl font-bold text-gray-800 mb-12">Corporate Ownership Structure</h2>
        
        <!-- Simple CSS Tree Structure -->
        <div class="flex flex-col items-center">
            <!-- Parent -->
            <div class="bg-ppblue-900 text-white px-8 py-4 rounded-xl shadow-md font-bold text-xl relative z-10">
                PT PP (Persero) Tbk
            </div>
            
            <!-- Connecting Line -->
            <div class="w-1 h-12 bg-gray-300"></div>
            
            <!-- Child -->
            <div class="bg-ppblue-600 text-white px-10 py-5 rounded-xl shadow-lg font-bold text-2xl relative z-10 transform hover:scale-105 transition-transform">
                PT PP Presisi Tbk
            </div>

            <!-- Connecting Line -->
            <div class="w-1 h-12 bg-gray-300"></div>
            <div class="w-full max-w-2xl h-1 bg-gray-300"></div>

            <!-- Subsidiaries -->
            <div class="flex justify-between w-full max-w-2xl pt-8 relative">
                <!-- Lines down -->
                <div class="absolute top-0 left-0 w-full flex justify-between">
                    <div class="w-1 h-8 bg-gray-300 ml-[15%]"></div>
                    <div class="w-1 h-8 bg-gray-300 mr-[15%]"></div>
                </div>

                <div class="w-[40%] bg-white border-2 border-gray-200 px-6 py-4 rounded-xl shadow-sm hover:border-ppblue-500 transition-colors">
                    <h4 class="font-bold text-gray-800">PT Lancarjaya Mandiri Abadi</h4>
                    <p class="text-sm text-gray-500 mt-2">Subsidiary (Mining & Civil)</p>
                </div>
                
                <div class="w-[40%] bg-white border-2 border-gray-200 px-6 py-4 rounded-xl shadow-sm hover:border-ppblue-500 transition-colors">
                    <h4 class="font-bold text-gray-800">Other Entities</h4>
                    <p class="text-sm text-gray-500 mt-2">Joint Operations / Affiliates</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
