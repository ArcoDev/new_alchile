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
const service = document.getElementById('service');

function txtServices() {
    service.innerHTML = 'Publicidad'
}

function txtServices2() {
    service.innerHTML = 'Marketing';
}

function txtServices3() {
    service.innerHTML = 'Social Media';
}

function txtServices4() {
    service.innerHTML = 'Tomas con dron';
}

function txtServices5() {
    service.innerHTML = 'Fotografia';
}

function txtServices6() {
    service.innerHTML = 'Video';
}

function txtServices7() {
    service.innerHTML = 'Redes Sociales';
}

window.onscroll = function () {
    const scroll = window.scrollY;
    const body = document.querySelector('body');
    const circle = document.getElementById('circle');
    if (scroll > 980) {
        body.style.background = '#F6BB31';
    }
    if (scroll > 1700) {
        body.style.background = '#6EB2BD';
    }
    if (scroll > 2400) {
        body.style.background = '#594590';
    }
    if (scroll < 980) {
        body.style.background = '#594590';

    }
}