@props([
    'category' => null,
    'deleteId' => null,
])

<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        <button type="button" @click.stop
            class="inline-flex items-center p-2 text-[#3B2F2F] transition hover:text-[#C49A3A]">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </button>
    </x-slot>

    <x-slot name="content">
        <button type="button"
            @click.stop="
        $root.querySelector('[x-ref=editForm]').__x.$data.setData({
            id: '{{ $category->id }}',
            name: '{{ $category->name }}',
            description: '{{ $category->description }}',
            family: '{{ $category->family }}'
        });
        $dispatch('open-modal', 'edit-category');
    "
            class="block w-full px-4 py-2 text-left text-sm text-[#FFF8E7] hover:bg-[#4A3F2A]">
            Editar
        </button>

        <button type="button" @click.stop
            class="delete-btn block w-full px-4 py-2 text-left text-sm text-red-400 hover:bg-[#4A3F2A]"
            data-id="{{ $deleteId }}">
            Borrar
        </button>
    </x-slot>
</x-dropdown>
