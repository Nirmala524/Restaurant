@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => ' rounded-5 form-control']) }}>
