//Animacion en el video  al hacer scrooll 
window.addEventListener('DOMContentLoaded', function() {
    let video = document.querySelector('video');
    window.addEventListener('scroll', function() {
        let value = 1 + window.scrollY / -600;
        video.style.opacity = value;
    });
});