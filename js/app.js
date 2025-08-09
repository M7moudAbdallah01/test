function toggleMenu() {
  const nav = document.getElementById("navLinks");
  if (nav) {
    nav.style.display = nav.style.display === "flex" ? "none" : "flex";
  }
}
