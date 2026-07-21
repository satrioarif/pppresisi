<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT PP Presisi Tbk')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Vite / Tailwind -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Space Grotesk"', 'sans-serif'],
                            heading: ['"Space Grotesk"', 'sans-serif'],
                        },
                        colors: {
                            ppblue: {
                                50: '#f8fafc',
                                100: '#f1f5f9',
                                500: '#3b82f6',
                                600: '#1e3a8a',
                                700: '#1e3a8a',
                                800: '#172554',
                                900: '#0f172a',
                            },
                            accent: '#ea580c',
                            ppyellow: '#f59e0b',
                            gold: '#ca8a04',
                        }
                    }
                }
            }
        </script>
    @endif
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 selection:bg-ppblue-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-12 w-auto drop-shadow-sm" width="65" height="79">
                </a>
                
                
                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-ppblue-700 focus:outline-none focus:text-ppblue-700 p-2">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6 items-center">
                    @php
                        $navLinkClass = fn ($active) => $active
                            ? 'text-ppblue-700 font-bold transition py-2'
                            : 'text-gray-600 hover:text-ppblue-700 font-medium transition py-2';
                        $navGroupClass = fn ($active) => $active
                            ? 'text-ppblue-700 font-bold py-2 flex items-center gap-1'
                            : 'text-gray-600 hover:text-ppblue-700 font-medium py-2 flex items-center gap-1';
                        $navItemClass = fn ($active, $rounded = '') => 'block px-4 py-2.5 text-sm transition ' . $rounded . ' ' . ($active
                            ? 'bg-ppblue-50 text-ppblue-700 font-semibold'
                            : 'text-gray-700 hover:bg-ppblue-50 hover:text-ppblue-700');
                    @endphp
                    <a href="{{ url('/') }}" class="{{ $navLinkClass(request()->is('/')) }}">Home</a>

                    <!-- About Us Dropdown -->
                    <div class="group relative">
                        <a href="#" class="{{ $navGroupClass(request()->is('about*')) }}">
                            About Us
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-48 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('about/profile') }}" class="{{ $navItemClass(request()->is('about/profile'), 'rounded-t-xl') }}">Company Profile</a>
                            <a href="{{ url('about/structure') }}" class="{{ $navItemClass(request()->is('about/structure')) }}">Company Structure</a>
                            <a href="{{ url('about/boards') }}" class="{{ $navItemClass(request()->is('about/boards')) }}">Boards</a>
                            <a href="{{ url('about/miscellaneous') }}" class="{{ $navItemClass(request()->is('about/miscellaneous')) }}">Miscellaneous</a>
                            <a href="{{ url('about/awards') }}" class="{{ $navItemClass(request()->is('about/awards'), 'rounded-b-xl') }}">Awards</a>
                        </div>
                    </div>

                    <!-- Business Unit Dropdown -->
                    <div class="group relative">
                        <a href="#" class="{{ $navGroupClass(request()->is('business*')) }}">
                            Business Unit
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('business/civil-work') }}" class="{{ $navItemClass(request()->is('business/civil-work'), 'rounded-t-xl') }}">Civil Work</a>
                            <a href="{{ url('business/mining-services') }}" class="{{ $navItemClass(request()->is('business/mining-services')) }}">Mining Services</a>
                            <a href="{{ url('business/heavy-equipment') }}" class="{{ $navItemClass(request()->is('business/heavy-equipment'), 'rounded-b-xl') }}">Heavy Equipment</a>
                        </div>
                    </div>

                    <!-- Investor Relations Dropdown -->
                    <div class="group relative">
                        <a href="#" class="{{ $navGroupClass(request()->is('investor*')) }}">
                            Investor Relations
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('investor/report') }}" class="{{ $navItemClass(request()->is('investor/report'), 'rounded-t-xl') }}">Reports</a>
                            <a href="{{ url('investor/stock') }}" class="{{ $navItemClass(request()->is('investor/stock')) }}">Stock Info</a>
                            <a href="{{ url('investor/presentation') }}" class="{{ $navItemClass(request()->is('investor/presentation')) }}">Presentations</a>
                            <a href="{{ url('investor/rups') }}" class="{{ $navItemClass(request()->is('investor/rups')) }}">RUPS / GMS</a>
                            <a href="{{ url('investor/corporate-action') }}" class="{{ $navItemClass(request()->is('investor/corporate-action')) }}">Corporate Action</a>
                            <a href="{{ url('investor/prospectus') }}" class="{{ $navItemClass(request()->is('investor/prospectus')) }}">Prospectus</a>
                            <a href="{{ url('investor/capital-market') }}" class="{{ $navItemClass(request()->is('investor/capital-market')) }}">Capital Market</a>
                            <a href="{{ url('investor/transparency-of-information') }}" class="{{ $navItemClass(request()->is('investor/transparency-of-information'), 'rounded-b-xl') }}">Transparency of Information</a>
                        </div>
                    </div>

                    <a href="{{ url('gcg') }}" class="{{ $navLinkClass(request()->is('gcg*')) }}">GCG</a>
                    <a href="{{ url('csr') }}" class="{{ $navLinkClass(request()->is('csr*')) }}">CSR</a>

                    {{-- <a href="{{ url('projects') }}" class="text-gray-600 hover:text-ppblue-700 font-medium transition py-2">Projects</a> --}}
                    <a href="{{ url('news') }}" class="{{ $navLinkClass(request()->is('news*')) }}">News</a>
                    <a href="{{ url('contact') }}" class="{{ $navLinkClass(request()->is('contact*')) }}">Contact</a>


                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-20 max-h-[calc(100vh-5rem)] overflow-y-auto">
            <div class="px-4 py-4 space-y-2">
                @php
                    $mNavClass = fn ($active) => 'block px-3 py-2 rounded-md text-base font-medium ' . ($active ? 'text-ppblue-700 font-bold bg-ppblue-50' : 'text-gray-700 hover:text-ppblue-700 hover:bg-ppblue-50');
                    $mSubClass = fn ($active) => 'block pl-6 pr-3 py-2 text-sm font-medium ' . ($active ? 'text-ppblue-700 font-bold bg-ppblue-50' : 'text-gray-600 hover:text-ppblue-700 hover:bg-ppblue-50');
                @endphp
                <a href="{{ url('/') }}" class="{{ $mNavClass(request()->is('/')) }}">Home</a>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">About Us</div>
                    <a href="{{ url('about/profile') }}" class="{{ $mSubClass(request()->is('about/profile')) }}">Company Profile</a>
                    <a href="{{ url('about/structure') }}" class="{{ $mSubClass(request()->is('about/structure')) }}">Company Structure</a>
                    <a href="{{ url('about/boards') }}" class="{{ $mSubClass(request()->is('about/boards')) }}">Boards</a>
                    <a href="{{ url('about/miscellaneous') }}" class="{{ $mSubClass(request()->is('about/miscellaneous')) }}">Miscellaneous</a>
                    <a href="{{ url('about/awards') }}" class="{{ $mSubClass(request()->is('about/awards')) }}">Awards</a>
                </div>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">Business Unit</div>
                    <a href="{{ url('business/civil-work') }}" class="{{ $mSubClass(request()->is('business/civil-work')) }}">Civil Work</a>
                    <a href="{{ url('business/mining-services') }}" class="{{ $mSubClass(request()->is('business/mining-services')) }}">Mining Services</a>
                    <a href="{{ url('business/heavy-equipment') }}" class="{{ $mSubClass(request()->is('business/heavy-equipment')) }}">Heavy Equipment</a>
                </div>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">Investor Relations</div>
                    <a href="{{ url('investor/report') }}" class="{{ $mSubClass(request()->is('investor/report')) }}">Financial Reports</a>
                    <a href="{{ url('investor/stock') }}" class="{{ $mSubClass(request()->is('investor/stock')) }}">Stock Info</a>
                    <a href="{{ url('investor/presentation') }}" class="{{ $mSubClass(request()->is('investor/presentation')) }}">Presentations</a>
                    <a href="{{ url('investor/rups') }}" class="{{ $mSubClass(request()->is('investor/rups')) }}">RUPS / GMS</a>
                    <a href="{{ url('investor/corporate-action') }}" class="{{ $mSubClass(request()->is('investor/corporate-action')) }}">Corporate Action</a>
                    <a href="{{ url('investor/prospectus') }}" class="{{ $mSubClass(request()->is('investor/prospectus')) }}">Prospectus</a>
                    <a href="{{ url('investor/capital-market') }}" class="{{ $mSubClass(request()->is('investor/capital-market')) }}">Capital Market</a>
                    <a href="{{ url('investor/transparency-of-information') }}" class="{{ $mSubClass(request()->is('investor/transparency-of-information')) }}">Transparency of Information</a>
                </div>

                <a href="{{ url('gcg') }}" class="{{ $mNavClass(request()->is('gcg*')) }} border-t border-gray-100 mt-2 pt-2">GCG</a>
                <a href="{{ url('csr') }}" class="{{ $mNavClass(request()->is('csr*')) }}">CSR</a>
                {{-- <a href="{{ url('projects') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-ppblue-700 hover:bg-blue-50">Projects</a> --}}
                <a href="{{ url('news') }}" class="{{ $mNavClass(request()->is('news*')) }}">News</a>
                <a href="{{ url('contact') }}" class="{{ $mNavClass(request()->is('contact*')) }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-ppblue-900 text-gray-300 py-16 border-t border-ppblue-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <div class="mb-6 inline-block bg-white/10 backdrop-blur p-3 rounded-2xl border border-white/20">
                    <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-10 w-auto brightness-0 invert" width="65" height="79" loading="lazy">
                </div>
                <p class="text-gray-400 mb-6 max-w-sm">
                    PT PP Presisi Tbk. Transforming the landscape of national infrastructure and mining with cutting-edge technology and heavy equipment.
                </p>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('about/profile') }}" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition">Business Units</a></li>
                    {{-- <li><a href="#" class="hover:text-white transition">Projects</a></li> --}}
                    <li><a href="#" class="hover:text-white transition">Investor Relations</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Plaza PP - Wisma Subiyanto<br>Jl. Letjend TB Simatupang No. 57<br>Pasar Rebo, Jakarta 13760</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-8 border-t border-gray-800 text-sm text-center md:text-left flex flex-col md:flex-row justify-between">
            <p>&copy; {{ date('Y') }} PT PP Presisi Tbk. All rights reserved.</p>
        </div>
    </footer>
    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            
            if(btn && menu) {
                btn.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
