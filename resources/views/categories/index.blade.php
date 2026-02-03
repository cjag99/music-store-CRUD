<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-[#FFF8E7] overflow-hidden shadow-md sm:rounded-lg border border-[#DAA520]">
                <div class="p-6 text-[#3B2F2F]">

                    <h2 class="text-2xl font-bold mb-6 text-[#3B2F2F]">
                        Categorías de Instrumentos
                    </h2>

                    <div class="mb-6 flex justify-between items-center">
                        <div></div>

                        <button
                            x-data=""
                            x-on:click="$dispatch('open-modal', 'create-category')"
                            class="px-4 py-2 bg-[#C49A3A] text-[#FFF8E7] rounded-md hover:bg-[#B3872F] font-medium transition">
                            Crear categoría
                        </button>
                    </div>

                    @if($categories->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border border-[#DAA520] rounded-md overflow-hidden">

                            <thead>
                                <tr class="bg-[#F2E6D5] border-b border-[#DAA520]">
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">ID</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Nombre</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Descripción</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Familia</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-[#3B2F2F]">Instrumentos</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $category)
                                <tr
                                    x-data=""
                                    x-on:click="
                                        document.getElementById('viewId').textContent = '{{ $category->id }}';
                                        document.getElementById('viewName').textContent = '{{ $category->name }}';
                                        document.getElementById('viewDescription').textContent = '{{ $category->description }}';
                                        document.getElementById('viewFamily').textContent = '{{ $category->family }}';
                                        $dispatch('open-modal', 'view-category')
                                    "
                                    class="border-b border-[#DAA520]/40 hover:bg-[#F2E6D5] transition cursor-pointer">
                                    <td class="px-6 py-4 text-sm text-[#3B2F2F]">{{ $category->id }}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-[#3B2F2F]">{{ $category->name }}</td>
                                    <td class="px-6 py-4 text-sm text-[#3B2F2F]">{{ $category->description ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-[#3B2F2F]">{{ $category->family ?? 'N/A' }}</td>

                                    <td class="px-6 py-4 text-sm">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-[#E8DCC5] text-[#3B2F2F]">
                                            {{ $category->instruments->count() }}
                                        </span>
                                    </td>

                                    <td class="px-4 py-4 text-right">
                                        <div class="relative inline-block text-left">

                                            <button
                                                type="button"
                                                class="actions-btn inline-flex items-center p-2 text-[#3B2F2F] hover:text-[#C49A3A] transition"
                                                data-id="{{ $category->id }}">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </button>

                                            <div class="actions-menu hidden origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-md bg-[#FFF8E7] border border-[#DAA520] z-10">
                                                <div class="py-1">
                                                    <a href="{{ route('categories.edit', $category->id) }}"
                                                        class="block px-4 py-2 text-sm text-[#3B2F2F] hover:bg-[#F2E6D5]">
                                                        Editar
                                                    </a>

                                                    <button
                                                        type="button"
                                                        class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-[#F2E6D5] delete-btn"
                                                        data-id="{{ $category->id }}">
                                                        Borrar
                                                    </button>
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
                        <p class="text-[#3B2F2F] text-lg">No hay categorías disponibles.</p>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @include('categories.partials.create-modal')
    @include('categories.partials.show-modal')
    @include('categories.delete')

</x-app-layout>