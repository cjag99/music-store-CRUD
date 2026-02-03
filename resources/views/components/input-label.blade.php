@props(['value'])
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#3B2F2F]']) }}>
    {{ $value ?? $slot }}
</label>