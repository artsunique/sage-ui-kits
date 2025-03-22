
@props([
  'Owner' => 'Arts Unique',
  'Designer' => 'Arts Unique',
])

<div {{ $attributes->class(['flex items-center gap-1']) }}>
    <span>&copy; 2010 - @php echo date('Y');@endphp</span>
    <a
            class="hover:underline"
            href="{{ home_url('/') }}"
            itemprop="url"
            title="{{ $siteName }} Home"
            aria-label="{{ $siteName }} Home"
            rel="home">
    <span itemprop="copyrightHolder"
          itemscope
          itemtype="https://schema.org/Person">
      <span itemprop="name">{{ $Owner }}</span>
    </span>
    </a>
    <span>
    {{ __('All rights reserved', 'sage') }}.
  </span>
</div>
