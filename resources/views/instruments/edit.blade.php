<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Instrumento</h2>

                    <form method="POST" action="{{ route('instruments.update', $instrument->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" id="name" name="name" required value="{{ old('name', $instrument->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 border px-3 py-2">
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="brand" class="block text-sm font-medium text-gray-700">Marca</label>
                            <input type="text" id="brand" name="brand" value="{{ old('brand', $instrument->brand) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                            @error('brand')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                            <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $instrument->price) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                            @error('price')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="weight" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
                            <input type="number" step="0.01" id="weight" name="weight" value="{{ old('weight', $instrument->weight) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                            @error('weight')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="release_year" class="block text-sm font-medium text-gray-700">Año de lanzamiento</label>
                            <input type="number" id="release_year" name="release_year" value="{{ old('release_year', $instrument->release_year) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                            @error('release_year')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 flex items-center gap-2">
                            <input type="hidden" name="is_acoustic" value="0">
                            <input type="checkbox" id="is_acoustic" name="is_acoustic" value="1" {{ old('is_acoustic', $instrument->is_acoustic) ? 'checked' : '' }} class="h-4 w-4 text-green-600 border-gray-300 rounded">
                            <label for="is_acoustic" class="text-sm text-gray-700">Es acústico</label>
                        </div>

                        <div class="mb-4">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                            <select id="category_id" name="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border px-3 py-2">
                                <option value="">-- Ninguna --</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ $instrument->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex justify-end gap-3">
                            <a href="{{ route('instruments') }}" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 font-medium">Cancelar</a>
                            <button type="submit" class="px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700 font-medium">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>