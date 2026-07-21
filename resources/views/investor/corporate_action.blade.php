@extends('layouts.main')
@section('title', 'Corporate Action - Investor Relations | PP Presisi')

@section('content')

<x-page-header badge="Investor Relations" subtitle="Strategic corporate actions and capital market activities of PT PP Presisi Tbk." class="reveal fade-bottom">
    Corporate Action
</x-page-header>

@include('investor._nav', ['active' => 'corporate-action'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-white min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ===== ARTICLE: Bonds 2022 ===== --}}
        <article class="mb-16 reveal fade-up">

            {{-- Article Header --}}
            <div class="flex items-center gap-3 mb-6">
                <span class="text-xs font-bold uppercase tracking-widest bg-ppblue-900 text-white px-3 py-1 rounded-full">Corporate Bond</span>
                <span class="text-sm font-bold text-gray-400">July 1, 2022</span>
            </div>

            <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900 mb-4 leading-snug">
                Continuous Public Offering of the Phase I Year 2022 Bonds ("Bonds") PT PP Presisi Tbk
            </h2>

            <div class="prose prose-gray max-w-none text-gray-600 leading-relaxed space-y-4">
                <p>
                    On July 1, 2022, PT PP Presisi Tbk officially listed its Phase I Year 2022 Bonds
                    ("Bonds") on the Indonesia Stock Exchange (IDX). The total issuance value of the
                    Bonds was <strong class="text-gray-900 font-bold">Rp202.98 billion</strong>, offered in two series:
                </p>

                {{-- Bond Details Table --}}
                <div class="overflow-x-auto my-6 rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50">
                    <table class="w-full text-sm border-collapse overflow-hidden">
                        <thead>
                            <tr class="bg-ppblue-900">
                                <th class="px-5 py-4 text-left font-bold text-white uppercase tracking-wider text-xs">Series</th>
                                <th class="px-5 py-4 text-right font-bold text-white uppercase tracking-wider text-xs">Principal Amount</th>
                                <th class="px-5 py-4 text-right font-bold text-white uppercase tracking-wider text-xs">Interest Rate</th>
                                <th class="px-5 py-4 text-right font-bold text-white uppercase tracking-wider text-xs">Term</th>
                                <th class="px-5 py-4 text-right font-bold text-white uppercase tracking-wider text-xs">Maturity Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50 border-b border-gray-100 hover:bg-gray-100 transition-colors">
                                <td class="px-5 py-4 font-bold text-gray-900">Series A</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">Rp102.27 billion</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">9.50% / year (fixed)</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">3 years</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">June 30, 2025</td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 transition-colors">
                                <td class="px-5 py-4 font-bold text-gray-900">Series B</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">Rp100.70 billion</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">10.50% / year (fixed)</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">5 years</td>
                                <td class="px-5 py-4 text-right text-gray-600 font-medium">June 30, 2027</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    The Bonds have been rated <strong class="text-gray-900 font-bold">idBBB+</strong> (Triple B Plus) by
                    PT Pemeringkat Efek Indonesia (Pefindo), based on the audited Financial Statements as of
                    December 31, 2021.
                </p>

                {{-- Use of Funds --}}
                <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 p-8 my-8 bg-white reveal fade-up">
                    <h3 class="font-black text-xl text-gray-900 mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-ppblue-900 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        Allocation of Bond Proceeds
                    </h3>
                    <div class="space-y-6">
                        <div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-bold text-gray-900">Capital Expenditure</span>
                                <span class="text-sm font-black text-gray-900">70%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-3">
                                <div class="h-3 rounded-full bg-ppblue-900" style="width: 70%;"></div>
                            </div>
                            <p class="text-xs text-gray-500 font-medium mt-2">Procurement of heavy equipment for mining and civil construction work</p>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-bold text-gray-900">Working Capital</span>
                                <span class="text-sm font-black text-gray-900">30%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-3">
                                <div class="h-3 rounded-full bg-gray-400" style="width: 30%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        {{-- Divider --}}
        <hr class="border-gray-100 mb-16 reveal fade-up">

        {{-- ===== OTHER CORPORATE ACTIONS ===== --}}
        <section class="reveal fade-up">
            <h2 class="text-3xl font-heading font-black text-gray-900 mb-8 flex items-center gap-3">
                <div class="w-2 h-8 rounded-full bg-accent"></div>
                Other Corporate Actions
            </h2>
            <div class="space-y-4">

                {{-- IPO --}}
                <div class="flex items-start gap-5 p-6 rounded-[2rem] border border-gray-100 bg-white shadow-lg shadow-gray-200/30 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                        IPO
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">November 2017</p>
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Initial Public Offering (IPO)</h3>
                        <p class="text-sm text-gray-500 font-medium leading-relaxed">
                            PT PP Presisi Tbk officially listed its shares on the Indonesia Stock Exchange (IDX)
                            under the ticker code <strong class="text-gray-900 font-bold">PPRE</strong>.
                        </p>
                    </div>
                </div>

                {{-- Dividend --}}
                <div class="flex items-start gap-5 p-6 rounded-[2rem] border border-gray-100 bg-white shadow-lg shadow-gray-200/30 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                        DIV
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">June 2018</p>
                        <h3 class="font-bold text-lg text-gray-900 mb-1">First Cash Dividend Distribution</h3>
                        <p class="text-sm text-gray-500 font-medium leading-relaxed">
                            The company distributed its first cash dividend to shareholders as a commitment to
                            maximizing shareholder value.
                        </p>
                    </div>
                </div>

                {{-- Bond --}}
                <div class="flex items-start gap-5 p-6 rounded-[2rem] border border-gray-100 bg-white shadow-lg shadow-gray-200/30 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center text-white text-sm font-black bg-ppblue-900 shadow-md">
                        OBL
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">July 2022</p>
                        <h3 class="font-bold text-lg text-gray-900 mb-1">Bonds Issuance — Phase I Year 2022</h3>
                        <p class="text-sm text-gray-500 font-medium leading-relaxed">
                            Issuance of Rp202.98 billion bonds (Series A &amp; B) listed on IDX, rated
                            <strong class="text-gray-900 font-bold">idBBB+</strong> by Pefindo.
                        </p>
                    </div>
                </div>

            </div>
        </section>

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
