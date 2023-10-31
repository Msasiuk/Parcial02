
<?php
//Clase que será llamada por todos los php para conectar con la BD
class Conexion {
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "hechoconamor";
    public $conexion;

    public function conectar() {
        $this->conexion = new mysqli($this->server, $this->user, $this->pass);

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }

        if (!$this->conexion->select_db($this->bd)) {
            die("Error al seleccionar la base de datos: " . $this->db->error);
        }
        
        return $this->conexion;
    }
}
?>

