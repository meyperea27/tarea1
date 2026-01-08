<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión de Categorías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl p-8">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Todas las Categorías</h3>
                    <a href="{{ route('categories.create') }}" class="transform hover:scale-105 transition-transform duration-300">
                        <x-primary-button class="bg-green-600 hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600 shadow-lg">
                            <i class="fas fa-plus-circle mr-2"></i>
                            {{ __('Crear Categoría') }}
                        </x-primary-button>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @forelse ($categories as $category)
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                            <div class="p-6 flex flex-col justify-between h-full">
                                <h4 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-4">{{ $category->name }}</h4>
                                
                                <div class="flex justify-center space-x-4 border-t border-gray-200 dark:border-gray-600 pt-4 mt-auto">
                                    <a href="{{ route('categories.edit', $category) }}" class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors duration-300">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta categoría? Esto también eliminará todos los productos asociados.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type-="submit" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 transition-colors duration-300">
                                            <i class="fas fa-trash-alt fa-2x"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12">
                            <i class="fas fa-tags text-6xl text-gray-400 dark:text-gray-500 mb-4"></i>
                            <h4 class="text-2xl font-bold text-gray-700 dark:text-gray-300">No se encontraron categorías</h4>
                            <p class="text-gray-500 dark:text-gray-400 mt-2">¡Crea tu primera categoría para empezar!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
