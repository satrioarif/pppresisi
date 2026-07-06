@extends('layouts.main')
@section('title', 'Financial Reports - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO HEADER ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    {{-- Decorative blobs --}}
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            <span class="text-blue-300">Reports</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Transparent and comprehensive financial information for our investors and stakeholders.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'report'])


<div class="min-h-screen">

    {{-- ==================== ANNUAL REPORTS SECTION ==================== --}}
    <section class="py-20" id="annual-reports" style="background: #eef3fb;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg"
                     style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 leading-tight">
                        <span class="font-extrabold text-ppblue-800">Annual</span>
                        <span class="text-gray-500 font-normal"> Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                        Through the Annual Report, we communicate our vision and mission as well as our leadership in the industry. We also share our focus, strategy and our deliveries in both operational & financial then.  At last we report to stakeholder our practices in Good Corporate Governance & Corporate Social Responsibility.
                    </p>
                </div>
            </div>

            @if(isset($annualDocs) && $annualDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($annualDocs as $year => $docs)
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" style="border-top: 4px solid #2563eb;">
                            {{-- Card Header --}}
                            <div class="px-6 pt-6 pb-4 border-b border-gray-200">
                                <h3 class="text-xl font-heading font-bold text-gray-900">
                                    <span class="text-ppblue-800 font-extrabold">Annual</span>
                                    <span class="text-gray-400 font-normal"> Report {{ $year }}</span>
                                </h3>
                            </div>
                            {{-- Document List --}}
                            <div class="divide-y divide-gray-50">
                                @foreach($docs as $doc)
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-blue-50/40 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-ppblue-50 group-hover:bg-ppblue-100 flex items-center justify-center transition-colors">
                                                <svg class="w-4 h-4 text-ppblue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div class="min-w-0">
                                                <p class="font-semibold text-ppblue-700 text-sm truncate group-hover:text-ppblue-900">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-400 mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white transition-all duration-200 hover:opacity-90 hover:scale-105 active:scale-95"
                                           style="background: linear-gradient(135deg, #1e40af, #2563eb);">
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
                <div class="text-center py-20 bg-white rounded-3xl border-2 border-blue-200 border-dashed">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Annual Reports Available</h3>
                    <p class="text-gray-400">Annual reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ==================== SUSTAINABILITY REPORTS SECTION ==================== --}}
    <section class="py-20 border-t border-gray-200" id="sustainability-reports" style="background: #eef3fb;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg"
                     style="background: linear-gradient(135deg, #10b981, #059669);">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 leading-tight">
                        <span class="font-extrabold text-ppblue-800">Sustainability</span>
                        <span class="text-gray-500 font-normal"> Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                        Our Sustainability Report highlights our commitment to responsible business practices, environmental stewardship, and social impact.
                    </p>
                </div>
            </div>

            @if(isset($sustainabilityDocs) && $sustainabilityDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($sustainabilityDocs as $year => $docs)
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" style="border-top: 4px solid #10b981;">
                            {{-- Card Header --}}
                            <div class="px-6 pt-6 pb-4 border-b border-gray-200">
                                <h3 class="text-xl font-heading font-bold text-gray-900">
                                    <span class="text-ppblue-800 font-extrabold">Sustainability</span>
                                    <span class="text-gray-400 font-normal"> Report {{ $year }}</span>
                                </h3>
                            </div>
                            {{-- Document List --}}
                            <div class="divide-y divide-gray-50">
                                @foreach($docs as $doc)
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-green-50/40 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-green-50 group-hover:bg-green-100 flex items-center justify-center transition-colors">
                                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div class="min-w-0">
                                                <p class="font-semibold text-green-700 text-sm truncate group-hover:text-green-900">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-400 mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white transition-all duration-200 hover:opacity-90 hover:scale-105 active:scale-95"
                                           style="background: linear-gradient(135deg, #059669, #10b981);">
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
                <div class="text-center py-20 bg-white rounded-3xl border-2 border-green-200 border-dashed">
                    <div class="w-16 h-16 rounded-2xl bg-green-50 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Sustainability Reports Available</h3>
                    <p class="text-gray-400">Sustainability reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- ==================== FINANCIAL REPORTS SECTION ==================== --}}
    <section class="py-20 border-t border-gray-200" id="financial-reports" style="background: #f1f5f9;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-start gap-5 mb-12">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center shadow-lg"
                     style="background: linear-gradient(135deg, #d97706, #b45309);">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 leading-tight">
                        <span class="font-extrabold text-ppblue-800">Financial</span>
                        <span class="text-gray-500 font-normal"> Reports</span>
                    </h2>
                    <p class="text-gray-500 mt-1 text-sm md:text-base max-w-xl">
                       PP Presisi today is a leading integrated heavy equipment based construction company. PP Presisi is on pole position to seek opportunities in infrastructure development in Indonesia as well as region. Our engineering capacity builds on our strengths in technology, innovation and services to generate sustainable growth, high margins and high returns for investors. Our Investor Relations team love to share any operational, financial and recent development update.
                    </p>
                </div>
            </div>

            @if(isset($financialDocs) && $financialDocs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($financialDocs as $year => $docs)
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" style="border-top: 4px solid #d97706;">
                            {{-- Card Header --}}
                            <div class="px-6 pt-6 pb-4 border-b border-gray-200">
                                <h3 class="text-xl font-heading font-bold text-gray-900">
                                    <span class="text-ppblue-800 font-extrabold">Financial</span>
                                    <span class="text-gray-400 font-normal"> Report {{ $year }}</span>
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
                                    <div class="px-6 py-4 flex items-center justify-between gap-4 hover:bg-amber-50/40 transition-colors group">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-white border border-gray-200 group-hover:border-amber-200 group-hover:bg-amber-50 flex items-center justify-center transition-colors">
                                                <svg class="w-4 h-4 text-gray-400 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div class="min-w-0">
                                                <p class="font-semibold text-amber-700 text-sm truncate group-hover:text-amber-900">
                                                    {{ $doc->sub_type ?: $doc->title }}
                                                </p>
                                                <p class="text-xs text-gray-400 mt-0.5">PDF</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('storage/' . $doc->file_path) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white transition-all duration-200 hover:opacity-90 hover:scale-105 active:scale-95"
                                           style="background: linear-gradient(135deg, #b45309, #d97706);">
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
                <div class="text-center py-20 bg-white rounded-3xl border-2 border-amber-200 border-dashed">
                    <div class="w-16 h-16 rounded-2xl bg-amber-50 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Financial Reports Available</h3>
                    <p class="text-gray-400">Financial reports will be uploaded here.</p>
                </div>
            @endif
        </div>
    </section>

</div>

@endsection
