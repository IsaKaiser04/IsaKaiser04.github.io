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

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="inicio.php">
                    <span>
                        Robot Friendly
                    </span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="info.html"> Información </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="caracteristicas.html"> Características </a>
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
                            <li class="nav-item active"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menú</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="estadistica.html">Estadísticas</a>
                                    <a class="dropdown-item" href="informacion.html">Acerca de</a>
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
<!-- end header section -->

<body>
    <!-- Comentario de usuario -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="custom_heading-container">
                <h3>Comentarios de usuarios</h3>
            </div>
            <div class="layout_padding2-top">
                <div class="client_container">
                    <div class="detail-box">
                        <p>
                            El robot me pareció interesante tanto su movimiento como la manera en la que este puede
                            ser controlado
                            desde la comodidad de mi celular, en la sala.
                        </p>
                    </div>
                    <div class="client_id">
                        <div class="img-box">
                            <img src="assets/images/isauro.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="name">
                            <h6 class="centered-text">Isauro Rivera</h6>
                        </div>

                    </div>
                </div>
            </div>

            <div class="layout_padding2-top">
                <div class="client_container">
                    <div class="detail-box">
                        <p>
                            El robot me pareció interesante tanto su movimiento como la manera en la que este puede
                            ser controlado
                            desde la comodidad de mi celular, en la sala.
                        </p>
                    </div>
                    <div class="client_id">
                        <div class="img-box">
                            <img src="assets/images/alexander.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="name">
                            <h6 class="centered-text">Alexander Ludeña</h6>
                        </div>

                    </div>
                </div>

                <div class="layout_padding2-top">
                    <div class="client_container">
                        <div class="detail-box">
                            <p>
                                El robot me pareció interesante tanto su movimiento como la manera en la que este
                                puede ser controlado
                                desde la comodidad de mi celular, en la sala.
                            </p>
                        </div>
                        <div class="client_id">
                            <div class="img-box">
                                <img src="assets/images/isauro.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="name">
                                <h6 class="centered-text">Pepe</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="layout_padding2-top">
                    <div class="client_container">
                        <div class="detail-box">
                            <p>
                                El robot me pareció interesante tanto su movimiento como la manera en la que este
                                puede ser controlado
                                desde la comodidad de mi celular, en la sala.
                            </p>
                        </div>
                        <div class="client_id">
                            <div class="img-box">
                                <img src="assets/images/isauro.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="name">
                                <h6 class="centered-text">Paco</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="layout_padding2-top">
                    <div class="client_container">
                        <div class="detail-box">
                            <p>
                                El robot me pareció interesante tanto su movimiento como la manera en la que este
                                puede ser controlado
                                desde la comodidad de mi celular, en la sala.
                            </p>
                        </div>
                        <div class="client_id">
                            <div class="img-box">
                                <img src="assets/images/isauro.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="name">
                                <h6 class="centered-text">Isauro Rivera</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Información de contacto -->
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
                            Descarga nuestro instructivo detallado para obtener paso a paso las guías necesarias para
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