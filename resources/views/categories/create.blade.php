<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Nueva Categoría') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Nombre de la Categoría</h3>

                    <form action="{{ route('categories.store') }}" method="POST" class="space-y-8">
                        @csrf

                        <div class="space-y-2">
                            <x-input-label for="name" :value="__('Nombre')" class="text-lg" />
                            <x-text-input id="name" class="block mt-1 w-full text-lg" type="text" name="name" :value="old('name')" required autofocus placeholder="Ej: Electrónicos" />
                        </div>

                        <div class="flex items-center justify-end mt-10 pt-6 border-t border-gray-200 dark:border-gray-700 space-x-4">
                            <a href="{{ route('categories.index') }}">
                                <x-secondary-button class="text-lg px-6 py-3">
                                    <i class="fas fa-times mr-2"></i>
                                    {{ __('Cancelar') }}
                                </x-secondary-button>
                            </a>

                            <x-primary-button class="text-lg px-6 py-3 bg-green-600 hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600 shadow-lg">
                                <i class="fas fa-check-circle mr-2"></i>
                                {{ __('Crear Categoría') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
