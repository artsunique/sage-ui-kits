<div x-data="{ dark: localStorage.getItem('theme') === 'dark' }" x-init="
    if (dark) document.documentElement.classList.add('dark');
" class="inline-flex items-center gap-2">

<button
@click="
dark = !dark;
localStorage.setItem('theme', dark ? 'dark' : 'light');
document.documentElement.classList.toggle('dark', dark);
"
class="rounded-full p-2 border text-sm"
:class="dark ? 'bg-gray-800 text-white' : 'bg-gray-100 text-gray-900'"
aria-label="Toggle Dark Mode"
>
    <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
    <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"><path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/></svg>
  </button>
</div>
