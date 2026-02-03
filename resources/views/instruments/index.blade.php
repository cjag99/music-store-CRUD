<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Instrumentos</h2>

                    <div class="mb-6 flex justify-between items-center">
                        <div></div>
                        <button id="openModalBtn" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Crear Instrumento
                        </button>
                    </div>

                    @if($instruments->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-300">
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nombre</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Marca</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Precio</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Peso (kg)</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Año</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Categoría</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($instruments as $instrument)
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition cursor-pointer instrument-row" data-instrument-id="{{ $instrument->id }}">
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $instrument->id }}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $instrument->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $instrument->brand ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $instrument->price ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $instrument->weight ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $instrument->release_year ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $instrument->category?->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-4 text-right">
                                        <div class="relative inline-block text-left">
                                            <button type="button" class="actions-btn inline-flex items-center p-2 text-gray-500 hover:text-gray-700 focus:outline-none" data-id="{{ $instrument->id }}" aria-expanded="false" aria-haspopup="true">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </button>

                                            <div class="actions-menu hidden origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                                                <div class="py-1">
                                                    <a href="{{ route('instruments.edit', $instrument->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Editar</a>
                                                    <button type="button" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 delete-btn" data-id="{{ $instrument->id }}">Borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">No hay instrumentos disponibles.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('instruments.create')
    @include('instruments.show')
    @include('instruments.delete')


</x-app-layout>