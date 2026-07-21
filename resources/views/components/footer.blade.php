<footer class="bg-ppblue-900 text-gray-300 py-section-md border-t border-ppblue-800" aria-label="Site footer">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
        <div class="col-span-1 md:col-span-2">
            <div class="mb-6 inline-block bg-white/10 backdrop-blur p-3 rounded-card border border-white/20">
                <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-10 w-auto brightness-0 invert" width="65" height="79" loading="lazy">
            </div>
            <p class="text-gray-400 mb-6 max-w-sm">
                PT PP Presisi Tbk. Transforming the landscape of national infrastructure and mining with cutting-edge technology and heavy equipment.
            </p>
        </div>

        <div>
            <h4 class="text-white font-bold mb-6">Quick Links</h4>
            <ul class="space-y-3">
                <li><a href="{{ url('about/profile') }}" class="hover:text-white transition focus-visible:outline-none focus-visible:underline">About Us</a></li>
                <li><a href="{{ url('business/civil-work') }}" class="hover:text-white transition focus-visible:outline-none focus-visible:underline">Business Units</a></li>
                <li><a href="{{ url('investor/report') }}" class="hover:text-white transition focus-visible:outline-none focus-visible:underline">Investor Relations</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-bold mb-6">Contact Us</h4>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-gray-500 mr-3 mt-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span>Plaza PP - Wisma Subiyanto<br>Jl. Letjend TB Simatupang No. 57<br>Pasar Rebo, Jakarta 13760</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 text-sm text-center md:text-left flex flex-col md:flex-row justify-between">
        <p>&copy; {{ date('Y') }} PT PP Presisi Tbk. All rights reserved.</p>
    </div>
</footer>
