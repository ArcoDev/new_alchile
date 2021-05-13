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