@props([
'class' => 'prose prose-sm sm:prose-base dark:prose-invert',
])

<article class="{{ $class }}" itemscope itemtype="http://schema.org/Article">{{ $slot }}</article>
