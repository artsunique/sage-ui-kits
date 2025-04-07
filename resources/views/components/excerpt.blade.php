@if ($excerpt = get_the_excerpt())
    <div {{ $attributes->class(['p-0']) }}>
        {{ $excerpt }}
    </div>
@endif
