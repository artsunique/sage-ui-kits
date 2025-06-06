@props([
  'menu' => 'null',
  'InnerClass' => 'flex',
])

<nav
        id="{{ $menu ?? 'primary_navigation' }}"
        {{ $attributes->merge(['class' => 'nav']) }}
        aria-label="{{ wp_get_nav_menu_name($menu ?? 'primary_navigation') }}"
        role="navigation"
        itemscope
        itemtype="https://schema.org/SiteNavigationElement">
    {!! wp_nav_menu([
        'theme_location' => $menu ?? 'primary_navigation',
        'menu_class' => $InnerClass,
        'echo' => false,
    ]) !!}
</nav>
