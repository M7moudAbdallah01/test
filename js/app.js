function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    const overlay = document.getElementById("overlay");

    navLinks.classList.toggle("active");
    overlay.classList.toggle("active");
}

function closeMenu() {
    document.getElementById("navLinks").classList.remove("active");
    document.getElementById("overlay").classList.remove("active");
}
