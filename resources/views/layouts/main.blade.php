<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT PP Presisi Tbk')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
    
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
                            sans: ['Inter', 'sans-serif'],
                            heading: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            ppblue: {
                                50: '#eff6ff',
                                500: '#3b82f6',
                                700: '#1d4ed8',
                                900: '#0f172a',
                            },
                            ppyellow: '#f59e0b',
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
                    <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-12 w-auto drop-shadow-sm">
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
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-ppblue-700 font-medium transition py-2">Home</a>
                    
                    <!-- About Us Dropdown -->
                    <div class="group relative">
                        <a href="#" class="text-gray-600 hover:text-ppblue-700 font-medium py-2 flex items-center gap-1">
                            About Us
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-48 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('about/profile') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-t-xl transition">Company Profile</a>
                            <a href="{{ url('about/structure') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Company Structure</a>
                            <a href="{{ url('about/boards') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Boards</a>
                            <a href="{{ url('about/awards') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-b-xl transition">Awards</a>
                        </div>
                    </div>

                    <!-- Business Unit Dropdown -->
                    <div class="group relative">
                        <a href="#" class="text-gray-600 hover:text-ppblue-700 font-medium py-2 flex items-center gap-1">
                            Business Unit
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('business/civil-work') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-t-xl transition">Civil Work</a>
                            <a href="{{ url('business/mining-services') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Mining Services</a>
                            <a href="{{ url('business/heavy-equipment') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-b-xl transition">Heavy Equipment</a>
                        </div>
                    </div>

                    <!-- Investor Relations Dropdown -->
                    <div class="group relative">
                        <a href="#" class="text-gray-600 hover:text-ppblue-700 font-medium py-2 flex items-center gap-1">
                            Investor Relations
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100">
                            <a href="{{ url('investor/report') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-t-xl transition">Financial Reports</a>
                            <a href="{{ url('investor/stock') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Stock Info</a>
                            <a href="{{ url('investor/presentation') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Presentations</a>
                            <a href="{{ url('investor/rups') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">RUPS / GMS</a>
                            <a href="{{ url('investor/corporate-action') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Corporate Action</a>
                            <a href="{{ url('investor/prospectus') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 transition">Prospectus</a>
                            <a href="{{ url('investor/capital-market') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-b-xl transition">Capital Market</a>
                        </div>
                    </div>

                    <!-- GCG & CSR Dropdown -->
                    <div class="group relative">
                        <a href="#" class="text-gray-600 hover:text-ppblue-700 font-medium py-2 flex items-center gap-1">
                            GCG & CSR
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <div class="absolute left-0 top-full mt-1 w-64 bg-white border border-gray-100 shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100 p-2">
                            <div class="text-xs font-bold text-gray-400 uppercase tracking-wider px-3 py-2">Governance</div>
                            <a href="{{ url('gcg/guidelines') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-lg transition">Code of Conduct & Policy</a>
                            <a href="{{ url('gcg/committees') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-lg transition">Committees & Audit</a>
                            <a href="{{ url('gcg/whistleblowing') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-lg transition mb-2">Whistleblowing System</a>
                            
                            <div class="border-t border-gray-100 my-1"></div>
                            
                            <div class="text-xs font-bold text-gray-400 uppercase tracking-wider px-3 py-2 mt-1">Responsibility</div>
                            <a href="{{ url('csr/community') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-lg transition">Community Development</a>
                            <a href="{{ url('csr/hse') }}" class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-ppblue-700 rounded-lg transition">Health, Safety & Environment</a>
                        </div>
                    </div>

                    <a href="{{ url('projects') }}" class="text-gray-600 hover:text-ppblue-700 font-medium transition py-2">Projects</a>
                    <a href="{{ url('news') }}" class="text-gray-600 hover:text-ppblue-700 font-medium transition py-2">News</a>
                    <a href="{{ url('contact') }}" class="text-gray-600 hover:text-ppblue-700 font-medium transition py-2">Contact</a>
                    

                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-20 max-h-[calc(100vh-5rem)] overflow-y-auto">
            <div class="px-4 py-4 space-y-2">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-ppblue-700 hover:bg-blue-50">Home</a>
                
                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">About Us</div>
                    <a href="{{ url('about/profile') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Company Profile</a>
                    <a href="{{ url('about/structure') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Company Structure</a>
                    <a href="{{ url('about/boards') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Boards</a>
                    <a href="{{ url('about/awards') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Awards</a>
                </div>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">Business Unit</div>
                    <a href="{{ url('business/civil-work') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Civil Work</a>
                    <a href="{{ url('business/mining-services') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Mining Services</a>
                    <a href="{{ url('business/heavy-equipment') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Heavy Equipment</a>
                </div>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">Investor Relations</div>
                    <a href="{{ url('investor/report') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Financial Reports</a>
                    <a href="{{ url('investor/stock') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Stock Info</a>
                    <a href="{{ url('investor/presentation') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Presentations</a>
                    <a href="{{ url('investor/rups') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">RUPS / GMS</a>
                    <a href="{{ url('investor/corporate-action') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Corporate Action</a>
                    <a href="{{ url('investor/prospectus') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Prospectus</a>
                    <a href="{{ url('investor/capital-market') }}" class="block pl-6 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Capital Market</a>
                </div>

                <div class="space-y-1">
                    <div class="px-3 py-2 text-base font-bold text-gray-900 border-b border-gray-100">GCG & CSR</div>
                    <div class="px-6 py-1 text-xs font-bold text-gray-400 uppercase">Governance</div>
                    <a href="{{ url('gcg/guidelines') }}" class="block pl-8 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Code of Conduct</a>
                    <a href="{{ url('gcg/committees') }}" class="block pl-8 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Committees & Audit</a>
                    <a href="{{ url('gcg/whistleblowing') }}" class="block pl-8 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Whistleblowing</a>
                    <div class="px-6 py-1 text-xs font-bold text-gray-400 uppercase mt-2">Responsibility</div>
                    <a href="{{ url('csr/community') }}" class="block pl-8 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">Community Development</a>
                    <a href="{{ url('csr/hse') }}" class="block pl-8 pr-3 py-2 text-sm font-medium text-gray-600 hover:text-ppblue-700 hover:bg-blue-50">HSE</a>
                </div>

                <a href="{{ url('projects') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-ppblue-700 hover:bg-blue-50 border-t border-gray-100 mt-2 pt-2">Projects</a>
                <a href="{{ url('news') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-ppblue-700 hover:bg-blue-50">News</a>
                <a href="{{ url('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-ppblue-700 hover:bg-blue-50">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <div class="mb-6 inline-block bg-white/10 backdrop-blur p-3 rounded-2xl border border-white/20">
                    <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-10 w-auto brightness-0 invert">
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
                    <li><a href="#" class="hover:text-white transition">Projects</a></li>
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
