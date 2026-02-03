<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
        inline-flex items-center px-4 py-2
        bg-[#3FA76F] hover:bg-[#358F5E]
        border border-transparent rounded-md
        font-semibold text-xs text-[#FFF8E7] uppercase tracking-widest
        focus:outline-none focus:ring-2 focus:ring-[#3FA76F] focus:ring-offset-2
        transition ease-in-out duration-150
    '
]) }}>
    {{ $slot }}
</button>