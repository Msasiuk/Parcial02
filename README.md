# Parcial02

# private $server = "localhost";

# private $user = "root";

# private $pass = "";

# private $bd = "hechoconamor";

# public $conexion;

# CREATE TABLE contactos (

# id INT AUTO_INCREMENT PRIMARY KEY,

# nombre VARCHAR(20),

# apellido VARCHAR(20),

# email VARCHAR(20),

# consulta TEXT

# )

# CREATE TABLE usuarios (

# id INT AUTO_INCREMENT PRIMARY KEY,

# apellido VARCHAR(20) NOT NULL,

# nombre VARCHAR(20) NOT NULL,

# nro_documento VARCHAR(20) NOT NULL,

# fecha_nacimiento DATE NOT NULL,

# //Para poder guardar el guión

# nro_tel01 INT(12) NOT NULL,

# nro_tel02 INT(12),

# mail VARCHAR(20) NOT NULL,

# usuario VARCHAR(20) NOT NULL,

# contrasenia VARCHAR(20) NOT NULL,

# tipo_usuario VARCHAR(20) NOT NULL DEFAULT 'CLIENTE'

# )

# CREATE TABLE pedidos (

# id INT AUTO_INCREMENT PRIMARY KEY,

# carrito TEXT NOT NULL,

# usuario VARCHAR(50) NOT NULL,

# fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP

# )
