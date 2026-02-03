<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
        inline-flex items-center px-4 py-2
        bg-[#C49A3A] hover:bg-[#B3872F]
        border border-transparent rounded-md
        font-semibold text-xs text-[#FFF8E7] uppercase tracking-widest
        focus:outline-none focus:ring-2 focus:ring-[#C49A3A] focus:ring-offset-2
        transition ease-in-out duration-150
    '
]) }}>
    {{ $slot }}
</button>