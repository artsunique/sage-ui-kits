{{--
    Verfügbare `type`-Werte für das `itemtype`-Attribut:
    - 'Article'              → Allgemeiner Artikel
    - 'NewsArticle'          → Nachrichtenartikel
    - 'BlogPosting'          → Blog-Post
    - 'ScholarlyArticle'     → Wissenschaftlicher Artikel
    - 'TechArticle'          → Technischer Artikel
    - 'Report'               → Bericht oder Studie
    - 'SocialMediaPosting'   → Beitrag in sozialen Medien
    - 'CreativeWork'         → Kreatives Werk
--}}

@props([
'class' => 'prose prose-sm sm:prose-base dark:prose-invert',
'type' => 'Article'
])

<article class="{{ $class }}"
         itemscope
         itemscope itemtype="https://schema.org/{{ $type }}">
    {{$slot}}
</article>
