@props(['variant' => 'light'])

@php
    $dark = $variant === 'dark';
    $labelClass = $dark ? 'block text-sm font-semibold text-gray-300 mb-2 tracking-wide' : 'block text-sm font-bold text-gray-700 mb-2';
    $inputClass = $dark
        ? 'w-full px-6 py-4 rounded-2xl border border-white/10 focus:border-accent bg-white/5 focus:bg-white/10 text-white placeholder-gray-500 outline-none transition duration-300'
        : 'w-full px-5 py-3 rounded-xl border border-gray-300 focus:border-ppblue-500 focus:ring focus:ring-ppblue-200 outline-none transition bg-gray-50';
    $selectClass = $dark
        ? 'w-full px-6 py-4 rounded-2xl border border-white/10 focus:border-accent bg-white/5 focus:bg-white/10 text-white outline-none transition duration-300'
        : $inputClass;
@endphp

<div {{ $attributes }}>
    @if(session('success'))
        <div class="{{ $dark ? 'bg-green-500/20 backdrop-blur-md border border-green-500/30 text-green-300 p-6 rounded-2xl mb-8 text-center shadow-xl font-bold tracking-wide' : 'mb-8 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-lg flex items-center shadow-sm' }}">
            @unless($dark)
                <svg class="w-6 h-6 text-green-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            @endunless
            <p class="{{ $dark ? '' : 'text-green-800 font-medium' }}">{{ session('success') }}</p>
        </div>
    @endif

    <form
        x-data="{ submitting: false }"
        @submit="submitting = true"
        action="{{ url('contact') }}"
        method="POST"
        class="space-y-6"
    >
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="{{ $labelClass }}" for="subject">Subject</label>
                <select id="subject" name="subject" class="{{ $selectClass }}">
                    <option value="General" @class(['text-gray-900' => $dark])>General</option>
                    <option value="Business" @class(['text-gray-900' => $dark])>Business</option>
                    <option value="Investor Relation" @class(['text-gray-900' => $dark])>Investor Relation</option>
                    <option value="Corporate Secretary" @class(['text-gray-900' => $dark])>Corporate Secretary</option>
                </select>
            </div>
            <div>
                <label class="{{ $labelClass }}" for="company">Company</label>
                <input type="text" id="company" name="company" class="{{ $inputClass }}" placeholder="Your Company">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="{{ $labelClass }}" for="name">Full Name *</label>
                <input type="text" id="name" name="name" required class="{{ $inputClass }}" placeholder="Your Name">
            </div>
            <div>
                <label class="{{ $labelClass }}" for="email">Email Address *</label>
                <input type="email" id="email" name="email" required class="{{ $inputClass }}" placeholder="Your Email">
            </div>
            <div>
                <label class="{{ $labelClass }}" for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" class="{{ $inputClass }}" placeholder="Your Phone">
            </div>
        </div>

        <div>
            <label class="{{ $labelClass }}" for="message">Your Message *</label>
            <textarea id="message" name="message" required rows="5" class="{{ $inputClass }} resize-none" placeholder="Your Message"></textarea>
        </div>

        <div class="{{ $dark ? 'text-center pt-4' : '' }}">
            <button
                type="submit"
                :disabled="submitting"
                :class="submitting && 'opacity-70 cursor-not-allowed'"
                class="{{ $dark
                    ? 'w-full md:w-auto px-12 py-4 bg-accent text-white font-bold rounded-pill shadow-cta hover:bg-accent-light transition duration-300 tracking-wide text-lg'
                    : 'w-full md:w-auto px-10 py-4 bg-ppblue-600 hover:bg-ppblue-700 text-white font-bold rounded-xl transition shadow-lg shadow-ppblue-600/30 flex justify-center items-center' }}"
            >
                <span x-text="submitting ? 'Sending...' : 'Send Message'"></span>
            </button>
        </div>
    </form>
</div>
