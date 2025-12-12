<footer class="bg-[#785b37] text-white py-8 px-10 text-sm">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        
        {{-- Kolom 1: Fleur De Cake (Deskripsi) --}}
        <div>
            <h4 class="text-lg font-bold mb-3">Fleur De Cake</h4>
            <p class="font-light">Bermimpi menciptakan pastry yang berkelanjutan dan berdaya. Cintai apa yang Anda buat dan bersenang-senanglah. Selalu. Dengan bahagia.</p>
        </div>
        
        {{-- Kolom 2: Quick Links (Updated Links) --}}
        <div>
            <h4 class="text-lg font-bold mb-3">Quick Links</h4>
            <ul class="space-y-1 font-light">
                <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li> {{-- Link ke halaman baru --}}
                <li><a href="{{ route('articles.index') }}" class="hover:underline">Articles</a></li> 
                <li><a href="#" class="hover:underline">Baking Class</a></li>
                <li><a href="#" class="hover:underline">Discover</a></li>
                <li><a href="#" class="hover:underline">Contact Us</a></li>
                <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
            </ul>
        </div>
        
        {{-- Kolom 3: Category Class --}}
        <div>
            <h4 class="text-lg font-bold mb-3">Category Class</h4>
            <ul class="space-y-1 font-light">
                <li><a href="#" class="hover:underline">Pastry Class</a></li>
                <li><a href="#" class="hover:underline">Cake Class</a></li>
                <li><a href="#" class="hover:underline">Baking Package</a></li>
            </ul>
        </div>
        
        {{-- Kolom 4: Contact Us --}}
        <div>
            <h4 class="text-lg font-bold mb-3">Contact Us</h4>
            <div class="space-y-1 font-light">
                
                {{-- No Telepon --}}
                <p class="flex items-center space-x-2">
                    <img src="{{ asset('images/phone.png') }}" alt="Phone" class="w-4 h-4">
                    <span>+62 812 345 6789</span>
                </p>
                
                {{-- Email --}}
                <p class="flex items-center space-x-2">
                    <img src="{{ asset('images/email.png') }}" alt="Email" class="w-4 h-4">
                    <span>bre@gmail.com</span>
                </p>

                {{-- Lokasi --}}
                <p class="flex items-center space-x-2">
                    <img src="{{ asset('images/loc.png') }}" alt="Location" class="w-4 h-4">
                    <span>Jl. Puri Indah No. 12</span>
                </p>

                {{-- Ikon Sosial Media --}}
                <div class="flex space-x-3 mt-4 pt-2">
                    <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" class="w-6 h-6"></a>
                    <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
                    <a href="#"><img src="{{ asset('images/x.png') }}" alt="X/Twitter" class="w-6 h-6"></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-8 pt-4 border-t border-white border-opacity-30 text-center font-light">
        &copy; 2024 Fleur De Cake. All Rights Reserved.
    </div>
</footer>