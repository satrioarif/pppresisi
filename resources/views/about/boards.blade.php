@extends('layouts.main')
@section('title', 'Boards - PT PP Presisi Tbk')

@section('content')
<!-- Page Header -->
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Board of Directors & Commissioners</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">The experienced leadership team steering PT PP Presisi Tbk towards sustainable growth and excellence.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <!-- Breadcrumb -->
    <div class="mb-8 text-sm text-gray-500 flex items-center">
        <a href="{{ url('/') }}" class="hover:text-ppblue-700 transition">Home</a>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="hover:text-ppblue-700 transition cursor-pointer">About Us</span>
        <span class="mx-2 font-bold">&gt;</span>
        <span class="text-gray-900 font-semibold">Boards</span>
    </div>

    <!-- Inner Tabs -->
    <div class="border-b border-gray-300 mb-10 overflow-x-auto">
        <div class="flex space-x-8 min-w-max">
            <a href="{{ url('about/profile') }}" class="pb-3 transition {{ request()->is('about/profile') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Profile</a>
            <a href="{{ url('about/structure') }}" class="pb-3 transition {{ request()->is('about/structure') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Company Structure</a>
            <a href="{{ url('about/boards') }}" class="pb-3 transition {{ request()->is('about/boards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Boards</a>
            <a href="{{ url('about/miscellaneous') }}" class="pb-3 transition {{ request()->is('about/miscellaneous') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Miscellaneous</a>
            <a href="{{ url('about/awards') }}" class="pb-3 transition {{ request()->is('about/awards') ? 'text-ppblue-700 border-b-4 border-ppblue-700 font-bold' : 'text-gray-400 hover:text-gray-900 font-medium' }}">Awards</a>
        </div>
    </div>

    @if(isset($boards) && $boards->count() > 0)
        <!-- Board of Commissioners -->
        <h2 class="text-3xl font-heading font-bold text-center text-ppblue-900 mb-12">Board of Commissioners</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
            @foreach($boards->where('type', 'komisaris') as $board)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 group text-center p-8 flex flex-col items-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-200 mb-6 overflow-hidden border-4 border-white shadow-md">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-ppblue-600 transition-colors">{{ $board->name }}</h3>
                    <p class="text-amber-600 font-medium text-sm uppercase tracking-wider mb-4">{{ $board->position }}</p>
                    <button onclick="openModal('modal-{{ $board->id }}')" class="mt-auto text-ppblue-600 font-semibold text-sm uppercase hover:text-ppblue-800 transition inline-flex items-center">
                        VIEW BIO
                    </button>
                </div>

                <!-- Modal for {{ $board->name }} -->
                <div id="modal-{{ $board->id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-60 px-4 py-6" onclick="closeModalOnOutsideClick(event, 'modal-{{ $board->id }}')">
                    <div class="bg-white w-full max-w-4xl rounded-xl shadow-2xl relative flex flex-col md:flex-row overflow-hidden max-h-full">
                        <button onclick="closeModal('modal-{{ $board->id }}')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 z-10 bg-white rounded-full p-1 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <div class="w-full md:w-2/5 bg-gray-100 flex-shrink-0">
                            @if($board->image)
                                <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover min-h-[300px]">
                            @else
                                <div class="w-full h-full min-h-[300px] flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                    <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                            @endif
                        </div>
                        <div class="w-full md:w-3/5 p-8 md:p-10 overflow-y-auto max-h-[80vh] md:max-h-full text-left">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-heading font-bold text-gray-900 mb-1">{{ $board->name }}</h3>
                                <p class="text-gray-600 font-medium">{{ $board->position }}</p>
                            </div>
                            <div class="prose max-w-none text-gray-700 text-sm md:text-base leading-relaxed text-justify">
                                {!! nl2br(e($board->description)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Board of Directors -->
        <h2 class="text-3xl font-heading font-bold text-center text-ppblue-900 mb-12">Board of Directors</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($boards->where('type', 'direksi') as $board)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 group text-center p-8 flex flex-col items-center">
                    <div class="w-48 h-48 mx-auto rounded-full bg-gray-200 mb-6 overflow-hidden border-4 border-white shadow-md">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-ppblue-600 transition-colors">{{ $board->name }}</h3>
                    <p class="text-ppblue-600 font-medium text-sm uppercase tracking-wider mb-4">{{ $board->position }}</p>
                    <button onclick="openModal('modal-{{ $board->id }}')" class="mt-auto text-ppblue-600 font-semibold text-sm uppercase hover:text-ppblue-800 transition inline-flex items-center">
                        VIEW BIO
                    </button>
                </div>

                <!-- Modal for {{ $board->name }} -->
                <div id="modal-{{ $board->id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-60 px-4 py-6" onclick="closeModalOnOutsideClick(event, 'modal-{{ $board->id }}')">
                    <div class="bg-white w-full max-w-4xl rounded-xl shadow-2xl relative flex flex-col md:flex-row overflow-hidden max-h-full">
                        <button onclick="closeModal('modal-{{ $board->id }}')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 z-10 bg-white rounded-full p-1 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                        <div class="w-full md:w-2/5 bg-gray-100 flex-shrink-0">
                            @if($board->image)
                                <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover min-h-[300px]">
                            @else
                                <div class="w-full h-full min-h-[300px] flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                    <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                            @endif
                        </div>
                        <div class="w-full md:w-3/5 p-8 md:p-10 overflow-y-auto max-h-[80vh] md:max-h-full text-left">
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-heading font-bold text-gray-900 mb-1">{{ $board->name }}</h3>
                                <p class="text-gray-600 font-medium">{{ $board->position }}</p>
                            </div>
                            <div class="prose max-w-none text-gray-700 text-sm md:text-base leading-relaxed text-justify">
                                {!! nl2br(e($board->description)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-20 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No Board Members Data Yet</h3>
            <p class="text-gray-500 mb-6">Please add board members via the admin panel.</p>
            <a href="{{ url('admin/boards/create') }}" class="px-6 py-3 bg-ppblue-600 text-white rounded-full font-medium hover:bg-ppblue-700 transition">Go to Admin Panel</a>
        </div>
    @endif
</div>

<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }
    }

    function closeModalOnOutsideClick(event, id) {
        if (event.target.id === id) {
            closeModal(id);
        }
    }
</script>
@endsection
