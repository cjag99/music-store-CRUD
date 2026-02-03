<x-modal name="edit-instrument" focusable>
    <div class="p-6 text-[#3B2F2F]" x-data="editInstrumentForm()" x-init="window.addEventListener('edit-instrument-data', e => {
        setData(e.detail);
        $dispatch('open-modal', 'edit-instrument');
    });">
        <h2 class="mb-6 text-lg font-medium">Editar Instrumento</h2>

        <form method="POST" :action="'/instruments/' + form.id" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div>
                <x-input-label for="edit-name" value="Nombre" class="text-[#3B2F2F]" />
                <x-text-input id="edit-name" name="name" type="text" class="mt-1 block w-full" required
                    x-model="form.name" />
            </div>

            <!-- Marca -->
            <div>
                <x-input-label for="edit-brand" value="Marca" class="text-[#3B2F2F]" />
                <x-text-input id="edit-brand" name="brand" type="text" class="mt-1 block w-full"
                    x-model="form.brand" />
            </div>

            <!-- Precio -->
            <div>
                <x-input-label for="edit-price" value="Precio" class="text-[#3B2F2F]" />
                <x-text-input id="edit-price" name="price" type="number" step="0.01" class="mt-1 block w-full"
                    x-model="form.price" />
            </div>

            <!-- Peso -->
            <div>
                <x-input-label for="edit-weight" value="Peso (kg)" class="text-[#3B2F2F]" />
                <x-text-input id="edit-weight" name="weight" type="number" step="0.01" class="mt-1 block w-full"
                    x-model="form.weight" />
            </div>

            <!-- Año de lanzamiento -->
            <div>
                <x-input-label for="edit-release-year" value="Año de lanzamiento" class="text-[#3B2F2F]" />
                <x-text-input id="edit-release-year" name="release_year" type="number" class="mt-1 block w-full"
                    x-model="form.release_year" />
            </div>

            <!-- Acústico -->
            <div class="flex items-center gap-2">
                <input type="hidden" name="is_acoustic" value="0">
                <input type="checkbox" id="edit-is-acoustic" name="is_acoustic" value="1"
                    x-model="form.is_acoustic" class="order-[#3B2F2F33] h-4 w-4 rounded bg-[#FFF8E7] text-[#C49A3A]">
                <label for="edit-is-acoustic" class="text-sm text-[#3B2F2F]">Es acústico</label>
            </div>

            <!-- Categoría -->
            <div>
                <x-input-label for="edit-category-id" value="Categoría" class="text-[#3B2F2F]" />
                <select id="edit-category-id" name="category_id"
                    class="mt-1 block w-full rounded-md border-[#DAA520] bg-[#FFF8E7] px-3 py-2 text-[#3B2F2F] focus:border-[#C49A3A] focus:ring-[#C49A3A]"
                    x-model="form.category_id">
                    <option value="">-- Ninguna --</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Botones -->
            <div class="flex justify-end gap-3">
                <x-secondary-button type="button" x-on:click="$dispatch('close')">
                    Cancelar
                </x-secondary-button>

                <x-success-button type="submit">
                    Guardar
                </x-success-button>
            </div>
        </form>
    </div>
</x-modal>
