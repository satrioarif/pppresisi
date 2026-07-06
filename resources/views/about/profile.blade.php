@extends('layouts.main')
@section('title', 'Company Profile - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="pt-56 pb-48 relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('images/aboutus/image1.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white">Company Profile</h1>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500 flex items-center">
        <a href="{{ url('/') }}" class="hover:text-ppblue-700 transition">Home</a>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="hover:text-ppblue-700 transition cursor-pointer">About Us</span>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="text-gray-900 font-semibold">Company Profile</span>
    </div>

    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('about/profile') }}" class="pb-3 transition {{ request()->is('about/profile') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="pb-3 transition {{ request()->is('about/structure') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="pb-3 transition {{ request()->is('about/boards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="pb-3 transition {{ request()->is('about/miscellaneous') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="pb-3 transition {{ request()->is('about/awards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Awards</a>
        </div>
    </div>
    <!-- About Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-20 items-center">
        <div>
            <h2 class="text-3xl font-heading font-bold text-ppblue-900 mb-6">Building Synergy, Creating Value</h2>
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
        <div class="rounded-2xl overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 bg-ppblue-900/10 mix-blend-multiply"></div>
            <img src="{{ asset('images/aboutus/image3.jpg') }}" class="w-full h-full object-cover">
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
                    To become the leading Mining and Construction Services Company in Indonesia.
                </p>
            </div>
        </div>

        <div class="bg-teal-50 rounded-3xl p-10 border border-teal-100 relative overflow-hidden group hover:shadow-xl transition-all duration-300">
            <div class="absolute -right-10 -top-10 text-teal-200 opacity-50 transform group-hover:scale-110 transition-transform duration-500">
                <svg class="w-48 h-48" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div class="relative z-10">
                <div class="w-14 h-14 bg-teal-500 rounded-xl flex items-center justify-center text-white mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-3xl font-heading font-bold text-gray-900 mb-4">Our Mission</h3>
                <ul class="space-y-3 text-gray-600 text-lg">
                    <li class="flex items-start">
                        <span class="text-teal-500 mr-2 mt-1">1.</span>
                        Providing mining solutions to clients through efficient and innovative services
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-500 mr-2 mt-1">2.</span>
                        Implementing risk management with a focus on projects that deliver financial added value to the Company
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-500 mr-2 mt-1">3.</span>
                        Establishing strategic partnerships with clients, vendors, and business partners that support the Company’s economic growth
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-500 mr-2 mt-1">4.</span>
                        Prioritizing QHSE (Quality, Health, Safety, and Environment) and Good Corporate Governance in business operations
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-500 mr-2 mt-1">5.</span>
                        Optimizing human resources by providing competency development to enhance productivity and innovation
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Corporate Value (AKHLAK) -->
    <div class="mt-32">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-ppblue-900 mb-4">Corporate Value <span class="text-teal-600">(AKHLAK)</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">The core values that guide our behavior, decisions, and operations every single day.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">01</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">AMANAH</h4>
                    <p class="text-blue-100">Memegang teguh kepercayaan yang diberikan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">02</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">KOMPETEN</h4>
                    <p class="text-teal-100">Terus belajar dan mengembangkan kapabilitas.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-sky-500 to-sky-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">03</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">HARMONIS</h4>
                    <p class="text-sky-100">Saling peduli dan menghargai perbedaan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">04</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">LOYAL</h4>
                    <p class="text-emerald-100">Berdedikasi dan mengutamakan kepentingan bangsa dan negara.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">05</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">ADAPTIF</h4>
                    <p class="text-cyan-100">Terus berinovasi dan antusias dalam menggerakkan ataupun menghadapi perubahan.</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-4 text-white opacity-10 text-9xl font-bold transform group-hover:scale-110 transition-transform duration-500">06</div>
                <div class="relative z-10">
                    <h4 class="text-xl font-bold text-white mb-3">KOLABORATIF</h4>
                    <p class="text-indigo-100">Membangun kerjasama yang sinergis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestone -->
    <div class="mt-32 mb-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-ppblue-900 mb-4">Our Milestone</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">The journey of PT PP Presisi Tbk through the years.</p>
        </div>
        <div class="relative max-w-4xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute left-[20px] md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-blue-100"></div>

            <div class="space-y-12">
                <!-- 2004 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">The Company was established under the name PT Prima Jasa Aldodua, engaged in the provision of equipment rental services.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-600 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-3xl font-bold text-teal-500">2004</h3>
                    </div>
                </div>

                <!-- 2015 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PJA changed its name to PT PP Peralatan Konstruksi (PT PP Alkon) after being acquired by PT PP (Persero) and expanding into the civil engineering business.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-teal-500 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-3xl font-bold text-ppblue-900">2015</h3>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PP Alkon changed its name to PT PP Presisi, acquired PT LMA, and went public on the indonesian stock market (IPO).</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-600 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-3xl font-bold text-teal-500">2017</h3>
                    </div>
                </div>

                <!-- 2018 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PP Presisi Tbk entered the integrated mining services business.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-teal-500 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-3xl font-bold text-ppblue-900">2018</h3>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PP Presisi Tbk begins business diversification in several locations.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-600 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-3xl font-bold text-teal-500">2020</h3>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-2 ml-16 md:ml-0 md:text-left w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PP Presisi Tbk changed its vision and mission to focus on mining services and civil works.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-teal-500 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-1 ml-16 md:ml-0 md:pr-8 w-full mb-4 md:mb-0 text-left md:text-right">
                        <h3 class="text-3xl font-bold text-ppblue-900">2024</h3>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 order-2 md:order-1 ml-16 md:ml-0 md:text-right w-full">
                        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 relative hover:shadow-lg transition-shadow">
                            <p class="text-gray-600">PT PP Presisi Tbk is committed to synergizing performance, productivity, and environmental sustainability.</p>
                        </div>
                    </div>
                    <div class="absolute left-[4px] md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 rounded-full bg-ppblue-600 border-4 border-white shadow flex items-center justify-center z-10 top-1/2 -translate-y-1/2"></div>
                    <div class="md:w-5/12 order-1 md:order-2 ml-16 md:ml-0 md:pl-8 w-full mb-4 md:mb-0">
                        <h3 class="text-3xl font-bold text-teal-500">2025</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Download Company Profile -->
    <div class="grid grid-cols-1 md:grid-cols-2 mt-16 mb-16 rounded-2xl overflow-hidden shadow-lg max-w-5xl mx-auto">
        <!-- Left Side -->
        <div class="relative py-10 px-10 lg:px-12 bg-cover bg-center" style="background-image: url('{{ asset('images/aboutus/image3.jpg') }}');">
            <div class="absolute inset-0 bg-gray-900/80"></div>
            <div class="relative z-10 text-white flex flex-col justify-center h-full">
                <h2 class="text-2xl md:text-3xl font-bold mb-2 font-heading">Download Company Profile</h2>
                <p class="mb-5 text-gray-300 text-sm">See our company's progress through the years.</p>
                <div class="flex flex-col space-y-3 items-start">
                    <a href="{{ isset($settings['company_profile_en_url']) ? asset('storage/' . $settings['company_profile_en_url']) : '#' }}" target="_blank" class="inline-flex items-center bg-[#4279b5] hover:bg-blue-700 px-5 py-2 font-bold text-xs tracking-wide transition text-white">
                        DOWNLOAD (ENGLISH) <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="{{ isset($settings['company_profile_id_url']) ? asset('storage/' . $settings['company_profile_id_url']) : '#' }}" target="_blank" class="inline-flex items-center bg-[#4279b5] hover:bg-blue-700 px-5 py-2 font-bold text-xs tracking-wide transition text-white">
                        DOWNLOAD (INDONESIA) <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Side -->
        <div class="bg-[#dcdcdc] flex items-center justify-center p-8 relative overflow-hidden">
            <div class="relative z-10 p-6 bg-white shadow-xl flex items-center justify-center border-l-4 border-ppblue-900 transform rotate-2 hover:rotate-0 transition duration-500 w-48 h-64">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="PP Presisi Logo" class="h-8 mx-auto mb-4 opacity-80" onerror="this.style.display='none'">
                    <h3 class="text-lg font-bold text-ppblue-900 mb-1 leading-tight">Company Profile</h3>
                    <p class="text-gray-500 font-bold text-xs">PT PP Presisi Tbk</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
