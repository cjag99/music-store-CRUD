<!-- Modal para ver detalles -->
<div id="viewModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Encabezado del modal -->
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Detalles de Categoría</h3>
            <button id="closeViewModalBtn" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Contenido -->
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
                <label class="block text-sm font-medium text-gray-700">Descripción</label>
                <p class="mt-1 text-sm text-gray-600" id="viewDescription">-</p>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Familia</label>
                <p class="mt-1 text-sm text-gray-600" id="viewFamily">-</p>
            </div>

            <!-- Botones -->
            <div class="flex justify-end gap-3">
                <button id="closeViewBtn" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 font-medium">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>