<x-modal name="view-category" focusable>
    <div class="p-6 text-[#3B2F2F]">

        <!-- Título -->
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-medium text-[#3B2F2F]">Detalles de Categoría</h3>

            <button x-on:click="$dispatch('close')" class="text-[#3B2F2F] hover:text-[#C49A3A] transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Contenido -->
        <div class="space-y-4">

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">ID</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewId">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Nombre</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewName">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Descripción</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewDescription">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Familia</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewFamily">-</p>
            </div>

        </div>

        <!-- Botón -->
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                Cerrar
            </x-secondary-button>
        </div>

    </div>
</x-modal>