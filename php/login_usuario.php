<?php
    session_start(); //inicio de sesion

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); //encriptar la contraseña

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");
    
    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;//guardar el correo en una variable de sesion
        header("location: ../inicio.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario no encontrado, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
?>