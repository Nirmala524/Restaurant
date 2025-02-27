@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-uppercase fw-bold fs-2 control-label']) }}>
    {{ $value ?? $slot }}
</label>
{{-- font-medium text-sm text-gray-700 --}}
