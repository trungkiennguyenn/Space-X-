document.addEventListener("DOMContentLoaded", function () {
    const mobileMenu = document.querySelector(".mobile-menu");
    const navMenu = document.querySelector("nav ul");

    mobileMenu.addEventListener("click", function () {
        this.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});
