{{-- resources/views/partials/package_card.blade.php --}}
{{-- Pastikan semua variabel (image_path, title, price, link) sudah dioper --}}

<div class="w-full max-w-sm rounded-lg overflow-hidden shadow-lg bg-white text-fleur-dark transition duration-300 hover:scale-[1.02] cursor-pointer">
    
    {{-- Gambar Paket --}}
    <div class="h-40 bg-cover bg-center">
        <img src="{{ $image_path }}" alt="{{ $title }}" class="w-full h-full object-cover rounded-t-lg">
    </div>

    {{-- Deskripsi Card --}}
    <div class="p-5 text-left bg-fleur-light">
        <h4 class="text-xl font-bold mb-1">{{ $title }}</h4>
        <p class="text-sm text-gray-600 mb-4 line-clamp-2">lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        
        <div class="flex justify-between items-center mt-6">
            <span class="text-xl font-bold text-fleur-dark">{{ $price }}</span>
            
            <a href="{{ $link }}" class="px-5 py-2 text-sm bg-fleur-dark text-white rounded-full hover:bg-opacity-90 transition duration-300">
                Explore More
            </a>
        </div>
    </div>
</div>