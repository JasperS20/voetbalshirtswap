@props([
    'variant' => 'primary',
    'href' => null,
])

@php
    $classes = $variant === 'primary'
        ? 'bg-secondary-color text-white'
        : 'bg-on-surface-color text-text-color';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes . ' p-2 rounded-md']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes . ' p-2 rounded-md']) }} type="submit">
        {{ $slot }}
    </button>
@endif
