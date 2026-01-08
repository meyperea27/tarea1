<x-guest-layout>
    <div class="bg-white rounded-4xl shadow-lg p-10">
        <div class="text-center mb-10">
            <div class="w-20 h-20 bg-brand-pink rounded-full inline-flex items-center justify-center -mt-20 mb-5 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h1 class="text-brand-cyan text-2xl font-bold">Recuperar Contraseña</h1>
        </div>

        <div class="mb-4 text-sm text-text-light text-center">
            ¿Olvidaste tu contraseña? No hay problema. Solo dinos tu dirección de correo y te enviaremos un enlace para que elijas una nueva.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 font-medium text-sm text-green-600" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="text-text-light text-sm">Email *</label>
                <x-text-input id="email" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="email" name="email" :value="old('email')" required autofocus placeholder="Introduce tu Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-6">
                <x-primary-button class="w-full bg-brand-cyan hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded-lg shadow-md">
                    {{ __('ENVIAR ENLACE') }}
                </x-primary-button>
            </div>

            <div class="text-center mt-6">
                <a class="text-sm text-brand-cyan hover:underline" href="{{ route('login') }}">
                    ‹ Volver al inicio de sesión
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
