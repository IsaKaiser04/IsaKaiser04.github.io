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
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
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
      </header>
    </div>
  </body>
  <!-- end header section -->



  <!-- info section -->
  <section class="layout_padding-top">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Objetivos del Proyecto
        </h3>
      </div>
      <p class="layout_padding2-top">
        Crear un brazo robótico que sea capaz de recolectar basura y pueda ser controlado desde a distancia, esto
        mediante una aplicación. Mejorando la eficiencia en la limpieza de la Facultad.
      </p>
      <div class="img-box layout_padding2">
        <img src="assets/images/objetivo.jpg" alt class="img-fluid">
      </div>
      <div class="custom_heading-container">
        <h3>
          Objetivos Específicos del Proyecto
        </h3>
      </div>
      <div class="layout_padding2-top">
        <p>
          <li><b> Diseñar una Aplicación de Control Remoto Intuitiva para el Brazo Robótico:</b></li>
        </p>
        <p>
          Desarrollar una aplicación fácil de usar que permita controlar el brazo robótico de manera remota. La interfaz
          debe ser intuitiva y accesible para usuarios sin experiencia técnica, permitiendo mover el brazo en todas las
          direcciones necesarias y realizar acciones específicas como recoger y depositar basura en ubicaciones
          predeterminadas.
        </p>
        <p>
          <li><b>Integrar una ESP32-CAM para Transmisión en Tiempo Real:</b></li>
        </p>
        <p>
          Incorporar una cámara ESP32-CAM en el brazo robótico para transmitir video en tiempo real a una página web.
          Esta transmisión permitirá a los usuarios ver en vivo lo que el brazo robótico está viendo, facilitando la
          manipulación y recolección precisa de basura a distancia.
        </p>
        <p>
          <li><b>Añadir un Sensor de Peso y Registrar los Datos en Tiempo Real:</b></li>
        </p>
        <p>
          Instalar un sensor de peso en el brazo robótico para medir la cantidad de basura recolectada. Los datos
          recopilados ingresar de manera manual a la aplicación de control remoto en tiempo real, permitiendo a los
          usuarios monitorear
          el peso de la basura y tomar decisiones informadas sobre su recolección y disposición.
        </p>
        <p>
          <li><b>Generar Gráficas Estadísticas sobre la Cantidad de Basura Recolectada:</b></li>
        </p>
        <p>
          Desarrollar herramientas en la página web para generar gráficas estadísticas que muestren la cantidad de
          basura recolectada a lo largo del tiempo. Estas gráficas interactivas permitirán analizar los datos y
          optimizar las operaciones del brazo robótico, identificando patrones y tendencias en la recolección de basura.
        </p>
        <p>
          <li><b>Realizar Pruebas de Campo y Recopilar Comentarios de los Usuarios:</b></li>
        </p>
        <p>
          Realizar pruebas exhaustivas del sistema de control remoto para asegurar su precisión y fiabilidad. Verificar
          todos los movimientos del brazo robótico, la transmisión en tiempo real de la cámara ESP32-CAM y la exactitud
          del sensor de peso. Ajustar el sistema según sea necesario para optimizar su rendimiento y asegurar que cumpla
          con sus tareas a distancia de manera confiable.
        </p>
      </div>
      <div class="img-box layout_padding2">
        <img src="assets/images/inter.jpg" alt class="img-fluid">
      </div>


      <div class="custom_heading-container">
        <h3>
          Detalles del Proyecto
        </h3>
      </div>
      <div class="custom_heading-container ">
        <p><b>Diseño y desarrollo de un brazo robótico:</b></p>
      </div>
      <p class="layout_padding2-top">
        - Mecanismo articulado con actuadores controlados para la manipulación de residuos.<br>
        - Integración de sensores para la detección y clasificación de objetos.<br><br>
      </p>
      <div class="component_box">
        <p><b>Placa SP32-CAM como controlador principal:</b></p>
      </div>

      <p class="layout_padding2-top">
        - Procesamiento de datos sensoriales y control de actuadores.<br>
        - Comunicación Bluetooth para la interacción con el usuario y la monitorización del sistema.<br><br>
      </p>
      <div class="component_box">
        <p><b>Optimización de la recolección de residuos:</b><br></p>
        <p class="layout_padding2-top">
          - Aplicación de técnicas probabilísticas y estadísticas para la identificación y clasificación de objetos.<br>
          - Estimación del peso de los objetos recolectados mediante herramientas estadísticas.<br>
          - Generación de tablas estadísticas que muestren los objetos más pesados.<br><br>
        </p>
        <div class="component_box">
          <b>Consideraciones de emprendimiento:</b><br>
        </div>
        <p class="layout_padding2-top">

          - Análisis del costo de los objetos recolectados para evaluar la viabilidad del negocio.<br>
          - Estudio de mercado para identificar oportunidades y clientes potenciales.<br>
          - Exploración de posibles alianzas estratégicas para ampliar el alcance del proyecto.
        </p>

        <div class="img-box layout_padding2">
          <img src="assets/images/Brazo.png.jpeg" alt class="img-fluid">
        </div>
      </div>
  </section>
  <!-- end info section -->

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