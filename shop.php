<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['clave'];
} else {
   //
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once 'conexion.php';
    $conexion = new Conexion();
    $mysqli = $conexion->conectar();

    
    if ($mysqli) {
     
        $carritoDatos = $_POST["carrito-datos"];
        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];

        if (!empty($carritoDatos) && !empty($usuario) && !empty($contrasenia)) {
      
            $carritoDatos = $mysqli->real_escape_string($carritoDatos);
            $usuario = $mysqli->real_escape_string($usuario);
            $contrasenia = $mysqli->real_escape_string($contrasenia);

            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // El usuario y la contraseña coinciden, insertar el pedido en la base de datos
                $sql = "INSERT INTO pedidos (carrito, usuario) VALUES ('$carritoDatos', '$usuario')";

                if ($mysqli->query($sql) === TRUE) {
                    
                    // Datos guardados 
                    header("Location: success_shop.html");
                    exit; 
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }
            } else {
                header("Location: error_shop.html");
            }
        } else {
            header("Location: error_shop.html");
        }

        // Cerrar la conexión a la base de datos
        $mysqli->close();
    } else {
        echo "No se pudo conectar a la base de datos. Por favor, inténtelo de nuevo más tarde.";
    }
} else {
    echo "Acceso no autorizado.";
}

?>

