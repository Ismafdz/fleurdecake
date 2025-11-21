<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    {{-- Menggunakan warna background kustom yang sudah kita definisikan --}}
    <body class="font-sans antialiased bg-fleur-light"> 

        {{-- Kita hapus navigasi bawaan Breeze di sini (seperti tag <nav>) --}}
        
        <!-- Konten Utama -->
        <main>
            {{-- Ini adalah tempat konten dari @section('content') di dashboard.blade.php akan dimasukkan --}}
            @yield('content')
        </main>
    </body>
</html>