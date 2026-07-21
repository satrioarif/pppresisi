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
    $mNavClass = fn ($active) => 'block px-3 py-2 rounded-lg text-base font-medium ' . ($active ? 'text-ppblue-700 font-bold bg-ppblue-50' : 'text-gray-700 hover:text-ppblue-700 hover:bg-ppblue-50');
    $mSubClass = fn ($active) => 'block pl-6 pr-3 py-2 text-sm font-medium ' . ($active ? 'text-ppblue-700 font-bold bg-ppblue-50' : 'text-gray-600 hover:text-ppblue-700 hover:bg-ppblue-50');
@endphp

<nav
    x-data="{ mobileOpen: false, openDropdown: null }"
    @keydown.escape.window="openDropdown = null; mobileOpen = false"
    class="fixed w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm"
    aria-label="Primary"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                <img src="{{ asset('images/logo-pp.png') }}" alt="PT PP Presisi Tbk" class="h-12 w-auto drop-shadow-sm" width="65" height="79">
            </a>

            <!-- Mobile Menu Button -->
            <div class="flex md:hidden items-center">
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    aria-controls="mobile-menu"
                    aria-label="Toggle navigation menu"
                    class="text-gray-600 hover:text-ppblue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-ppblue-500 focus-visible:ring-offset-2 rounded-lg p-2"
                >
                    <svg x-cloak x-show="!mobileOpen" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-cloak x-show="mobileOpen" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/') }}" class="{{ $navLinkClass(request()->is('/')) }}">Home</a>

                <!-- About Us Dropdown -->
                <div class="relative" @click.outside="openDropdown === 'about' && (openDropdown = null)">
                    <button
                        type="button"
                        @click="openDropdown = openDropdown === 'about' ? null : 'about'"
                        :aria-expanded="openDropdown === 'about'"
                        aria-haspopup="true"
                        class="{{ $navGroupClass(request()->is('about*')) }}"
                    >
                        About Us
                        <svg class="w-4 h-4 transition-transform duration-200" :class="openDropdown === 'about' && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div
                        x-cloak x-show="openDropdown === 'about'" x-transition.origin.top.left
                        role="menu"
                        class="absolute left-0 top-full mt-1 w-48 bg-white border border-gray-100 shadow-xl rounded-xl overflow-hidden"
                    >
                        <a role="menuitem" href="{{ url('about/profile') }}" class="{{ $navItemClass(request()->is('about/profile'), 'rounded-t-xl') }}">Company Profile</a>
                        <a role="menuitem" href="{{ url('about/structure') }}" class="{{ $navItemClass(request()->is('about/structure')) }}">Company Structure</a>
                        <a role="menuitem" href="{{ url('about/boards') }}" class="{{ $navItemClass(request()->is('about/boards')) }}">Boards</a>
                        <a role="menuitem" href="{{ url('about/miscellaneous') }}" class="{{ $navItemClass(request()->is('about/miscellaneous')) }}">Miscellaneous</a>
                        <a role="menuitem" href="{{ url('about/awards') }}" class="{{ $navItemClass(request()->is('about/awards'), 'rounded-b-xl') }}">Awards</a>
                    </div>
                </div>

                <!-- Business Unit Dropdown -->
                <div class="relative" @click.outside="openDropdown === 'business' && (openDropdown = null)">
                    <button
                        type="button"
                        @click="openDropdown = openDropdown === 'business' ? null : 'business'"
                        :aria-expanded="openDropdown === 'business'"
                        aria-haspopup="true"
                        class="{{ $navGroupClass(request()->is('business*')) }}"
                    >
                        Business Unit
                        <svg class="w-4 h-4 transition-transform duration-200" :class="openDropdown === 'business' && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div
                        x-cloak x-show="openDropdown === 'business'" x-transition.origin.top.left
                        role="menu"
                        class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl overflow-hidden"
                    >
                        <a role="menuitem" href="{{ url('business/civil-work') }}" class="{{ $navItemClass(request()->is('business/civil-work'), 'rounded-t-xl') }}">Civil Work</a>
                        <a role="menuitem" href="{{ url('business/mining-services') }}" class="{{ $navItemClass(request()->is('business/mining-services')) }}">Mining Services</a>
                        <a role="menuitem" href="{{ url('business/heavy-equipment') }}" class="{{ $navItemClass(request()->is('business/heavy-equipment'), 'rounded-b-xl') }}">Heavy Equipment</a>
                    </div>
                </div>

                <!-- Investor Relations Dropdown -->
                <div class="relative" @click.outside="openDropdown === 'investor' && (openDropdown = null)">
                    <button
                        type="button"
                        @click="openDropdown = openDropdown === 'investor' ? null : 'investor'"
                        :aria-expanded="openDropdown === 'investor'"
                        aria-haspopup="true"
                        class="{{ $navGroupClass(request()->is('investor*')) }}"
                    >
                        Investor Relations
                        <svg class="w-4 h-4 transition-transform duration-200" :class="openDropdown === 'investor' && 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div
                        x-cloak x-show="openDropdown === 'investor'" x-transition.origin.top.left
                        role="menu"
                        class="absolute left-0 top-full mt-1 w-56 bg-white border border-gray-100 shadow-xl rounded-xl overflow-hidden"
                    >
                        <a role="menuitem" href="{{ url('investor/report') }}" class="{{ $navItemClass(request()->is('investor/report'), 'rounded-t-xl') }}">Reports</a>
                        <a role="menuitem" href="{{ url('investor/stock') }}" class="{{ $navItemClass(request()->is('investor/stock')) }}">Stock Info</a>
                        <a role="menuitem" href="{{ url('investor/presentation') }}" class="{{ $navItemClass(request()->is('investor/presentation')) }}">Presentations</a>
                        <a role="menuitem" href="{{ url('investor/rups') }}" class="{{ $navItemClass(request()->is('investor/rups')) }}">RUPS / GMS</a>
                        <a role="menuitem" href="{{ url('investor/corporate-action') }}" class="{{ $navItemClass(request()->is('investor/corporate-action')) }}">Corporate Action</a>
                        <a role="menuitem" href="{{ url('investor/prospectus') }}" class="{{ $navItemClass(request()->is('investor/prospectus')) }}">Prospectus</a>
                        <a role="menuitem" href="{{ url('investor/capital-market') }}" class="{{ $navItemClass(request()->is('investor/capital-market')) }}">Capital Market</a>
                        <a role="menuitem" href="{{ url('investor/transparency-of-information') }}" class="{{ $navItemClass(request()->is('investor/transparency-of-information'), 'rounded-b-xl') }}">Transparency of Information</a>
                    </div>
                </div>

                <a href="{{ url('gcg') }}" class="{{ $navLinkClass(request()->is('gcg*')) }}">GCG</a>
                <a href="{{ url('csr') }}" class="{{ $navLinkClass(request()->is('csr*')) }}">CSR</a>
                <a href="{{ url('news') }}" class="{{ $navLinkClass(request()->is('news*')) }}">News</a>
                <a href="{{ url('contact') }}" class="{{ $navLinkClass(request()->is('contact*')) }}">Contact</a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div
        id="mobile-menu"
        x-cloak x-show="mobileOpen"
        x-transition
        class="md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 top-20 max-h-[calc(100vh-5rem)] overflow-y-auto"
    >
        <div class="px-4 py-4 space-y-2">
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
            <a href="{{ url('news') }}" class="{{ $mNavClass(request()->is('news*')) }}">News</a>
            <a href="{{ url('contact') }}" class="{{ $mNavClass(request()->is('contact*')) }}">Contact</a>
        </div>
    </div>
</nav>
