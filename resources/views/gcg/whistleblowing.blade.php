@extends('layouts.main')
@section('title', 'Whistleblowing System - Governance')

@section('content')
<div class="bg-gray-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Whistleblowing System</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">A secure channel to report violations, fraud, or unethical behavior anonymously.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div>
            <div class="inline-block px-4 py-2 bg-red-50 text-red-600 rounded-full font-bold text-sm mb-6 border border-red-100">
                CONFIDENTIAL & SECURE
            </div>
            <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Report a Violation</h2>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                PT PP Presisi Tbk provides a Whistleblowing System (WBS) facility for all employees, partners, and the public to report any indications of fraud, corruption, or violations of the Code of Conduct.
            </p>
            <ul class="space-y-4 mb-8">
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700"><strong>Anonymous:</strong> Your identity is strictly protected.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700"><strong>Protected:</strong> We guarantee protection against retaliation.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700"><strong>Actionable:</strong> All valid reports are independently investigated.</span>
                </li>
            </ul>
        </div>
        
        <div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Submission Channels</h3>
            
            <div class="space-y-4">
                <a href="mailto:wbs@pp-presisi.co.id" class="flex items-center p-4 rounded-xl border border-gray-200 hover:border-ppblue-500 hover:shadow-md transition group">
                    <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center text-gray-500 group-hover:text-ppblue-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-900">Email</p>
                        <p class="text-gray-500">wbs@pp-presisi.co.id</p>
                    </div>
                </a>
                
                <div class="flex items-center p-4 rounded-xl border border-gray-200">
                    <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center text-gray-500 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-900">Hotline / WhatsApp</p>
                        <p class="text-gray-500">+62 811 1234 5678</p>
                    </div>
                </div>

                <div class="flex items-center p-4 rounded-xl border border-gray-200">
                    <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center text-gray-500 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-900">Mailing Address</p>
                        <p class="text-gray-500 text-sm">Tim Investigasi WBS - PT PP Presisi Tbk<br>Plaza PP Wisma Subiyanto</p>
                    </div>
                </div>
            </div>
            
            <a href="#" class="mt-8 block w-full py-4 text-center bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl transition shadow-lg shadow-red-500/30">
                Submit Online Report
            </a>
        </div>
    </div>
</div>
@endsection
