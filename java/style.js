function toggleMenu() {
    var mainNav = document.getElementById('mainNav');
    var secondNav = document.getElementById('secondNav');
    if (window.scrollY > 0) {
        mainNav.style.display = 'none';
        secondNav.classList.add('fixed-top');
    } else {
        mainNav.style.display = 'block';
        secondNav.classList.remove('fixed-top');
    }
}

window.addEventListener('scroll', toggleMenu);
window.addEventListener('load', toggleMenu);