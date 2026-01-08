<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">¡Bienvenido de nuevo, {{ Auth::user()->name }}!</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-10">Desde aquí puedes gestionar todos los aspectos de tu tienda.</p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-blue-500 dark:bg-blue-700 rounded-2xl shadow-lg text-white p-6 flex items-center justify-between">
                        <div>
                            <div class="text-4xl font-extrabold">{{ $productCount }}</div>
                            <div class="text-lg font-semibold">Productos</div>
                        </div>
                        <i class="fas fa-box-open text-6xl opacity-50"></i>
                    </div>
                    <div class="bg-green-500 dark:bg-green-700 rounded-2xl shadow-lg text-white p-6 flex items-center justify-between">
                        <div>
                            <div class="text-4xl font-extrabold">{{ $categoryCount }}</div>
                            <div class="text-lg font-semibold">Categorías</div>
                        </div>
                        <i class="fas fa-tags text-6xl opacity-50"></i>
                    </div>
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <div class="bg-purple-500 dark:bg-purple-700 rounded-2xl shadow-lg text-white p-6 flex items-center justify-between">
                            <div>
                                <div class="text-4xl font-extrabold">{{ $userCount }}</div>
                                <div class="text-lg font-semibold">Usuarios</div>
                            </div>
                            <i class="fas fa-users text-6xl opacity-50"></i>
                        </div>
                    @endif
                </div>

                <!-- Navigation Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Manage Products -->
                    <a href="{{ route('products.index') }}" class="block group">
                        <div class="bg-blue-500 dark:bg-blue-700 rounded-2xl shadow-lg p-6 text-center h-full flex flex-col justify-center transform transition-transform duration-300 group-hover:-translate-y-2 border-b-4 border-blue-700 dark:border-blue-900">
                            <i class="fas fa-box-open text-5xl text-white opacity-80 mb-4"></i>
                            <h4 class="text-2xl font-bold text-white">Gestionar Productos</h4>
                            <p class="text-blue-100 dark:text-blue-200 mt-2">Añadir, editar y eliminar productos.</p>
                        </div>
                    </a>

                    <!-- Manage Categories -->
                    <a href="{{ route('categories.index') }}" class="block group">
                        <div class="bg-green-500 dark:bg-green-700 rounded-2xl shadow-lg p-6 text-center h-full flex flex-col justify-center transform transition-transform duration-300 group-hover:-translate-y-2 border-b-4 border-green-700 dark:border-green-900">
                            <i class="fas fa-tags text-5xl text-white opacity-80 mb-4"></i>
                            <h4 class="text-2xl font-bold text-white">Gestionar Categorías</h4>
                            <p class="text-green-100 dark:text-green-200 mt-2">Organiza tus productos en categorías.</p>
                        </div>
                    </a>

                    <!-- Manage Users (Admin only) -->
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <a href="{{ route('user-admin.index') }}" class="block group">
                            <div class="bg-purple-500 dark:bg-purple-700 rounded-2xl shadow-lg p-6 text-center h-full flex flex-col justify-center transform transition-transform duration-300 group-hover:-translate-y-2 border-b-4 border-purple-700 dark:border-purple-900">
                                <i class="fas fa-users-cog text-5xl text-white opacity-80 mb-4"></i>
                                <h4 class="text-2xl font-bold text-white">Gestionar Usuarios</h4>
                                <p class="text-purple-100 dark:text-purple-200 mt-2">Administra los roles y permisos.</p>
                            </div>
                        </a>
                    @endif
                </div>
                
                <!-- User Management Table (Admin only) -->
                @if(Auth::check() && Auth::user()->rol === 'admin')
                    <div class="mt-12 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 p-6">Gestión de Usuarios</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nombre</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rol</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $user->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ $user->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->rol === 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-800' }}">
                                                    {{ $user->rol }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('user-admin.edit', $user->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-600">Editar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
