@extends('layouts.main')
@section('title', 'Civil Work - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2000" alt="Civil Work" class="w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-ppblue-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold tracking-wider mb-4 border border-blue-400/30">BUSINESS UNIT</span>
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Civil Work</h1>
        <p class="text-blue-100 text-lg max-w-2xl">Building the nation's critical infrastructure with integrated solutions, advanced technology, and heavy equipment expertise.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Shaping the Future Landscape</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                Our Civil Work division is the backbone of PT PP Presisi Tbk. We deliver end-to-end infrastructure development, specializing in large-scale earthmoving and structural projects.
            </p>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                With a massive fleet of heavy equipment and decades of engineering expertise, we are capable of executing complex projects under tight deadlines and challenging conditions.
            </p>
            
            <ul class="space-y-4">
                <li class="flex items-start bg-blue-50 p-4 rounded-xl">
                    <svg class="w-6 h-6 text-ppblue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="font-bold text-gray-900">Toll Roads & Bridges</h4>
                        <p class="text-sm text-gray-600">Extensive experience in national toll road networks.</p>
                    </div>
                </li>
                <li class="flex items-start bg-blue-50 p-4 rounded-xl">
                    <svg class="w-6 h-6 text-ppblue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="font-bold text-gray-900">Dams & Irrigation</h4>
                        <p class="text-sm text-gray-600">Water management infrastructure for sustainable development.</p>
                    </div>
                </li>
                <li class="flex items-start bg-blue-50 p-4 rounded-xl">
                    <svg class="w-6 h-6 text-ppblue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="font-bold text-gray-900">Airports & Seaports</h4>
                        <p class="text-sm text-gray-600">Transportation hubs driving economic connectivity.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-2 gap-4 h-full">
            <img src="https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=600" alt="Civil Construction" class="rounded-2xl h-64 object-cover w-full shadow-lg transform translate-y-8">
            <img src="https://images.unsplash.com/photo-1584982638848-bc6b7cc1e8cd?q=80&w=600" alt="Bridge Construction" class="rounded-2xl h-80 object-cover w-full shadow-lg">
        </div>
    </div>
</div>

<!-- CTA -->
<div class="bg-gray-100 py-16 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Have an infrastructure project in mind?</h2>
        <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white bg-ppblue-700 rounded-full hover:bg-ppblue-800 transition shadow-lg">
            Discuss with our Experts
        </a>
    </div>
</div>
@endsection
