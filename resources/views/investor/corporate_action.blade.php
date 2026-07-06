@extends('layouts.main')
@section('title', 'Corporate Action - Investor Relations | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Investor Relations
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Corporate <span class="text-blue-300">Action</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Strategic corporate actions and capital market activities of PT PP Presisi Tbk.
        </p>
    </div>
</div>

@include('investor._nav', ['active' => 'corporate-action'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-white min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ===== ARTICLE: Bonds 2022 ===== --}}
        <article class="mb-16">

            {{-- Article Header --}}
            <div class="flex items-center gap-3 mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-white px-3 py-1 rounded-full"
                      style="background: #2563eb;">Corporate Bond</span>
                <span class="text-sm text-gray-400">July 1, 2022</span>
            </div>

            <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900 mb-4 leading-snug">
                Continuous Public Offering of the Phase I Year 2022 Bonds ("Bonds") PT PP Presisi Tbk
            </h2>

            <div class="prose prose-gray max-w-none text-gray-600 leading-relaxed space-y-4">
                <p>
                    On July 1, 2022, PT PP Presisi Tbk officially listed its Phase I Year 2022 Bonds
                    ("Bonds") on the Indonesia Stock Exchange (IDX). The total issuance value of the
                    Bonds was <strong class="text-gray-800">Rp202.98 billion</strong>, offered in two series:
                </p>

                {{-- Bond Details Table --}}
                <div class="overflow-x-auto my-6">
                    <table class="w-full text-sm border-collapse rounded-xl overflow-hidden shadow-sm">
                        <thead>
                            <tr style="background: #1e40af;">
                                <th class="px-5 py-3 text-left font-semibold" style="color: #bfdbfe;">Series</th>
                                <th class="px-5 py-3 text-right font-semibold" style="color: #bfdbfe;">Principal Amount</th>
                                <th class="px-5 py-3 text-right font-semibold" style="color: #bfdbfe;">Interest Rate</th>
                                <th class="px-5 py-3 text-right font-semibold" style="color: #bfdbfe;">Term</th>
                                <th class="px-5 py-3 text-right font-semibold" style="color: #bfdbfe;">Maturity Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #eff6ff;" class="border-b border-blue-100">
                                <td class="px-5 py-3 font-semibold text-gray-800">Series A</td>
                                <td class="px-5 py-3 text-right text-gray-700">Rp102.27 billion</td>
                                <td class="px-5 py-3 text-right text-gray-700">9.50% / year (fixed)</td>
                                <td class="px-5 py-3 text-right text-gray-700">3 years</td>
                                <td class="px-5 py-3 text-right text-gray-700">June 30, 2025</td>
                            </tr>
                            <tr style="background: #eff6ff;">
                                <td class="px-5 py-3 font-semibold text-gray-800">Series B</td>
                                <td class="px-5 py-3 text-right text-gray-700">Rp100.70 billion</td>
                                <td class="px-5 py-3 text-right text-gray-700">10.50% / year (fixed)</td>
                                <td class="px-5 py-3 text-right text-gray-700">5 years</td>
                                <td class="px-5 py-3 text-right text-gray-700">June 30, 2027</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    The Bonds have been rated <strong class="text-gray-800">idBBB+</strong> (Triple B Plus) by
                    PT Pemeringkat Efek Indonesia (Pefindo), based on the audited Financial Statements as of
                    December 31, 2021.
                </p>

                {{-- Use of Funds --}}
                <div class="rounded-xl border border-blue-200 p-6 my-6" style="background: #eff6ff;">
                    <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        Allocation of Bond Proceeds
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-semibold text-gray-700">Capital Expenditure</span>
                                <span class="text-sm font-bold text-blue-700">70%</span>
                            </div>
                            <div class="w-full bg-blue-100 rounded-full h-2">
                                <div class="h-2 rounded-full" style="width: 70%; background: #2563eb;"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">Procurement of heavy equipment for mining and civil construction work</p>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-semibold text-gray-700">Working Capital</span>
                                <span class="text-sm font-bold text-blue-700">30%</span>
                            </div>
                            <div class="w-full bg-blue-100 rounded-full h-2">
                                <div class="h-2 rounded-full" style="width: 30%; background: #60a5fa;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        {{-- Divider --}}
        <hr class="border-gray-200 mb-16">

        {{-- ===== OTHER CORPORATE ACTIONS ===== --}}
        <section>
            <h2 class="text-xl font-heading font-bold text-gray-900 mb-8">Other Corporate Actions</h2>
            <div class="space-y-4">

                {{-- IPO --}}
                <div class="flex items-start gap-4 p-5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-blue-50/30 hover:border-blue-200 transition-colors">
                    <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                         style="background: linear-gradient(135deg, #1e3a8a, #2563eb);">
                        IPO
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-0.5">November 2017</p>
                        <h3 class="font-bold text-gray-900">Initial Public Offering (IPO)</h3>
                        <p class="text-sm text-gray-500 mt-1">
                            PT PP Presisi Tbk officially listed its shares on the Indonesia Stock Exchange (IDX)
                            under the ticker code <strong>PPRE</strong>.
                        </p>
                    </div>
                </div>

                {{-- Dividend --}}
                <div class="flex items-start gap-4 p-5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-blue-50/30 hover:border-blue-200 transition-colors">
                    <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                         style="background: linear-gradient(135deg, #065f46, #059669);">
                        DIV
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-0.5">June 2018</p>
                        <h3 class="font-bold text-gray-900">First Cash Dividend Distribution</h3>
                        <p class="text-sm text-gray-500 mt-1">
                            The company distributed its first cash dividend to shareholders as a commitment to
                            maximizing shareholder value.
                        </p>
                    </div>
                </div>

                {{-- Bond --}}
                <div class="flex items-start gap-4 p-5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-blue-50/30 hover:border-blue-200 transition-colors">
                    <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                         style="background: linear-gradient(135deg, #92400e, #d97706);">
                        OBL
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-0.5">July 2022</p>
                        <h3 class="font-bold text-gray-900">Bonds Issuance — Phase I Year 2022</h3>
                        <p class="text-sm text-gray-500 mt-1">
                            Issuance of Rp202.98 billion bonds (Series A &amp; B) listed on IDX, rated
                            <strong>idBBB+</strong> by Pefindo.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection
