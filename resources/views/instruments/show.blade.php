<!-- Modal para ver detalles -->
<div id="viewModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Detalles de Instrumento</h3>
            <button id="closeViewModalBtn" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="p-6">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">ID</label>
                <p class="mt-1 text-sm text-gray-900" id="viewId">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <p class="mt-1 text-sm text-gray-900" id="viewName">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Marca</label>
                <p class="mt-1 text-sm text-gray-600" id="viewBrand">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Precio</label>
                <p class="mt-1 text-sm text-gray-600" id="viewPrice">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Peso (kg)</label>
                <p class="mt-1 text-sm text-gray-600" id="viewWeight">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Año de lanzamiento</label>
                <p class="mt-1 text-sm text-gray-600" id="viewReleaseYear">-</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Acústico</label>
                <p class="mt-1 text-sm text-gray-600" id="viewIsAcoustic">-</p>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Categoría</label>
                <p class="mt-1 text-sm text-gray-600" id="viewCategory">-</p>
            </div>

            <div class="flex justify-end gap-3">
                <button id="closeViewBtn" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 font-medium">Cerrar</button>
            </div>
        </div>
    </div>
</div>