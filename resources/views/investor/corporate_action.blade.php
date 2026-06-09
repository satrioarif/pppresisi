@extends('layouts.main')
@section('title', 'Corporate Action - Investor Relations')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Corporate Action</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Milestones and strategic corporate actions of PT PP Presisi Tbk.</p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="relative border-l-4 border-ppblue-200 ml-4 md:ml-0">
        <!-- Event 1 -->
        <div class="mb-10 ml-8 relative">
            <span class="absolute -left-[42px] top-1 w-6 h-6 bg-ppblue-600 rounded-full border-4 border-white shadow"></span>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <span class="text-ppblue-600 font-bold text-sm mb-1 block">November 2017</span>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Initial Public Offering (IPO)</h3>
                <p class="text-gray-600">PT PP Presisi Tbk officially listed its shares on the Indonesia Stock Exchange (IDX) under the ticker code PPRE, marking a significant milestone in the company's history to support continuous growth and expansion.</p>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="mb-10 ml-8 relative">
            <span class="absolute -left-[42px] top-1 w-6 h-6 bg-amber-500 rounded-full border-4 border-white shadow"></span>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <span class="text-amber-500 font-bold text-sm mb-1 block">June 2018</span>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dividend Distribution</h3>
                <p class="text-gray-600">The company distributed its first cash dividend to shareholders as a commitment to maximizing shareholder value following a successful first year as a public company.</p>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="ml-8 relative">
            <span class="absolute -left-[42px] top-1 w-6 h-6 bg-gray-300 rounded-full border-4 border-white shadow"></span>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                <span class="text-gray-500 font-bold text-sm mb-1 block">Ongoing</span>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Strategic Expansion</h3>
                <p class="text-gray-600">Continuous expansion of heavy equipment fleet and diversification into the mining services sector to secure sustainable long-term revenue streams.</p>
            </div>
        </div>
    </div>
</div>
@endsection
