@props([
    'level' => 1,
    'class' => '',
    'as' => null, // z.B. 'div' statt h1–h6
    'id' => null,
])

@php
    $level = (int) $level >= 1 && (int) $level <= 6 ? (int) $level : 1;
    $tag = $as ?? 'h' . $level;

    $baseStyles = match($level) {
        1 => 'text-4xl font-bold',
        2 => 'text-3xl font-semibold',
        3 => 'text-2xl font-semibold',
        4 => 'text-xl font-medium',
        5 => 'text-lg font-medium',
        6 => 'text-base font-medium uppercase tracking-wide',
    };

    $attrs = [
        'class' => "$baseStyles $class",
    ];

    if ($id) {
        $attrs['id'] = $id;
    }

    // Falls es kein echtes <h*> Tag ist, füge A11y Attribute hinzu
    if ($as && !str_starts_with($as, 'h')) {
        $attrs['role'] = 'heading';
        $attrs['aria-level'] = $level;
    }
@endphp

<{{ $tag }} {{ $attributes->merge($attrs) }}>
{{ $slot }}
</{{ $tag }}>
