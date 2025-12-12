<nav class="bg-white shadow-sm sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            {{-- Logo / Link ke Halaman Tentang Kami --}}
            <div class="flex items-center">
                <a href="{{ route('about') }}" class="text-xl font-bold text-[#a0522d] hover:text-[#785b37] transition duration-150">
                    Fleur De Cake
                </a>
            </div>

            {{-- Navigation Links --}}
            <div class="hidden sm:flex sm:items-center sm:space-x-8">
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900 font-medium @if(request()->routeIs('dashboard')) text-[#a0522d] @endif">Home</a>
                <a href="{{ route('articles.index') }}" class="text-gray-600 hover:text-gray-900 font-medium @if(request()->routeIs('articles.*')) text-[#a0522d] @endif">Article</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 font-medium">Package</a>
            </div>

            {{-- Auth / User Icon --}}
            <div class="flex items-center space-x-3">
                @auth
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-2 hover:opacity-80 transition">
                        @if(Auth::user()->profile_photo_path)
                             <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 rounded-full object-cover border border-gray-200">
                        @else
                             <img src="{{ asset('images/user_icon.png') }}" alt="User Icon" class="w-8 h-8 rounded-full border border-gray-200">
                        @endif
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-[#a0522d]">Log in</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm font-medium text-white bg-[#a0522d] px-4 py-2 rounded-full hover:bg-[#8B4513] transition">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>