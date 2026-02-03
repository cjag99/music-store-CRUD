<x-guest-layout>
    <div class="mb-4 text-sm text-[#3B2F2F]">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Solo indícanos tu dirección de correo electrónico y te enviaremos un enlace para restablecerla y que puedas elegir una nueva.') }}
    </div>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <x-primary-button>
                {{ __('Enviar enlace de recuperación') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
