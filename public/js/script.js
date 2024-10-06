const button = document.getElementById('tombolmenu');
const menu = document.getElementById('menu');
button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
});
window.addEventListener('click', (e) => {
    if (!button.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('hidden');
    }
});