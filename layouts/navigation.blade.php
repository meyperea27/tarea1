<!-- Logo -->
<div class="flex h-20 items-center justify-center shrink-0">
    <a href="{{ route('dashboard') }}" class="transition-transform duration-300 hover:scale-110">
        <x-application-logo class="block h-12 w-auto fill-current text-white" />
    </a>
</div>

<!-- Primary Navigation -->
<nav class="flex-1 space-y-2 px-4 py-8">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" icon="fa-solid fa-chart-pie">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index') || request()->routeIs('products.create') || request()->routeIs('products.edit')" icon="fa-solid fa-box-open">
        {{ __('Productos') }}
    </x-nav-link>
    <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index') || request()->routeIs('categories.create') || request()->routeIs('categories.edit')" icon="fa-solid fa-tags">
        {{ __('Categorías') }}
    </x-nav-link>
    @if(Auth::check() && Auth::user()->rol === 'admin')
        <x-nav-link :href="route('user-admin.index')" :active="request()->routeIs('user-admin.index') || request()->routeIs('user-admin.create') || request()->routeIs('user-admin.edit')" icon="fa-solid fa-users-cog">
            {{ __('Usuarios') }}
        </x-nav-link>
    @endif
</nav>

<!-- User Menu -->
<div class="border-t border-blue-700 px-4 py-6 dark:border-blue-900">
    <!-- Profile Link -->
    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" icon="fa-solid fa-user-pen">
        {{ __('Mi Perfil') }}
    </x-nav-link>

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}" class="mt-2">
        @csrf
        <x-nav-link :href="route('logout')" :active="false" onclick="event.preventDefault(); this.closest('form').submit();" icon="fa-solid fa-right-from-bracket">
            {{ __('Cerrar Sesión') }}
        </x-nav-link>
    </form>

    <!-- User Info -->
    <div class="mt-6 flex items-center">
        <div class="h-10 w-10 shrink-0 rounded-full bg-blue-200 bg-opacity-25 flex items-center justify-center">
             <i class="fa-solid fa-user text-white"></i>
        </div>
        <div class="ml-3">
            <p class="text-sm font-semibold text-white">{{ Auth::user()->name }}</p>
            <p class="text-xs text-blue-200">{{ Auth::user()->email }}</p>
        </div>
    </div>
</div>
