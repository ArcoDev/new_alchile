//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function () {
    const bars = document.getElementById('bars');
    const close = document.getElementById('close');
    const overlay = document.getElementById('overlay');
    const link = document.getElementById('link');
    if (bars) {
        bars.addEventListener('click', function () {
            //overlay.style.transform = 'unset';
            overlay.classList.remove('quitarOverlay');  
            overlay.classList.add('overlay');  
            bars.style.display = 'none';
            close.style.display = 'block';      
        });
    }
    if(close) {
        close.addEventListener('click', function() {
            overlay.style.transform = 'transalte(-100%)';
            overlay.classList.add('quitarOverlay');  
            close.style.display = 'none'; 
            bars.style.display = 'block';
        });
    }
    /*if(link) {
        link.addEventListener('click', function() {
            overlay.style.transform = 'translate(100%)';
        })
    } */   
    /*window.onscroll = function () {
        animaMenu()
    };
    
    function animaMenu() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            cajaNav.classList.add('anima-navbar');
        } else if (document.body.scrollTop < 1 || document.documentElement.scrollTop < 1) {
            cajaNav.classList.remove('anima-navbar');
        }
    }*/
});