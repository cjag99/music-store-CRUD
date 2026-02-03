<x-modal name="delete-instrument" focusable>
    <div class="p-6 text-[#3B2F2F]" x-data="deleteInstrumentForm()" x-init="window.addEventListener('delete-instrument-data', e => {
        setId(e.detail.id);
        $dispatch('open-modal', 'delete-instrument');
    });">
        <h2 class="mb-4 text-lg font-medium">Confirmar borrado</h2>

        <p class="mb-4 text-sm text-gray-700">
            ¿Estás seguro de que quieres borrar este instrumento? Esta acción no se puede deshacer.
        </p>

        <form method="POST" :action="'/instruments/' + id" class="flex justify-end gap-3">
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
