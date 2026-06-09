@extends('layouts.main')
@section('title', 'Community Development - CSR')

@section('content')
<div class="bg-ppblue-900 pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1593113580326-6f6711867e0f?q=80&w=2000" alt="CSR" class="w-full h-full object-cover mix-blend-overlay opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-ppblue-900 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-bold text-white mb-4">Community Development</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Creating shared value and positive impacts for communities surrounding our operational areas.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-heading font-bold text-gray-900 mb-6">Growing Together with the Community</h2>
        <p class="text-gray-600 text-lg">
            Our Corporate Social Responsibility (CSR) programs focus on Education, Health, Economy, and Infrastructure to ensure sustainable growth alongside the local communities where we operate.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Pillar 1 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
            <div class="h-64 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=800" alt="Education" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-sm font-bold text-ppblue-600 shadow">Education</div>
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Empowering Future Generations</h3>
                <p class="text-gray-600">Providing scholarships, renovating school facilities, and donating educational supplies to underprivileged schools near our project sites.</p>
            </div>
        </div>

        <!-- Pillar 2 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 group">
            <div class="h-64 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=800" alt="Health" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-sm font-bold text-green-600 shadow">Health</div>
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Community Health Programs</h3>
                <p class="text-gray-600">Organizing free medical check-ups, blood donation drives, and providing nutritional support to combat stunting in local villages.</p>
            </div>
        </div>
    </div>
</div>
@endsection
