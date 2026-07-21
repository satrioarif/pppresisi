@extends('layouts.main')
@section('title', 'Project Gallery - PT PP Presisi Tbk')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1541888086425-d81bb19240f5?q=80&w=2000" alt="Projects" class="w-full h-full object-cover mix-blend-overlay opacity-20" width="1920" height="400" loading="lazy">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Project Gallery</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Showcasing our footprint in building national infrastructure and shaping the landscape of Indonesia.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    @if(isset($projects) && $projects->count() > 0)
        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-500 border border-gray-100">
                    <div class="h-64 overflow-hidden relative">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700" width="384" height="256" loading="lazy">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            @if(strtolower($project->status) == 'completed')
                                <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">Completed</span>
                            @else
                                <span class="px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full shadow-lg">Ongoing</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="p-8 relative">
                        <!-- Date Badge -->
                        <div class="absolute -top-6 right-8 bg-ppblue-600 text-white w-12 h-12 rounded-xl shadow-lg flex flex-col items-center justify-center border-2 border-white">
                            @if($project->project_date)
                                <span class="text-sm font-bold leading-none">{{ \Carbon\Carbon::parse($project->project_date)->format('Y') }}</span>
                            @else
                                <span class="text-sm font-bold leading-none">-</span>
                            @endif
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-ppblue-600 transition">{{ $project->title }}</h3>
                        
                        @if($project->location)
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                {{ $project->location }}
                            </div>
                        @endif
                        
                        <p class="text-gray-600 text-sm line-clamp-3 mb-6">{{ $project->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-24 bg-gray-50 rounded-3xl border border-gray-200 border-dashed">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No Projects Uploaded Yet</h3>
            <p class="text-gray-500 mb-6">Our project gallery is currently being updated. Please check back later.</p>
        </div>
    @endif
</div>
@endsection
