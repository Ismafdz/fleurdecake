@extends('layouts.app') 

@section('content')

    {{-- ======================================================= --}}
    {{-- A. HEADER/NAVIGASI --}}
    {{-- ======================================================= --}}
    <div class="fixed top-0 left-0 right-0 py-4 px-12 flex justify-between items-center z-10 bg-fleur-dark text-white shadow-lg">
        <!-- Logo -->
        <h1 class="text-xl font-serif font-bold">Fleur De Cake</h1>

        <!-- Tombol Logout dan Ikon User -->
        <div class="flex items-center space-x-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-semibold uppercase hover:underline">
                    Logout
                </button>
            </form>
            <a href="{{ route('profile.edit') }}" class="w-10 h-10 bg-pink-300 rounded-full flex items-center justify-center border-2 border-white">
                <span class="text-xs">{{ Str::limit(Auth::user()->name, 1, '') }}</span>
            </a>
        </div>
    </div>

    {{-- ======================================================= --}}
    {{-- B. FORMULIR BOOKING UTAMA --}}
    {{-- ======================================================= --}}
    <div class="pt-24 pb-16 flex flex-col items-center justify-start bg-fleur-light">

        <div class="w-full max-w-md px-8 py-10 bg-fleur-dark text-fleur-light shadow-2xl rounded-3xl"> 
            
            <form method="POST" action="{{ route('booking.confirm') }}">
                @csrf
                
                {{-- SECTION 1: BOOKING DETAILS --}}
                <h2 class="text-3xl font-bold uppercase mb-8 text-center text-white">BOOKING DETAILS</h2>

                <!-- Field 1: Paket Kelas -->
                <div class="mb-6">
                    <label for="package_class" class="block font-semibold mb-2">Paket Kelas</label>
                    <input type="text" id="package_class" name="package_class" 
                           value="{{ Str::title(Str::replace('-', ' ', $slug)) }}" 
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark focus:ring-fleur-dark" 
                           readonly>
                </div>

                <!-- Field 2: Waktu Kunjungan (Tanggal) -->
                <div class="mb-6">
                    <label for="visit_date" class="block font-semibold mb-2">Waktu Kunjungan:</label>
                    <input type="date" id="visit_date" name="visit_date" 
                           value="2025-03-25" {{-- Nilai default --}}
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark focus:ring-fleur-dark">
                </div>
                
                <!-- Field 3: Jumlah Orang -->
                <div class="mb-6">
                    <label for="num_people" class="block font-semibold mb-2">Jumlah Orang:</label>
                    <input type="number" id="num_people" name="num_people" 
                           value="2" 
                           min="1"
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark focus:ring-fleur-dark">
                </div>

                <!-- Field 4: Total Pembayaran (Readonly) -->
                <div class="mb-10 pt-4 border-t border-white border-opacity-50">
                    <label class="block font-bold text-lg mb-2">Total Pembayaran:</label>
                    <input type="text" id="total_payment" name="total_payment" 
                           value="Rp. 1.323.600" 
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark font-bold text-lg focus:ring-fleur-dark" 
                           readonly>
                </div>
                
                {{-- SECTION 2: GUEST INFORMATION --}}
                <h2 class="text-2xl font-bold uppercase mb-6 text-white">GUEST INFORMATION</h2>

                <!-- Field 5: Nama Pemesan (Pre-filled) -->
                <div class="mb-6">
                    <label for="guest_name" class="block font-semibold mb-2">Nama Pemesan:</label>
                    <input type="text" id="guest_name" name="guest_name" 
                           value="{{ Auth::user()->name }}" 
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark focus:ring-fleur-dark" 
                           required>
                </div>

                <!-- Field 6: Email (Pre-filled) -->
                <div class="mb-10">
                    <label for="guest_email" class="block font-semibold mb-2">Email:</label>
                    <input type="email" id="guest_email" name="guest_email" 
                           value="{{ Auth::user()->email }}" 
                           class="w-full rounded-full border-none px-4 py-2 bg-fleur-light text-fleur-dark focus:ring-fleur-dark" 
                           required>
                </div>

                <!-- Tombol Book Now -->
                <button type="submit" class="w-full px-16 py-3 bg-fleur-light text-fleur-dark text-lg font-bold rounded-full shadow-lg hover:bg-white transition duration-300">
                    Book Now
                </button>
            </form>
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