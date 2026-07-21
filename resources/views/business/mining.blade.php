@extends('layouts.main')
@section('title', 'Mining Services - PT PP Presisi Tbk')

@section('content')
<x-page-header
    image="{{ asset('images/home/0bc798a5e2bf375cef74a5c5f3c69a4a.jpg') }}"
    badge="BUSINESS UNIT"
    subtitle="Providing comprehensive end-to-end mining contractor services from land clearing to ore hauling."
    class="reveal fade-bottom"
>
    Mining Services
</x-page-header>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('business/civil-work') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Civil Work</a>
            <a href="{{ url('business/mining-services') }}" class="px-6 py-3 rounded-full transition-all duration-300 bg-ppblue-900 text-white font-bold shadow-md">Mining Services</a>
            <a href="{{ url('business/heavy-equipment') }}" class="px-6 py-3 rounded-full transition-all duration-300 text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium">Equipment Rental</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
        <div class="reveal fade-left">
            <div class="w-16 h-1 bg-accent mb-6 rounded-full"></div>
            <h2 class="text-4xl font-heading font-black text-gray-900 mb-8">What is Mining Services</h2>
            <div class="prose max-w-none text-gray-600 text-lg leading-relaxed space-y-6">
                <p>
                    Mining services is the Company's new business line as resulting of improved engineering capacity, from only having the capability of coal hauling to have the ability to carry out integrated mining services.
                </p>
                <p>
                    The mining services business line is not new to the Company. The Company's subsidiary, LMA has been working on mining services since 2002, even before the LMA entered the civil work business in 2004.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-6 h-full reveal fade-right">
            <div class="rounded-[2.5rem] h-64 overflow-hidden shadow-2xl shadow-gray-200/50 transform translate-y-12 group border border-gray-100">
                <img src="{{ asset('images/home/0d9e6513867afcfe345e5bcbbdc245b8.jpg') }}" alt="Mining Equipment" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="569" height="320" loading="lazy">
            </div>
            <div class="rounded-[2.5rem] h-80 overflow-hidden shadow-2xl shadow-gray-200/50 group border border-gray-100">
                <img src="{{ asset('images/home/18f933c427df7d0c630d46428e682a0e - Copy.jpg') }}" alt="Mining Hauling" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700" width="1920" height="1080" loading="lazy">
            </div>
        </div>
    </div>
</div>

<x-cta-band subtitle="Let's discuss how our integrated mining services can support your operation." buttonHref="{{ url('contact') }}" class="reveal fade-bottom">
    Have a mining project in mind?
</x-cta-band>
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
