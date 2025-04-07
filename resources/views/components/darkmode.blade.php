<div class="flex justify-center items-center transition-colors"
     x-data="darkModeToggle()" x-init="init()">

    <label for="dark-toggle"
           class="flex items-center gap-3 cursor-pointer"
           role="switch"
           :aria-checked="isDark.toString()">

        <input
                type="checkbox"
                id="dark-toggle"
                class="sr-only"
                x-model="isDark"
                @change="toggle()"
        >

        <span class="w-12 h-6 bg-gray-300 dark:bg-gray-600 rounded-full relative transition-colors inline-block">
      <span class="w-5 h-5 bg-white rounded-full absolute top-0.5 left-0.5 transition-transform"
            :class="isDark ? 'translate-x-6' : 'translate-x-0'"></span>
    </span>

        <span class="text-sm font-medium text-gray-800 dark:text-gray-200">
      <span x-text="isDark ? 'Light Mode' : 'Dark Mode'"></span>
    </span>
    </label>
</div>

