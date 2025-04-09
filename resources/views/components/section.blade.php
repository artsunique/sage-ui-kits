@props([
  'title' => 'Section',
  'class' => 'p-0'
])

<section class="{{ $class }}"
        aria-label="{{ trim($title) !== '' ? $title : 'Section' }}"
        itemscope
        itemtype="https://schema.org/WebPageElement">{{ $slot }}</section>
