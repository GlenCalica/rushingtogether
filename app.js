const hamburgerOpen = document.getElementById('hamburger-open');
const hamburgerClose = document.getElementById('hamburger-close');
const hamburgerMenu = document.querySelector('.mobile-menu');

const siteWrapper = document.querySelector('.site-wrapper');

// let menuOpen = false;

hamburgerOpen.addEventListener('click', () => {
    console.log(window.scrollY);

    hamburgerMenu.style.top = `${window.scrollY}px`

    hamburgerMenu.classList.add('toggle');
    document.body.style.overflowY = 'hidden';
    // menuOpen = true;
});

hamburgerClose.addEventListener('click', () => {
    hamburgerMenu.classList.remove('toggle');
    document.body.style.overflowY = 'visible';
});

// window.addEventListener('click', (e) => {   
//     if (!hamburgerMenu.contains(e.target) && menuOpen === true){
//         setTimeout( closeMenu, 1000 );
        

//     } else{
        
//     }
// });

// function closeMenu() {

//     menuOpen = false;
// }