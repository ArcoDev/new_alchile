//Intersection observer para agregar la opcion de ir arriba al dome
window.addEventListener('DOMContentLoaded', function () {
    const up = document.querySelector('.up');
    up.classList.add('invisible');
    const observer = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) {
            up.classList.remove('invisible');
        } else {
            up.classList.add('invisible');
        }
    });
    observer.observe(document.querySelector('.portafolio'));
});