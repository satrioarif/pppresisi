@extends('layouts.main')
@section('title', 'Company Profile - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-ppblue-900 to-ppblue-700 opacity-90 z-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Company Profile</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Discover the foundation, vision, and mission that drive PT PP Presisi Tbk to be the leading integrated construction company.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- About Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-20 items-center">
        <div>
            <h2 class="text-3xl font-heading font-bold text-ppblue-900 mb-6">Building Synergy, Creating Value</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                PT PP Presisi Tbk is a leading heavy equipment-based integrated construction company in Indonesia. As a proud subsidiary of PT PP (Persero) Tbk, we have inherited a legacy of excellence and a strong foundation in the construction industry.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                We specialize in civil works, mining services, and ready-mix production. By leveraging state-of-the-art heavy equipment and a team of dedicated professionals, we consistently deliver projects that exceed expectations while adhering to the highest standards of safety and sustainability.
            </p>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 bg-ppblue-900/10 mix-blend-multiply"></div>
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800" alt="PP Presisi Building" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-blue-50 rounded-3xl p-10 border border-blue-100 relative overflow-hidden group hover:shadow-xl transition-all duration-300">
            <div class="absolute -right-10 -top-10 text-blue-200 opacity-50 transform group-hover:scale-110 transition-transform duration-500">
                <svg class="w-48 h-48" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
            <div class="relative z-10">
                <div class="w-14 h-14 bg-ppblue-600 rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-heading font-bold text-ppblue-900 mb-4">Our Vision</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    To be the most reliable and sustainable heavy equipment-based integrated construction company in South East Asia.
                </p>
            </div>
        </div>

        <div class="bg-amber-50 rounded-3xl p-10 border border-amber-100 relative overflow-hidden group hover:shadow-xl transition-all duration-300">
            <div class="absolute -right-10 -top-10 text-amber-200 opacity-50 transform group-hover:scale-110 transition-transform duration-500">
                <svg class="w-48 h-48" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div class="relative z-10">
                <div class="w-14 h-14 bg-amber-500 rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-heading font-bold text-gray-900 mb-4">Our Mission</h3>
                <ul class="space-y-3 text-gray-600 text-lg">
                    <li class="flex items-start">
                        <span class="text-amber-500 mr-2 mt-1">●</span>
                        Providing excellent construction and mining services.
                    </li>
                    <li class="flex items-start">
                        <span class="text-amber-500 mr-2 mt-1">●</span>
                        Maximizing shareholder value and stakeholder satisfaction.
                    </li>
                    <li class="flex items-start">
                        <span class="text-amber-500 mr-2 mt-1">●</span>
                        Fostering a culture of safety, health, and environmental sustainability.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
