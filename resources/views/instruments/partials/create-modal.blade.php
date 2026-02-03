<x-modal name="create-instrument" focusable>
    <form method="POST" action="{{ route('instruments.store') }}" class="p-6 text-[#3B2F2F]">
        @csrf

        <!-- Título -->
        <h2 class="text-lg font-medium text-[#3B2F2F]">
            Crear Nuevo Instrumento
        </h2>

        <!-- Nombre -->
        <div class="mt-6">
            <x-input-label for="name" value="Nombre" class="text-[#3B2F2F]" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Marca -->
        <div class="mt-4">
            <x-input-label for="brand" value="Marca" class="text-[#3B2F2F]" />
            <x-text-input id="brand" name="brand" type="text" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
        </div>

        <!-- Precio -->
        <div class="mt-4">
            <x-input-label for="price" value="Precio" class="text-[#3B2F2F]" />
            <x-text-input id="price" name="price" type="number" step="0.01" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Peso -->
        <div class="mt-4">
            <x-input-label for="weight" value="Peso (kg)" class="text-[#3B2F2F]" />
            <x-text-input id="weight" name="weight" type="number" step="0.01" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>

        <!-- Año de lanzamiento -->
        <div class="mt-4">
            <x-input-label for="release_year" value="Año de lanzamiento" class="text-[#3B2F2F]" />
            <x-text-input id="release_year" name="release_year" type="number" class="mt-1 block w-full" />
            <x-input-error :messages="$errors->get('release_year')" class="mt-2" />
        </div>

        <!-- Es acústico -->
        <div class="mt-4 flex items-center gap-2">
            <input type="hidden" name="is_acoustic" value="0">
            <input type="checkbox" id="is_acoustic" name="is_acoustic" value="1"
                class="h-4 w-4 rounded border-gray-300 text-green-600">
            <label for="is_acoustic" class="text-sm text-[#3B2F2F]">Es acústico</label>
        </div>

        <!-- Categoría -->
        <div class="mt-4">
            <x-input-label for="category_id" value="Categoría" class="text-[#3B2F2F]" />
            <select id="category_id" name="category_id"
                class="mt-1 block w-full rounded-md border-[#DAA520] bg-[#FFF8E7] px-3 py-2 text-[#3B2F2F] focus:border-[#C49A3A] focus:ring-[#C49A3A]">
                <option value="">-- Ninguna --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
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
