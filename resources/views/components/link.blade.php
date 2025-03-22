@props([
    'url' => '#',
    'title' => null,
    'aria' => null,
    'target' => '_self',
    'rel' => 'noopener noreferrer',
])

<a
        href="{{ $url }}"
        title="{{ $title }}"
        aria-label="{{ $aria ?? 'Link ' . $title }}"
        target="{{ $target }}"
        rel="{{ $rel }}"
        itemprop="url"
        {{ $attributes }}>
    <span itemprop="name">{{ $slot->isNotEmpty() ? $slot : $title }}</span>
</a>
