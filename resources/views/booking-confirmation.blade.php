@extends('layouts.app') 

@section('content')

    {{-- ======================================================= --}}
    {{-- A. HEADER/NAVIGASI (Fixed Header) --}}
    {{-- ======================================================= --}}
    <div class="fixed top-0 left-0 right-0 py-4 px-12 flex justify-between items-center z-10 bg-fleur-dark text-white shadow-lg">
        <!-- Logo -->
        <h1 class="text-xl font-serif font-bold">Fleur De Cake</h1>

        <!-- Tombol Logout dan Ikon User -->
        <div class="flex items-center space-x-4">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold uppercase hover:underline">
                        Logout
                    </button>
                </form>
                <a href="{{ route('profile.edit') }}" class="w-10 h-10 bg-pink-300 rounded-full flex items-center justify-center border-2 border-white">
                    <span class="text-xs">{{ Str::limit(Auth::user()->name, 1, '') }}</span>
                </a>
            @endauth
        </div>
    </div>

    {{-- ======================================================= --}}
    {{-- B. CARD KONFIRMASI BOOKING --}}
    {{-- ======================================================= --}}
    <div class="pt-24 pb-16 flex flex-col items-center justify-start bg-fleur-light">

        <!-- Card Container - Menggunakan warna dan rounded yang sama -->
        <div class="w-full max-w-sm px-8 py-10 bg-[#BCAC91] text-fleur-dark shadow-2xl rounded-3xl"> 
            
            {{-- Bagian Atas Card (Warna Krem Pucat) --}}
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold uppercase text-fleur-dark tracking-wide">BOOKING DETAILS</h2>
            </div>

            {{-- Bagian Tengah (Warna Cokelat Gelap) --}}
            <div class="bg-fleur-dark text-white p-8 rounded-xl mb-6">
                
                {{-- FUNGSI: Menampilkan detail pesanan dalam format Key: Value --}}

                @php
                    // Array untuk memformat data yang dioper dari route POST
                    $details = [
                        'Paket Kelas' => $package ?? 'Pizza Class', 
                        'Jumlah Orang' => $people ?? 2,
                        'Tanggal Kunjungan' => \Carbon\Carbon::parse($date ?? '2025-03-25')->format('d F Y'),
                        'Total Pembayaran' => $total ?? 'Rp. 1.323.600',
                    ];
                @endphp

                @foreach ($details as $key => $value)
                    <div class="flex justify-between items-center mb-4 pb-1 {{ $key === 'Total Pembayaran' ? 'pt-4 border-t border-white border-opacity-30 font-bold text-lg' : '' }}">
                        <span class="font-light">{{ $key }}:</span>
                        <span class="{{ $key === 'Total Pembayaran' ? 'text-white' : 'text-gray-200' }}">{{ $value }}</span>
                    </div>
                @endforeach

            </div>
            
            {{-- Tombol Aksi --}}
            <div class="space-y-4">
                {{-- Pay Now --}}
                <button class="w-full py-3 bg-fleur-dark text-white text-base font-semibold rounded-lg hover:bg-opacity-90 transition duration-300 shadow-md">
                    Pay Now
                </button>
                
                {{-- Pay Later --}}
                <button class="w-full py-3 bg-fleur-dark text-white text-base font-semibold rounded-lg hover:bg-opacity-90 transition duration-300 shadow-md">
                    Pay Later
                </button>
            </div>
            
        </div>
    </div>
    
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