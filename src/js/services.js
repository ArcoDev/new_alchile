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
    console.log(y);
    if (y > 800) {
        body.style.transition = 'all 1s ease-in';
        body.style.background = '#F6BB31';
    }
    if (y > 1900) {
        body.style.background = '#B22777';
    }
    if(y < 800) {
        body.style.background = '#594590';
    }
}