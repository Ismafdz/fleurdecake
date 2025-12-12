@extends('layouts.app')

@section('content')
    
       
    <header class="relative h-[480px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero background.png') }}');"> 
        
       
        
        {{-- Overlay dan Teks Tengah (Hero Content) --}}
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white">
            <h1 class="text-5xl font-extrabold mt-16 text-center leading-tight">Sweet Knowledge <br> For Every Baker</h1>
            <button class="mt-8 px-6 py-3 bg-[#a0522d] text-white rounded-lg font-medium hover:bg-[#a0522d]/80 transition duration-300">
                Explore Articles
            </button>
        </div>
    </header>

    {{-- 2. DAFTAR ARTIKEL --}}
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            {{-- ARTIKEL 1: 5 Tips Membuat Cookies Lebih Renyah --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-2xl">
                <img class="h-64 w-full object-cover" src="{{ asset('images/5 tips membuat cookies renyah.png') }}" alt="Cookies Renyah">
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 hover:text-[#a0522d] transition duration-150">5 Tips Membuat Cookies Lebih Renyah</h3>
                    <p class="text-sm text-gray-500 mb-4">5 Oktober 2025 | <span class="text-[#a0522d]">Fleur De Cake Team</span></p>
                    <p class="text-gray-700 mb-6 line-clamp-3">Cookies adalah biskuit yang digemari banyak orang. Ikuti 5 tips rahasia ini agar cookies buatan Anda renyah sempurna.</p>
                    <a href="{{ route('articles.show', '5-tips-membuat-cookies-lebih-renyah') }}" class="inline-block px-5 py-2 bg-[#a0522d] text-white rounded-lg text-sm font-medium hover:bg-[#a0522d]/80 transition duration-300">Read More</a>
                </div>
            </div>

            {{-- ARTIKEL 2: Panduan Dasar Menghias Kue --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-2xl">
                <img class="h-64 w-full object-cover" src="{{ asset('images/Panduan dasar membuat kue.png') }}" alt="Menghias Kue">
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 hover:text-[#a0522d] transition duration-150">Panduan Dasar Menghias Kue</h3>
                    <p class="text-sm text-gray-500 mb-4">20 September 2025 | <span class="text-[#a0522d]">Fleur De Cake Team</span></p>
                    <p class="text-gray-700 mb-6 line-clamp-3">Hiasan kue adalah salah satu elemen terpenting dalam pembuatan kue.</p>
                    <a href="{{ route('articles.show', 'panduan-dasar-menghias-kue') }}" class="inline-block px-5 py-2 bg-[#a0522d] text-white rounded-lg text-sm font-medium hover:bg-[#a0522d]/80 transition duration-300">Read More</a>
                </div>
            </div>

            {{-- ARTIKEL 3: Mengenal Jenis-Jenis Tepung Kue --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-2xl">
                <img class="h-64 w-full object-cover" src="{{ asset('images/mengenal jenis jenis tepung kue.png') }}" alt="Jenis Tepung">
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 hover:text-[#a0522d] transition duration-150">Mengenal Jenis-Jenis Tepung Kue</h3>
                    <p class="text-sm text-gray-500 mb-4">5 Mei 2025 | <span class="text-[#a0522d]">Fleur De Cake Team</span></p>
                    <p class="text-gray-700 mb-6 line-clamp-3">Banyak sekali bahan-bahan pembuatan kue, salah satunya Tepung.</p>
                    <a href="{{ route('articles.show', 'mengenal-jenis-jenis-tepung-kue') }}" class="inline-block px-5 py-2 bg-[#a0522d] text-white rounded-lg text-sm font-medium hover:bg-[#a0522d]/80 transition duration-300">Read More</a>
                </div>
            </div>

            {{-- ARTIKEL 4: Teknik Mengocok Adonan Yang Benar --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-2xl">
                <img class="h-64 w-full object-cover" src="{{ asset('images/teknik mengocok adonan.png') }}" alt="Mengocok Adonan">
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 hover:text-[#a0522d] transition duration-150">Teknik Mengocok Adonan Yang Benar</h3>
                    <p class="text-sm text-gray-500 mb-4">18 November 2025 | <span class="text-[#a0522d]">Fleur De Cake Team</span></p>
                    <p class="text-gray-700 mb-6 line-clamp-3">Tanpa mixer, kita sebagai baker memiliki cara yang benar untuk membuat kue.</p>
                    <a href="{{ route('articles.show', 'teknik-mengocok-adonan-yang-benar') }}" class="inline-block px-5 py-2 bg-[#a0522d] text-white rounded-lg text-sm font-medium hover:bg-[#a0522d]/80 transition duration-300">Read More</a>
                </div>
            </div>

        </div>
    </div>
    
@endsection