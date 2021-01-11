const hamburgerOpen = document.getElementById('hamburger-open');
const hamburgerClose = document.getElementById('hamburger-close');
const hamburgerMenu = document.querySelector('.mobile-menu');
const hamburgerMenuBackground = document.querySelector('.mobile-menu-background');


let menuOpen = false;

hamburgerOpen.addEventListener('click', () => toggleMenu());

hamburgerClose.addEventListener('click', () => toggleMenu());


window.addEventListener('click', (e) => {   
    if (menuOpen === true){
        setTimeout(() => {
            if(!hamburgerMenu.contains(e.target)) toggleMenu();
        }, 100);
    }
});

function toggleMenu() {
    if(menuOpen === true) {
        hamburgerMenu.classList.remove('toggle');
        hamburgerMenuBackground.classList.remove('toggle');
    
        setTimeout(() => {
            menuOpen = false;
        }, 300);
    } else {
        hamburgerMenu.classList.add('toggle');
        hamburgerMenuBackground.classList.add('toggle');
    
        setTimeout(() => {
            menuOpen = true;
        }, 300);
    }
}