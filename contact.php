
<?php

require_once 'conexion.php';

$conexion = new Conexion();
$mysqli = $conexion->conectar();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

$sql = "INSERT INTO contactos (nombre, apellido, email, consulta) VALUES ('$nombre', '$apellido', '$email', '$consulta')";

if ($mysqli->query($sql) === TRUE) {
    header("Location: ./success_contact.html");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>
