<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('location: inicio.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>Ya tienes una cuenta</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn_iniciar_sesion">Iniciar Sesión</button>
                </div>

                <div class="caja_trasera-register">
                    <h3>Aun no tienes cuenta</h3>
                    <p>Regístrate para iniciar sesión</p>
                    <button id="btn_registerarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor_login_register">
                <form action="php/login_usuario.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Entrar</button>
                </form>

                <form action="php/registro_usuario.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/myscripts.js"></script>
</body>

</html>
