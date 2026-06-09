@extends('layouts.main')
@section('title', 'Awards - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Awards & Recognitions</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">A testament to our unwavering commitment to quality, safety, and corporate excellence.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Dummy Award 1 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center group">
            <div class="w-16 h-16 mx-auto bg-amber-50 rounded-full flex items-center justify-center text-amber-500 mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Best Construction Contractor</h3>
            <p class="text-sm text-gray-500 mb-4">Indonesia Construction Award 2025</p>
            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">2025</span>
        </div>

        <!-- Dummy Award 2 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center group">
            <div class="w-16 h-16 mx-auto bg-amber-50 rounded-full flex items-center justify-center text-amber-500 mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Zero Accident Award</h3>
            <p class="text-sm text-gray-500 mb-4">Ministry of Manpower</p>
            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">2024</span>
        </div>
        
        <!-- Dummy Award 3 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center group">
            <div class="w-16 h-16 mx-auto bg-amber-50 rounded-full flex items-center justify-center text-amber-500 mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Fastest Growing Subsidiary</h3>
            <p class="text-sm text-gray-500 mb-4">PP Group Annual Awards</p>
            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">2023</span>
        </div>

        <!-- Dummy Award 4 -->
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center group">
            <div class="w-16 h-16 mx-auto bg-amber-50 rounded-full flex items-center justify-center text-amber-500 mb-6 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Good Corporate Governance</h3>
            <p class="text-sm text-gray-500 mb-4">IICD Corporate Governance Award</p>
            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded-full">2023</span>
        </div>
    </div>
</div>
@endsection
