const $ = (selector) => document.querySelector(selector);

const bgNavbar = $('.bg-navbar');
const textNavbar = document.querySelectorAll('.text-navbar');

textNavbar.forEach((e) => {
    e.classList.add('to-white');
    e.classList.remove('to-black/80');
});
window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        bgNavbar.style.boxShadow = '0px 0px 10px 2px rgba(0,0,0,0.75)';
        bgNavbar.style.backgroundColor = 'rgba(255, 255, 255, 0.4)';
        bgNavbar.style.backdropFilter = 'blur(8px)';
        if (window.scrollY > 650) {
            textNavbar.forEach((e) => {
                e.classList.remove('to-white');
                e.classList.add('to-black/80');
            });
        } else {
            textNavbar.forEach((e) => {
                e.classList.add('to-white');
                e.classList.remove('to-black/80');
            });
        }
    } else {
        bgNavbar.style.backgroundColor = 'transparent';
        bgNavbar.style.boxShadow = 'none';
        bgNavbar.style.backdropFilter = 'blur(0)';
    }
    bgNavbar.style.transition = 'all .3s ease-in-out';
});
