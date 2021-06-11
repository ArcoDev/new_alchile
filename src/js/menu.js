//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function () {
    const bars = document.getElementById('bars');
    const close = document.getElementById('close');
    const overlay = document.getElementById('overlay');
    const layer = document.querySelector('.layer-menu');
    if (bars) {
        bars.addEventListener('click', function () {
            //overlay.style.transform = 'unset';
            overlay.classList.remove('quitarOverlay');
            overlay.classList.add('overlay');
            setTimeout(function () {
                layer.classList.add('quitarTransform');
            }, 2800)
            bars.style.display = 'none';
            close.style.display = 'block';
        });
    }
    if (close) {
        close.addEventListener('click', function () {
            overlay.style.transform = 'transalte(-100%)';
            overlay.classList.add('quitarOverlay');
            close.style.display = 'none';
            bars.style.display = 'block';
        });
    }
});
