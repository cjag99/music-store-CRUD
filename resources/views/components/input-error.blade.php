@props(['messages'])

@if ($messages)
<ul {{ $attributes->merge(['class' => 'text-sm text-[#B94A48] dark:text-[#E57373] space-y-1']) }}>
    @foreach ((array) $messages as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>

@endif