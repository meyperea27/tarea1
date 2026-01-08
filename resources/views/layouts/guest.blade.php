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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center justify-center bg-brand-gray relative overflow-hidden">
            <!-- Top decorative background -->
            <div class="absolute top-0 left-0 w-full h-1/2">
                <div class="absolute w-full h-full bg-brand-purple" style="clip-path: polygon(0 0, 100% 0, 100% 50%, 0 100%);"></div>
                <div class="absolute w-full h-full bg-brand-pink opacity-70" style="clip-path: polygon(50% 0, 100% 0, 100% 50%, 75% 100%);"></div>
                <div class="absolute w-full h-full bg-brand-cyan opacity-80" style="clip-path: polygon(0 50%, 50% 0, 80% 30%, 30% 80%);"></div>
            </div>

            <!-- Bottom decorative background -->
            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-brand-purple"></div>

            <main class="w-full max-w-md z-10">
                 {{ $slot }}
            </main>
        </div>
    </body>
</html>
