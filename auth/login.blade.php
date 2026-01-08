<x-guest-layout>
    <div class="bg-white rounded-4xl shadow-lg p-10">
        <div class="text-center mb-10">
            <div class="w-20 h-20 bg-brand-pink rounded-full inline-flex items-center justify-center -mt-20 mb-5 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </div>
            <h1 class="text-brand-cyan text-2xl font-bold">Inicia sesión ahora</h1>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="text-text-light text-sm">Username *</label>
                <x-text-input id="email" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your Username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="text-text-light text-sm">Password *</label>
                <x-text-input id="password" class="block mt-1 w-full bg-form-bg border-none rounded-lg py-3 px-4 text-text-dark" type="password" name="password" required autocomplete="current-password" placeholder="Enter your Password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-brand-cyan shadow-sm focus:ring-brand-cyan" name="remember">
                    <span class="ml-2 text-sm text-text-light">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-6">
                <x-primary-button class="w-full bg-brand-cyan hover:bg-opacity-90 text-white font-bold py-3 px-4 rounded-lg shadow-md">
                    {{ __('ACCESO') }}
                </x-primary-button>
            </div>

            <div class="mt-6 flex justify-between items-center text-sm">
                <a class="text-brand-cyan hover:underline" href="{{ route('password.request') }}">
                    ¿Se te olvidó tu contraseña?
                </a>
                <a class="text-brand-cyan hover:underline" href="{{ route('register') }}">
                    ¿No tienes una cuenta?
                </a>
            </div>

            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="text-sm text-brand-cyan hover:underline">‹ Volver a la página principal</a>
            </div>

             <p class="text-center mt-4 text-xs text-text-light">
                Imagen de <a href="https://freepik.com" target="_blank" class="hover:underline">Freepik</a>
            </p>
        </form>
    </div>
</x-guest-layout>
