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
//SERVICES
function imgSlider(anything) {
    document.querySelector('.big').src = anything;
}

function changeCircle(color) {
    const circle = document.querySelector('.circle');
    circle.style.background = color;
}

window.onscroll = function () {
    var y = window.scrollY;
    const body = document.querySelector('body');
    const scr = document.getElementById('scroll');
    console.log(y);
    //scr.innerHTML = y;
    if (y > 980) {
        body.style.background = '#F6BB31';
    } 
    if (y > 1700) {
        body.style.background = '#6EB2BD';
    }
    if(y > 2400) {
        body.style.background = '#B22777';
    }
    if(y < 980) {
        body.style.background = '#594590';
    }
}