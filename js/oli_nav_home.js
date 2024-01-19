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
      // Obtiene todos los elementos con la clase .nav-link
      var links = document.getElementsByClassName('nav-link');
      // Recorre todos los elementos y cambia su color a negro
      for (var i = 0; i < links.length; i++) {
        links[i].style.color = '#333333';
      }
    } else {
      navbar.style.backgroundColor = 'transparent'; // Vuelve al fondo transparente
      // Obtiene todos los elementos con la clase .nav-link
      var links = document.getElementsByClassName('nav-link');
      // Recorre todos los elementos y cambia su color a blanco
      for (var i = 0; i < links.length; i++) {
        links[i].style.color = '#777777';
      }
    }
  });
  });

