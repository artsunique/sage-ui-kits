export function darkModeToggle() {
    return {
        isDark: false,
        init() {
            const theme = localStorage.getItem('theme');
            this.isDark = theme === 'dark' || (
                theme === null && window.matchMedia('(prefers-color-scheme: dark)').matches
            );
            this.apply();
        },
        toggle() {
            localStorage.setItem('theme', this.isDark ? 'dark' : 'light');
            this.apply();
        },
        apply() {
            document.documentElement.classList.toggle('dark', this.isDark);
        }
    };
}
