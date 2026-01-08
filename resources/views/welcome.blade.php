<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Tienda</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-neutral-100 text-neutral-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <header class="flex justify-between items-center py-6">
            <div class="flex items-center space-x-2">
                <svg class="h-10 w-10 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c-1.657 0-3 2.239-3 5s1.343 5 3 5 3-2.239 3-5-1.343-5-3-5zm0 0c-2.485 0-4.5-2.015-4.5-4.5S9.515 2 12 2s4.5 2.015 4.5 4.5" />
                </svg>
                <h1 class="text-3xl font-heading font-bold text-neutral-900">Mi Tienda</h1>
            </div>
            <nav>
                @if (Route::has('login'))
                <div class="flex items-center space-x-6 text-lg">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-neutral-600 hover:text-primary-500 transition-colors duration-300">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-neutral-600 hover:text-primary-500 transition-colors duration-300">Iniciar Sesión</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-neutral-600 hover:text-primary-500 transition-colors duration-300">Registrate</a>
                    @endif
                    @endauth
                </div>
                @endif
            </nav>
        </header>

        <main class="mt-10">
            <section class="text-center py-20 bg-white rounded-2xl shadow-lifted">
                <h2 class="text-5xl font-heading font-bold text-neutral-900 mb-4">Bienvenido a Tu Tienda de Confianza</h2>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Explora nuestra selección de productos de alta calidad, diseñados para ti.</p>
            </section>

            <section class="mt-16">
                <h3 class="text-4xl font-heading font-bold text-neutral-900 mb-10 text-center">Nuestros Productos</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($products as $product)
                    <div class="bg-white rounded-2xl shadow-lifted overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                        <div class="p-8">
                            <h4 class="text-2xl font-bold font-heading text-neutral-900 mb-3">{{ $product->name }}</h4>
                            <p class="text-neutral-600 mb-4 h-20 overflow-hidden">{{ Str::limit($product->description, 80) }}</p>
                            <div class="flex justify-between items-center mt-6">
                                <span class="text-lg font-semibold text-neutral-500 bg-neutral-100 px-3 py-1 rounded-full">{{ $product->category->name }}</span>
                                <span class="text-2xl font-bold text-primary-500">${{ number_format($product->price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>

        <footer class="text-center text-neutral-500 py-10 mt-16 border-t border-neutral-200">
            <p>&copy; {{ date('Y') }} Mi Tienda. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>
