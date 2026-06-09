@extends('layouts.main')
@section('title', 'GCG Guidelines - Governance')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Good Corporate Governance</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Code of Conduct and Corporate Policies ensuring transparency, accountability, and fairness.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Commitment to Integrity</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">
                PT PP Presisi Tbk is fully committed to implementing Good Corporate Governance (GCG) principles across all business processes. We believe that robust corporate governance is essential to protecting stakeholder interests and ensuring long-term sustainability.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Our GCG framework is built upon the principles of Transparency, Accountability, Responsibility, Independency, and Fairness (TARIF).
            </p>
        </div>
        <div class="bg-blue-50 p-8 rounded-3xl border border-blue-100">
            <h3 class="font-bold text-xl text-ppblue-900 mb-4">Core GCG Principles (TARIF)</h3>
            <ul class="space-y-4">
                <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-ppblue-600 text-white flex items-center justify-center font-bold mr-3 text-sm">T</span><span class="font-medium text-gray-800">Transparency</span></li>
                <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-ppblue-600 text-white flex items-center justify-center font-bold mr-3 text-sm">A</span><span class="font-medium text-gray-800">Accountability</span></li>
                <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-ppblue-600 text-white flex items-center justify-center font-bold mr-3 text-sm">R</span><span class="font-medium text-gray-800">Responsibility</span></li>
                <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-ppblue-600 text-white flex items-center justify-center font-bold mr-3 text-sm">I</span><span class="font-medium text-gray-800">Independency</span></li>
                <li class="flex items-center"><span class="w-8 h-8 rounded-full bg-ppblue-600 text-white flex items-center justify-center font-bold mr-3 text-sm">F</span><span class="font-medium text-gray-800">Fairness</span></li>
            </ul>
        </div>
    </div>

    <h2 class="text-2xl font-bold text-gray-900 mb-8 border-b border-gray-200 pb-4">Corporate Guidelines & Policies</h2>
    @if(isset($documents) && $documents->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($documents as $doc)
                <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="w-10 h-10 bg-gray-50 text-gray-500 rounded-lg flex items-center justify-center mb-4 border border-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">{{ $doc->title }}</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $doc->description }}</p>
                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="text-ppblue-600 text-sm font-semibold hover:text-ppblue-800 transition">View Document &rarr;</a>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12 bg-gray-50 rounded-2xl border border-gray-200 border-dashed">
            <p class="text-gray-500">GCG documents and policies will be uploaded here.</p>
        </div>
    @endif
</div>
@endsection
