const hamburgerOpen = document.getElementById('hamburger-open');
const hamburgerClose = document.getElementById('hamburger-close');
const hamburgerMenu = document.querySelector('.mobile-menu');

hamburgerOpen.addEventListener('click', () => {
    hamburgerMenu.classList.add('toggle');
    // document.body.classList.add('lock-scroll');
})

hamburgerClose.addEventListener('click', () => {
    hamburgerMenu.classList.remove('toggle');
    // document.body.classList.remove('lock-scroll');
})