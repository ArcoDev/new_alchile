//Variables globales
let gridImg = 1;
let filtroActivo = 1;

window.addEventListener('DOMContentLoaded', function () {
    filtroGrid();
    mostrarGrid();
    enlaceActual();
});

function mostrarGrid() {
    //Agregar mostrar-grid al filtro seleccionado actualmente
    const gridActual = document.querySelector(`#grid-${gridImg}`);
    gridActual.classList.add('mostrar-grid');
}
function enlaceActual() {
    //Agregar clase active dependiendo del filtro seleccionado
    const enlaceActual = document.querySelector(`#enlace-${filtroActivo}`);
    enlaceActual.classList.add('active');
}
function filtroGrid() {
    const filtro = document.querySelectorAll('.item a');
    filtro.forEach(filt => {
        filt.addEventListener('click', e => {
            e.preventDefault();
            gridImg = parseInt(e.target.dataset.grid);
            
            //Ocultar seccion que contenga mostrar-grid
            document.querySelector('.mostrar-grid').classList.remove('mostrar-grid');
            //Agregar mostrar-grid al filtro seleccionado actualmente
            const gridActual = document.querySelector(`#grid-${gridImg}`);
            gridActual.classList.add('mostrar-grid');
            
           //remover clase active en los enlaces
            document.querySelector('.active').classList.remove('active');
            //Agregar clase active dependiendo del filtro seleccionado
            const enlaceActual = document.querySelector(`#enlace-${filtroActivo}`);
            enlaceActual.classList.add('active');
        });
    });
}