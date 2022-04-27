// Hamburger
const hamburger = document.querySelector('.app-header__hamburger');
const nav = document.querySelector('#menu-main-menu');

document.addEventListener('DOMContentLoaded', () => {
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('show');
    });
})

// Testimonial
const sliderItems = document.querySelectorAll('.slide-col');

const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

sliderItems[0].classList.add('active-slider');
let index = 0;

const nextItem = () => {
    sliderItems[index].classList.remove('active-slider');
    index = ( index + 1) % sliderItems.length;
    sliderItems[index].classList.add('active-slider');
}

const prevItem = () => {
    sliderItems[index].classList.remove('active-slider');
    index = ( index - 1 + sliderItems.length) % sliderItems.length;
    sliderItems[index].classList.add('active-slider');
}

next.addEventListener('click', nextItem);
prev.addEventListener('click', prevItem);

