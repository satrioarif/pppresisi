@extends('layouts.main')
@section('title', 'Stock Information - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Stock Information</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Track PT PP Presisi Tbk's market performance and stock data (IDX: PPRE).</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Stock Widget Placeholder -->
    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-12 mb-16">
        <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-100 pb-8 mb-8 gap-6">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    PPRE <span class="text-sm font-normal text-gray-500 bg-gray-100 px-3 py-1 rounded-full">IDX</span>
                </h2>
                <p class="text-gray-500 mt-1">PT PP Presisi Tbk</p>
            </div>
            <div class="text-right">
                <div class="text-4xl font-bold text-gray-900">Rp 125.00</div>
                <div class="text-green-500 font-semibold flex items-center justify-end mt-1">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                    +2.00 (+1.62%)
                </div>
            </div>
        </div>
        
        <!-- Fake Chart Area -->
        <div class="h-80 w-full bg-gray-50 rounded-xl border border-gray-100 flex items-center justify-center relative overflow-hidden">
            <svg class="w-full h-full text-gray-200" preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M0,80 Q10,70 20,75 T40,50 T60,60 T80,30 T100,40" stroke="url(#gradient)" stroke-width="3" fill="none" />
                <path d="M0,80 Q10,70 20,75 T40,50 T60,60 T80,30 T100,40 L100,100 L0,100 Z" fill="url(#gradient-fill)" stroke="none" />
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#3b82f6" />
                        <stop offset="100%" stop-color="#10b981" />
                    </linearGradient>
                    <linearGradient id="gradient-fill" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.2" />
                        <stop offset="100%" stop-color="#3b82f6" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="absolute text-gray-400 font-medium">Interactive Chart Integration Goes Here</span>
        </div>
    </div>

    <!-- Details Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-500 mb-1">Open</p>
            <p class="text-xl font-bold text-gray-900">123.00</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-500 mb-1">High</p>
            <p class="text-xl font-bold text-gray-900">128.00</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-500 mb-1">Low</p>
            <p class="text-xl font-bold text-gray-900">122.00</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
            <p class="text-sm text-gray-500 mb-1">Volume</p>
            <p class="text-xl font-bold text-gray-900">14.5M</p>
        </div>
    </div>
</div>
@endsection
