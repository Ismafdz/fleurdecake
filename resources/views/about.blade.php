@extends('layouts.app')

@section('content')
    
  
    <header class="relative h-[600px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero tentang fleur de cake.png') }}');"> 

        
        {{-- Overlay dan Teks Hero --}}
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-6xl font-extrabold mb-4 leading-tight">Tentang <br> Fleur De Cake</h1>
                <p class="text-xl font-light max-w-xl mb-8">
                    Platform untuk Anda bisa membuat, belajar, <br> dan memberi dampak melalui seni baking.
                </p>
                <button class="px-6 py-3 bg-[#a0522d] text-white rounded-lg font-medium hover:bg-[#a0522d]/80 transition duration-300">
                    Explore
                </button>
            </div>
        </div>
    </header>

    {{-- 2. DESKRIPSI --}}
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <p class="text-lg text-gray-700 max-w-4xl leading-relaxed">
            Kami hadir untuk Anda, para *creative learners* dan pencinta kuliner yang mencari pengalaman baru, bukan hanya produk. Lewat *platform* kafe *hands-on* dan kelas *baking* yang terintegrasi, **Fleur De Cake** mengajak Anda menciptakan dan menikmati hasil karya Anda sendiri, sekaligus berkontribusi langsung pada edukasi *food waste* dan pemberdayaan komunitas lokal.
        </p>
    </div>

    {{-- 3. VISI & MISI --}}
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            {{-- Gambar Visi Misi (Menggunakan visi misi.png) --}}
            <div class="order-2 md:order-1">
                <img class="w-full object-cover rounded-lg shadow-xl" src="{{ asset('images/visi misi.png') }}" alt="Visi Misi">
            </div>

            {{-- Teks Visi Misi --}}
            <div class="order-1 md:order-2">
                <h2 class="text-4xl font-extrabold text-[#a0522d] mb-6">VISI</h2>
                <p class="text-lg text-gray-800 mb-8">
                    Menjadi pelopor *bakery cafe* berkelanjutan di Indonesia yang menggabungkan edukasi, inovasi, dan pemberdayaan masyarakat melalui seni *baking*.
                </p>
                
                <h2 class="text-4xl font-extrabold text-[#a0522d] mb-6">MISI</h2>
                <ul class="list-disc ml-6 text-gray-700 space-y-3">
                    <li>Mengedukasikan pengalaman belajar *baking* yang inovatif dan berdampak positif.</li>
                    <li>Mengedukasi masyarakat tentang pengurangan *food waste* dan penggunaan bahan lokal.</li>
                    <li>Memberdayakan kaum perempuan melalui pelatihan keterampilan *baking* gratis.</li>
                    <li>Membangun komunitas yang berdaya saing dan berwawasan lingkungan.</li>
                    <li>Menjalin kemitraan dengan UMKM dan komunitas kuliner lokal.</li>
                </ul>
            </div>
        </div>
    </div>
    
    {{-- 4. TIM KAMI --}}
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-extrabold text-[#a0522d] mb-6">TIM KAMI</h2>
        <p class="text-lg text-gray-700 max-w-4xl mb-12">
            Ini dia para *learners* yang selalu semangat bikin kreasi dan inovasi di dapur kami. Spesial buat kamu! Mereka lah yang berdedikasi tinggi, penuh semangat pantang menyerah, lugas, dan sangat ramah. Kami datang dari berbagai perspektif dan percaya bahwa ide-ide segar adalah resep terbaik untuk menciptakan pengalaman *baking* yang seru, edukatif, dan pastinya berdampak.
        </p>
        
        {{-- Gambar Tim Kami (Menggunakan tim kami.png) --}}
        <img class="w-full object-cover rounded-lg shadow-xl" src="{{ asset('images/tim kami.png
        ') }}" alt="Tim Kami">
    </div>

@endsection