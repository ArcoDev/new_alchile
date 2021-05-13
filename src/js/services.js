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