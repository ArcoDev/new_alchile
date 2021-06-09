let ubicacionPrincipal = window.pageYOffset;
window.addEventListener('scroll', function () {
    let ubicacionActual = window.pageYOffset;
    let boxNav = document.getElementById('box-nav');
    
    if (ubicacionPrincipal >= ubicacionActual) {
        boxNav.style.top = '0px';
    } else {
        boxNav.style.top = '-100px';
    }
    
    ubicacionPrincipal = ubicacionActual;
});