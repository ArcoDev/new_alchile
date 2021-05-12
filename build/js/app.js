//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function () {
    const menu = document.getElementById('menu');
    const overlay = document.getElementById('overlay');
    const link = document.getElementById('link');
    if (menu) {
        menu.addEventListener('click', function () {
            overlay.style.transform = 'unset';
            overlay.classList.toggle('overlay');        
        });
    }
    /*if(link) {
        link.addEventListener('click', function() {
            overlay.style.transform = 'translate(100%)';
        })
    } */   
    /*window.onscroll = function () {
        animaMenu()
    };
    
    function animaMenu() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            cajaNav.classList.add('anima-navbar');
        } else if (document.body.scrollTop < 1 || document.documentElement.scrollTop < 1) {
            cajaNav.classList.remove('anima-navbar');
        }
    }*/
});
//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function() {
    let video = document.querySelector('video');
    window.addEventListener('scroll', function() {
        let value = 1 + window.scrollY / -600;
        video.style.opacity = value;
    });
});