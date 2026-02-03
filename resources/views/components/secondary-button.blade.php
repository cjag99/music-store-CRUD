<button {{ $attributes->merge([
    'type' => 'button',
    'class' => '
        inline-flex items-center px-4 py-2
        bg-[#FFF8E7]
        border border-[#DAA520]
        rounded-md font-semibold text-xs uppercase tracking-widest
        text-[#3B2F2F]
        shadow-sm
        hover:bg-[#F2E6D5]
        focus:outline-none focus:ring-2 focus:ring-[#DAA520] focus:ring-offset-2
        disabled:opacity-25
        transition ease-in-out duration-150
    '
]) }}>
    {{ $slot }}
</button>