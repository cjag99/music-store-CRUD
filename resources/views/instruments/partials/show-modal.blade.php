<x-modal name="view-instrument" focusable>
    <div class="p-6 text-[#3B2F2F]">

        <!-- Título -->
        <div class="mb-6 flex items-center justify-between">
            <h3 class="text-lg font-medium text-[#3B2F2F]">Detalles de Instrumento</h3>

            <button x-on:click="$dispatch('close')" class="text-[#3B2F2F] transition hover:text-[#C49A3A]">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
                <label class="block text-sm font-medium text-[#3B2F2F]">Marca</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewBrand">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Precio</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewPrice">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Peso (kg)</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewWeight">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Año de lanzamiento</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewYear">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Acústico</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewAcoustic">-</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-[#3B2F2F]">Categoría</label>
                <p class="mt-1 text-sm text-[#3B2F2F]" id="viewCategory">-</p>
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
