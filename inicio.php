<?php

session_start(); //inicio de sesion
if (!isset($_SESSION['usuario'])) {
  echo '
          <script>
              alert("Debes iniciar sesión para acceder a esta página");                            
          </script>
        ';
  header("location: index.php");
  session_destroy();
  die();
}


?>

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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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
    <!-- header section starts -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="inicio.php">
            <span>Robot Friendly</span>
          </a>
          <!--Boton de rayas en la parte responsiva-->
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
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
                <li class="nav-item">
                  <a class="nav-link" href="Camara.html">Aplicacion</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div>
</body>
<!-- end header section -->

<!-- slider section -->
<section class="slider_section position-relative">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_item-box layout_padding2">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="img-box">
                  <img src="assets/images/manito.jpeg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Brazo <br>
                    Robótico <br>
                    <span>Robot Friendly</span>
                  </h1>
                  <p>
                    El proyecto consiste en la creación de un brazo robótico que pueda ser controlado por una
                    aplicación móvil, el cual pueda ser utilizado en la industria para la manipulación de objetos.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider_item-box layout_padding2">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="img-box">
                  <img src="assets/images/logo.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Aplicaciones <br>
                    En las materias <br>
                  </h1>
                  <p>
                    Operación del brazo robótico
                    El brazo robótico se controla mediante Bluetooth para el movimiento y Wi-Fi
                    para la transmisión de video de la Aplicacion. El video se muestra en una página
                    web, junto con información sobre el brazo robótico y su operación.<br>
                    <b>Programación Orientada a Objetos</b> <br>
                    Utilizamos programación orientada a objetos para desarrollar el software que controla
                    el brazo robótico y la interfaz de usuario.<br>
                    <b>Emprendimiento</b> <br>
                    Evaluamos las oportunidades de emprendimiento que ofrece la implementación de un
                    sistema automatizado de recolección de basura en entornos universitarios.<br>
                    <b> Estadística</b> <br>
                    Generamos estadísticas a partir de los datos obtenidos de la balanza, permitiendo un
                    análisis detallado de la cantidad de basura recolectada
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slider_nav-box">
      <div class="btn-box">
        <a href=""></a>
      </div>
      <div class="custom_carousel-control">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end slider section -->
</div>

<!-- inicio de la informacion -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="custom_heading-container">
      <h3>¿Estás preocupado por los residuos contaminantes en la Universidad? Tenemos la solución.</h3>
    </div>
    <div class="layout_padding2-top">
      <p>Los residuos contaminantes representan un gran peligro para las personas que pasan la mayor parte del tiempo en la Universidad Nacional de Loja. Esta situación aumenta el riesgo de contraer enfermedades, y la recolección manual es lenta y perjudicial. Hemos observado que no existe un robot automatizado para la recolección de basura en la universidad, lo que compromete la sostenibilidad y la salud de la comunidad.</p>
      <p>De acuerdo con nuestras observaciones, la falta de soluciones sostenibles y tecnológicas para la reducción de residuos es un problema crítico que debe abordarse de inmediato.</p>
      <p>Sabemos lo frustrante que puede ser enfrentar estos desafíos diariamente. Estudiantes y personal de la Universidad Nacional de Loja han expresado su preocupación por la contaminación y el impacto negativo en su salud.</p>
      <p>Afortunadamente, no tienes que enfrentar este problema solo. Nuestra propuesta es implementar un robot recolector de basura, controlado a distancia, dentro de la Facultad de Recursos Renovables de la Universidad Nacional de Loja. Esta solución no solo beneficiará la salud de las personas, sino que también reducirá el impacto ambiental de manera significativa.</p>
      <p>Sin embargo, antes de implementar el robot, es necesario realizar una evaluación previa de las necesidades de sostenibilidad en la facultad. Esta evaluación nos permitirá determinar si el brazo robótico es la mejor opción para abordar el problema de los residuos.</p>
    </div>
    <div class="custom_heading-container">
      <h3>Propuesta</h3>
    </div>
    <div class="layout_padding2-top">
      <p>Debido a la problemática mencionada, se quiere implementar un robot de recolección de basura controlado a distancia en la Facultad de Recursos Renovables de la Universidad Nacional de Loja. Esta solución tiene muchos beneficios para la salud de las personas y para la reducción del impacto ambiental.</p>
    </div>
    <div class="custom_heading-container">
      <h3>Descripción del proyecto</h3>
    </div>
    <div class="layout_padding2-top">
      <p>
        Este proyecto tiene como objetivo desarrollar e implementar un brazo robótico recolector
        de basura controlado a distancia mediante una aplicación Wifi. El sistema incluye
        una cámara para transmisión en vivo y una balanza cuyos datos se muestran en una
        página web, permitiendo la generación de estadísticas sobre los residuos recolectados. La
        implementación de este sistema busca mejorar la eficiencia en la recolección de basura,
        reducir riesgos para los trabajadores y estudiantes, y promover un ambiente más limpio y
        saludable en la universidad. El proyecto integra conocimientos de diseño de circuitos,
        programación orientada a objetos, análisis matemático y emprendimiento. Los resultados
        indican que el sistema es efectivo y confiable en tareas de recolección automatizada.

      </p>
    </div>
    <div class="img-box layout_padding2">
      <img src="assets/images/brazo_robotico.png" alt="" class="img-fluid">
    </div>
    <p class="layout_padding2-top">
      El proyecto consiste en la creación de un brazo robótico que pueda ser controlado por una aplicación móvil, por
      medio de conexión Wi-Fi para su control.
    </p>

</section>
<!-- end about section -->

<!-- work section -->
<section class="info_section layout_padding">
  <div class="container">
    <div class="custom_heading-container  layout_padding2-top">
      <h3>Conoce más acerca del proyecto</h3>
    </div>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/d0isKoqgO4Q?si=zvdfLoJBWOZaUoJt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </div>
</section>
<!-- end work section -->

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
              <li><a href="Camara.html">Aplicación</a></li>
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