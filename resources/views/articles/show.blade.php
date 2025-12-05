@extends('layouts.app')

@section('content')
    
    {{-- HEADER/BANNER ARTIKEL --}}
    <header class="relative h-[480px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero 5 tips membuat cookies lebih renyah.png') }}');">
        
        {{-- Navigasi Atas  --}}
        <div class="absolute top-0 left-0 right-0 z-10">
            <div class="flex justify-between items-center w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
                {{-- Tombol Back --}}
                <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-white text-gray-800 rounded-full text-sm font-medium shadow-lg hover:bg-gray-100 transition duration-150">
                    Back
                </a>
                {{-- Logo --}}
                <div class="flex items-center space-x-4">
                    <div class="text-white font-bold">Fleur De Cake</div>
                    {{-- Ikon User --}}
                    <img src="{{ asset('images/user_icon.png') }}" alt="User Icon" class="w-8 h-8 rounded-full">
                </div>
            </div>
        </div>

        {{-- Overlay dan Judul di Tengah ?images--}}
        <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end pb-8 px-4 sm:px-6 lg:px-8 text-white">
            <div class="max-w-5xl mx-auto w-full">
                <h1 class="text-5xl font-extrabold mb-2 leading-tight text-center">5 Tips Membuat <br> Cookies Lebih Renyah</h1>
            </div>
        </div>
    </header>
    
    {{-- METADATA PENULIS --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-sm text-gray-500 bg-white shadow-lg -mt-10 relative z-20 rounded-t-xl">
        5 Oktober 2025 | Fleur De Cake Team | Admin Nana
    </div>

    {{-- KONTEN UTAMA ARTIKEL --}}
    <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-fleur-light">
        
        {{-- KONTEN TEKS --}}
        <div class="text-gray-700 leading-relaxed mb-10">
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">1. Gunakan Mentega Berkualitas</h2>
            <p class="mb-4">Mentega dengan kadar lemak tinggi akan memberikan aroma dan tekstur renyah yang sempurna. Hindari margarin karena kandungan airnya membuat cookies cepat lembek.</p>

            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">2. Panggang dengan Suhu yang Tepat</h2>
            <div class="flex flex-col md:flex-row gap-6 mb-4 items-start">
                <p class="md:w-2/3">Gunakan suhu $170^\circ C – 180^\circ C$. Suhu terlalu rendah membuat cookies kering, sementara terlalu tinggi bisa cepat gosong. Gula pasir membantu proses karamelisasi saat memanggang sehingga cookies terasa lebih garing di luar namun tetap lembut di dalam.</p>
                
                {{-- GAMBAR --}}
                <div class="md:w-1/3">
                    <img class="w-full object-cover rounded-lg shadow-md" src="{{ asset('images/suhu panggang.png') }}" alt="Suhu Pemanggangan Cookies">
                </div>
            </div>
            
            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">3. Gunakan Gula Pasir, Bukan Gula Halus</h2>
            <p class="mb-4">Gula pasir membantu proses karamelisasi saat memanggang sehingga cookies terasa lebih garing di luar namun tetap lembut di dalam.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">4. Dinginkan Adonan Sebelum Dipanggang</h2>
            <p class="mb-4">Masukkan adonan ke kulkas selama 30 menit agar tidak terlalu melebar di oven. Langkah ini menjaga bentuk dan kerenyahannya.</p>

            <h2 class="text-xl font-bold text-gray-900 mt-6 mb-2">5. Simpan dengan Cara Benar</h2>
            <p class="mb-4">Setelah dingin, simpan cookies dalam wadah kedap udara bersama silica gel makanan agar renyahnya tahan lama.</p>
        </div>

        {{-- Kutipan  --}}
        <div class="text-center italic text-gray-600 my-10 border-y border-gray-200 py-6">
            "Cookies yang renyah bukan hanya soal bahan, tapi juga teknik dan ketelatenan."
        </div>

        {{-- Bagikan Artikel --}}
        <div class="text-center py-6 border-gray-200 mb-10">
            <p class="font-semibold mb-3">Bagikan artikel ini:</p>
            <div class="flex justify-center space-x-4">
                
                {{-- Ikon Sosial Media --}}
                <a href="#"><img src="{{ asset('images/pinterest.png') }}" alt="Pinterest" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/x.png') }}" alt="X/Twitter" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/ig.png') }}" alt="Instagram" class="w-6 h-6"></a>
                <a href="#"><img src="{{ asset('images/wa.png') }}" alt="Whatsapp" class="w-6 h-6"></a>
            </div>
        </div>

        {{-- ARTIKEL LAINNYA --}}
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Artikel Lainnya:</h2>
            <div class="grid grid-cols-3 gap-6">
                
                {{-- Item Artikel Lainnya 1 --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'panduan-dasar-menghias-kue') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/Panduan dasar membuat kue.png') }}" alt="Panduan Dasar">
                        <p class="font-semibold text-sm">Panduan Dasar Menghias Kue</p>
                    </a>
                </div>
                
                {{-- Item Artikel Lainnya 2 --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'mengenal-jenis-jenis-tepung-kue') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/mengenal jenis jenis tepung kue.png') }}" alt="Jenis Tepung">
                        <p class="font-semibold text-sm">Mengenal Jenis-Jenis Tepung Kue</p>
                    </a>
                </div>
                
                {{-- Item Artikel Lainnya 3 --}}
                <div class="text-center">
                    <a href="{{ route('articles.show', 'teknik-mengocok-adonan-yang-benar') }}">
                        <img class="h-32 w-full object-cover rounded-lg mb-2" src="{{ asset('images/teknik mengocok adonen yang benar.png') }}" alt="Teknik Mengocok">
                        <p class="font-semibold text-sm">Teknik Mengocok Adonan Yang Benar</p>
                    </a>
                </div>
            </div>
        </div>
        
    </div>

@endsection