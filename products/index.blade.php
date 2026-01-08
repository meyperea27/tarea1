<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl p-8">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Todos los Productos</h3>
                    <a href="{{ route('products.create') }}" class="transform hover:scale-105 transition-transform duration-300">
                        <x-primary-button class="bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 shadow-lg">
                            <i class="fas fa-plus-circle mr-2"></i>
                            {{ __('Crear Producto') }}
                        </x-primary-button>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @forelse ($products as $product)
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $product->name }}</h4>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 h-20 overflow-y-auto">{{ $product->description }}</p>
                                
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-extrabold text-blue-600 dark:text-blue-400">${{ number_format($product->price, 2) }}</span>
                                    <span class="px-3 py-1 text-sm font-semibold text-white bg-green-500 dark:bg-green-600 rounded-full">{{ $product->category->name ?? 'Sin categoría' }}</span>
                                </div>

                                <div class="flex justify-end space-x-3 border-t border-gray-200 dark:border-gray-600 pt-4 mt-4">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-300">
                                        <i class="fas fa-edit text-lg"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type-="submit" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 transition-colors duration-300">
                                            <i class="fas fa-trash-alt text-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12">
                            <i class="fas fa-box-open text-6xl text-gray-400 dark:text-gray-500 mb-4"></i>
                            <h4 class="text-2xl font-bold text-gray-700 dark:text-gray-300">No se encontraron productos</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-2">¡Crea tu primer producto para empezar!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
