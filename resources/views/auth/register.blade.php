<x-guest-layout>
    <div class="bg-white rounded-4xl shadow-lg p-10">
        <div class="text-center mb-10">
            <div class="w-20 h-20 bg-brand-pink rounded-full inline-flex items-center justify-center -mt-20 mb-5 shadow-lg">
                 <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            </div>
            <h1 class="text-brand-cyan text-2xl font-bold">Crea tu Cuenta Ahora</h1>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="text-text-light text-sm">Nombre Completo *</label>
                <x-text-input id="name" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Introduce tu Nombre" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="text-text-light text-sm">Email *</label>
                <x-text-input id="email" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="email" name="email" :value="old('email')" required placeholder="Introduce tu Email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="text-text-light text-sm">Contraseña *</label>
                <x-text-input id="password" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="password" name="password" required autocomplete="new-password" placeholder="Introduce tu Contraseña" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="text-text-light text-sm">Confirmar Contraseña *</label>
                <x-text-input id="password_confirmation" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu Contraseña" />
            </div>

            <div class="flex items-center justify-center mt-6">
                <x-primary-button class="w-full bg-brand-cyan hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded-lg shadow-md">
                    {{ __('CREAR CUENTA') }}
                </x-primary-button>
            </div>

            <div class="text-center mt-6">
                 <a class="text-sm text-brand-cyan hover:underline" href="{{ route('login') }}">
                    ¿Ya tienes una cuenta? Inicia sesión
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
