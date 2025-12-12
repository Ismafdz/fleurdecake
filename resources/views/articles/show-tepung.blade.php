@extends('layouts.app')

@section('content')
    
    {{-- HEADER/BANNER ARTIKEL: Mengenal Jenis-Jenis Tepung Kue --}}
    <header class="relative h-[480px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero mengenal jenis tepung kue.png') }}');">
        
        {{-- Navigasi Atas --}}
        <div class="absolute top-0 left-0 right-0 z-10">
            <div class="flex justify-between items-center w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
                {{-- Tombol Back --}}
                <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-white text-gray-800 rounded-full text-sm font-medium shadow-lg hover:bg-gray-100 transition duration-150">
                    Back
                </a>
                
                {{-- Logo, User Icon --}}
                <div class="flex items-center space-x-4">
                    <div class="text-white font-bold hidden sm:block">Fleur De Cake</div>
                    <img src="{{ asset('images/user_icon.png') }}" alt="User Icon" class="w-8 h-8 rounded-full">
                </div>
            </div>
        </div>

        {{-- Overlay dan Judul di Tengah --}}
        <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end pb-8 px-4 sm:px-6 lg:px-8 text-white">
            <div class="max-w-5xl mx-auto w-full text-center"> 
                <h1 class="text-5xl font-extrabold mb-2 leading-tight">Mengenal Jenis-Jenis <br> Tepung Kue</h1>
            </div>
        </div>
    </header>
    
    {{-- METADATA PENULIS --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-base font-medium text-gray-600 bg-white shadow-lg -mt-10 relative z-20 rounded-t-xl">
        5 Mei 2025 | Fleur De Cake Team | Admin Dyah
    </div>

    {{-- KONTEN UTAMA ARTIKEL  --}}
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-fleur-light">
        
        <div class="text-gray-700 leading-relaxed mb-10">
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">1. Tepung Terigu Protein Rendah</h2>
            <p class="mb-4">Cocok untuk kue kering seperti cookies dan pie. Hasil akhirnya renyah karena kadar glutennya sedikit.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">2. Tepung Terigu Protein Sedang</h2>
            <p class="mb-4">Serbaguna! Dapat digunakan untuk cake, pancake, dan muffin karena hasilnya lembut namun tetap kokoh.</p>
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">3. Tepung Terigu Protein Tinggi</h2>
            <p class="mb-4">Biasanya dipakai untuk roti atau donat. Kandungan gluten tinggi membuat adonan elastis dan mengembang sempurna.</p>
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">4. Tepung Jagung (Maizena)</h2>
            <p class="mb-4">Menambah kelembutan tekstur. Campurkan sedikit maizena pada adonan cookies untuk hasil yang lebih rapuh dan renyah.</p>
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">5. Tepung Kentang atau Tepung Beras</h2>
            <p class="mb-4">Alternatif untuk resep gluten-free, membuat kue menjadi ringan dan mudah dicerna.</p>
        </div>

        {{-- Kutipan --}}
        <div class="text-center italic text-xl text-gray-600 my-10 border-y border-gray-200 py-6">
            "Pilih tepung sesuai fungsi — karena setiap butirnya punya peran penting dalam cita rasa kue."
        </div>

        {{-- Bagikan Artikel  --}}
        <div class="text-center py-6 border-gray-200 mb-10">
            <p class="font-semibold mb-3">Bagikan artikel ini:</p>
            <div class="flex justify-center space-x-4">
                <a href="#"><img src="{{ asset('images/pinterest.png') }}" alt="Pinterest" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/x.png') }}" alt="X/Twitter" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/ig.png') }}" alt="Instagram" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/wa.png') }}" alt="Whatsapp" class="w-7 h-7"></a>
            </div>
        </div>

        {{-- ARTIKEL LAINNYA --}}
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Artikel Lainnya:</h2>
            <div class="grid grid-cols-3 gap-6">
                
                {{-- Item Artikel Lainnya 1 (Cookies) --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', '5-tips-membuat-cookies-lebih-renyah') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/5 tips membuat cookies renyah.png') }}" alt="Cookies Renyah">
                        <p class="font-semibold text-sm">5 Tips Membuat Cookies Lebih Renyah</p>
                    </a>
                </div>
                
                {{-- Item Artikel Lainnya 2 (Panduan Menghias Kue) --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'panduan-dasar-menghias-kue') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/Panduan dasar membuat kue.png') }}" alt="Panduan Dasar">
                        <p class="font-semibold text-sm">Panduan Dasar Menghias Kue</p>
                    </a>
                </div>
                
                {{-- Item Artikel Lainnya 3 (Teknik Mengocok) --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'teknik-mengocok-adonan-yang-benar') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/teknik mengocok adonan.png') }}" alt="Teknik Mengocok">
                        <p class="font-semibold text-sm">Teknik Mengocok Adonan Yang Benar</p>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
@endsection