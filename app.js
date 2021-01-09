const hamburgerOpen = document.getElementById('hamburger-open');
const hamburgerClose = document.getElementById('hamburger-close');
const hamburgerMenu = document.querySelector('.mobile-menu');
const hamburgerMenuBackground = document.querySelector('.mobile-menu-background');


let menuOpen = false;

hamburgerOpen.addEventListener('click', () => {
    updateMenuPosition();

    toggleMenu();
});

hamburgerClose.addEventListener('click', () => {
    toggleMenu();
});

window.addEventListener('keydown', (e) => {
    if(e.key === 'Tab') {
        setTimeout(() => {
            updateMenuPosition();
        }, 1);

    }
})

window.addEventListener('click', (e) => {   
    if (menuOpen === true){
        setTimeout(() => {
            if(!hamburgerMenu.contains(e.target)) toggleMenu();
        }, 100);
    }
});

window.addEventListener('scroll', (e) => {
    updateMenuPosition();
})

function updateMenuPosition() {
    hamburgerMenu.style.top = `${window.scrollY}px`;
}

function toggleMenu() {
    if(menuOpen === true) {
        hamburgerMenu.classList.remove('toggle');
        hamburgerMenuBackground.classList.remove('toggle');

        // document.body.style.overflowY = 'visible';
    
        setTimeout(() => {
            menuOpen = false;
        }, 300);
    } else {
        hamburgerMenu.classList.add('toggle');
        hamburgerMenuBackground.classList.add('toggle');

        // document.body.style.overflowY = 'hidden';
    
        setTimeout(() => {
            menuOpen = true;
        }, 300);
    }
    menuOpen = false;
}