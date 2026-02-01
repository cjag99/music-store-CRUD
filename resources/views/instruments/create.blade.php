<!-- Modal -->
<div id="createModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center">
    <div class="relative bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Crear Instrumento</h3>
            <button id="closeModalBtn" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form method="POST" action="{{ route('instruments.store') }}" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 border px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="brand" class="block text-sm font-medium text-gray-700">Marca</label>
                <input type="text" id="brand" name="brand" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" step="0.01" id="price" name="price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
                <input type="number" step="0.01" id="weight" name="weight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="release_year" class="block text-sm font-medium text-gray-700">Año de lanzamiento</label>
                <input type="number" id="release_year" name="release_year" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
            </div>

            <div class="mb-4 flex items-center gap-2">
                <input type="hidden" name="is_acoustic" value="0">
                <input type="checkbox" id="is_acoustic" name="is_acoustic" value="1" class="h-4 w-4 text-green-600 border-gray-300 rounded">
                <label for="is_acoustic" class="text-sm text-gray-700">Es acústico</label>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                    <option value="">-- Ninguna --</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end gap-3">
                <button type="button" id="cancelBtn" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 font-medium">Cancelar</button>
                <button type="submit" class="px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700 font-medium">Crear</button>
            </div>
        </form>
    </div>
</div>