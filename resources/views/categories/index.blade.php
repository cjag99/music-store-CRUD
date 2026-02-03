<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="overflow-hidden border border-[#DAA520] bg-[#FFF8E7] shadow-md sm:rounded-lg">
                <div class="p-6 text-[#3B2F2F]">

                    <h2 class="mb-6 text-center text-2xl font-bold text-[#3B2F2F]">
                        Listado de Categorias
                    </h2>
                    <div class="mb-4">
                        @if (session('success'))
                            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                                class="relative mb-4 w-full rounded-md border border-green-400 bg-green-100 px-4 py-3 text-green-800">
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
                                class="relative mb-4 w-full rounded-md border border-red-400 bg-red-100 px-4 py-3 text-red-800">
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
                    <div class="mb-6 flex justify-end">

                        <button x-data="" x-on:click="$dispatch('open-modal', 'create-category')"
                            class="rounded-md bg-[#C49A3A] px-4 py-2 font-medium text-[#FFF8E7] transition hover:bg-[#B3872F]">
                            Crear categoría
                        </button>
                    </div>

                    @if ($categories->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full overflow-hidden rounded-md border border-[#DAA520]">

                                <thead>
                                    <tr class="border-b border-[#DAA520] bg-[#F2E6D5]">
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">ID</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Nombre</th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Descripción
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Familia
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">
                                            Instrumentos</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr
                                            class="cursor-pointer border-b border-[#DAA520]/40 transition hover:bg-[#F2E6D5]">
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">{{ $category->id }}</td>
                                            <td x-data=""
                                                x-on:click="
                                        document.getElementById('viewId').textContent = '{{ $category->id }}';
                                        document.getElementById('viewName').textContent = '{{ $category->name }}';
                                        document.getElementById('viewDescription').textContent = '{{ $category->description }}';
                                        document.getElementById('viewFamily').textContent = '{{ $category->family }}';
                                        $dispatch('open-modal', 'view-category')
                                    "
                                                class="px-6 py-4 text-sm font-medium text-[#3B2F2F]">
                                                {{ $category->name }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $category->description ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 text-sm text-[#3B2F2F]">
                                                {{ $category->family ?? 'N/A' }}</td>

                                            <td class="px-6 py-4 text-sm">
                                                <span
                                                    class="inline-flex items-center rounded-full bg-[#E8DCC5] px-3 py-1 text-xs font-medium text-[#3B2F2F]">
                                                    {{ $category->instruments->count() }}
                                                </span>
                                            </td>

                                            <td class="space-x-2 px-4 py-4 text-right">
                                                <!-- Botón Editar -->
                                                <button type="button" x-data
                                                    x-on:click="
                                                        window.dispatchEvent(new CustomEvent('edit-category-data', {
                                                            detail: {
                                                                id: {{ $category->id }},
                                                                name: @js($category->name),
                                                                description: @js($category->description),
                                                                family: @js($category->family)
                                                            }
                                                        }))
                                                    "
                                                    class="inline-flex items-center rounded-md bg-[#C49A3A] px-3 py-1 text-sm font-medium text-white transition hover:bg-[#B3872F]">
                                                    Editar
                                                </button>




                                                <!-- Botón Borrar -->
                                                <button type="button" x-data
                                                    x-on:click="
                                                        window.dispatchEvent(new CustomEvent('delete-category-data', {
                                                            detail: { id: {{ $category->id }} }
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
                            <p class="text-lg text-[#3B2F2F]">No hay categorías disponibles.</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @include('categories.partials.create-modal')
    @include('categories.partials.show-modal')
    @include('categories.partials.edit-modal')
    @include('categories.partials.delete-modal')
    <script>
        function editForm() {
            return {
                form: {
                    id: '',
                    name: '',
                    description: '',
                    family: ''
                },
                setData(category) {
                    this.form = {
                        ...category
                    };
                }
            }
        }

        function deleteForm() {
            return {
                id: '',
                setId(categoryId) {
                    this.id = categoryId;
                }
            }
        }
    </script>
</x-app-layout>
