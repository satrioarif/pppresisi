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
    @if(isset($boards) && $boards->count() > 0)
        <!-- Board of Commissioners -->
        <h2 class="text-3xl font-heading font-bold text-center text-ppblue-900 mb-12">Board of Commissioners</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
            @foreach($boards->where('type', 'komisaris') as $board)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 group text-center p-8">
                    <div class="w-32 h-32 mx-auto rounded-full bg-gray-200 mb-6 overflow-hidden border-4 border-white shadow-md">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-ppblue-600 transition-colors">{{ $board->name }}</h3>
                    <p class="text-amber-600 font-medium text-sm uppercase tracking-wider mb-4">{{ $board->position }}</p>
                    @if($board->description)
                        <p class="text-gray-500 text-sm line-clamp-3">{{ $board->description }}</p>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Board of Directors -->
        <h2 class="text-3xl font-heading font-bold text-center text-ppblue-900 mb-12">Board of Directors</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($boards->where('type', 'direksi') as $board)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 group text-center p-8">
                    <div class="w-32 h-32 mx-auto rounded-full bg-gray-200 mb-6 overflow-hidden border-4 border-white shadow-md">
                        @if($board->image)
                            <img src="{{ asset('storage/' . $board->image) }}" alt="{{ $board->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-ppblue-50 text-ppblue-500">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-ppblue-600 transition-colors">{{ $board->name }}</h3>
                    <p class="text-ppblue-600 font-medium text-sm uppercase tracking-wider mb-4">{{ $board->position }}</p>
                    @if($board->description)
                        <p class="text-gray-500 text-sm line-clamp-3">{{ $board->description }}</p>
                    @endif
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
@endsection
