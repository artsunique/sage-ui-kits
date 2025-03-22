export function ProgressBar() {
    function updateProgressBar() {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const progress = (scrollTop / scrollHeight) * 100;

        const progressBar = document.getElementById("progress-bar");
        if (progressBar) {
            progressBar.style.width = progress + "%";
        }
    }

    document.addEventListener("scroll", updateProgressBar);
}
