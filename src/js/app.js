const hamburger = document.querySelector('.app-header__hamburger');
const nav = document.querySelector('#menu-main-menu');

document.addEventListener('DOMContentLoaded', () => {
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('show');
    });
})


