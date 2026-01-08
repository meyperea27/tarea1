<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Actualizar Detalles del Producto</h3>

                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            
                            <div class="space-y-2">
                                <x-input-label for="name" :value="__('Nombre del Producto')" class="text-lg" />
                                <x-text-input id="name" class="block mt-1 w-full text-lg" type="text" name="name" :value="old('name', $product->name)" required autofocus placeholder="Ej: Laptop Gamer XYZ" />
                            </div>

                            <div class="space-y-2">
                                <x-input-label for="price" :value="__('Precio')" class="text-lg" />
                                <x-text-input id="price" class="block mt-1 w-full text-lg" type="number" name="price" :value="old('price', $product->price)" required placeholder="Ej: 1299.99" step="0.01" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-input-label for="description" :value="__('Descripción Detallada')" class="text-lg" />
                            <textarea id="description" name="description" rows="6" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm text-lg" placeholder="Describe las características, especificaciones y beneficios del producto.">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <div class="space-y-2">
                                <x-input-label for="category_id" :value="__('Categoría')" class="text-lg" />
                                <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm text-lg">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <x-input-label for="image" :value="__('Actualizar Imagen')" class="text-lg"/>
                                <input type="file" id="image" name="image" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-2">
                            </div>
                        </div>
                        
                        @if ($product->image)
                        <div class="space-y-2">
                            <p class="text-lg font-medium text-gray-900 dark:text-gray-100">Imagen Actual</p>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mt-2 w-48 h-48 object-cover rounded-2xl shadow-lg">
                        </div>
                        @endif

                        <div class="flex items-center justify-end mt-10 pt-6 border-t border-gray-200 dark:border-gray-700 space-x-4">
                            <a href="{{ route('products.index') }}">
                                <x-secondary-button class="text-lg px-6 py-3">
                                    <i class="fas fa-times mr-2"></i>
                                    {{ __('Cancelar') }}
                                </x-secondary-button>
                            </a>

                            <x-primary-button class="text-lg px-6 py-3 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 shadow-lg">
                                <i class="fas fa-save mr-2"></i>
                                {{ __('Actualizar Producto') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
