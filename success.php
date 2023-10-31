<?php
session_start();
    echo "Nombre de usuario recuperado de la variable de sesión:" . $_SESSION['usuario'];
    echo "<br><br>";
    echo "La clave recuperada de la variable de sesión:" . $_SESSION['clave'];
?>

// PROXIMAMENTE, USAR $_SESSION PARA GUARDAR INICIO DE SESION DE USUARIO