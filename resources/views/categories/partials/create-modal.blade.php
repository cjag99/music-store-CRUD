<x-modal name="create-category" focusable>
    <form method="POST" action="{{ route('categories.store') }}" class="p-6 text-[#3B2F2F]">
        @csrf

        <!-- Título -->
        <h2 class="text-lg font-medium text-[#3B2F2F]">
            Crear Nueva Categoría
        </h2>

        <!-- Nombre -->
        <div class="mt-6">
            <x-input-label for="name" value="Nombre" class="text-[#3B2F2F]" />
            <x-text-input id="name" name="name" type="text"
                class="mt-1 block w-full"
                required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Descripción -->
        <div class="mt-4">
            <x-input-label for="description" value="Descripción" class="text-[#3B2F2F]" />
            <textarea id="description" name="description" rows="3"
                class="mt-1 block w-full rounded-md border-[#DAA520] bg-[#FFF8E7] text-[#3B2F2F] focus:border-[#C49A3A] focus:ring-[#C49A3A] px-3 py-2"></textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Familia -->
        <div class="mt-4">
            <x-input-label for="family" value="Familia" class="text-[#3B2F2F]" />
            <x-text-input id="family" name="family" type="text"
                class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('family')" class="mt-2" />
        </div>

        <!-- Botones -->
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="me-3">
                Cancelar
            </x-secondary-button>

            <x-success-button>
                Crear
            </x-success-button>
        </div>
    </form>
</x-modal>