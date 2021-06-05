//Variables globales
let gridImg = 1;

window.addEventListener('DOMContentLoaded', function () {
    mostrarPortafolio();
    cambiarPortafolio();
});

function mostrarPortafolio() {
    const portafolioAnterior = document.querySelector('.mostrar-grid');
    if (portafolioAnterior) {
        portafolioAnterior.classList.remove('mostrar-grid');
    }
    //Portafolio que se mostrara de inicio
    const portafolioActual = document.querySelector(`#grid-${gridImg}`);
    portafolioActual.classList.add('mostrar-grid');

    //Eliminar clase activo del enlace actual
    const enlaceAnterior = document.querySelector('.active');
    if (enlaceAnterior) {
        enlaceAnterior.classList.remove('active')
    }
    //Resaltar enlace activo, agregando la clase active
    const enlaceActual = document.querySelector(`[data-grid="${gridImg}"]`);
    enlaceActual.classList.add('active');
}

function cambiarPortafolio() {
    const enlaces = document.querySelectorAll('.item a');
    enlaces.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            gridImg = parseInt(e.target.dataset.grid);
            mostrarPortafolio();
        });
    });
}