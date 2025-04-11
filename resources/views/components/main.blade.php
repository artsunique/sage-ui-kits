@props([
'class' => 'prose prose-sm sm:prose-base dark:prose-invert',
])

<main id="main"
      class="{{ $class }}"
      role="main"
      itemscope itemprop="mainContentOfPage">
    {{$slot}}
</main>
