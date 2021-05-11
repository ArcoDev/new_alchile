//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function() {
    const menu = document.getElementById('menu');
    const cajaNav = document.getElementById('box-nav');
    const overlay = document.getElementById('overlay');
    if(menu) {
        menu.addEventListener('click', function() {
            overlay.classList.add('overlay');
        });
    }
    window.onscroll = function () {
        animaMenu()
    };
    
    function animaMenu() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            cajaNav.classList.add('anima-navbar');
        } else if (document.body.scrollTop < 1 || document.documentElement.scrollTop < 1) {
            cajaNav.classList.remove('anima-navbar');
        }
    }
});