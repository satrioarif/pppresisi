@extends('layouts.main')
@section('title', 'Corporate Policy - GCG | PP Presisi')

@section('content')

<x-page-header badge="Good Corporate Governance">
    Corporate <span class="text-ppblue-300">Policy</span>
</x-page-header>

<section class="py-16 min-h-screen bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- GCG Nav --}}
        @include('gcg._nav')

        <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden mt-8">
            <div class="flex flex-col md:flex-row">
                <div class="p-8 md:p-12 flex-1">
                    <h2 class="text-3xl font-heading font-extrabold text-gray-900 mb-2">Company Policy</h2>
                    <h3 class="text-lg font-medium text-ppblue-600 mb-8">Quality Policy, Safety, Health and Environment Policy, Risk Management Policy, Information Security Policy</h3>
                    
                    <div class="prose prose-lg text-gray-600 max-w-none text-justify space-y-6">
                        <p>
                            In order to achieve vision & mission of Quality, Safety & Healthy, Environment, Risk Management & Information Security, PT PP Presisi Tbk to set up & socialize Company Policy.
                        </p>
                        <p>
                            The Company also implement Good Corporate Governance (GCG) which has become a necessary requirement in increasing stakeholder trust.
                        </p>
                        <p>
                            We work in the highest culture of integrity and compliance. PP Presisi adopts best GCG practices throughout the Company's operations and finances.
                        </p>
                        <p>
                            By applying the principles of GCG namely Transparency, Accountability, Responsibility, Independence and Fairness known as TARIF, we are committed to maximizing company values, to increase stakeholder value, improve performance and competitiveness as well as enhance a conducive work environment.
                        </p>
                        <p>
                            The Company also encourages the implementation of corporate social responsibility to the surrounding community to increase investor confidence and sustainable growth. The main principles in sustainable development are the principles of economic welfare, social justice and environmental preservation.
                        </p>
                    </div>
                </div>
                
                {{-- Decorative Side Image (Optional, using a gradient placeholder for now to match the "rich aesthetics" requirement without a real image) --}}
                <div class="hidden md:block w-1/3 relative bg-gradient-to-br from-ppblue-900 to-ppblue-500">
                    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'#ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
