<x-modal name="confirm-delete" focusable>
    <div class="p-6 text-[#3B2F2F]" x-data="deleteForm()" x-init="window.addEventListener('delete-category-data', e => {
        setId(e.detail.id);
        $dispatch('open-modal', 'confirm-delete');
    });">
        <h2 class="mb-4 text-lg font-medium">Confirmar borrado</h2>

        <p class="mb-4 text-sm text-gray-700">
            ¿Estás seguro de que quieres borrar esta categoría?
        </p>

        <form method="POST" :action="'/categories/' + id" class="flex justify-end gap-3">
            @csrf
            @method('DELETE')

            <x-secondary-button type="button" x-on:click="$dispatch('close')">
                Cancelar
            </x-secondary-button>

            <x-danger-button type="submit">
                Borrar
            </x-danger-button>
        </form>
    </div>
</x-modal>
