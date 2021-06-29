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
    service.innerHTML = 'Fotografía'
}

function txtServices2() {
    service.innerHTML = 'Social Media';
}

function txtServices3() {
    service.innerHTML = 'Video';
}

function txtServices4() {
    service.innerHTML = 'Marketing';
}

function txtServices5() {
    service.innerHTML = 'Diseño';
}

function txtServices6() {
    service.innerHTML = 'Toma con Dron';
}
function txtServices7() {
    service.innerHTML = 'Branding';
}


window.onscroll = function () {
    const scroll = window.scrollY;
    const body = document.querySelector('body');
    const circle = document.getElementById('circle');
    if (scroll > 980) {
        body.style.background = '#F6BB31';
    }
   if (scroll > 1700) {
        body.style.background = '#594590';
    }
    if (scroll < 980) {
        body.style.background = '#594590';
    }
}