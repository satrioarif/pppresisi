@extends('layouts.main')
@section('title', 'Corporate Secretary - GCG | PP Presisi')

@section('content')

<x-page-header badge="Good Corporate Governance">
    Corporate <span class="text-ppblue-300">Secretary</span>
</x-page-header>

<section class="py-16 min-h-screen bg-white">
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

                    <div class="mt-12 flex items-center gap-6 p-6 bg-ppblue-50/50 rounded-2xl border border-ppblue-100">
                        <div class="flex-shrink-0 relative">
                            {{-- Placeholder image since we don't have the real local file --}}
                            <div class="w-32 h-40 bg-gray-200 rounded-xl overflow-hidden shadow-md">
                                <img src="https://panelppre.pp-presisi.co.id/assets/vendor/responsive_filemanager/source/mei.jpg" alt="Mei Elsa Kembaren" class="w-full h-full object-cover" width="128" height="160" loading="lazy">
                            </div>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold text-gray-900">Mei Elsa Kembaren</h5>
                            <h6 class="text-ppblue-600 font-medium">VP Corporate Secretary</h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</section>

@endsection
