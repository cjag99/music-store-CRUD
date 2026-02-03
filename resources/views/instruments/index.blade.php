<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden border border-[#DAA520] bg-[#FFF8E7] shadow-md sm:rounded-lg">
                <div class="p-6 text-[#3B2F2F]">
                    <h2 class="mb-6 text-center text-2xl font-bold text-[#3B2F2F]">
                        Listado de Instrumentos
                    </h2>

                    {{-- Alertas --}}
                    <div class="mb-4 space-y-2">
                        @if (session('success'))
                            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                                class="relative w-full rounded-md border border-green-400 bg-green-100 px-4 py-3 text-green-800">
                                <span>{{ session('success') }}</span>
                                <button type="button"
                                    class="absolute right-3 top-2 text-green-700 hover:text-green-900"
                                    x-on:click="show = false">
                                    &times;
                                </button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
                                class="relative w-full rounded-md border border-red-400 bg-red-100 px-4 py-3 text-red-800">
                                <ul class="list-disc pl-5 pr-6">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="absolute right-3 top-2 text-red-700 hover:text-red-900"
                                    x-on:click="show = false">
                                    &times;
                                </button>
                            </div>
                        @endif
                    </div>

                    {{-- Botón Crear --}}
                    <div class="mb-6 flex justify-end">
                        <button x-data x-on:click="$dispatch('open-modal', 'create-instrument')"
                            class="rounded-md bg-[#C49A3A] px-4 py-2 font-medium text-[#FFF8E7] transition hover:bg-[#B3872F]">
                            Crear Instrumento
                        </button>
                    </div>

                    {{-- Tabla --}}
                    @if ($instruments->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full overflow-hidden rounded-md border border-[#DAA520]">
                                <thead>
                                    <tr class="border-b border-[#DAA520] bg-[#F2E6D5]">
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">ID</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Nombre</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Marca</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Precio</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Peso (kg)
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Año</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Categoría
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instruments as $instrument)
                                        <tr
                                            class="cursor-pointer border-b border-[#DAA520]/40 transition hover:bg-[#F2E6D5]">
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">{{ $instrument->id }}</td>
                                            <td x-data
                                                x-on:click="
                                                        document.getElementById('viewId').textContent = '{{ $instrument->id }}';
                                                        document.getElementById('viewName').textContent = '{{ $instrument->name }}';
                                                        document.getElementById('viewBrand').textContent = '{{ $instrument->brand ?? 'N/A' }}';
                                                        document.getElementById('viewPrice').textContent = '{{ $instrument->price ?? 'N/A' }}';
                                                        document.getElementById('viewWeight').textContent = '{{ $instrument->weight ?? 'N/A' }}';
                                                        document.getElementById('viewYear').textContent = '{{ $instrument->release_year ?? 'N/A' }}';
                                                        document.getElementById('viewAcoustic').textContent = '{{ $instrument->is_acoustic ? 'Sí' : 'No' }}';
                                                        document.getElementById('viewCategory').textContent = '{{ $instrument->category?->name ?? 'N/A' }}';
                                                        $dispatch('open-modal', 'view-instrument')
                                                    "
                                                class="cursor-pointer px-6 py-4 text-sm font-medium text-[#3B2F2F] hover:underline">
                                                {{ $instrument->name }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $instrument->brand ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $instrument->price ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $instrument->weight ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $instrument->release_year ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $instrument->category?->name ?? 'N/A' }}</td>
                                            <td class="space-x-2 px-4 py-4 text-right">
                                                <!-- Botón Editar -->
                                                <button type="button" x-data
                                                    x-on:click="
                                                        window.dispatchEvent(new CustomEvent('edit-instrument-data', {
                                                            detail: {
                                                                id: {{ $instrument->id }},
                                                                name: @js($instrument->name),
                                                                brand: @js($instrument->brand),
                                                                price: @js($instrument->price),
                                                                weight: @js($instrument->weight),
                                                                release_year: @js($instrument->release_year),
                                                                is_acoustic: {{ $instrument->is_acoustic ? 'true' : 'false' }},
                                                                category_id: {{ $instrument->category_id ?? 'null' }}
                                                            }
                                                        }))
                                                    "
                                                    class="inline-flex items-center rounded-md bg-[#C49A3A] px-3 py-1 text-sm font-medium text-white transition hover:bg-[#B3872F]">
                                                    Editar
                                                </button>

                                                <!-- Botón Borrar -->
                                                <button type="button" x-data
                                                    x-on:click="
                                                        window.dispatchEvent(new CustomEvent('delete-instrument-data', {
                                                            detail: { id: {{ $instrument->id }} }
                                                        }))
                                                    "
                                                    class="inline-flex items-center rounded-md bg-red-600 px-3 py-1 text-sm font-medium text-white transition hover:bg-red-700">
                                                    Borrar
                                                </button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="py-12 text-center">
                            <p class="text-lg text-[#3B2F2F]">No hay instrumentos disponibles.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('instruments.partials.create-modal')
    @include('instruments.partials.show-modal')
    @include('instruments.partials.edit-modal')
    @include('instruments.partials.delete-modal')
    <script>
        function editInstrumentForm() {
            return {
                form: {
                    id: '',
                    name: '',
                    brand: '',
                    price: '',
                    weight: '',
                    release_year: '',
                    is_acoustic: false,
                    category_id: ''
                },
                setData(instrument) {
                    this.form = {
                        ...instrument
                    };
                }
            }
        }

        function deleteInstrumentForm() {
            return {
                id: '',
                setId(instrumentId) {
                    this.id = instrumentId;
                }
            }
        }
    </script>

</x-app-layout>
