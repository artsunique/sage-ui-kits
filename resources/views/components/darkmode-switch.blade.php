<button
        @click="darkMode = !darkMode"
        :aria-pressed="darkMode"
        :aria-label="darkMode ? '<?php echo esc_attr(__('Switch to Light Mode', 'sage')); ?>' : '<?php echo esc_attr(__('Switch to Dark Mode', 'sage')); ?>'"
        class="flex items-center gap-2 cursor-pointer focus:outline-none"
>
    <svg
            class="size-6 lg:size-5 text-neutral-600 dark:text-white"
            viewBox="0 0 22 22"
            fill="none"
            role="img"
            aria-hidden="false"
            :aria-label="darkMode ? '<?php echo esc_attr(__('Moon Icon for Dark Mode', 'sage')); ?>' : '<?php echo esc_attr(__('Sun Icon for Light Mode', 'sage')); ?>'"
    >
        <path
                :d="darkMode
        ? 'M21 11.9009C20.8248 13.7963 20.1135 15.6025 18.9493 17.1084C17.785 18.6142 16.216 19.7573 14.4257 20.404C12.6355 21.0506 10.6981 21.174 8.84032 20.7598C6.98251 20.3455 5.28109 19.4108 3.93516 18.0648C2.58923 16.7189 1.65445 15.0175 1.2402 13.1597C0.825954 11.3019 0.949372 9.3645 1.59601 7.57428C2.24266 5.78405 3.38578 4.215 4.89162 3.05074C6.39746 1.88648 8.20374 1.17516 10.0991 1C8.98942 2.50126 8.45544 4.35094 8.59427 6.21263C8.7331 8.07432 9.53553 9.82434 10.8556 11.1444C12.1757 12.4645 13.9257 13.2669 15.7874 13.4057C17.6491 13.5446 19.4987 13.0106 21 11.9009Z'
        : 'M11 1V2.81818M11 19.1818V21M3.92727 3.92727L5.21818 5.21818M16.7818 16.7818L18.0727 18.0727M1 11H2.81818M19.1818 11H21M3.92727 18.0727L5.21818 16.7818M16.7818 5.21818L18.0727 3.92727M15.5455 11C15.5455 13.5104 13.5104 15.5455 11 15.5455C8.48961 15.5455 6.45455 13.5104 6.45455 11C6.45455 8.48961 8.48961 6.45455 11 6.45455C13.5104 6.45455 15.5455 8.48961 15.5455 11Z'"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"/>
    </svg>
    <span
            class="text-sm text-neutral-600 dark:text-white hidden lg:block"
            x-text="darkMode ? '<?php echo esc_html(__('Dark Mode', 'sage')); ?>' : '<?php echo esc_html(__('Light Mode', 'sage')); ?>'"
    ><?php echo __('Dark Mode', 'sage'); ?>
  </span>
</button>
