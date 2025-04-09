@props([
    'level' => 1,
    'class' => '',
])

@php
    $tag = 'h' . $level;
    $baseStyles = match((int) $level) {
        1 => 'text-4xl font-bold',
        2 => 'text-3xl font-semibold',
        3 => 'text-2xl font-semibold',
        4 => 'text-xl font-medium',
        5 => 'text-lg font-medium',
        6 => 'text-base font-medium uppercase tracking-wide',
        default => 'text-base',
    };
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => "$baseStyles $class"]) }}>
{{ $slot }}
</{{ $tag }}>
