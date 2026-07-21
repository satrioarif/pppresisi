@extends('layouts.main')
@section('title', 'Heavy Equipment - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/home/1cd1ba9cfcc8b96a239cff7badabbcd6.JPG') }}" alt="Heavy Equipment" class="w-full h-full object-cover mix-blend-overlay opacity-30" width="1920" height="1080" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <span class="inline-block py-2 px-4 rounded-full bg-accent/20 text-accent text-xs font-bold tracking-widest uppercase mb-4 border border-accent/30">BUSINESS UNIT</span>
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-4">Equipment Rental</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">The foundation of our operational strength, featuring a massive fleet of modern heavy machinery and production plants.</p>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('business/civil-work') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="px-6 py-3 rounded-full transition-all duration-300 bg-ppblue-900 text-white font-bold shadow-md">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
        <!-- Image Side -->
        <div class="grid grid-cols-2 gap-6 reveal fade-left">
            <div class="space-y-6">
                <div class="rounded-[2rem] h-48 overflow-hidden shadow-2xl shadow-gray-200/50 group border border-gray-100">
                    <img src="{{ asset('images/home/14b7a3cd33b167f0f0b80fd34ea3a5f7 - Copy.jpg') }}" alt="Excavator" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="915" height="561" loading="lazy">
                </div>
                <div class="rounded-[2rem] h-64 overflow-hidden shadow-2xl shadow-gray-200/50 group border border-gray-100">
                    <img src="{{ asset('images/home/0a03e6e2c13e7c5a8ea8ddcb62de7faf.jpg') }}" alt="Dump Truck" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="569" height="320" loading="lazy">
                </div>
            </div>
            <div class="space-y-6 pt-16">
                <div class="rounded-[2.5rem] h-72 overflow-hidden shadow-2xl shadow-gray-200/50 group border border-gray-100 transform translate-y-8">
                    <img src="{{ asset('images/home/0b6f1467c8dbe20af76f04f024366fb7.jpg') }}" alt="Ready Mix" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="400" height="267" loading="lazy">
                </div>
            </div>
        </div>
        
        <!-- Text Side -->
        <div class="reveal fade-right">
            <div class="w-16 h-1 bg-accent mb-6 rounded-full"></div>
            <h2 class="text-4xl font-heading font-black text-gray-900 mb-8">What is Equipment Rental</h2>
            <div class="prose max-w-none text-gray-600 text-lg leading-relaxed space-y-6">
                <p>
                    Equipment rental is the Company's business line before pursuing business transformation. Heavy equipment for rent includes tower cranes, passenger hoists, Crawler cranes, generator sets and formwork scaffolding, including the operators of heavy equipment.
                </p>
                <p>
                    The Company provides complete services by ensuring the availability of reliable and prime tools, futures maintenance, and the Quick Response Unit which is always ready to be contacted for 24 hours for construction project safety and security.
                </p>
            </div>
        </div>
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
