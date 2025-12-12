<aside class="w-64 bg-fdc-dark text-white min-h-screen py-6 px-4">

    {{-- LOGO / BRAND --}}
    <div class="text-2xl font-bold mb-10 tracking-wide text-center">
        Fleur de Cake
    </div>

    {{-- NAVIGATION --}}
    <nav class="space-y-2">

        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
            {{-- icon: Home --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                 fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round"
                 viewBox="0 0 24 24">
                <path d="M3 9l9-7 9 7" />
                <path d="M9 22V12h6v10" />
            </svg>
            Dashboard
        </a>

        {{-- Classes --}}
        <a href="{{ route('admin.classes.index') }}"
           class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
            {{-- icon: Book --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                 fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M4 19.5A2.5 2.5 0 016.5 17H20" />
                <path d="M4 4.5A2.5 2.5 0 016.5 7H20" />
                <path d="M6.5 17V7" />
            </svg>
            Classes
        </a>

        {{-- Packages --}}
        <a href="{{ route('admin.packages.index') }}"
           class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
            {{-- icon: Layers --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                 fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path d="M12 2l8 4-8 4-8-4z" />
                <path d="M4 10l8 4 8-4" />
                <path d="M4 14l8 4 8-4" />
            </svg>
            Packages
        </a>

        {{-- Schedules --}}
        <a href="{{ route('admin.schedules.index') }}"
           class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
            {{-- icon: Calendar --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                 fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
            </svg>
            Schedules
        </a>

        {{-- Bookings --}}
{{-- Bookings --}}
<a href="{{ route('admin.bookings.index') }}"
   class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
         fill="none" stroke="currentColor" stroke-width="2"
         viewBox="0 0 24 24">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 00-3-3.87" />
        <path d="M16 3.13a4 4 0 010 7.75" />
    </svg>
    Bookings
</a>

        {{-- Payments --}}
<a href="{{ route('admin.payments.index') }}" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-fdc-medium transition">
    {{-- Icon --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 10h20"/></svg>
    Payments
</a>

    </nav>

</aside>
