function toggleMenu() {
    var menuBox = document.getElementById('nav-menu');
    if (menuBox.style.display == 'grid') {
        menuBox.style.display = "none";
    }
    else {
        menuBox.style.display = "grid";
    }
}