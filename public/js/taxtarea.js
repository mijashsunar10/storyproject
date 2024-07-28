document.addEventListener('DOMContentLoaded', function () {
    const textarea = document.querySelector('.texta2');

    function autoResize() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    }

    textarea.addEventListener('input', autoResize);

    // Initialize the height based on the initial content
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
});
document.addEventListener('DOMContentLoaded', function () {
    const textarea = document.querySelector('.texta1');

    function autoResize() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    }

    textarea.addEventListener('input', autoResize);

    // Initialize the height based on the initial content
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
});
