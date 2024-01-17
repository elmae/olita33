// Add your custom JS here.
document.addEventListener("DOMContentLoaded", function () {
  var navbar = document.querySelector('.navbar');
  var scrollPosition = window.scrollY;

  // Añade un listener para el evento de scroll
  window.addEventListener('scroll', function() {
    // Actualiza la posición de desplazamiento
    scrollPosition = window.scrollY;

    // Verifica si el scroll es mayor a 10px y actualiza el fondo del navbar
    if (scrollPosition > 10) {
      navbar.style.backgroundColor = '#ffffff'; // Cambia a blanco (#ffffff)
    } else {
      navbar.style.backgroundColor = 'transparent'; // Vuelve al fondo transparente
    }
  });
});


  