@extends('layouts.main')
@section('title', 'PT PP Presisi Tbk - Home')

@section('content')

    <!-- BEGIN SECTION 01 / Hero -->
    <section id="home" class="relative min-h-[calc(100vh-80px)] flex items-center">
        <!-- Background Image Carousel with Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden" id="hero-carousel">
            @if($banners->count() > 0)
                @foreach($banners as $index => $banner)
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}">
                    <img src="{{ Storage::url($banner->image) }}" class="w-full h-full object-cover" alt="{{ $banner->title }}">
                </div>
                @endforeach
            @else
                <!-- Fallback if no banners -->
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
            @endif
            <div class="absolute inset-0 bg-gradient-to-r from-ppblue-900/90 to-ppblue-900/50 z-10"></div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const items = document.querySelectorAll('.carousel-item');
                if (items.length > 1) {
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
                <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-300 text-sm font-semibold tracking-wider mb-4 border border-blue-400/30 backdrop-blur-sm">PT PP PRESISI TBK</span>
                <h1 class="text-5xl md:text-7xl font-heading font-bold text-white leading-tight mb-6">
                    A Leading Integrated <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Heavy Equipment</span> Based Construction Company.
                </h1>
                <div class="mb-10 max-w-sm">
                    <h3 class="text-white font-semibold text-lg">Stock Information</h3>
                    <p class="text-gray-300 text-sm mb-4">PT. PP Presisi Tbk | {{ now()->format('F, d Y') }}</p>
                    
                    @if(isset($stockData) && $stockData)
                        <div class="bg-ppblue-700 rounded-lg p-6 flex justify-between items-center shadow-lg relative overflow-hidden">
                            <!-- Background Accent -->
                            <div class="absolute -right-10 -top-10 w-32 h-32 bg-white opacity-5 rounded-full"></div>
                            
                            <div class="relative z-10">
                                <div class="text-4xl font-bold text-white mb-1">{{ number_format($stockData['price'], 0, ',', '.') }}</div>
                                <div class="text-sm font-medium {{ $stockData['change'] >= 0 ? 'text-green-300' : 'text-red-300' }}">
                                    {{ $stockData['change'] > 0 ? '+' : '' }}{{ number_format($stockData['change'], 0, ',', '.') }} ({{ $stockData['changePercent'] > 0 ? '+' : '' }}{{ number_format($stockData['changePercent'], 2, ',', '.') }}%)
                                </div>
                            </div>
                            
                            <div class="relative z-10 w-12 h-12 rounded-full flex items-center justify-center shadow-inner {{ $stockData['change'] >= 0 ? 'bg-green-600' : 'bg-red-700' }}">
                                @if($stockData['change'] >= 0)
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path></svg>
                                @else
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="bg-ppblue-700 rounded-lg p-6 flex justify-between items-center shadow-lg">
                            <div>
                                <div class="text-4xl font-bold text-white mb-1">96</div>
                                <div class="text-sm font-medium text-red-300">-3 (-3.13%)</div>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-red-700 flex items-center justify-center shadow-inner">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    @endif
                    
                    <a href="{{ url('investor/stock') }}" class="inline-block mt-4 text-blue-400 hover:text-blue-300 transition font-medium text-sm">
                        See more detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 02 / About Us -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative grid grid-cols-2 gap-4">
                    <div class="absolute inset-0 bg-gradient-to-tr from-ppblue-100 to-white transform -translate-x-4 translate-y-4 rounded-3xl -z-10"></div>
                    <img src="{{ asset('images/home/0d4bd2f3bf24c544ea6072a817605379.png') }}" alt="Corporate 1" class="rounded-3xl shadow-lg object-cover h-[300px] w-full" />
                    <img src="{{ asset('images/home/1a2036e6855da20155f60e4087f2837e.jpg') }}" alt="Corporate 2" class="rounded-3xl shadow-lg object-cover h-[300px] w-full translate-y-8" />
                </div>
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-gray-900 mb-6 leading-tight">
                        <span class="text-ppblue-700">About</span> Us
                    </h2>
                    <div class="text-gray-600 mb-8 leading-relaxed space-y-4">
                        <p>PT PP Presisi Tbk is a subsidiary of the state-owned enterprise PT PP (Persero) Tbk, committed to becoming a leading mining and construction services company in Indonesia through high-quality and superior services. The optimization of the Company's operational performance is supported by an efficient asset management system.</p>
                        <p>PT PP Presisi Tbk implements ERP-SAP and is supported by BS EN ISO 9001:2015 – Quality Management System, BS EN ISO 14001:2015 – Environmental Management System, and ISO 45001:2018 – Occupational Health & Safety Management System as part of its efforts to enhance operational excellence.</p>
                        <p>PT PP Presisi Tbk is committed to continuous business transformation and innovation to strengthen its engineering capacity as part of its effort to increase stakeholders' value.</p>
                    </div>
                    <a href="{{ url('about/profile') }}" class="px-8 py-3 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-md inline-block mb-10">
                        SEE FULL PROFILE
                    </a>
                    
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-200">
                        <div class="text-center md:text-left">
                            <p class="text-4xl font-bold text-ppblue-700 mb-2">{{ $settings['years_established'] ?? '22' }}</p>
                            <span class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Years Established</span>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-4xl font-bold text-ppblue-700 mb-2">{{ $settings['business_lines'] ?? '8' }}</p>
                            <span class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Business Lines</span>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-4xl font-bold text-ppblue-700 mb-2">{{ $settings['projects_done'] ?? '100' }}</p>
                            <span class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Projects Done</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 03 / Investor Relations -->
    <section id="investor-relations" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-gray-900 mb-6 leading-tight">
                        <span class="text-ppblue-700">Investor</span> Relations
                    </h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        PP Presisi today is a leading mining and construction services company in Indonesia. PP Presisi is at the forefront of seeking opportunities in infrastructure development both in Indonesia and the region. Our engineering capacity is built on our strengths in technology, innovation, and services to deliver sustainable growth, high margins, and strong returns for investors. Our Investor Relations team is pleased to share operational updates, financial performance, and the latest developments.
                    </p>
                    <a href="{{ url('investor/report') }}" class="px-8 py-3 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-md inline-block mb-12">
                        SEE MORE
                    </a>
                    
                    <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm border border-gray-100">
                        <div class="w-16 h-16 bg-ppblue-50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-8 h-8 text-ppblue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Annual Report 2023</h4>
                            <a href="{{ url('investor/report') }}" class="text-ppblue-600 font-semibold hover:text-ppblue-800 transition flex items-center gap-2">
                                VIEW DETAIL 
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 relative group overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" alt="Financial Highlights">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white font-bold text-xl mb-2">Financial Highlights</span>
                            <a href="{{ url('investor/report') }}" class="inline-block px-4 py-2 border border-white/50 text-white rounded-lg text-sm hover:bg-white hover:text-gray-900 transition backdrop-blur-sm w-max">VIEW DETAIL</a>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1000" class="w-full h-48 object-cover transition duration-500 group-hover:scale-110" alt="Buletin">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white font-bold text-lg mb-2">Buletin</span>
                            <a href="{{ url('investor/presentation') }}" class="inline-block px-4 py-2 border border-white/50 text-white rounded-lg text-sm hover:bg-white hover:text-gray-900 transition backdrop-blur-sm w-max">VIEW DETAIL</a>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1000" class="w-full h-48 object-cover transition duration-500 group-hover:scale-110" alt="Presentation">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white font-bold text-lg mb-2">Presentation</span>
                            <a href="{{ url('investor/presentation') }}" class="inline-block px-4 py-2 border border-white/50 text-white rounded-lg text-sm hover:bg-white hover:text-gray-900 transition backdrop-blur-sm w-max">VIEW DETAIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 04 / Business Unit -->
    <section id="business-unit" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                        <span class="text-ppblue-700">Business</span> Unit
                    </h2>
                </div>
                <a href="{{ url('business/civil-work') }}" class="px-8 py-3 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-md mt-6 md:mt-0">
                    SEE MORE
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($services as $service)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg h-96">
                    <img src="{{ $service->image ? Storage::url($service->image) : asset('images/home/4d1d41f894f9b24cc405754c77bbd4c3.jpg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="{{ $service->title }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-90"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-center items-center">
                        @if($service->icon)
                            <div class="mb-4 text-white text-4xl">
                                {!! clean($service->icon) !!}
                            </div>
                        @endif
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase tracking-wider">{{ $service->title }}</h3>
                        <a href="{{ url('business/'.Str::slug($service->title)) }}" class="px-6 py-2 border border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition font-semibold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 duration-300">
                            VIEW DETAIL
                        </a>
                    </div>
                </div>
                @empty
                <!-- Fallback Data -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg h-96">
                    <img src="{{ asset('images/home/4d1d41f894f9b24cc405754c77bbd4c3.jpg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="CIVIL WORK">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-90"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-center items-center">
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase tracking-wider">CIVIL WORK</h3>
                        <a href="{{ url('business/civil-work') }}" class="px-6 py-2 border border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition font-semibold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 duration-300">VIEW DETAIL</a>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl shadow-lg h-96">
                    <img src="{{ asset('images/home/5f3015bb6d7666c1aab0b1780b922241.JPG') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="MINING SERVICES">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-90"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-center items-center">
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase tracking-wider">MINING SERVICES</h3>
                        <a href="{{ url('business/mining-services') }}" class="px-6 py-2 border border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition font-semibold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 duration-300">VIEW DETAIL</a>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-2xl shadow-lg h-96">
                    <img src="{{ asset('images/home/9cfd27b181587d6d7fc65571007e2a31.jpg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="HEAVY EQUIPMENT">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-90"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-center items-center">
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase tracking-wider">HEAVY EQUIPMENT</h3>
                        <a href="{{ url('business/heavy-equipment') }}" class="px-6 py-2 border border-white text-white rounded-full hover:bg-white hover:text-gray-900 transition font-semibold opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 duration-300">VIEW DETAIL</a>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 05 / Project Gallery -->
    <section id="project-gallery" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                        <span class="text-ppblue-700">Project</span> Gallery
                    </h2>
                </div>
                <a href="{{ url('projects') }}" class="px-8 py-3 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-md mt-6 md:mt-0">
                    SEE MORE GALLERY
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @forelse($projects as $project)
                <div class="group relative overflow-hidden rounded-xl h-64 {{ $loop->first ? 'md:col-span-2 md:row-span-2 md:h-full' : '' }}">
                    <img src="{{ $project->image ? Storage::url($project->image) : 'https://images.unsplash.com/photo-1541888088325-1bb711e74136?q=80&w=1000' }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="{{ $project->title }}">
                    <div class="absolute inset-0 bg-gray-900/60 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-center items-center p-6 text-center">
                        <h3 class="text-white font-bold text-lg mb-4">{{ $project->title }}</h3>
                        <a href="{{ url('projects') }}" class="px-4 py-2 border border-white text-white rounded hover:bg-white hover:text-gray-900 transition text-sm">MORE IMAGE</a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500 py-10">No projects to display yet.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 06 / News & Event -->
    <section id="news-event" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-gray-900 leading-tight">
                    <span class="text-ppblue-700">News</span> & Event
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($news as $article)
                <div class="group flex flex-col bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $article->image ? Storage::url($article->image) : 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?q=80&w=1000' }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" alt="{{ $article->title }}">
                        <div class="absolute inset-0 bg-gray-900/20 group-hover:bg-transparent transition duration-300"></div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-sm text-gray-500 mb-3 font-medium flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ \Carbon\Carbon::parse($article->published_date)->format('Y-m-d') }} | By Administrator
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 line-clamp-3 group-hover:text-ppblue-600 transition">{{ $article->title }}</h3>
                        <div class="mt-auto">
                            <a href="{{ url('news/'.$article->slug) }}" class="inline-flex items-center text-ppblue-600 font-semibold hover:text-ppblue-800 transition">
                                READ MORE
                                <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500 py-10">No news to display yet.</div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ url('news') }}" class="px-8 py-3 bg-ppblue-500 text-white rounded-full font-semibold hover:bg-ppblue-700 transition shadow-md inline-block">
                    SEE MORE NEWS
                </a>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 07 / Get In Touch With Us -->
    <section id="contact-form" class="py-24 bg-ppblue-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" id="patternId" width="100%" height="100%"><defs><pattern id="a" patternUnits="userSpaceOnUse" width="60" height="60" patternTransform="scale(3)"><path d="M60 0L0 60M0 0l60 60" fill="none" stroke="currentColor" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" transform="translate(0,0)" fill="url(#a)"/></svg>
        </div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white leading-tight">
                    Get In Touch With Us
                </h2>
                <p class="text-gray-300 mt-4 max-w-2xl mx-auto">Have a question or want to work together? Leave your details and we will get back to you as soon as possible.</p>
            </div>
            
            @if(session('success'))
            <div class="bg-green-500/20 border border-green-400 text-green-100 p-4 rounded-xl mb-8 text-center backdrop-blur-sm shadow-md font-semibold text-lg">
                {{ session('success') }}
            </div>
            @endif
            
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl">
                <form action="{{ url('contact') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select name="subject" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50">
                                <option value="General">General</option>
                                <option value="Business">Business</option>
                                <option value="Investor Relation">Investor Relation</option>
                                <option value="Corporate Secretary">Corporate Secretary</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                            <input type="text" name="company" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50" placeholder="Your Company">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50" placeholder="Your Name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50" placeholder="Your Email">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="text" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50" placeholder="Your Phone Number">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-ppblue-500 focus:border-ppblue-500 outline-none transition bg-gray-50 resize-none" placeholder="Your Message"></textarea>
                    </div>
                    
                    <div class="text-center pt-4">
                        <button type="submit" class="px-10 py-4 bg-ppblue-500 text-white rounded-full font-bold hover:bg-ppblue-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1 duration-300 w-full md:w-auto">
                            SEND MESSAGE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
