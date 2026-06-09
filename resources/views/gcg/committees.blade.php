@extends('layouts.main')
@section('title', 'Committees - Governance')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Committees & Audit</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Supporting independent oversight and rigorous internal control.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="space-y-12 max-w-4xl mx-auto">
        
        <!-- Audit Committee -->
        <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 flex flex-col md:flex-row gap-8 items-start">
            <div class="w-16 h-16 bg-blue-50 text-ppblue-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Audit Committee</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    The Audit Committee is formed by and responsible to the Board of Commissioners. Its primary role is to assist in ensuring that the financial statements are presented fairly, internal controls are functioning effectively, and the company complies with applicable laws and regulations.
                </p>
                <a href="#" class="text-ppblue-600 font-semibold hover:text-ppblue-800 transition text-sm">Download Audit Committee Charter &rarr;</a>
            </div>
        </div>

        <!-- Nomination & Remuneration -->
        <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 flex flex-col md:flex-row gap-8 items-start">
            <div class="w-16 h-16 bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Nomination & Remuneration Committee</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Assists the Board of Commissioners in determining the criteria for the selection and remuneration of the Board of Directors and Board of Commissioners, ensuring competitive and fair compensation structures aligned with the company's performance.
                </p>
            </div>
        </div>

        <!-- Internal Audit -->
        <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 flex flex-col md:flex-row gap-8 items-start">
            <div class="w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Internal Audit Unit</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    An independent function that provides objective assurance and consulting designed to add value and improve the company's operations. It helps the company accomplish its objectives by bringing a systematic, disciplined approach to evaluate and improve the effectiveness of risk management.
                </p>
                <a href="#" class="text-ppblue-600 font-semibold hover:text-ppblue-800 transition text-sm">Download Internal Audit Charter &rarr;</a>
            </div>
        </div>

    </div>
</div>
@endsection
