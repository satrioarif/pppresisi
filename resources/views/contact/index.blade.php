@extends('layouts.main')
@section('title', 'Contact Us - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="pt-40 pb-24 relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('images/home/1a2036e6855da20155f60e4087f2837e.jpg') }}');">
    <div class="absolute inset-0 bg-ppblue-900/80 z-0"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Get in Touch</h1>
        <p class="text-gray-200 text-lg max-w-2xl mx-auto">Have questions about our services or investor relations? Reach out to our team.</p>
    </div>
</div>

<div class="bg-slate-100 border-t border-gray-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    
    @if(session('success'))
        <div class="mb-10 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-lg flex items-center shadow-sm">
            <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <p class="text-green-800 font-medium">{{ session('success') }}</p>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
        
        <!-- Contact Info & Map -->
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Head Office</h3>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-ppblue-50 text-ppblue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 block mb-1">Address</span>
                            <span class="text-gray-600">Plaza PP - Wisma Subiyanto<br>Jl. Letjend TB Simatupang No. 57<br>Pasar Rebo, Jakarta 13760</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-ppblue-50 text-ppblue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 block mb-1">Phone</span>
                            <span class="text-gray-600">+62 21 8415569</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-ppblue-50 text-ppblue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 block mb-1">Email</span>
                            <span class="text-gray-600">corsec@pp-presisi.co.id</span>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden relative h-64 group">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8454471804975!2d106.86241321476948!3d-6.28409399545187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f298f2445107%3A0xc07a82c4f141fbce!2sPT%20PP%20Presisi%20Tbk!5e0!3m2!1sen!2sid!4v1655000000000!5m2!1sen!2sid" width="100%" height="100%" style="border:0; pointer-events: none;" allowfullscreen="" loading="lazy"></iframe>
                
                <a href="https://maps.google.com/?q=Plaza+PP,+Jl.+Letjend+TB+Simatupang+No.57,+Pasar+Rebo,+Jakarta" target="_blank" class="absolute inset-0 z-10 flex items-center justify-center bg-black/10 group-hover:bg-black/30 transition-all duration-300">
                    <span class="bg-white text-ppblue-700 font-bold px-6 py-3 rounded-xl shadow-lg flex items-center gap-2 transform group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Buka di Google Maps
                    </span>
                </a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-3">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-gray-100">
                <h2 class="text-3xl font-heading font-bold text-gray-900 mb-2">Send us a Message</h2>
                <p class="text-gray-500 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <form action="/contact" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2" for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2" for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2" for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2" for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50">
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm font-bold text-gray-700 mb-2" for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50 resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full md:w-auto px-10 py-4 bg-ppblue-500 hover:bg-ppblue-700 text-white font-bold rounded-xl transition shadow-lg shadow-ppblue-500/30 flex justify-center items-center">
                        Send Message
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
