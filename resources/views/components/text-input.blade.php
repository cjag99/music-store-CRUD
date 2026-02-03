@props(['disabled' => false])

<input @disabled($disabled) {{
    $attributes->merge([
        'class' => '
            border-[#3B2F2F33]
            bg-[#FFF8E7]
            text-[#3B2F2F]
            focus:border-[#C49A3A]
            focus:ring-[#C49A3A]
            rounded-md shadow-sm
        '
    ])
}}>