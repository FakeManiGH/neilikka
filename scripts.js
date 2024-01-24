var burgerBtn = document.getElementById('burger_btn');
var dropMenu = document.getElementById('nav_links');

function openMenu() {
    burgerBtn.classList.toggle('active');
    dropMenu.classList.toggle('active');
}