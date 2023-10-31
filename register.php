<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $nro_documento = $_POST["nro_documento"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $nro_tel01 = $_POST["nro_tel01"];
    $nro_tel02 = $_POST["nro_tel02"];
    $mail = $_POST["mail"];
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];
    $confirmarContrasenia = $_POST["confirmarContrasenia"]; 
    $tipo_usuario = $_POST["tipo_usuario"];


    if ($contrasenia !== $confirmarContrasenia) {
        header("Location: error_register.html");
        exit;
    }

    // Conectar a la base de datos
    $conexion = new Conexion();
    $mysqli = $conexion->conectar();

    // Verificar si ya existe un registro con los mismos datos
    $sql = "SELECT * FROM usuarios WHERE apellido = '$apellido' AND nombre = '$nombre' AND nro_documento = '$nro_documento'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        header("Location: error_register.html");
    } else {
        $sql = "INSERT INTO usuarios (apellido, nombre, nro_documento, fecha_nacimiento, nro_tel01, nro_tel02, mail, usuario, contrasenia, tipo_usuario) VALUES ('$apellido', '$nombre', '$nro_documento', '$fecha_nacimiento', '$nro_tel01', '$nro_tel02', '$mail', '$usuario', '$contrasenia', '$tipo_usuario')";

        if ($mysqli->query($sql) === TRUE) {
            header("Location: success_register.html");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }

    $mysqli->close();

   

}
?>
