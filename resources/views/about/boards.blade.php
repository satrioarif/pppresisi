@extends('layouts.main')
@section('title', 'Boards - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-gradient-to-br from-ppblue-900 to-ppblue-800 pt-40 pb-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('{{ asset('images/pattern-grid.png') }}')] opacity-5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal fade-bottom">
        <h1 class="text-5xl md:text-6xl font-heading font-black text-white mb-4">Board of Directors & Commissioners</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto">The experienced leadership team steering PT PP Presisi Tbk towards sustainable growth and excellence.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-10 text-sm text-gray-500 flex items-center reveal fade-bottom">
        <a href="{{ url('/') }}" class="hover:text-accent transition font-semibold">Home</a>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="hover:text-accent transition cursor-pointer font-semibold">About Us</span>
        <span class="mx-3 font-bold text-gray-300">/</span>
        <span class="text-gray-900 font-bold">Boards</span>
    </div>

    <!-- Inner Tabs -->
    <div class="mb-16 overflow-x-auto pb-4 reveal fade-bottom" style="transition-delay: 100ms;">
        <div class="flex space-x-2 min-w-max bg-gray-50 p-2 rounded-full border border-gray-100 shadow-sm w-max">
            <a href="{{ url('about/profile') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/profile') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/structure') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/boards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/miscellaneous') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="px-6 py-3 rounded-full transition-all duration-300 {{ request()->is('about/awards') ? 'bg-ppblue-900 text-white font-bold shadow-md' : 'text-gray-500 hover:text-ppblue-900 hover:bg-ppblue-50 font-medium' }}">Awards</a>
        </div>
    </div>

    @if(isset($boards) && $boards->count() > 0)
        <!-- Board of Commissioners -->
        <!-- Board of Commissioners -->
        <div class="text-center mb-12 reveal fade-bottom">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-900 mb-4">Board of Commissioners</h2>
            <div class="w-24 h-1 bg-accent mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-24">
            @foreach($boards->where('type', 'komisaris') as $board)
                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-xl shadow-gray-200/50 border border-gray-100 hover:shadow-2xl hover:border-gray-200 hover:-translate-y-2 transition-all duration-500 group text-center p-8 flex flex-col items-center reveal fade-up">
                    <div class="w-56 h-56 mx-auto rounded-full bg-gray-100 mb-8 overflow-hidden border-[6px] border-white shadow-xl shadow-gray-200">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" width="224" height="224" loading="lazy">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-50 text-gray-400">
                                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-2 group-hover:text-accent transition-colors">{{ $board->name }}</h3>
                    <p class="text-gray-500 font-bold text-sm uppercase tracking-widest mb-6">{{ $board->position }}</p>
                    <button onclick="openModal('modal-{{ $board->id }}')" class="mt-auto px-8 py-3 bg-ppblue-900 text-white rounded-full font-bold text-xs uppercase tracking-widest hover:bg-ppblue-600 transition-colors shadow-lg shadow-ppblue-900/20">
                        VIEW BIO
                    </button>
                </div>

                <!-- Modal for {{ $board->name }} -->
                <div id="modal-{{ $board->id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/80 backdrop-blur-sm px-4 py-6" onclick="closeModalOnOutsideClick(event, 'modal-{{ $board->id }}')">
                    <div class="bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl relative flex flex-col md:flex-row overflow-hidden max-h-full border border-gray-100 transform scale-95 opacity-0 transition-all duration-300" id="modal-content-{{ $board->id }}">
                        <button onclick="closeModal('modal-{{ $board->id }}')" class="absolute top-6 right-6 text-gray-400 hover:text-gray-900 hover:bg-gray-100 z-10 bg-white rounded-full p-2 shadow-sm transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <div class="w-full md:w-2/5 bg-gray-100 flex-shrink-0 relative">
                            @if($board->image)
                                <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover min-h-[350px]" width="410" height="350" loading="lazy">
                            @else
                                <div class="w-full h-full min-h-[350px] flex items-center justify-center bg-gray-100 text-gray-400">
                                    <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent md:hidden"></div>
                        </div>
                        <div class="w-full md:w-3/5 p-8 md:p-12 overflow-y-auto max-h-[80vh] md:max-h-[600px] text-left">
                            <div class="mb-8">
                                <h3 class="text-3xl font-heading font-black text-gray-900 mb-2">{{ $board->name }}</h3>
                                <p class="text-accent font-bold tracking-widest uppercase text-sm">{{ $board->position }}</p>
                            </div>
                            <div class="prose max-w-none text-gray-600 text-base leading-relaxed text-justify">
                                {!! nl2br(e($board->description)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Board of Directors -->
        <!-- Board of Directors -->
        <div class="text-center mb-12 reveal fade-bottom">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-gray-900 mb-4">Board of Directors</h2>
            <div class="w-24 h-1 bg-accent mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($boards->where('type', 'direksi') as $board)
                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-xl shadow-gray-200/50 border border-gray-100 hover:shadow-2xl hover:border-gray-200 hover:-translate-y-2 transition-all duration-500 group text-center p-8 flex flex-col items-center reveal fade-up">
                    <div class="w-56 h-56 mx-auto rounded-full bg-gray-100 mb-8 overflow-hidden border-[6px] border-white shadow-xl shadow-gray-200">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" width="224" height="224" loading="lazy">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-50 text-gray-400">
                                <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-2 group-hover:text-accent transition-colors">{{ $board->name }}</h3>
                    <p class="text-gray-500 font-bold text-sm uppercase tracking-widest mb-6">{{ $board->position }}</p>
                    <button onclick="openModal('modal-{{ $board->id }}')" class="mt-auto px-8 py-3 bg-ppblue-900 text-white rounded-full font-bold text-xs uppercase tracking-widest hover:bg-ppblue-600 transition-colors shadow-lg shadow-ppblue-900/20">
                        VIEW BIO
                    </button>
                </div>

                <!-- Modal for {{ $board->name }} -->
                <div id="modal-{{ $board->id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-gray-900/80 backdrop-blur-sm px-4 py-6" onclick="closeModalOnOutsideClick(event, 'modal-{{ $board->id }}')">
                    <div class="bg-white w-full max-w-4xl rounded-[2.5rem] shadow-2xl relative flex flex-col md:flex-row overflow-hidden max-h-full border border-gray-100 transform scale-95 opacity-0 transition-all duration-300" id="modal-content-{{ $board->id }}">
                        <button onclick="closeModal('modal-{{ $board->id }}')" class="absolute top-6 right-6 text-gray-400 hover:text-gray-900 hover:bg-gray-100 z-10 bg-white rounded-full p-2 shadow-sm transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <div class="w-full md:w-2/5 bg-gray-100 flex-shrink-0 relative">
                            @if($board->image)
                                <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover min-h-[350px]" width="410" height="350" loading="lazy">
                            @else
                                <div class="w-full h-full min-h-[350px] flex items-center justify-center bg-gray-100 text-gray-400">
                                    <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent md:hidden"></div>
                        </div>
                        <div class="w-full md:w-3/5 p-8 md:p-12 overflow-y-auto max-h-[80vh] md:max-h-[600px] text-left">
                            <div class="mb-8">
                                <h3 class="text-3xl font-heading font-black text-gray-900 mb-2">{{ $board->name }}</h3>
                                <p class="text-accent font-bold tracking-widest uppercase text-sm">{{ $board->position }}</p>
                            </div>
                            <div class="prose max-w-none text-gray-600 text-base leading-relaxed text-justify">
                                {!! nl2br(e($board->description)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-24 bg-gray-50 rounded-[2.5rem] border-2 border-gray-200 border-dashed reveal fade-bottom">
            <svg class="w-20 h-20 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <h3 class="text-3xl font-black text-gray-800 mb-3">No Board Members Data</h3>
            <p class="text-gray-500 mb-8 text-lg">Please add board members via the admin panel.</p>
            <a href="{{ url('admin/boards/create') }}" class="px-8 py-3 bg-ppblue-900 text-white rounded-full font-bold uppercase tracking-widest hover:bg-ppblue-600 transition-colors shadow-lg shadow-ppblue-900/20">Go to Admin Panel</a>
        </div>
    @endif
</div>

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
    .fade-up { transform: translateY(60px); }
</style>
<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById('modal-content-' + id.split('-')[1]);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById('modal-content-' + id.split('-')[1]);
        if (modal) {
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    }

    function closeModalOnOutsideClick(event, id) {
        if (event.target.id === id) {
            closeModal(id);
        }
    }

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
