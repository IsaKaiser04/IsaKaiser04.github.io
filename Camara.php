<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Grupo 7</title>
  <link rel="icon" href="images/manito.jpeg" type="image/png">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />

  <style>
    .content-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: nowrap;
      gap: 20px;
    }

    .camera-container {
      flex: 1;
      max-width: 50%;
    }

    .servo-container {
      flex: 1;
      max-width: 50%;
    }

    #video {
      width: 100%;
      height: auto;
    }

    .slider-container {
      margin-bottom: 15px;
    }

    input[type="range"] {
      width: 100%;
    }

    @media (max-width: 768px) {
      .content-container {
        flex-direction: column;
      }

      .camera-container,
      .servo-container {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- Header Section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="inicio.php">
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
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="componentes.html">Componentes</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="Camara.html">Aplicacion</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </header>
    <!-- End Header Section -->

    <!-- Camera and Servo Control Section -->
    <section class="camera_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h1>Control de Servomotores</h1>
        </div>
        <div class="content-container">
          <div class="camera-container">
            <img id="video" src="" alt="ESP32-CAM Stream">
          </div>
          <div class="servo-container">
            <div class="slider-container">
              <label for="servo1">Servo Base: </label>
              <input type="range" id="servo1" min="0" max="180" value="90" oninput="updateServo(1, this.value)">
              <span id="value1">90</span>
            </div>
            <div class="slider-container">
              <label for="servo2">Servo Antebrazo: </label>
              <input type="range" id="servo2" min="0" max="90" value="45" oninput="updateServo(2, this.value)">
              <span id="value2">45</span>
            </div>
            <div class="slider-container">
              <label for="servo3">Servo Codo: </label>
              <input type="range" id="servo3" min="0" max="90" value="45" oninput="updateServo(3, this.value)">
              <span id="value3">45</span>
            </div>
            <div class="slider-container">
              <label for="servo4">Servo Muñeca: </label>
              <input type="range" id="servo4" min="0" max="180" value="90" oninput="updateServo(4, this.value)">
              <span id="value4">90</span>
            </div>
            <div class="slider-container">
              <label for="servo5">Servo Pinza: </label>
              <input type="range" id="servo5" min="0" max="180" value="90" oninput="updateServo(5, this.value)">
              <span id="value5">90</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Camera and Servo Control Section -->

    <!-- Contact Information -->
    <section class="info_section layout_padding">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6 mb-4">
                  <div class="info-logo">
                      <h2>¿Qué es Robot Friendly?</h2>
                      <p>
                          Es un pequeño robot que te ayudará en la recolección de basura en tu hogar, así como una
                          manera de
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
                          Descarga nuestro instructivo detallado para obtener paso a paso las guías necesarias
                          para
                          operar el sistema de control de servomotores, balanza de peso y transmisión de video con
                          ESP32 y ESP32-CAM .
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
    <!-- End Contact Information -->

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
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>    

    <script>
      let esp32Ip = '';
      let esp32CamIp = '';

      function updateServo(servo, value) {
        document.getElementById('value' + servo).innerHTML = value;
        fetch(`http://${esp32Ip}/setServo?servo=${servo}&angle=${value}`)
          .then(response => response.text())
          .then(data => console.log(data))
          .catch(error => console.error('Error:', error));
      }

      function getESP32IPs() {
        esp32Ip = prompt("Por favor, ingresa la IP de tu ESP32 (para control de servos):", "192.168.0.XXX");
        esp32CamIp = prompt("Por favor, ingresa la IP de tu ESP32-CAM:", "192.168.0.YYY");
        if (esp32Ip && esp32CamIp) {
          startVideo();
        } else {
          alert("No se proporcionaron IPs válidas. Algunas funciones podrían no estar disponibles.");
        }
      }

      function startVideo() {
        const video = document.getElementById('video');
        video.src = `http://${esp32CamIp}:81/stream`;
      }

      window.onload = getESP32IPs;
    </script>
  </div>
</body>

</html>