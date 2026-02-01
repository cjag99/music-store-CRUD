<!-- Modal de confirmación de borrado -->
<div id="deleteModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Confirmar borrado</h3>
            <button id="closeDeleteModalBtn" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="p-6">
            <p class="text-sm text-gray-700 mb-4">¿Estás seguro de que quieres borrar esta categoría? Esta acción no se puede deshacer.</p>

            <div class="flex justify-end gap-3">
                <button id="cancelDeleteBtn" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 font-medium">Cancelar</button>
                <button id="confirmDeleteBtn" data-id="" class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 font-medium">Borrar</button>
            </div>
        </div>
    </div>
</div>