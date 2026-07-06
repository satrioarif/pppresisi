@extends('layouts.main')
@section('title', 'CSR - Corporate Social Responsibility | PP Presisi')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="bg-ppblue-900 pt-32 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background: radial-gradient(ellipse at 20% 50%, #60a5fa 0%, transparent 60%), radial-gradient(ellipse at 80% 20%, #3b82f6 0%, transparent 55%);"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-blue-200 text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
            </svg>
            Responsibility
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-5 leading-tight">
            Corporate Social <span class="text-blue-300">Responsibility</span>
        </h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Our commitment to sustainable development and positive community impact.
        </p>
    </div>
</div>

<section class="py-16 min-h-screen" style="background: #ffffff;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="space-y-16">
            
            {{-- Section 1: Intro --}}
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-2/5 relative min-h-[300px]">
                        {{-- Image Placeholder --}}
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('http://panelppre.pp-presisi.co.id/assets/images/d69f8a8b8bb0e9c7607f0eb941cf7d4c.jpeg');"></div>
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-heading font-extrabold text-gray-900 mb-6">Corporate Social Responsibility</h2>
                        <div class="prose prose-lg text-gray-600 max-w-none text-justify">
                            <p>
                                The Company has a long-term CSR program, which makes CSR as part of the Value Creation Strategy that will increase Stakeholders Value. It is based on the idea that CSR programs should be implemented on an ongoing basis and must provide long-term benefits not only to those who benefit directly, but also to all stakeholders. From the long-term program, the Company formulates an annual program that has its own focus but is still a single entity from year to year that will support long-term programs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section 2: Community & HSE --}}
            <div class="bg-blue-50 rounded-3xl overflow-hidden border border-blue-100">
                <div class="flex flex-col md:flex-row-reverse">
                    <div class="w-full md:w-2/5 relative min-h-[400px]">
                        {{-- Image Placeholder --}}
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('http://panelppre.pp-presisi.co.id/assets/images/402916b39660665648bbf4cd1fba1e3f.jpg');"></div>
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12">
                        <div class="inline-block bg-blue-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-widest rounded-md mb-4">CSR Program</div>
                        
                        <h2 class="text-2xl font-heading font-extrabold text-gray-900 mb-4">Community Development Program</h2>
                        <div class="prose text-gray-600 max-w-none text-justify mb-8">
                            <p>The Community Development Program has the background to improve the quality of the environment around the operational location and location of the Company’s project as well as the local communities’ neighborhoods. The objective of the program is to prevent damage to the natural environment in which the Company operates, as well as to improve the quality of the local communities’ neighborhood within the framework of complete human development.</p>
                            <p>The program has been implemented by implementing an Integrated Waste Management System known as the “Environmental Management & Environmental Monitoring Effort” system (UKL and UPL). Efforts to maintain the quality of the environment have been able to meet international standards by obtaining ISO 14001: 2007 Certificate – Environmental Management System. Compliance with ISO 14001: 2007 – Environmental Management System is monitored by Safety, Health & Environment (SHE).</p>
                        </div>

                        <h2 class="text-2xl font-heading font-extrabold text-gray-900 mb-4">HSE Program</h2>
                        <div class="prose text-gray-600 max-w-none text-justify">
                            <p>Programs implemented within the OSH Enhancement Program include:</p>
                            <h4 class="text-lg font-bold text-gray-800 mt-4 mb-2">Implementation of Emergency Response System</h4>
                            <p>The Company provides HSE facilities and infrastructure such as fire extinguishers and Personal Protective Equipment (APD) and performs routine maintenance and reliability tests to ensure that all HSE facilities and infrastructure can be used where needed.</p>
                            <h4 class="text-lg font-bold text-gray-800 mt-4 mb-2">The implementation of HSE scorecard</h4>
                            <p>The implementation of HSE scorecard to measure the performance of HSE implementation, which is always discussed in Monthly Management.</p>
                            <h4 class="text-lg font-bold text-gray-800 mt-4 mb-2">HSE Socialization</h4>
                            <p>HSE socialization and training to all level of employees including the Board of Directors in order to improve HSE awareness.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section 3: Socio-cultural & Product Security --}}
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-2/5 relative min-h-[400px]">
                        {{-- Image Placeholder --}}
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('http://panelppre.pp-presisi.co.id/assets/images/28835b7cdd45d6cddb2b1ceb2143be5b.jpg');"></div>
                    </div>
                    <div class="w-full md:w-3/5 p-8 md:p-12">
                        
                        <h2 class="text-2xl font-heading font-extrabold text-gray-900 mb-4">Socio-Cultural Partnership and Development Program</h2>
                        <div class="prose text-gray-600 max-w-none text-justify mb-10">
                            <p>Partnership Program include:</p>
                            <ol class="list-decimal pl-5 space-y-2">
                                <li>Engage local communities through cooperatives or local small entrepreneurs to become local sub-contractors, for activities that can be done by them.</li>
                                <li>Provide modern management training to local small entrepreneurs who have the potential to grow.</li>
                                <li>Provide the widest opportunity to local communities to become employees and workers on the Company’s projects.</li>
                            </ol>
                        </div>

                        <h2 class="text-2xl font-heading font-extrabold text-gray-900 mb-4">Product and Service Security Improvement Program</h2>
                        <div class="prose text-gray-600 max-w-none text-justify">
                            <p>It can not be denied that many factors can affect the quality of products and services, among them is the level of implementation of corporate social responsibility above, in addition to the implementation of the quality management system itself. It has become the Company’s commitment that the Security of Products and Services produced is a non-negotiable requirement. As the cornerstone of this commitment, the Company has achieved ISO 9001: 2015- Quality Management. In addition, the Company also has a Quick Response Unit (Call Center) as a tool for consumers or project employees to submit information about complaints against heavy equipment used in the project.</p>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
