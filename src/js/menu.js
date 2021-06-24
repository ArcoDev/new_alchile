//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function () {
    const bars = document.getElementById('bars');
    const close = document.getElementById('close');
    const link = document.getElementById('link');
    const overlay = document.getElementById('overlay');
    const layer = document.querySelector('.layer-menu');
    if (bars) {
        bars.addEventListener('click', function () {
            overlay.classList.add('overlay');
            overlay.classList.remove('quitarOverlay');
            overlay.classList.add('animacionOverlay');
            setTimeout(function () {
                layer.classList.add('quitarTransform');
            }, 2800)
            bars.style.display = 'none';
            close.style.display = 'block';
        });
    }
    if (close) {
        close.addEventListener('click', function () {
            setTimeout(function () {
                overlay.classList.remove('overlay');
            }, 2000);
            overlay.classList.remove('animacionOverlay');
            overlay.classList.add('quitarOverlay');
            close.style.display = 'none';
            bars.style.display = 'block';
        });
    }
    if (link) {
        link.addEventListener('click', function () {
            setTimeout(function () {
                overlay.classList.remove('overlay');
            }, 2000);
            overlay.classList.remove('animacionOverlay');
            overlay.classList.add('quitarOverlay');
            close.style.display = 'none';
            bars.style.display = 'block';
        });
    }
});