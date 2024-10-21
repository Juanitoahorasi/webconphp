<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Migliaro Juan Curz</title>

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link href="/css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="bg-navbar-color text-white">
  <div class="container mx-auto p-4 flex justify-between items-center">
    <a href="#" class="text-2xl font-bold">Migliaro Juan Curz</a>
    <div class="hidden md:flex space-x-6">
      <a href="#trabajos" class="hover:text-navbar-hover-color">Trabajos</a>
      <a href="#sobre-mi" class="hover:text-navbar-hover-color">Sobre Mí</a>
      <a href="#contacto" class="hover:text-navbar-hover-color">Contacto</a>
    </div>
    <div class="md:hidden">
      <!-- Botón del menú hamburguesa -->
      <button id="menu-toggle" class="text-white focus:outline-none" aria-label="Toggle menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Menú móvil -->
  <div id="mobile-menu" class="hidden md:hidden bg-navbar-color">
    <a href="#trabajos" class="block py-2 px-4 text-white hover:bg-navbar-hover-color">Trabajos</a>
    <a href="#sobre-mi" class="block py-2 px-4 text-white hover:bg-navbar-hover-color">Sobre Mí</a>
    <a href="#contacto" class="block py-2 px-4 text-white hover:bg-navbar-hover-color">Contacto</a>
  </div>
</nav>


  <!-- SECCIÓN TRABAJOS -->
  <section id="trabajos" class="py-12 bg-section-color">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-4">Mis Trabajos</h2>
      <p class="mb-6">Aquí están algunos de mis proyectos.</p>

      <!-- Carousel reducido -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/curricu.webp" class="d-block w-100" alt="Trabajo 1">
          </div>
          <div class="carousel-item">
            <img src="/img/cerv.webp" class="d-block w-100" alt="Trabajo 2">
          </div>
          <div class="carousel-item">
            <img src="/img/2.webp" class="d-block w-100" alt="Trabajo 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- SECCIÓN SOBRE MÍ -->
  <section id="sobre-mi" class="py-20 bg-white">
    <div class="container mx-auto px-4 flex justify-between items-center">
      <!-- Lado izquierdo: información personal -->
      <div class="w-1/2 text-center">
        <h1 class="text-4xl font-bold mb-4">Sobre Mí</h1>
        <p class="text-lg mb-6">Tecnico en diseño y animacion digital y 3D. Me especializo en trabajos de todo tipo con indole artistica y profesional.</p>
        <img src="/img/foto.webp" alt="Foto de perfil" class="rounded-full mx-auto w-48 h-48 object-cover mb-4">
      </div>

      <!-- Lado derecho: sección en proceso -->
      <div class="w-1/2 text-center">
        <h2 class="text-2xl mb-4">Videojuego En Proceso</h2>
      </div>
    </div>
  </section>

  <!-- SECCIÓN CONTACTO -->
  <section id="contacto" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-4">Contacto</h2>
      <p class="text-lg mb-6">Formulario de contacto.</p>
      <form action="enviar_correo.php" method="POST" class="max-w-lg mx-auto" onsubmit="return validarEmail();">
        <input type="text" name="nombre" placeholder="Tu nombre" class="w-full p-3 rounded-lg mb-4">
        <input type="email" id="email" name="email" placeholder="Tu correo" class="w-full p-3 rounded-lg mb-4">
        <textarea name="mensaje" placeholder="Tu mensaje" class="w-full p-3 rounded-lg mb-4"></textarea>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Botones de redes sociales -->
  <div class="mt-8 text-center">
    <a href="https://instagram.com" target="_blank" class="social-btn instagram">Instagram</a>
    <a href="https://whatsapp.com" target="_blank" class="social-btn whatsapp">WhatsApp</a>
    <a href="https://facebook.com" target="_blank" class="social-btn facebook">Facebook</a>
    <a href="https://paypal.com/donate" target="_blank" class="social-btn donate">Donar Dinero</a>
  </div>

  <br> 
  <!-- POP-UP -->
   <div id="newsletter-popup" class="popup hidden">
    <div class="popup-content bg-white p-6 rounded-lg shadow-lg text-center">
      <h3 class="text-2xl font-bold mb-4">¡Suscríbete a nuestro boletín!</h3>
      <p class="mb-4">Recibe noticias y promociones exclusivas.</p>
      <form action="guardar_email.php" method="POST">
        <input type="email" name="email" placeholder="Tu correo electrónico" class="w-full p-3 rounded-lg mb-4">
        <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-lg">Suscribirme</button>
      </form>
      <button id="close-popup" class="mt-4 text-gray-500">Cerrar</button>
    </div>
  </div>

  <!-- Scripts -->

  <script src="js/main.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" defer></script>


</body>
</html>
