@extends('layouts.app') 

@section('content')

    {{-- ======================================================= --}}
    {{-- A. HEADER/NAVIGASI --}}
    {{-- ======================================================= --}}
    <div class="fixed top-0 left-0 right-0 py-4 px-12 flex justify-between items-center z-10 bg-fleur-dark text-white shadow-lg">
        <!-- Logo -->
        <h1 class="text-xl font-serif font-bold">Fleur De Cake</h1>

        <!-- Tombol Login/Sign Up (Jika belum login) -->
        <div class="flex items-center space-x-4">
            @guest
                <a href="{{ route('login') }}" class="text-sm font-semibold uppercase hover:underline">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-6 py-2 text-sm bg-fleur-light text-fleur-dark font-semibold rounded-full hover:bg-white transition duration-300">
                    Sign Up
                </a>
            @endguest
            @auth
                 <!-- Tampilkan nama dan dropdown jika sudah login -->
                 <div class="text-sm">{{ Auth::user()->name }}</div>
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold uppercase hover:underline">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
    
    <div class="min-h-screen pt-20 pb-16 flex flex-col items-center justify-start bg-fleur-light">

        {{-- ======================================================= --}}
        {{-- B. IMAGE GALLERY (3 Gambar) --}}
        {{-- ======================================================= --}}
        <div class="max-w-4xl mx-auto flex justify-center items-center space-x-6 mb-12">
            
            {{-- Gambar Kiri dan Kanan --}}
            <div class="w-1/4 aspect-[3/4] overflow-hidden rounded-xl shadow-lg">
                 <img src="https://placehold.co/400x600/6E4A2E/ffffff?text=Cake+Side" alt="Cake Side" class="w-full h-full object-cover">
            </div>

            {{-- Gambar Tengah (Fokus) --}}
            <div class="w-1/2 aspect-[4/3] overflow-hidden rounded-xl shadow-2xl">
                 <img src="https://placehold.co/800x600/8B4513/FAF0E6?text=Cookie+Class" alt="Cookie Class" class="w-full h-full object-cover">
            </div>
            
             {{-- Gambar Kiri dan Kanan (Mirror) --}}
            <div class="w-1/4 aspect-[3/4] overflow-hidden rounded-xl shadow-lg">
                 <img src="https://placehold.co/400x600/6E4A2E/ffffff?text=Cake+Side" alt="Cake Side" class="w-full h-full object-cover transform scale-x-[-1]">
            </div>
        </div>

        {{-- ======================================================= --}}
        {{-- C. DESKRIPSI DAN DETAIL --}}
        {{-- ======================================================= --}}
        <div class="max-w-4xl mx-auto text-center px-4">
            
            {{-- Nama Kelas (Dinantikan dari data atau slug) --}}
            <h2 class="text-5xl font-bold text-fleur-dark mb-6">
                {{ Str::title(Str::replace('-', ' ', $slug)) }} 
            </h2>
            
            {{-- Deskripsi --}}
            <p class="text-lg text-gray-700 leading-relaxed mb-10 max-w-3xl mx-auto">
                Ikuti kelas membuat cookies di Self Made Cafe dan pelajari rahasia kerenyahan 
                sempurna dari bahan-bahan lokal berkualitas. 
                Kelas ini mengajarkan teknik dasar sekaligus kesadaran untuk mengurangi food waste. 
                Setiap partisipasi kamu juga membantu membuka kesempatan pelatihan gratis bagi 
                kelompok rentan. Baking dengan cita rasa dan makna.
            </p>

            {{-- Detail Atribut (Waktu, Kapasitas, Harga) --}}
            <div class="flex justify-center space-x-6 mb-12">
                {{-- Waktu --}}
                <div class="px-6 py-2 border border-fleur-dark text-fleur-dark rounded-full font-medium">
                    13.00 s.d. 16.00
                </div>
                {{-- Kapasitas --}}
                <div class="px-6 py-2 border border-fleur-dark text-fleur-dark rounded-full font-medium">
                    4 Orang
                </div>
                {{-- Harga --}}
                <div class="px-6 py-2 border border-fleur-dark text-fleur-dark rounded-full font-medium">
                    Rp. 476.496,00
                </div>
            </div>

            {{-- Tombol Book Class --}}
             <a href="{{ route('package.book', ['slug' => $slug]) }}" class="inline-block px-16 py-4 bg-fleur-dark text-white text-lg font-semibold rounded-full shadow-lg hover:bg-opacity-90 transition duration-300">
                Book Class
            </a>
        </div>
    </div>


@endsection