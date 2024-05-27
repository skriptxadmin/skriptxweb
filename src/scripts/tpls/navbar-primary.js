const navbarPrimary = document.querySelector("nav.primary");
const navbarNav = navbarPrimary.querySelector(".navbar-nav");
const navLinks = navbarNav.querySelectorAll("a.nav-link");


navLinks.forEach(function(navLink){
    const href = navLink.getAttribute('href');
    const index = window.location.href.indexOf(href);
    navLink.classList.remove('active');
    if(!index){
        navLink.classList.add('active');
    }

});