<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 block">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-[#3B2F2F33] bg-[#FFF8E7] text-[#C49A3A] focus:border-[#C49A3A] focus:ring-[#C49A3A]"
                    name="remember">

                <span class="ms-2 text-sm text-[#3B2F2F]">
                    {{ __('Recordarme en ese dispositivo') }}
                </span>
            </label>
        </div>




        <div class="mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="rounded-md text-sm text-[#3B2F2F] underline hover:text-[#C49A3A] focus:outline-none focus:ring-2 focus:ring-[#C49A3A] focus:ring-offset-2 dark:text-[#FFF8E7] dark:hover:text-[#E6C068]"
                    href="{{ route('password.request') }}">
                    {{ __('Restablecer contraseña') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
