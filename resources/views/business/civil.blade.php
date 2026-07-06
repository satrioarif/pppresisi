@extends('layouts.main')
@section('title', 'Civil Work - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/3c740a51dc54fcabeb35c5c3aeadeafb.jpg') }}" alt="Civil Work" class="w-full h-full object-cover mix-blend-overlay opacity-30">
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
    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('business/civil-work') }}" class="pb-3 transition text-ppblue-700 border-b-4 border-ppblue-700 font-bold">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="pb-3 transition text-gray-400 hover:text-gray-900 font-medium">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
        <div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">What is Civil Work</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                PP Presisi started its civil works since 2016 as part of its business transformation. This line of business is not new for the Company and its Subsidiary, PT Lancarjaya Mandiri Abadi (“LMA”) which has been in the civil works industry since 2004.
            </p>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                PP Presisi has been trusted to work on civil works projects which are part of the national strategic infrastructure projects which include toll road projects, dams, airports, ports and so on. - Kualanamu-Tebing Tinggi Toll Road, Bakauheni-Sidomulyo Toll Road, Pandaan-Malang Toll Road, Manado-Bitung Toll Road; dams: Way Sekampung, Leuwi Keris; airports: taxi way terminal 3 Soekarno-Hatta Airport, runway 3 Soekarno-Hatta airport, Kulon Progo; port: Paimbang; etc.
            </p>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                The scope of civil works includes earthworks, cut and fill, soil structure improvement, road pavement, concrete, rigid/flexible pavement and so on.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4 h-full">
            <img src="{{ asset('images/home/02c21a99eaca94dfdb474c9a975ea833.jpg') }}" alt="Civil Construction" class="rounded-2xl h-64 object-cover w-full shadow-lg transform translate-y-8">
            <img src="{{ asset('images/home/0a03e6e2c13e7c5a8ea8ddcb62de7faf.jpg') }}" alt="Bridge Construction" class="rounded-2xl h-80 object-cover w-full shadow-lg">
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
