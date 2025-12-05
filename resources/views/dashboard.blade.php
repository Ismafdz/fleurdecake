@extends('layouts.app')



@section('content')


    {{-- ======================================================= --}}
    {{-- B. HERO SECTION --}}
    {{-- ======================================================= --}}
    <section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden" 
             style="background-image: url('{{ asset('images/hero homepage.png') }}'); background-size: cover; background-position: center;">
        
        
        <div class="absolute inset-0 bg-black opacity-40"></div>
        
        <div class="relative z-10 p-4">
            <p class="text-lg font-medium tracking-widest mb-2">Sustainable Baking, Meaningful Making. One Class at a Time.</p>
            <h2 class="text-7xl font-bold font-serif my-4">Fleur De Cake</h2>
            <p class="text-2xl font-light mb-8 italic">Shape Your Sweet Escape.</p>
            
            <a href="#" class="inline-block px-12 py-3 mt-4 bg-[#a0522d] text-white text-lg font-semibold rounded-full hover:bg-opacity-80 transition duration-300 shadow-xl">
                Bake Your Own!
            </a>
        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- C. BEST PACKAGE SECTION --}}
    {{-- ======================================================= --}}
    <section class="py-16 bg-[#785b37] text-white text-center">
        <h3 class="text-4xl font-bold uppercase mb-2">BEST PACKAGE</h3>
        <p class="text-xl mb-12 font-light">Where Will Your Next Adventure Take You?</p>

        <div class="max-w-7xl mx-auto flex justify-center space-x-8 px-10">
            
            {{-- Card 1: Cookies Class --}}
            @include('partials.package_card', [
                'image_path' => asset('images/cookie-class.png'), 
                'title' => 'Cookies Class',
                'price' => 'Rp. 947.694',
                'link' => route('package.show', ['slug' => 'cookies-class']) 
            ])

            {{-- Card 2: Pizza Class --}}
            @include('partials.package_card', [
                'image_path' => asset('images/pizza-class.png'), 
                'title' => 'Pizza Class',
                'price' => 'Rp. 476.498',
                'link' => route('package.show', ['slug' => 'pizza-class']) 
            ])

            {{-- Card 3: Pie Class --}}
            @include('partials.package_card', [
                'image_path' => asset('images/pie-class.png'), 
                'title' => 'Pie Class',
                'price' => 'Rp. 582.800',
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
                @include('partials.icon_box', ['icon' => 'local-ingredients.png', 'text' => 'Local Ingredients'])
                @include('partials.icon_box', ['icon' => 'inclusive-learning.png', 'text' => 'Inclusive Learning'])
                @include('partials.icon_box', ['icon' => 'sustainability-baking.png', 'text' => 'Sustainable Baking'])
                @include('partials.icon_box', ['icon' => 'community-empowerment.png', 'text' => 'Community Empowerment'])
            </div>

            {{-- Kolom Kanan: Teks About Us --}}
            <div class="md:col-span-2 bg-[#785b37] text-white p-10 rounded-lg shadow-xl">
                <h3 class="text-4xl font-bold mb-4">Get To Know Us</h3>
                <p class="text-lg font-light leading-relaxed">
                    Fleur De Cake adalah ruang belajar di Self Made Cafe yang menonjolkan baking berkelanjutan.
                    Kami memanfaatkan bahan lokal, menyediakan pembelajaran yang memberdayakan masyarakat melalui kelas-kelas industri penuh makna.
                </p>
                <a href="{{ route('about') }}" class="inline-block mt-6 px-6 py-3 bg-white text-[#785b37] rounded-lg font-medium hover:bg-gray-100 transition duration-300">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>

    
@endsection