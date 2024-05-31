// JavaScript to toggle the navigation bar on mobile
document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const navbar = document.getElementById("navbar");
  
    menuIcon.addEventListener("click", function () {
      navbar.classList.toggle("show");
    });
  });
  