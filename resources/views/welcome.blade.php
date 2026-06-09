@extends('layouts.main')
@section('title', 'PT PP Presisi Tbk - Home')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-[calc(100vh-80px)] flex items-center">
        <!-- Background Image Carousel with Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden" id="hero-carousel">
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                <img src="{{ asset('images/home/0d4bd2f3bf24c544ea6072a817605379.png') }}" class="w-full h-full object-cover" alt="Construction 1">
            </div>
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                <img src="{{ asset('images/home/1a2036e6855da20155f60e4087f2837e.jpg') }}" class="w-full h-full object-cover" alt="Construction 2">
            </div>
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                <img src="{{ asset('images/home/5f3015bb6d7666c1aab0b1780b922241.JPG') }}" class="w-full h-full object-cover" alt="Construction 3">
            </div>
            <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                <img src="{{ asset('images/home/9cfd27b181587d6d7fc65571007e2a31.jpg') }}" class="w-full h-full object-cover" alt="Construction 4">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-ppblue-900/90 to-ppblue-900/50 z-10"></div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const items = document.querySelectorAll('.carousel-item');
                if (items.length > 0) {
                    let current = 0;
                    setInterval(() => {
                        items[current].classList.remove('opacity-100');
                        items[current].classList.add('opacity-0');
                        current = (current + 1) % items.length;
                        items[current].classList.remove('opacity-0');
                        items[current].classList.add('opacity-100');
                    }, 5000);
                }
            });
        </script>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20">
            <div class="max-w-3xl">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold tracking-wider mb-4 border border-blue-400/30 backdrop-blur-sm">LEADING CONSTRUCTION COMPANY</span>
                <h1 class="text-5xl md:text-7xl font-heading font-bold text-white leading-tight mb-6">
                    Building the Future with <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Precision</span> & Excellence.
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl leading-relaxed">
                    We deliver world-class integrated civil works, mining services, and heavy equipment management with a commitment to quality, safety, and innovation.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#business" class="px-8 py-4 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-lg hover:shadow-xl hover:-translate-y-1 transform duration-300">
                        Our Services
                    </a>
                    <a href="#projects" class="px-8 py-4 bg-white/10 text-white backdrop-blur-md border border-white/20 rounded-full font-semibold hover:bg-white/20 transition shadow-lg hover:-translate-y-1 transform duration-300">
                        View Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section Snippet -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-ppblue-100 to-white transform -translate-x-4 translate-y-4 rounded-3xl -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1000" alt="Corporate" class="rounded-3xl shadow-2xl object-cover h-[500px] w-full" />
                    <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-ppblue-100 rounded-full flex items-center justify-center text-ppblue-700 font-bold text-xl">15+</div>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Years of</p>
                                <p class="font-bold text-gray-900">Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-sm font-bold text-ppblue-700 tracking-widest uppercase mb-3">About PP Presisi</h2>
                    <h3 class="text-3xl md:text-5xl font-heading font-bold text-gray-900 mb-6 leading-tight">Empowering Infrastructure Development in Indonesia</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        PT PP Presisi Tbk is an integrated heavy equipment-based construction company. We are a subsidiary of PT PP (Persero) Tbk, focusing on civil work, mining services, and equipment management.
                    </p>
                    <a href="{{ url('about/profile') }}" class="inline-flex items-center text-ppblue-700 font-bold hover:text-ppblue-900 transition">
                        Discover more about us
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
