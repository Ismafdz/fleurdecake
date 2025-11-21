@extends('layouts.app') 

@section('content')

    {{-- ======================================================= --}}
    {{-- A. HEADER/NAVIGASI --}}
    {{-- ======================================================= --}}
    <div class="absolute top-0 left-0 right-0 p-6 flex justify-between items-center z-10 text-white">
        <!-- Logo -->
        <h1 class="text-3xl font-serif font-bold">Fleur De Cake</h1>

        <!-- Tombol dan Ikon User -->
        <div class="flex items-center space-x-4">
            <!-- Tombol Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-semibold uppercase hover:underline">
                    Logout
                </button>
            </form>
            <!-- Ikon User -->
            <a href="{{ route('profile.edit') }}" class="w-10 h-10 bg-pink-300 rounded-full flex items-center justify-center border-2 border-white">
                {{-- Nama user yang sedang login --}}
                <span class="text-xs">{{ Str::limit(Auth::user()->name, 1, '') }}</span>
            </a>
        </div>
    </div>


    {{-- ======================================================= --}}
    {{-- B. HERO SECTION --}}
    {{-- ======================================================= --}}
    <section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden" 
             style="background-image: url('https://placehold.co/1920x1080/6E4A2E/ffffff?text=HERO+IMAGE'); background-size: cover; background-position: center;">
        
        {{-- Overlay gelap untuk kontras --}}
        <div class="absolute inset-0 bg-black opacity-40"></div>
        
        <div class="relative z-10 p-4">
            <p class="text-lg font-medium tracking-widest mb-2">Sustainable Baking, Meaningful Making. One Class at a Time.</p>
            <h2 class="text-7xl font-bold font-serif my-4">Fleur De Cake</h2>
            <p class="text-2xl font-light mb-8 italic">Shape Your Sweet Escape.</p>
            
            <!-- Tombol Baket Your Own! -->
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
                'image_path' => 'https://placehold.co/400x300/6E4A2E/ffffff?text=COOKIES', 
                'title' => 'Cookies Class',
                'price' => 'Rp. 947.694',
                // PERBAIKAN: Menggunakan route helper untuk menunjuk ke halaman detail
                'link' => route('package.show', ['slug' => 'cookies-class']) 
            ])

            {{-- Card 2: Pizza Class --}}
            @include('partials.package_card', [
                'image_path' => 'https://placehold.co/400x300/6E4A2E/ffffff?text=PIZZA', 
                'title' => 'Pizza Class',
                'price' => 'Rp. 476.498',
                // PERBAIKAN: Menggunakan route helper untuk menunjuk ke halaman detail
                'link' => route('package.show', ['slug' => 'pizza-class']) 
            ])

            {{-- Card 3: Pie Class --}}
            @include('partials.package_card', [
                'image_path' => 'https://placehold.co/400x300/6E4A2E/ffffff?text=PIE', 
                'title' => 'Pie Class',
                'price' => 'Rp. 582.800',
                // PERBAIKAN: Menggunakan route helper untuk menunjuk ke halaman detail
                'link' => route('package.show', ['slug' => 'pie-class']) 
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

    {{-- ======================================================= --}}
    {{-- E. FOOTER --}}
    {{-- ======================================================= --}}
    <footer class="bg-fleur-dark text-white py-8 px-10 text-sm">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            
            {{-- Kolom 1: Fleur De Cake (Deskripsi) --}}
            <div>
                <h4 class="text-lg font-bold mb-3">Fleur De Cake</h4>
                <p class="font-light">Bermimpi menciptakan pastry yang berkelanjutan dan berdaya. Cintai apa yang Anda buat dan bersenang-senanglah. Selalu. Dengan bahagia.</p>
            </div>
            
            {{-- Kolom 2: Quick Links --}}
            <div>
                <h4 class="text-lg font-bold mb-3">Quick Links</h4>
                <ul class="space-y-1 font-light">
                    <li><a href="#">Baking Class</a></li>
                    <li><a href="#">Discover</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            
            {{-- Kolom 3: Category Class --}}
            <div>
                <h4 class="text-lg font-bold mb-3">Category Class</h4>
                <ul class="space-y-1 font-light">
                    <li><a href="#">Pastry Class</a></li>
                    <li><a href="#">Cake Class</a></li>
                    <li><a href="#">Baking Package</a></li>
                </ul>
            </div>
            
            {{-- Kolom 4: Contact Us --}}
            <div>
                <h4 class="text-lg font-bold mb-3">Contact Us</h4>
                <div class="space-y-1 font-light">
                    <p>+62 812 345 6789</p>
                    <p>bre@gmail.com</p>
                    <p class="flex items-center space-x-2"><span class="w-4 h-4 bg-white rounded-full"></span><span>Jl. Puri Indah No. 12</span></p>
                    <div class="flex space-x-3 mt-2">
                        <!-- Ikon Sosial Media Placeholder -->
                        <span class="w-6 h-6 bg-white rounded-full"></span>
                        <span class="w-6 h-6 bg-white rounded-full"></span>
                        <span class="w-6 h-6 bg-white rounded-full"></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-8 pt-4 border-t border-white border-opacity-30 text-center font-light">
            &copy; 2024 Fleur De Cake. All Rights Reserved.
        </div>
    </footer>

@endsection