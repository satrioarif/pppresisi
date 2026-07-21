@extends('layouts.main')
@section('title', 'Corporate Secretary - GCG | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            Good Corporate Governance
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Corporate <span class="text-blue-300">Secretary</span>
        </h1>
    </div>
</div>

<section class="py-16 min-h-screen" style="background: #ffffff;">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- GCG Nav --}}
        @include('gcg._nav')

        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden mt-8">
            <div class="flex flex-col md:flex-row">
                <div class="p-8 md:p-12 flex-1">
                    <h2 class="text-3xl font-heading font-extrabold text-gray-900 mb-8">Corporate Secretary</h2>
                    
                    <div class="prose prose-lg text-gray-600 max-w-none text-justify space-y-6">
                        <p>
                            The Corporate Secretary was formed to carry out the function as a facilitator for the Company and the Board of Directors with external parties which includes relations with all stakeholders, including the public. The Corporate Secretary is appointed and responsible to the Board of Directors. Referring to the Decree of the Board of Directors of PT PP Presisi Tbk regarding Appointment of Vice President Corporate Secretary No: 021/SK/DIR/PPRE/2024 dated 29 July 2024, concerning Changes in the Organizational Structure of the Company, has appointed Mei Elsa Kembaren, as Vice President Corporate Secretary . Requirements, selection process, and procedures for appointment, are carried out in reference to applicable OJK Regulations and Exchange Regulations as well as generally accepted GCG best practices.
                        </p>
                        <p>
                            The Corporate Secretary assists the Board of Directors in the areas of Compliance, Governance, Corporate Administration, Internal Communication and External Communication, including the following: provides updates and input to the Board of Directors and Board of Commissioners regarding developments in capital market regulations and other relevant regulations, assists the Board of Directors and the Board of Commissioners in implementing Governance, administering management information systems, managing administration at the Company level, conveying the Company's reporting obligations to OJK and IDX.
                        </p>
                    </div>

                    <div class="mt-12 flex items-center gap-6 p-6 bg-blue-50/50 rounded-2xl border border-blue-100">
                        <div class="flex-shrink-0 relative">
                            {{-- Placeholder image since we don't have the real local file --}}
                            <div class="w-32 h-40 bg-gray-200 rounded-xl overflow-hidden shadow-md">
                                <img src="https://panelppre.pp-presisi.co.id/assets/vendor/responsive_filemanager/source/mei.jpg" alt="Mei Elsa Kembaren" class="w-full h-full object-cover" width="128" height="160" loading="lazy">
                            </div>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-gray-900">Mei Elsa Kembaren</h5>
                            <h6 class="text-blue-600 font-medium">VP Corporate Secretary</h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</section>

@endsection
