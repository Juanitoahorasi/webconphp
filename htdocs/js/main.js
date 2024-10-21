// Mostrar pop-up después de 5 segundos
window.onload = function() {
  setTimeout(function() {
      document.getElementById("newsletter-popup").classList.remove("hidden");
  }, 5000); // 5 segundos de espera
};

// Función para cerrar el pop-up
document.getElementById("close-popup").addEventListener("click", function() {
  document.getElementById("newsletter-popup").classList.add("hidden");
});

// Mostrar/ocultar el menú móvil
document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  menuToggle.addEventListener("click", function() {
    if (mobileMenu.classList.contains("hidden")) {
      mobileMenu.classList.remove("hidden"); // Mostrar menú
    } else {
      mobileMenu.classList.add("hidden"); // Ocultar menú
    }
  });
});
