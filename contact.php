<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Grupo 7</title>
  <link rel="icon" href="assets/images/manito.jpeg" type="assets/image/png">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fuentes style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Estilos personalizados para esta plantilla -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>Robot Friendly</span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="info.html">Información</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="caracteristicas.html">Características</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="componentes.html">Componentes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Camara.html">Aplicacion</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menú</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="estadistica.html">Estadísticas</a>
                    <a class="dropdown-item" href="historias.html">Historias De Usuarios</a>
                    <a class="dropdown-item" href="php/cerrar_sesion.php">Cerrar sesion</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
  </div>
  </header>
  <!-- seccion de contactos -->

  <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3>
        Grupo 7
      </h3>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="https://formsubmit.co/jossiespinoza2005@gmail.com" method="POST">
            <input type="text" id="name" name="name" placeholder="Nombre" required>
            <input type="email" id="email" name="email" placeholder="Correo" required>
            <input type="text" id="subject" name="Asunto" placeholder="Asunto" required>
            <input type="text" id="mensaje" name="mensaje" placeholder="Mensaje" required>
            <div class="d-flex justify-content-center ">
              <button type="submit">ENVIAR</button>
            </div>
            <input type="hidden" name="_next" value="http://localhost/wea/contact.html">
            <input type="hidden" name="_captcha" value="false">
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- final de la seccion de contactos -->

  <!-- Información de contacto -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="info-logo">
            <h2>¿Qué es Robot Friendly?</h2>
            <p>
              Es un pequeño robot que te ayudará en la recolección de basura en tu hogar, así como una manera de
              entretenimiento y aprendizaje para los niños sobre el mundo de la programación.
            </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="info-nav">
            <h4>Índice</h4>
            <ul>
              <li><a href="inicio.php">Inicio</a></li>
              <li><a href="info.html">Información</a></li>
              <li><a href="caracteristicas.html">Características</a></li>
              <li><a href="contact.html">Contáctanos</a></li>
              <li><a href="componentes.html">Componentes</a></li>
              <li><a href="Camara.html">Aplicacion</a></li>
              <li><a href="estadistica.html">Estadísticas</a></li>
              <li><a href="historias.html">Historias de Usuarios</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="info-contact">
            <h4>Información de Contacto</h4>
            <div class="location">
              <a href="https://unl.edu.ec/">
                <img src="assets/images/location.png" alt="">
                <span>Universidad Nacional de Loja</span>
              </a>
            </div>
            <div class="call">
              <h4>Interesado en adquirir el robot:</h4>
              <a href="">
                <img src="assets/images/telephone.png" alt="">
                <span>( +593 989350952 )</span>
              </a>
            </div>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="info-logo">
            <h2>¿Descargar Instructivo?</h2>
            <p class="layout_padding2-top">
              Descarga nuestro instructivo detallado para obtener paso a paso las guías necesarias para 
              operar el sistema de control de servomotores, balanza de peso y transmisión de video con ESP32 y ESP32-CAM .              
            </p>
            <div class="btn-box">
              <a href="assets/pdf/Instructivo.pdf" download>
                Descargar
              </a>
              <hr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Información de contacto -->

  <!-- Footer -->
  <section class="container-fluid  text-jusitify py-4">
    <p>
      Pagina Realizada por el Grupo 7:
      <a href="https://plantillashtmlgratis.com/">Dilan Ch.</a>
      <a href="https://plantillashtmlgratis.com/">Maria Ch.</a>
      <a href="https://plantillashtmlgratis.com/">Alexander L.</a>
      <a href="https://plantillashtmlgratis.com/">Isauro R.</a>
      <a href="https://plantillashtmlgratis.com/">Anahi P.</a>
    </p>
  </section>
  <!-- end Footer -->

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/chatbot.js"></script>

</body>

</html>