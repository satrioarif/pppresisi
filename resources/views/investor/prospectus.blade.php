@extends('layouts.main')
@section('title', 'Prospectus - Investor Relations | PP Presisi')

@section('content')

<x-page-header badge="Investor Relations" subtitle="Official prospectus documents of PT PP Presisi Tbk." class="reveal fade-bottom">
    Prospectus
</x-page-header>

@include('investor._nav', ['active' => 'prospectus'])

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="bg-white min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ===== IPO INTRODUCTION ===== --}}
        <div class="mb-12 bg-gray-50/50 border border-gray-100 p-8 md:p-10 rounded-[2.5rem] shadow-xl shadow-gray-200/50 reveal fade-up">
            <div class="text-gray-600 leading-relaxed text-sm md:text-base space-y-4 font-medium">
                <p>
                    Pada tanggal 24 November 2017, PT PP Presisi Tbk melakukan Pencatatan Perdana Saham pada Bursa Efek Indonesia (BEI)
                    sebanyak <strong class="text-gray-900 font-bold">2.351.221.000 lembar saham</strong> atau setara dengan 23% dari modal ditempatkan dan disetor penuh Perseroan
                    setelah Penawaran Umum Perdana (IPO).
                </p>
                <p>
                    PT PP Presisi Tbk dicatatkan dengan kode perdagangan (ticker) <strong class="text-gray-900 font-bold">PPRE</strong> pada Papan Utama,
                    Sektor: Infrastructure, Utilities &amp; Transportation ke dalam Sub-Sektor: Non Building Construction.
                    Pada kesempatan yang sama, Dewan Komisioner Otoritas Jasa Keuangan (OJK) melalui Surat Keputusan No: KEP 54/D.04/2017,
                    menetapkan saham PPRE sebagai <strong class="text-gray-900 font-bold">Efek Syariah</strong>.
                </p>
                <p>
                    Harga Perdana yang ditetapkan adalah sebesar <strong class="text-gray-900 font-bold">Rp430 per lembar saham</strong>,
                    sehingga total perolehan IPO adalah sebesar <strong class="text-gray-900 font-bold">Rp1,01 triliun</strong>.
                    Dengan listing-nya PT PP Presisi Tbk, yang menggunakan ticker perdagangan saham PPRE, menambah jumlah entitas
                    perusahaan di lingkungan PP (Persero) menjadi 3, melengkapi 2 entitas yang telah terlebih dulu listing yaitu:
                    PT PP (Persero) Tbk (PTPP), dan PT PP Properti Tbk (PPRO).
                </p>
                <p>
                    Listing tersebut merupakan puncak dari perjalanan panjang rencana IPO yang menjadi bagian dari proses transformasi bisnis
                    yang telah dilakukan oleh PP Presisi sejak 2013. Melalui rangkaian proses transformasi bisnis yang masih berlangsung hingga kini,
                    PP Presisi telah menjelma dari sebuah perusahaan penyewaan alat-alat konstruksi skala kecil dengan ekuitas hanya sebesar
                    Rp500 juta pada saat pendiriannya di tahun 2004 menjadi perusahaan konstruksi terintegrasi berbasis alat berat terkemuka
                    di Indonesia dengan <strong class="text-gray-900 font-bold">kapitalisasi pasar saat IPO sebesar Rp4,4 triliun</strong>.
                </p>
            </div>
        </div>

        {{-- ===== DOCUMENT TABLE ===== --}}
        <div class="flex items-start gap-5 mb-8">
            <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center shadow-md bg-gradient-to-br from-ppblue-900 to-ppblue-600">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-heading font-bold text-gray-900">
                    Prospectus Documents
                </h2>
                <p class="text-gray-500 text-sm mt-1">Download official prospectus and related documents.</p>
            </div>
        </div>

        @if(isset($documents) && $documents->count() > 0)
            <div class="rounded-[2rem] border border-gray-100 shadow-xl shadow-gray-200/50 overflow-hidden bg-white reveal fade-up">
                {{-- Column Headers --}}
                <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                    <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                    <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                </div>
                {{-- Document Rows --}}
                <div class="divide-y divide-gray-100">
                    @foreach($documents as $doc)
                        <div class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                            <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                <svg class="w-4 h-4 flex-shrink-0 text-gray-400 group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                <div class="min-w-0">
                                    <p class="font-bold text-gray-900 text-sm truncate">{{ $doc->title }}</p>
                                    @if($doc->year)
                                        <p class="text-xs text-gray-500 font-medium mt-0.5">{{ $doc->year }}</p>
                                    @endif
                                </div>
                            </div>
                            <a href="{{ asset('storage/' . $doc->file_path) }}"
                               target="_blank" rel="noopener noreferrer"
                               class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-ppblue-900 hover:bg-ppblue-600 transition-colors">
                                DOWNLOAD
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            {{-- Empty state with the 4 reference documents shown as placeholders --}}
            <div class="rounded-[2rem] border border-ppblue-100 shadow-xl shadow-gray-200/50 overflow-hidden reveal fade-up bg-white">
                <div class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-ppblue-900 to-ppblue-600">
                    <span class="text-xs font-bold uppercase tracking-widest text-white">Title</span>
                    <span class="text-xs font-bold uppercase tracking-widest text-white pr-2">Download</span>
                </div>
                @php
                    $placeholders = [
                        'Prospektus Penawaran Umum Berkelanjutan Obligasi Berkelanjutan I' => '2022',
                        'Informasi Tambahan Dan/Atau Perbaikan Prospektus Ringkas' => '2022',
                        'Prospektus Ringkas' => '2022',
                        'Prospectus (IPO)' => '2017',
                    ];
                @endphp
                <div class="divide-y divide-gray-100">
                    @foreach($placeholders as $title => $year)
                        <div class="flex items-center justify-between px-6 py-4 opacity-50 cursor-not-allowed">
                            <div class="flex items-center gap-3 min-w-0 flex-1 pr-4">
                                <svg class="w-4 h-4 flex-shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                <div class="min-w-0">
                                    <p class="font-bold text-gray-900 text-sm truncate">{{ $title }}</p>
                                    <p class="text-xs text-gray-500 font-medium mt-0.5">{{ $year }}</p>
                                </div>
                            </div>
                            <span class="flex-shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-white bg-gray-400">
                                COMING SOON
                            </span>
                        </div>
                    @endforeach
                </div>
                <div class="px-6 py-4 border-t border-gray-100 text-center">
                    <p class="text-sm text-gray-400 font-medium">Documents will be available for download once uploaded via the admin panel.</p>
                </div>
            </div>
        @endif

    </div>
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
    .fade-left { transform: translateX(-40px); }
    .fade-right { transform: translateX(40px); }
    .fade-up { transform: translateY(60px); }
</style>
<script>
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
