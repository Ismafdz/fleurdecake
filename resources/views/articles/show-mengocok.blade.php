@extends('layouts.app')

@section('content')
    
    {{-- HEADER/BANNER ARTIKEL: Teknik Mengocok Adonan Yang Benar --}}
    <header class="relative h-[480px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero teknik mengocok adonan.png') }}');">
        
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

        {{-- Overlay dan Judul di Tengah (Statis) --}}
        <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end pb-8 px-4 sm:px-6 lg:px-8 text-white">
            <div class="max-w-5xl mx-auto w-full text-center"> 
                <h1 class="text-5xl font-extrabold mb-2 leading-tight">Teknik Mengocok <br> Adonan Yang Benar</h1>
            </div>
        </div>
    </header>
    
    {{-- METADATA PENULIS --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-base font-medium text-gray-600 bg-white shadow-lg -mt-10 relative z-20 rounded-t-xl">
        18 November 2025 | Fleur De Cake Team | Admin Firyal
    </div>

    {{-- KONTEN UTAMA ARTIKEL --}}
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-fleur-light">
        
        <div class="text-gray-700 leading-relaxed mb-10">
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">1. Gunakan Mixer dengan Kecepatan Tepat</h2>
            <p class="mb-4">Untuk adonan kue, jangan langsung gunakan kecepatan tinggi. Mulailah dari rendah agar bahan tercampur rata tanpa menggumpal.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">2. Pastikan Telur Suhu Ruangan</h2>
            <div class="flex flex-col md:flex-row gap-6 mb-4 items-start">
                <p class="md:w-2/3">Telur dingin membuat adonan susah mengembang. Keluarkan dari kulkas 15-20 menit sebelum digunakan.</p>
                
                {{-- GAMBAR --}}
                <div class="md:w-1/3 flex-shrink-0">
                    <img class="w-full object-cover rounded-lg shadow-md" src="{{ asset('images/telur 2.png') }}" alt="Telur Suhu Ruangan">
                </div>
            </div>
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">3. Jangan Terlalu Lama Mengocok</h2>
            <p class="mb-4">Jika terlalu lama, udara di dalam adonan bisa berlebihan dan membuat kue bantat setelah dipanggang.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">4. Gunakan Teknik Lipat (Folding)</h2>
            <p class="mb-4">Saat mencampur bahan kering, gunakan spatula dan aduk perlahan dari bawah ke atas agar adonan tidak kehilangan udara.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">5. Tes Konsistensi Adonan</h2>
            <p class="mb-4">Adonan yang baik memiliki tekstur lembut, tidak terlalu cair atau kental. Gunakan sendok untuk menguji — adonan harus jatuh perlahan, tidak menetes cepat.</p>
        </div>

        {{-- Kutipan --}}
        <div class="text-center italic text-xl text-gray-600 my-10 border-y border-gray-200 py-6">
            "Mengocok bukan sekadar mencampur — tapi memahami ritme adonan hingga ia siap jadi karya manis."
        </div>

        {{-- Bagikan Artikel --}}
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
                
                {{-- Item Artikel Lainnya 3 (Jenis Tepung) --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'mengenal-jenis-jenis-tepung-kue') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/mengenal jenis jenis tepung kue.png') }}" alt="Jenis Tepung">
                        <p class="font-semibold text-sm">Mengenal Jenis-Jenis Tepung Kue</p>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
@endsection