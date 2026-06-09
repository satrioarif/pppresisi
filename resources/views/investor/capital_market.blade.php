@extends('layouts.main')
@section('title', 'Capital Market - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Capital Market</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Shareholding structure, analyst coverage, and capital market information.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
        <!-- Shareholding Structure -->
        <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
            <h2 class="text-2xl font-bold text-ppblue-900 mb-8 border-b border-gray-100 pb-4">Shareholding Structure</h2>
            
            <div class="space-y-6">
                <!-- Shareholder 1 -->
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-gray-800">PT PP (Persero) Tbk</span>
                        <span class="font-bold text-ppblue-600">76.99%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3">
                        <div class="bg-ppblue-600 h-3 rounded-full" style="width: 76.99%"></div>
                    </div>
                </div>

                <!-- Shareholder 2 -->
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-gray-800">Yayasan Kesejahteraan Pegawai PT PP</span>
                        <span class="font-bold text-amber-500">0.01%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3">
                        <div class="bg-amber-500 h-3 rounded-full" style="width: 5%"></div>
                    </div>
                </div>

                <!-- Shareholder 3 -->
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <span class="font-bold text-gray-800">Public (Masyarakat)</span>
                        <span class="font-bold text-green-500">23.00%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3">
                        <div class="bg-green-500 h-3 rounded-full" style="width: 23%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listing Info -->
        <div class="bg-ppblue-50 p-8 rounded-3xl border border-ppblue-100">
            <h2 class="text-2xl font-bold text-ppblue-900 mb-8 border-b border-ppblue-200 pb-4">Listing Information</h2>
            
            <ul class="space-y-4">
                <li class="flex justify-between py-2 border-b border-ppblue-100/50">
                    <span class="text-gray-600">Stock Exchange</span>
                    <span class="font-bold text-gray-900">Indonesia Stock Exchange (IDX)</span>
                </li>
                <li class="flex justify-between py-2 border-b border-ppblue-100/50">
                    <span class="text-gray-600">Ticker Symbol</span>
                    <span class="font-bold text-gray-900">PPRE</span>
                </li>
                <li class="flex justify-between py-2 border-b border-ppblue-100/50">
                    <span class="text-gray-600">IPO Date</span>
                    <span class="font-bold text-gray-900">24 November 2017</span>
                </li>
                <li class="flex justify-between py-2 border-b border-ppblue-100/50">
                    <span class="text-gray-600">Shares Listed</span>
                    <span class="font-bold text-gray-900">10,224,374,200</span>
                </li>
                <li class="flex justify-between py-2">
                    <span class="text-gray-600">Sector</span>
                    <span class="font-bold text-gray-900">Infrastructure</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
