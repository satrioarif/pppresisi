@extends('layouts.main')
@section('title', 'Financial Reports - Investor Relations | PP Presisi')

@section('content')

<x-page-header badge="Investor Relations" subtitle="Transparent and comprehensive financial information for our investors and stakeholders." class="reveal fade-bottom">
    Reports
</x-page-header>

@include('investor._nav', ['active' => 'report'])


<div class="min-h-screen">

    {{-- ==================== ANNUAL REPORTS SECTION ==================== --}}
    <section class="py-20 bg-gray-50" id="annual-reports">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-black text-gray-900 leading-tight">
                        Annual <span class="text-gray-500 font-medium">Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                        Through the Annual Report, we communicate our vision and mission as well as our leadership in the industry. We also share our focus, strategy and our deliveries in both operational & financial then.  At last we report to stakeholder our practices in Good Corporate Governance & Corporate Social Responsibility.
                    </p>
                </div>
            </div>

            @if(isset($annualDocs) && $annualDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal fade-up">
                    @foreach($annualDocs as $year => $docs)
                        <div class="bg-white rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                            {{-- Card Header --}}
                            <div class="px-6 py-5 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                                <h3 class="text-xl font-heading font-black text-white">
                                    Annual <span class="text-gray-300 font-medium">Report {{ $year }}</span>
                                </h3>
                            </div>
                            {{-- Document List --}}
                            <div class="divide-y divide-gray-100">
                                @foreach($docs as $doc)
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-gray-50 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                            <div class="min-w-0">
                                                <p class="font-bold text-gray-900 text-sm truncate">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-500 font-medium mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-ppblue-900 hover:bg-ppblue-600 transition-colors">
                                            DOWNLOAD
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-2">No Annual Reports Available</h3>
                    <p class="text-gray-500 font-medium text-sm">Annual reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ==================== SUSTAINABILITY REPORTS SECTION ==================== --}}
    <section class="py-20 bg-white border-t border-gray-100" id="sustainability-reports">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-black text-gray-900 leading-tight">
                        Sustainability <span class="text-gray-500 font-medium">Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                        Our Sustainability Report highlights our commitment to responsible business practices, environmental stewardship, and social impact.
                    </p>
                </div>
            </div>

            @if(isset($sustainabilityDocs) && $sustainabilityDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal fade-up">
                    @foreach($sustainabilityDocs as $year => $docs)
                        <div class="bg-white rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                            {{-- Card Header --}}
                            <div class="px-6 py-5 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                                <h3 class="text-xl font-heading font-black text-white">
                                    Sustainability <span class="text-gray-300 font-medium">Report {{ $year }}</span>
                                </h3>
                            </div>
                            {{-- Document List --}}
                            <div class="divide-y divide-gray-100">
                                @foreach($docs as $doc)
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-gray-50 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                            <div class="min-w-0">
                                                <p class="font-bold text-gray-900 text-sm truncate">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-500 font-medium mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-ppblue-900 hover:bg-ppblue-600 transition-colors">
                                            DOWNLOAD
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-2">No Sustainability Reports Available</h3>
                    <p class="text-gray-500 font-medium text-sm">Sustainability reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ==================== FINANCIAL REPORTS SECTION ==================== --}}
    <section class="py-20 bg-gray-50 border-t border-gray-100" id="financial-reports">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white bg-ppblue-900 shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-black text-gray-900 leading-tight">
                        Financial <span class="text-gray-500 font-medium">Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                       PP Presisi today is a leading integrated heavy equipment based construction company. PP Presisi is on pole position to seek opportunities in infrastructure development in Indonesia as well as region. Our engineering capacity builds on our strengths in technology, innovation and services to generate sustainable growth, high margins and high returns for investors. Our Investor Relations team love to share any operational, financial and recent development update.
                    </p>
                </div>
            </div>

            @if(isset($financialDocs) && $financialDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal fade-up">
                    @foreach($financialDocs as $year => $docs)
                        <div class="bg-white rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                            {{-- Card Header --}}
                            <div class="px-6 py-5 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                                <h3 class="text-xl font-heading font-black text-white">
                                    Financial <span class="text-gray-300 font-medium">Report {{ $year }}</span>
                                </h3>
                            </div>
                            {{-- Document List --}}
                            <div class="divide-y divide-gray-100">
                                @php
                                    $subTypeOrder = [
                                        'Full Year Audited'    => 1,
                                        '9 Months Unaudited'   => 2,
                                        '7 Months Audited'     => 3,
                                        '6 Months Unaudited'   => 4,
                                        '3 Months Unaudited'   => 5,
                                    ];
                                    $sortedDocs = $docs->sortBy(fn($d) => $subTypeOrder[$d->sub_type] ?? 99);
                                @endphp
                                @foreach($sortedDocs as $doc)
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-gray-50 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                            <div class="min-w-0">
                                                <p class="font-bold text-gray-900 text-sm truncate">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-500 font-medium mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-ppblue-900 hover:bg-ppblue-600 transition-colors">
                                            DOWNLOAD
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 rounded-[2rem] border-2 border-gray-100 border-dashed bg-gray-50 reveal fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-2">No Financial Reports Available</h3>
                    <p class="text-gray-500 font-medium text-sm">Financial reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

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
