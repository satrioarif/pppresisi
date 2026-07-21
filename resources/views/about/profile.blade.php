@extends('layouts.main')
@section('title', 'Company Profile - PT PP Presisi Tbk')

@section('content')
<x-page-header image="{{ asset('images/aboutus/image1.jpg') }}" align="left" class="reveal fade-right">
    Company Profile
</x-page-header>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-10 text-sm text-gray-500 flex items-center reveal fade-bottom">
        <a href="{{ url('/') }}" class="hover:text-accent transition font-semibold">Home</a>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="hover:text-accent transition cursor-pointer font-semibold">About Us</span>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="text-gray-900 font-bold">Company Profile</span>
    </div>

    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('about/profile') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/profile') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/structure') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/boards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/miscellaneous') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/awards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Awards</a>
        </div>
    </div>
    <!-- About Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24 items-center">
        <div class="reveal fade-right">
            <h2 class="text-4xl font-heading font-black text-gray-900 mb-6 leading-tight">Building Synergy, <span class="text-accent">Creating Value</span></h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                <strong>PT PP Presisi Tbk</strong> is a subsidiary of the state-owned enterprise <strong>PT PP (Persero) Tbk</strong>, committed to becoming a leading mining and construction services company in Indonesia through high-quality and superior services. The optimization of the Company’s operational performance is supported by an efficient asset management system.
            </p>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                PT PP Presisi Tbk implements ERP-SAP and is supported by BS EN ISO 9001:2015 – Quality Management System, BS EN ISO 14001:2015 – Environmental Management System, and ISO 45001:2018 – Occupational Health & Safety Management System as part of its efforts to enhance operational excellence.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                PT PP Presisi Tbk is committed to continuous business transformation and innovation to strengthen its engineering capacity as part of its effort to increase stakeholders' value.
            </p>
        </div>
        <div class="rounded-[2.5rem] overflow-hidden shadow-2xl relative reveal fade-left">
            <div class="absolute inset-0 bg-gray-900/10 mix-blend-multiply"></div>
            <img src="{{ asset('images/aboutus/image3.jpg') }}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" width="504" height="321" loading="lazy">
        </div>
    </div>


    <!-- Vision & Mission -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24">
        <div class="bg-ppblue-900 rounded-[2.5rem] p-10 border border-ppblue-800 relative overflow-hidden group hover:shadow-2xl transition-all duration-500 reveal fade-bottom">
            <div class="absolute -right-10 -top-10 text-accent opacity-10 transform group-hover:scale-110 transition-transform duration-700">
                <svg class="w-56 h-56" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-accent/30 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-heading font-black text-white mb-4">Our Vision</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                    To become the leading Mining and Construction Services Company in Indonesia.
                </p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-[2.5rem] p-10 border border-gray-200 relative overflow-hidden group hover:shadow-2xl transition-all duration-500 reveal fade-bottom" style="transition-delay: 150ms;">
            <div class="absolute -right-10 -top-10 text-gray-900 opacity-5 transform group-hover:scale-110 transition-transform duration-700">
                <svg class="w-56 h-56" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-ppblue-900 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-ppblue-900/30 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-heading font-black text-gray-900 mb-4">Our Mission</h3>
                <ul class="space-y-4 text-gray-600 text-lg">
                    <li class="flex items-start">
                        <span class="text-accent font-bold mr-3 mt-1">1.</span>
                        Providing mining solutions to clients through efficient and innovative services
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent font-bold mr-3 mt-1">2.</span>
                        Implementing risk management with a focus on projects that deliver financial added value to the Company
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent font-bold mr-3 mt-1">3.</span>
                        Establishing strategic partnerships with clients, vendors, and business partners that support the Company’s economic growth
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent font-bold mr-3 mt-1">4.</span>
                        Prioritizing QHSE (Quality, Health, Safety, and Environment) and Good Corporate Governance in business operations
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent font-bold mr-3 mt-1">5.</span>
                        Optimizing human resources by providing competency development to enhance productivity and innovation
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Corporate Value (AKHLAK) -->
    <div class="mt-32">
        <div class="text-center mb-16 reveal fade-bottom">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-900 mb-4">Corporate Value <span class="text-accent">(AKHLAK)</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">The core values that guide our behavior, decisions, and operations every single day.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">01</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">AMANAH</h4>
                    <p class="text-gray-400">Memegang teguh kepercayaan yang diberikan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom" style="transition-delay: 100ms;">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">02</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">KOMPETEN</h4>
                    <p class="text-gray-400">Terus belajar dan mengembangkan kapabilitas.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom" style="transition-delay: 200ms;">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">03</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">HARMONIS</h4>
                    <p class="text-gray-400">Saling peduli dan menghargai perbedaan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">04</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">LOYAL</h4>
                    <p class="text-gray-400">Berdedikasi dan mengutamakan kepentingan bangsa dan negara.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom" style="transition-delay: 100ms;">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">05</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">ADAPTIF</h4>
                    <p class="text-gray-400">Terus berinovasi dan antusias dalam menggerakkan ataupun menghadapi perubahan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-ppblue-800 to-ppblue-900 rounded-[2rem] p-8 shadow-xl border border-ppblue-700 hover:shadow-2xl hover:border-accent/50 hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group reveal fade-bottom" style="transition-delay: 200ms;">
                <div class="absolute -right-4 -bottom-4 text-white opacity-5 text-9xl font-black transform group-hover:scale-110 group-hover:opacity-10 transition-all duration-500">06</div>
                <div class="relative z-10">
                    <h4 class="text-2xl font-black text-white mb-3 tracking-wide">KOLABORATIF</h4>
                    <p class="text-gray-400">Membangun kerjasama yang sinergis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestone -->
    <div class="mt-32 mb-10">
        <div class="text-center mb-16 reveal fade-bottom">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-900 mb-4">Our Milestone</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">The journey of PT PP Presisi Tbk through the years.</p>
        </div>
        <div class="relative max-w-4xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute left-[20px] md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-gray-200"></div>

            <div class="space-y-12">
                <!-- 2004 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">The Company was established under the name PT Prima Jasa Aldodua, engaged in the provision of equipment rental services.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-accent border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-4xl font-black text-gray-900">2004</h3>
                    </div>
                </div>

                <!-- 2015 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PJA changed its name to PT PP Peralatan Konstruksi (PT PP Alkon) after being acquired by PT PP (Persero) and expanding into the civil engineering business.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-900 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-4xl font-black text-gray-900">2015</h3>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PP Alkon changed its name to PT PP Presisi, acquired PT LMA, and went public on the indonesian stock market (IPO).</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-accent border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-4xl font-black text-gray-900">2017</h3>
                    </div>
                </div>

                <!-- 2018 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PP Presisi Tbk entered the integrated mining services business.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-900 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-4xl font-black text-gray-900">2018</h3>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PP Presisi Tbk begins business diversification in several locations.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-accent border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-4xl font-black text-gray-900">2020</h3>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PP Presisi Tbk changed its vision and mission to focus on mining services and civil works.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-900 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-4xl font-black text-gray-900">2024</h3>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full reveal fade-up">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 relative hover:shadow-xl hover:-translate-y-1 transition-all">
                            <p class="text-gray-600">PT PP Presisi Tbk is committed to synergizing performance, productivity, and environmental sustainability.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-accent border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-4xl font-black text-gray-900">2025</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Download Company Profile -->
    <div class="grid grid-cols-1 md:grid-cols-2 mt-16 mb-16 rounded-[2.5rem] overflow-hidden shadow-2xl max-w-5xl mx-auto reveal fade-bottom">
        <!-- Left Side -->
        <div class="relative py-12 px-10 lg:px-14 bg-cover bg-center" style="background-image: url('{{ asset('images/aboutus/image3.jpg') }}');">
            <div class="absolute inset-0 bg-ppblue-900/90 backdrop-blur-sm"></div>
            <div class="relative z-10 text-white flex flex-col justify-center h-full">
                <h2 class="text-3xl md:text-4xl font-black mb-4 font-heading text-white">Download Company Profile</h2>
                <p class="mb-8 text-gray-300 text-lg">See our company's progress through the years.</p>
                <div class="flex flex-col space-y-4 items-start">
                    <a href="{{ isset($settings['company_profile_en_url']) ? asset('storage/' . $settings['company_profile_en_url']) : '#' }}" target="_blank" class="inline-flex items-center bg-accent hover:bg-yellow-500 rounded-full px-8 py-3 font-bold tracking-wide transition text-white shadow-lg shadow-accent/30">
                        DOWNLOAD (ENGLISH) <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="{{ isset($settings['company_profile_id_url']) ? asset('storage/' . $settings['company_profile_id_url']) : '#' }}" target="_blank" class="inline-flex items-center bg-ppblue-900 hover:bg-ppblue-600 rounded-full px-8 py-3 font-bold tracking-wide transition text-white shadow-lg shadow-ppblue-900/30">
                        DOWNLOAD (INDONESIA) <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Side -->
        <div class="bg-gray-100 flex items-center justify-center p-8 relative overflow-hidden">
            <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-gray-200 rounded-full blur-3xl"></div>
            <div class="relative z-10 p-8 bg-white shadow-2xl rounded-2xl flex items-center justify-center border-b-4 border-accent transform rotate-3 hover:rotate-0 transition duration-500 w-56 h-72">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="PP Presisi Logo" class="h-10 mx-auto mb-6" width="65" height="79" loading="lazy" onerror="this.style.display='none'">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 leading-tight">Company Profile</h3>
                    <p class="text-accent font-bold text-sm tracking-wide">PT PP Presisi Tbk</p>
                </div>
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
    .fade-up { transform: translateY(60px); }
    .fade-left { transform: translateX(-40px); }
    .fade-right { transform: translateX(40px); }
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
