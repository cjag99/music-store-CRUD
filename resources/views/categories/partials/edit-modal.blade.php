<x-modal name="edit-category" focusable>
    <div class="p-6 text-[#3B2F2F]" x-data="editForm()" x-init="window.addEventListener('edit-category-data', e => {
        console.log(e.detail);
        setData(e.detail);
        $dispatch('open-modal', 'edit-category');
    });">
        <h2 class="mb-6 text-lg font-medium">Editar Categoría</h2>

        <form method="POST" :action="'/categories/' + form.id" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div>
                <x-input-label for="edit-name" value="Nombre" class="text-[#3B2F2F]" />
                <x-text-input id="edit-name" name="name" type="text" class="mt-1 block w-full" required
                    x-model="form.name" />
            </div>

            <!-- Descripción -->
            <div>
                <x-input-label for="edit-description" value="Descripción" class="text-[#3B2F2F]" />
                <textarea id="edit-description" name="description" rows="3"
                    class="mt-1 block w-full rounded-md border-[#DAA520] bg-[#FFF8E7] px-3 py-2 text-[#3B2F2F] focus:border-[#C49A3A] focus:ring-[#C49A3A]"
                    x-model="form.description"></textarea>
            </div>

            <!-- Familia -->
            <div>
                <x-input-label for="edit-family" value="Familia" class="text-[#3B2F2F]" />
                <x-text-input id="edit-family" name="family" type="text" class="mt-1 block w-full"
                    x-model="form.family" />
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
