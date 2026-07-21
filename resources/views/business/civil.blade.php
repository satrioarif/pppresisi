@extends('layouts.main')
@section('title', 'Civil Work - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/3c740a51dc54fcabeb35c5c3aeadeafb.jpg') }}" alt="Civil Work" class="w-full h-full object-cover mix-blend-overlay opacity-30" width="1920" height="1080" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <span class="inline-block py-2 px-4 rounded-full bg-accent/20 text-accent text-xs font-bold tracking-widest uppercase mb-4 border border-accent/30">BUSINESS UNIT</span>
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-4">Civil Work</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">Building the nation's critical infrastructure with integrated solutions, advanced technology, and heavy equipment expertise.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('business/civil-work') }}" class="px-6 py-3 rounded-full transition-all duration-300 bg-ppblue-900 text-white font-bold shadow-md">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
        <div class="reveal fade-left">
            <div class="w-16 h-1 bg-accent mb-6 rounded-full"></div>
            <h2 class="text-4xl font-heading font-black text-gray-900 mb-8">What is Civil Work</h2>
            <div class="prose max-w-none text-gray-600 text-lg leading-relaxed space-y-6">
                <p>
                    PP Presisi started its civil works since 2016 as part of its business transformation. This line of business is not new for the Company and its Subsidiary, PT Lancarjaya Mandiri Abadi (“LMA”) which has been in the civil works industry since 2004.
                </p>
                <p>
                    PP Presisi has been trusted to work on civil works projects which are part of the national strategic infrastructure projects which include toll road projects, dams, airports, ports and so on. - Kualanamu-Tebing Tinggi Toll Road, Bakauheni-Sidomulyo Toll Road, Pandaan-Malang Toll Road, Manado-Bitung Toll Road; dams: Way Sekampung, Leuwi Keris; airports: taxi way terminal 3 Soekarno-Hatta Airport, runway 3 Soekarno-Hatta airport, Kulon Progo; port: Patimban; etc.
                </p>
                <p>
                    The scope of civil works includes earthworks, cut and fill, soil structure improvement, road pavement, concrete, rigid/flexible pavement and so on.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6 h-full reveal fade-right">
            <div class="rounded-[2rem] h-64 overflow-hidden shadow-2xl shadow-gray-200/50 transform translate-y-12 group border border-gray-100">
                <img src="{{ asset('images/home/02c21a99eaca94dfdb474c9a975ea833.jpg') }}" alt="Civil Construction" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="556" height="234" loading="lazy">
            </div>
            <div class="rounded-[2.5rem] h-80 overflow-hidden shadow-2xl shadow-gray-200/50 group border border-gray-100">
                <img src="{{ asset('images/home/0a03e6e2c13e7c5a8ea8ddcb62de7faf.jpg') }}" alt="Bridge Construction" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="569" height="320" loading="lazy">
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="bg-ppblue-900 py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal fade-bottom">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6">Have an infrastructure project in mind?</h2>
        <p class="text-gray-400 mb-10 text-lg">Let's collaborate to build reliable and sustainable civil infrastructure.</p>
        <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-gray-900 bg-accent rounded-full hover:bg-yellow-400 transition-colors shadow-lg shadow-accent/20 uppercase tracking-widest group">
            Discuss with our Experts
            <svg class="w-5 h-5 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
</div>
<style>
    .reveal {
        opacity: 0;
        transition: all 1s ease-out;
    }
    .reveal.active {
        opacity: 1;
        transform: translate(0, 0) scale(1);
    }
    .fade-bottom { transform: translateY(40px); }
    .fade-left { transform: translateX(-40px); }
    .fade-right { transform: translateX(40px); }
    .fade-up { transform: translateY(60px); }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const reveals = document.querySelectorAll('.reveal');
        const revealOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };
        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, revealOptions);
        reveals.forEach(reveal => {
            revealOnScroll.observe(reveal);
        });
    });
</script>
@endsection
