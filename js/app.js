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

const backToTopButton = document.getElementById("Backtotop");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    backToTopButton.style.display = "block";
  } else {
    backToTopButton.style.display = "none";
  }
});

backToTopButton.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
