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
                    <img src="{{ Storage::url($banner->image) }}" class="w-full h-full object-cover" alt="{{ $banner->title }}" width="1707" height="764" {{ $index === 0 ? 'loading="eager" fetchpriority="high"' : 'loading="lazy"' }}>
                </div>
                @endforeach
            @else
                <!-- Fallback if no banners -->
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                    <img src="{{ asset('images/home/0d4bd2f3bf24c544ea6072a817605379.png') }}" class="w-full h-full object-cover" alt="Construction 1" width="1707" height="764" loading="eager" fetchpriority="high">
                </div>
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('images/home/1a2036e6855da20155f60e4087f2837e.jpg') }}" class="w-full h-full object-cover" alt="Construction 2" width="1707" height="764" loading="lazy">
                </div>
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('images/home/5f3015bb6d7666c1aab0b1780b922241.JPG') }}" class="w-full h-full object-cover" alt="Construction 3" width="1707" height="764" loading="lazy">
                </div>
                <div class="carousel-item absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('images/home/9cfd27b181587d6d7fc65571007e2a31.jpg') }}" class="w-full h-full object-cover" alt="Construction 4" width="1707" height="764" loading="lazy">
                </div>
            @endif
            <div class="absolute inset-0 bg-gray-900/80 z-10"></div>
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

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-16 pb-32 overflow-hidden">
            <div class="max-w-5xl reveal fade-bottom">
                <span class="inline-block py-2 px-6 bg-accent/20 text-accent text-sm font-bold tracking-wider mb-6 rounded-full backdrop-blur-sm border border-accent/30 shadow-lg">PT PP PRESISI TBK</span>
                <h1 class="text-4xl md:text-5xl lg:text-[4.5rem] font-heading font-black text-white leading-[1.1] tracking-tight mb-6">
                    A Leading Integrated <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-400">Heavy Equipment</span> Based Construction Company.
                </h1>
                <div class="mb-8 max-w-sm reveal fade-bottom" style="transition-delay: 200ms;">
                    <h3 class="text-white font-bold text-xl tracking-wide mb-2">Stock Information</h3>
                    <p class="text-gray-300 text-sm font-medium tracking-wide mb-6">PT. PP Presisi Tbk | {{ now()->format('F, d Y') }}</p>
                    
                    @if(isset($stockData) && $stockData)
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-6 flex justify-between items-center relative overflow-hidden shadow-2xl">
                            <!-- Background Accent -->
                            <div class="absolute -right-10 -top-10 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
                            
                            <div class="relative z-10">
                                <div class="text-5xl font-black text-white mb-1">{{ number_format($stockData['price'], 0, ',', '.') }}</div>
                                <div class="text-sm font-bold {{ $stockData['change'] >= 0 ? 'text-green-400' : 'text-red-400' }}">
                                    {{ $stockData['change'] > 0 ? '+' : '' }}{{ number_format($stockData['change'], 0, ',', '.') }} ({{ $stockData['changePercent'] > 0 ? '+' : '' }}{{ number_format($stockData['changePercent'], 2, ',', '.') }}%)
                                </div>
                            </div>
                            
                            <div class="relative z-10 w-14 h-14 rounded-2xl flex items-center justify-center shadow-inner {{ $stockData['change'] >= 0 ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
                                @if($stockData['change'] >= 0)
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path></svg>
                                @else
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-6 flex justify-between items-center shadow-2xl">
                            <div>
                                <div class="text-5xl font-black text-white mb-1">96</div>
                                <div class="text-sm font-bold text-red-400">-3 (-3.13%)</div>
                            </div>
                            <div class="w-14 h-14 rounded-2xl bg-red-500/20 text-red-400 flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    @endif
                    
                    <a href="{{ url('investor/stock') }}" class="inline-block mt-4 text-ppblue-300 hover:text-white transition font-medium text-sm">
                        See more detail &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 02 / About Us -->
    <section id="about" class="py-32 bg-gray-50 relative overflow-hidden">
        <!-- Abstract shape -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-ppblue-100 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 opacity-60"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative reveal fade-left">
                    <div class="absolute inset-0 bg-gradient-to-br from-ppblue-200 to-transparent rounded-[3rem] transform -translate-x-6 translate-y-6"></div>
                    <div class="grid grid-cols-2 gap-6 relative z-10">
                        <img src="{{ asset('images/home/0d4bd2f3bf24c544ea6072a817605379.png') }}" alt="Corporate 1" class="object-cover h-[350px] w-full rounded-3xl shadow-2xl hover:-translate-y-2 transition duration-500" width="748" height="464" loading="lazy" />
                        <img src="{{ asset('images/home/1a2036e6855da20155f60e4087f2837e.jpg') }}" alt="Corporate 2" class="object-cover h-[350px] w-full translate-y-12 rounded-3xl shadow-2xl hover:-translate-y-2 transition duration-500" width="569" height="320" loading="lazy" />
                    </div>
                </div>
                <div class="reveal fade-right">
                    <h2 class="text-5xl md:text-6xl font-heading font-black text-gray-900 mb-6 leading-tight tracking-tight">
                        About <span class="text-ppblue-600">Us</span>
                    </h2>
                    <div class="text-gray-600 text-lg mb-10 leading-relaxed space-y-6">
                        <p>PT PP Presisi Tbk is a subsidiary of the state-owned enterprise PT PP (Persero) Tbk, committed to becoming a leading mining and construction services company in Indonesia through high-quality and superior services. The optimization of the Company's operational performance is supported by an efficient asset management system.</p>
                        <p>PT PP Presisi Tbk implements ERP-SAP and is supported by BS EN ISO 9001:2015 – Quality Management System, BS EN ISO 14001:2015 – Environmental Management System, and ISO 45001:2018 – Occupational Health & Safety Management System as part of its efforts to enhance operational excellence.</p>
                        <p>PT PP Presisi Tbk is committed to continuous business transformation and innovation to strengthen its engineering capacity as part of its effort to increase stakeholders' value.</p>
                    </div>
                    <a href="{{ url('about/profile') }}" class="px-8 py-4 bg-ppblue-600 text-white font-semibold rounded-full shadow-lg shadow-ppblue-600/30 hover:bg-ppblue-700 hover:shadow-ppblue-700/40 hover:-translate-y-1 transition duration-300 inline-block mb-12">
                        See Full Profile
                    </a>
                    
                    <div class="grid grid-cols-3 gap-8 pt-10 border-t border-gray-200">
                        <x-stat-block :value="$settings['years_established'] ?? '22'" label="Years Established" />
                        <x-stat-block :value="$settings['business_lines'] ?? '8'" label="Business Lines" />
                        <x-stat-block :value="$settings['projects_done'] ?? '100'" label="Projects Done" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 03 / Investor Relations -->
    <section id="investor-relations" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="reveal fade-right">
                    <h2 class="text-5xl md:text-6xl font-heading font-black text-gray-900 mb-8 leading-tight tracking-tight">
                        Investor <span class="text-accent">Relations</span>
                    </h2>
                    <p class="text-gray-600 font-medium text-lg mb-10 leading-relaxed">
                        PP Presisi today is a leading mining and construction services company in Indonesia. PP Presisi is at the forefront of seeking opportunities in infrastructure development both in Indonesia and the region. Our engineering capacity is built on our strengths in technology, innovation, and services to deliver sustainable growth, high margins, and strong returns for investors. Our Investor Relations team is pleased to share operational updates, financial performance, and the latest developments.
                    </p>
                    <a href="{{ url('investor/report') }}" class="px-8 py-4 bg-gold text-white font-semibold rounded-full shadow-lg shadow-gold/30 hover:bg-yellow-600 hover:shadow-gold/40 hover:-translate-y-1 transition duration-300 inline-block mb-12">
                        See More Reports
                    </a>
                    
                    <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 hover:border-accent hover:shadow-accent/20 transition duration-300 group">
                        <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-ppblue-900 group-hover:rotate-6 transition duration-300">
                            <svg class="w-8 h-8 text-gray-900 group-hover:text-white transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900 mb-2">Annual Report 2023</h4>
                            <a href="{{ url('investor/report') }}" class="text-accent font-semibold hover:text-gray-900 transition flex items-center gap-2 tracking-wide">
                                View Detail 
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6 reveal fade-left">
                    <div class="col-span-2 relative group overflow-hidden rounded-[2rem] shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000" class="w-full h-72 object-cover transition duration-700 group-hover:scale-105" alt="Financial Highlights" width="1216" height="288" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent flex flex-col justify-end p-8 pointer-events-none">
                            <span class="text-white font-black text-3xl mb-4">Financial Highlights</span>
                            <a href="{{ url('investor/report') }}" class="inline-block px-6 py-3 bg-white/20 backdrop-blur-md text-white font-semibold rounded-full border border-white/30 hover:bg-white hover:text-gray-900 transition duration-300 w-max pointer-events-auto shadow-lg">View Detail</a>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-[2rem] shadow-xl">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1000" class="w-full h-56 object-cover transition duration-700 group-hover:scale-105" alt="Buletin" width="596" height="224" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent flex flex-col justify-end p-6 pointer-events-none">
                            <span class="text-white font-black text-xl mb-4">Buletin</span>
                            <a href="{{ url('investor/presentation') }}" class="inline-block px-5 py-2 bg-white/20 backdrop-blur-md text-white border border-white/30 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition duration-300 w-max pointer-events-auto text-sm shadow-lg">View Detail</a>
                        </div>
                    </div>
                    <div class="relative group overflow-hidden rounded-[2rem] shadow-xl">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1000" class="w-full h-56 object-cover transition duration-700 group-hover:scale-105" alt="Presentation" width="596" height="224" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent flex flex-col justify-end p-6 pointer-events-none">
                            <span class="text-white font-black text-xl mb-4">Presentation</span>
                            <a href="{{ url('investor/presentation') }}" class="inline-block px-5 py-2 bg-white/20 backdrop-blur-md text-white border border-white/30 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition duration-300 w-max pointer-events-auto text-sm shadow-lg">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 04 / Business Unit -->
    <section id="business-unit" class="py-32 bg-gray-900 relative overflow-hidden">
        <!-- Abstract Blur Background -->
        <div class="absolute top-1/4 left-0 w-96 h-96 bg-accent/20 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-ppblue-500/20 rounded-full blur-[120px]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-section-header dark ctaText="Explore All Units" :ctaHref="url('business/civil-work')" class="reveal fade-bottom">
                Business <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-yellow-500">Unit</span>
            </x-section-header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($services as $index => $service)
                    <x-service-card
                        :image="$service->image ? Storage::url($service->image) : asset('images/home/4d1d41f894f9b24cc405754c77bbd4c3.jpg')"
                        :title="$service->title"
                        :href="url('business/'.Str::slug($service->title))"
                        :icon="$service->icon ? clean($service->icon) : null"
                        class="reveal fade-bottom"
                        style="transition-delay: {{ $index * 150 }}ms;"
                    />
                @empty
                    <!-- Fallback Data -->
                    <x-service-card image="{{ asset('images/home/4d1d41f894f9b24cc405754c77bbd4c3.jpg') }}" title="Civil Work" :href="url('business/civil-work')" class="reveal fade-bottom" />
                    <x-service-card image="{{ asset('images/home/5f3015bb6d7666c1aab0b1780b922241.JPG') }}" title="Mining Services" :href="url('business/mining-services')" class="reveal fade-bottom" style="transition-delay: 150ms;" />
                    <x-service-card image="{{ asset('images/home/9cfd27b181587d6d7fc65571007e2a31.jpg') }}" title="Heavy Equipment" :href="url('business/heavy-equipment')" class="reveal fade-bottom" style="transition-delay: 300ms;" />
                @endforelse
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 05 / Project Gallery -->
    <section id="project-gallery" class="py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header ctaText="See More Gallery" :ctaHref="url('projects')" class="reveal fade-bottom">
                Project <span class="text-accent">Gallery</span>
            </x-section-header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($projects as $index => $project)
                <div class="group relative overflow-hidden rounded-3xl shadow-xl h-72 {{ $loop->first ? 'md:col-span-2 md:row-span-2 md:h-[37.5rem]' : '' }} reveal fade-bottom" style="transition-delay: {{ $index * 150 }}ms;">
                    <img src="{{ $project->image ? Storage::url($project->image) : 'https://images.unsplash.com/photo-1541888088325-1bb711e74136?q=80&w=1000' }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110" alt="{{ $project->title }}" width="286" height="288" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-80 group-hover:opacity-90 transition duration-300 pointer-events-none"></div>
                    <div class="absolute inset-0 flex flex-col justify-end items-start p-8 pointer-events-none">
                        <h3 class="text-white font-bold text-2xl mb-4 leading-tight group-hover:-translate-y-2 transition duration-500 drop-shadow-md">{{ $project->title }}</h3>
                        <a href="{{ url('projects') }}" class="inline-block px-6 py-2 bg-white/20 backdrop-blur-md text-white font-semibold rounded-full border border-white/30 hover:bg-white hover:text-gray-900 opacity-0 group-hover:opacity-100 transition duration-500 pointer-events-auto transform translate-y-4 group-hover:translate-y-0">More Image</a>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500 py-10 font-bold uppercase tracking-widest reveal fade-bottom">No projects to display yet.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 06 / News & Event -->
    <section id="news-event" class="py-32 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header align="center" class="reveal fade-bottom">
                News <span class="text-accent">& Event</span>
            </x-section-header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($news as $index => $article)
                <div class="group flex flex-col bg-white rounded-3xl overflow-hidden shadow-xl shadow-gray-200/50 hover:shadow-2xl transition duration-500 relative reveal fade-bottom" style="transition-delay: {{ $index * 150 }}ms;">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $article->image ? Storage::url($article->image) : 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?q=80&w=1000' }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="{{ $article->title }}" width="384" height="256" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/40 to-transparent"></div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="text-xs text-accent mb-4 font-bold uppercase tracking-wider flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ \Carbon\Carbon::parse($article->published_date)->format('F d, Y') }} | By Admin
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 line-clamp-3 group-hover:text-accent transition">{{ $article->title }}</h3>
                        <div class="mt-auto">
                            <a href="{{ url('news/'.$article->slug) }}" class="inline-flex items-center text-gray-900 font-semibold hover:text-accent transition tracking-wide text-sm">
                                Read More
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-500 py-10 font-medium text-lg reveal fade-bottom">No news to display yet.</div>
                @endforelse
            </div>
            
            <div class="text-center mt-16 reveal fade-bottom">
                <a href="{{ url('news') }}" class="px-8 py-4 bg-ppblue-900 text-white font-semibold rounded-full shadow-lg shadow-ppblue-900/30 hover:bg-ppblue-600 hover:shadow-ppblue-600/40 transition duration-300 inline-block">
                    See More News
                </a>
            </div>
        </div>
    </section>

    <!-- BEGIN SECTION 07 / Get In Touch With Us -->
    <section id="contact-form" class="py-32 bg-gray-900 relative overflow-hidden">
        <!-- Abstract gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-ppblue-900 opacity-90"></div>
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-accent/10 rounded-full blur-[150px] transform translate-x-1/3 -translate-y-1/3"></div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal fade-bottom">
                <h2 class="text-5xl md:text-6xl font-heading font-black text-white leading-tight tracking-tight mb-6">
                    Get In Touch <span class="text-accent">With Us</span>
                </h2>
                <p class="text-gray-400 font-medium text-lg mt-4 max-w-2xl mx-auto tracking-wide">Have a question or want to work together? Leave your details and we will get back to you as soon as possible.</p>
            </div>
            
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-card-lg p-8 md:p-14 shadow-2xl reveal fade-up relative">
                <x-contact-form variant="dark" class="relative z-10" />
            </div>
        </div>
    </section>

    <!-- BEGIN ANNOUNCEMENT MODAL -->
    <div id="announcement-modal" class="fixed inset-0 z-[100] flex items-center justify-center hidden">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity" id="modal-backdrop"></div>
        
        <!-- Modal Content -->
        <div class="relative bg-white border-2 border-gray-100 rounded-xl shadow-2xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto transform transition-all">
            <!-- Close Button -->
            <button type="button" id="close-modal-btn" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:outline-none z-10 bg-white rounded-full p-1 shadow-sm">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            
            <!-- White Document Canvas -->
            <div class="p-8 md:p-12 text-gray-900 text-sm md:text-base leading-relaxed font-serif" style="font-family: 'Times New Roman', Times, serif;">
                <!-- Header -->
                <div class="text-center mb-8">
                    <img src="{{ asset('images/logo-pp.png') }}" alt="Logo PP Presisi" class="h-14 mx-auto mb-6" width="65" height="79" loading="lazy">
                    <h2 class="font-bold text-lg md:text-xl text-gray-900 tracking-wide uppercase">PENGUMUMAN LELANG UMUM ALAT BERAT</h2>
                    <h3 class="font-bold text-md md:text-lg text-gray-900 tracking-wide">(BUNDLE AB TW 1 BP Genset Cariu Tahun 2026)</h3>
                </div>

                <!-- Body Text -->
                <p class="mb-6 text-justify">
                    Berdasarkan Pasal 187 Peraturan Menteri BUMN Nomor PER-2/MBU/03/2023 Tahun 2023 Tentang Pedoman Tata Kelola Dan Kegiatan Korporasi Signifikan Badan Usaha Milik Negara beserta perubahannya ("PERMEN BUMN"), maka dengan ini PT PP Presisi Tbk ("PPRE") mengumumkan akan melaksanakan Lelang Umum ke-2 Alat Berat TW 1 Tahun 2026 (Bundle AB TW 1 BP Genset Cariu sejumlah 3 unit) melalui mekanisme penawaran tertutup (<em>closed bidding</em>) dengan rincian yang dapat diakses pada menu <strong>NEWS / BERITA</strong> (<a href="https://www.pp-presisi.co.id/news-events" target="_blank" class="text-blue-700 hover:underline">https://www.pp-presisi.co.id/news-events</a>) pada halaman utama website <a href="{{ url('/') }}" class="text-blue-700 hover:underline">pp-presisi.co.id</a>.
                </p>

                <p class="mb-4">Adapun kami informasikan periode Lelang Umum Bundle AB TW 1 BP Genset Cariu Tahun 2026 sebagai berikut:</p>
                
                <table class="w-full mb-10 max-w-2xl ml-4 md:ml-8">
                    <tbody>
                        <tr>
                            <td class="align-top w-6 pb-1">1.</td>
                            <td class="align-top pb-1">Pemasukan peminatan lelang</td>
                            <td class="align-top w-4 text-center pb-1">=</td>
                            <td class="align-top font-semibold pb-1">10 - 12 Februari 2026 (maksimal pukul 16.00 WIB)</td>
                        </tr>
                        <tr>
                            <td class="align-top w-6 pb-1">2.</td>
                            <td class="align-top pb-1">Pemasukan jaminan penawaran</td>
                            <td class="align-top w-4 text-center pb-1">=</td>
                            <td class="align-top font-semibold pb-1">10 - 12 Februari 2026 (maksimal pukul 16.00 WIB)</td>
                        </tr>
                        <tr>
                            <td class="align-top w-6 pb-1">3.</td>
                            <td class="align-top pb-1">Aanwijzing (Survey) unit</td>
                            <td class="align-top w-4 text-center pb-1">=</td>
                            <td class="align-top font-semibold pb-1">11 Februari 2026 (jam 08.30-16.00 WIB)</td>
                        </tr>
                        <tr>
                            <td class="align-top w-6 pb-1">4.</td>
                            <td class="align-top pb-1">Penetapan Pemenang Lelang</td>
                            <td class="align-top w-4 text-center pb-1">=</td>
                            <td class="align-top font-semibold pb-1">13 Februari 2026 (jam 08.30 WIB)</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Footer / Signature -->
                <div class="flex justify-end text-center mb-10 pr-4 md:pr-16">
                    <div>
                        <p class="mb-1">Jakarta, 10 Februari 2026</p>
                        <p class="font-bold mb-20">Direktur Keuangan & HCM<br>PT PP Presisi Tbk</p>
                        <p class="font-bold underline">M. Arif Iswahyudi</p>
                    </div>
                </div>

                <!-- Note -->
                <div class="text-xs md:text-sm text-gray-700 mt-12">
                    <p class="mb-1">*) Keterangan lebih lanjut dapat menghubungi contact person divestasi PP Presisi:</p>
                    <ul class="list-none ml-4">
                        <li>- Andini N. (081525680442 / 082134525064)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('announcement-modal');
            const closeBtn = document.getElementById('close-modal-btn');
            const backdrop = document.getElementById('modal-backdrop');

            // Function to show modal
            function showModal() {
                modal.classList.remove('hidden');
                // Prevent scrolling on body
                document.body.style.overflow = 'hidden';
            }

            // Function to hide modal
            function hideModal() {
                modal.classList.add('hidden');
                // Restore scrolling
                document.body.style.overflow = 'auto';
            }

            // Show modal on page load
            setTimeout(showModal, 500);

            // Close events
            closeBtn.addEventListener('click', hideModal);
            backdrop.addEventListener('click', hideModal);

            // Escape key to close
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    hideModal();
                }
            });
        });
    </script>
    <!-- END ANNOUNCEMENT MODAL -->

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
        .fade-up { transform: translateY(60px); }
        .fade-left { transform: translateX(-40px); }
        .fade-right { transform: translateX(40px); }
        .fade-scale { transform: scale(0.9); }
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
