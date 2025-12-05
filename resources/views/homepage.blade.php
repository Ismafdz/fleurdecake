@extends('layouts.app') 


@section('content')

    {{-- ======================================================= --}}
    {{-- A. HEADER/NAVIGASI (Logoout dan Ikon User) --}}
    {{-- ======================================================= --}}
    <div class="absolute top-0 left-0 right-0 p-6 flex justify-between items-center z-10 text-white">
        <h1 class="text-3xl font-serif font-bold">Fleur De Cake</h1>

        <div class="flex items-center space-x-4">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold uppercase hover:underline">
                        Logout
                    </button>
                </form>
                <a href="{{ route('profile.edit') }}" class="w-10 h-10 bg-pink-300 rounded-full flex items-center justify-center border-2 border-white">
                    <span class="text-xs">👩🏻</span>
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold uppercase hover:underline">
                    Login
                </a>
            @endauth
        </div>
    </div>


    {{-- ======================================================= --}}
    {{-- B. HERO SECTION --}}
    {{-- ======================================================= --}}
    <section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden" 
             style="background-image: url('path/ke/gambar/hero homepage.png'); background-size: cover; background-position: center;">
        
      
        <div class="absolute inset-0 bg-black opacity-40"></div>
        
        <div class="relative z-10 p-4">
            <p class="text-lg font-medium tracking-widest mb-2">Sustainable Baking, Meaningful Making. One Class at a Time.</p>
            <h2 class="text-7xl font-bold font-serif my-4">Fleur De Cake</h2>
            <p class="text-2xl font-light mb-8 italic">Shape Your Sweet Escape.</p>
            
            <a href="#" class="inline-block px-12 py-3 mt-4 bg-fleur-dark text-white text-lg font-semibold rounded-full hover:bg-opacity-80 transition duration-300 shadow-xl">
                Bake Your Own!
            </a>
        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- C. BEST PACKAGE SECTION --}}
    {{-- ======================================================= --}}
    <section class="py-16 bg-fleur-dark text-white text-center">
        <h3 class="text-4xl font-bold uppercase mb-2">BEST PACKAGE</h3>
        <p class="text-xl mb-12 font-light">Where Will Your Next Adventure Take You?</p>

        <div class="flex justify-center space-x-8 px-10">
            
            {{-- Card 1: Cookies Class --}}
            @include('partials.package_card', [
                'image_path' => 'path/ke/gambar/cookies.jpg', 
                'title' => 'Cookies Class',
                'price' => 'Rp. 947.694',
                'link' => '#cookies'
            ])

            {{-- Card 2: Pizza Class --}}
            @include('partials.package_card', [
                'image_path' => 'path/ke/gambar/pizza.jpg', 
                'title' => 'Pizza Class',
                'price' => 'Rp. 476.498',
                'link' => '#pizza'
            ])

            {{-- Card 3: Pie Class --}}
            @include('partials.package_card', [
                'image_path' => 'path/ke/gambar/pie.jpg', 
                'title' => 'Pie Class',
                'price' => 'Rp. 582.800',
                'link' => '#pie'
            ])

        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- D. GET TO KNOW US SECTION --}}
    {{-- ======================================================= --}}
    <section class="py-16 px-10 bg-fleur-light">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            
            {{-- Kolom Kiri: Ikon-Ikon --}}
            <div class="grid grid-cols-2 gap-4">
                @include('partials.icon_box', ['text' => 'Local Ingredients'])
                @include('partials.icon_box', ['text' => 'Inclusive Learning'])
                @include('partials.icon_box', ['text' => 'Sustainable Baking'])
                @include('partials.icon_box', ['text' => 'Community Empowerment'])
            </div>

            {{-- Kolom Kanan: Teks About Us --}}
            <div class="md:col-span-2 bg-fleur-dark text-white p-10 rounded-lg shadow-xl">
                <h3 class="text-4xl font-bold mb-4">Get To Know Us</h3>
                <p class="text-lg font-light leading-relaxed">
                    Fleur De Cake adalah ruang belajar di Self Made Cafe yang menonjolkan baking berkelanjutan.
                    Kami memanfaatkan bahan lokal, menyediakan pembelajaran yang memberdayakan masyarakat melalui kelas-kelas industri penuh makna.
                </p>
            </div>
        </div>
    </section>

@endsection