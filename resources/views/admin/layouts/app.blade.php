<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fleur de Cake Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-fdc-peach min-h-screen flex">

    {{-- SIDEBAR --}}
    @include('admin.layouts.sidebar')

    {{-- MAIN CONTENT --}}
    <div class="flex-1 flex flex-col">

        {{-- TOP HEADER --}}
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-fdc-dark">Admin Panel — Fleur de Cake</h1>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="px-4 py-2 rounded bg-fdc-dark text-white hover:bg-fdc-medium">
                    Logout
                </button>
            </form>
        </header>

        <main class="p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>
