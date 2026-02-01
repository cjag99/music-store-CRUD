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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const cancelBtn = document.getElementById('cancelBtn');
            const createModal = document.getElementById('createModal');

            if (openModalBtn) {
                openModalBtn.addEventListener('click', () => {
                    if (createModal) createModal.classList.remove('hidden');
                });
            }

            const closeModal = () => {
                if (createModal) createModal.classList.add('hidden');
            };

            if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
            if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

            if (createModal) {
                createModal.addEventListener('click', (e) => {
                    if (e.target === createModal) closeModal();
                });
            }

            const viewModal = document.getElementById('viewModal');
            const closeViewModalBtn = document.getElementById('closeViewModalBtn');
            const closeViewBtn = document.getElementById('closeViewBtn');
            const instrumentRows = document.querySelectorAll('.instrument-row');

            instrumentRows.forEach(row => {
                row.addEventListener('click', async () => {
                    const instrumentId = row.getAttribute('data-instrument-id');
                    try {
                        const response = await fetch(`/instruments/${instrumentId}`);
                        const data = await response.json();

                        document.getElementById('viewId').textContent = data.id;
                        document.getElementById('viewName').textContent = data.name;
                        document.getElementById('viewBrand').textContent = data.brand || '-';
                        document.getElementById('viewPrice').textContent = data.price ?? '-';
                        document.getElementById('viewWeight').textContent = data.weight ?? '-';
                        document.getElementById('viewReleaseYear').textContent = data.release_year ?? '-';
                        document.getElementById('viewIsAcoustic').textContent = (data.is_acoustic ? 'Sí' : 'No');
                        document.getElementById('viewCategory').textContent = data.category?.name || '-';

                        if (viewModal) viewModal.classList.remove('hidden');
                    } catch (error) {
                        console.error('Error:', error);
                    }
                });
            });

            const closeViewModal = () => {
                if (viewModal) viewModal.classList.add('hidden');
            };

            if (closeViewModalBtn) closeViewModalBtn.addEventListener('click', closeViewModal);
            if (closeViewBtn) closeViewBtn.addEventListener('click', closeViewModal);

            if (viewModal) viewModal.addEventListener('click', (e) => {
                if (e.target === viewModal) closeViewModal();
            });
        });

        // Actions menu & delete modal logic (mirrors categories)
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('click', function() {
                document.querySelectorAll('.actions-menu').forEach(m => m.classList.add('hidden'));
            });

            const actionButtons = document.querySelectorAll('.actions-btn');
            actionButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const menu = btn.closest('.relative').querySelector('.actions-menu');
                    document.querySelectorAll('.actions-menu').forEach(m => {
                        if (m !== menu) m.classList.add('hidden');
                    });
                    menu.classList.toggle('hidden');
                });
            });

            document.querySelectorAll('.actions-btn, .actions-menu').forEach(el => el.addEventListener('click', function(e) {
                e.stopPropagation();
            }));

            const deleteButtons = document.querySelectorAll('.delete-btn');
            const deleteModal = document.getElementById('deleteModal');
            const closeDeleteModalBtn = document.getElementById('closeDeleteModalBtn');
            const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            const csrfMeta = document.querySelector('meta[name="csrf-token"]');
            const csrf = csrfMeta ? csrfMeta.getAttribute('content') : null;

            deleteButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const id = btn.getAttribute('data-id');
                    if (confirmDeleteBtn) confirmDeleteBtn.setAttribute('data-id', id);
                    if (deleteModal) deleteModal.classList.remove('hidden');
                });
            });

            const closeDeleteModal = () => {
                if (deleteModal) deleteModal.classList.add('hidden');
            };
            if (closeDeleteModalBtn) closeDeleteModalBtn.addEventListener('click', closeDeleteModal);
            if (cancelDeleteBtn) cancelDeleteBtn.addEventListener('click', closeDeleteModal);
            if (deleteModal) deleteModal.addEventListener('click', (e) => {
                if (e.target === deleteModal) closeDeleteModal();
            });

            if (confirmDeleteBtn) {
                confirmDeleteBtn.addEventListener('click', async function(e) {
                    e.stopPropagation();
                    const id = confirmDeleteBtn.getAttribute('data-id');
                    try {
                        const res = await fetch(`/instruments/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrf,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            }
                        });
                        if (res.ok) {
                            const row = document.querySelector(`.instrument-row[data-instrument-id="${id}"]`);
                            if (row) row.remove();
                            closeDeleteModal();
                            alert('Instrumento borrado');
                        } else {
                            const json = await res.json().catch(() => null);
                            alert(json?.message || 'Error al borrar');
                        }
                    } catch (err) {
                        console.error(err);
                        alert('Error al borrar');
                    }
                });
            }
        });
    </script>
</x-app-layout>