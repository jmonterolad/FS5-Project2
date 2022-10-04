let menuToggle = document.querySelector('.menuToggle');
let navegacion = document.querySelector('.navegacion');
let header = document.querySelector('header');

menuToggle.onclick = function() {
    header.classList.toggle('open');
}