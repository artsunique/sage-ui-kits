@props([
  'color' => 'bg-gradient-to-r from-gray-700 to-gray-950',
  'height' => 'h-1'
])

<div class="w-full {{ $height }} bg-transparent fixed top-0 z-[99999]">
    <div id="progress-bar" class="{{ $color }} h-full" style="width: 0;"></div>
</div>
