<a
    {{ $attributes->merge([
        'class' => '
            block w-full px-4 py-2 text-start text-sm leading-5
            text-white/90
            hover:bg-[#B6856A] hover:text-white
            focus:outline-none focus:bg-[#B99064]
            transition duration-150 ease-in-out
        ',
    ]) }}>
    {{ $slot }}
</a>
