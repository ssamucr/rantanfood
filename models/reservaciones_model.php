<?php
// Iniciar la sesión si no se ha iniciado
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
class reservaciones_model{
    private $db;
    private $reservaciones;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->reservaciones=array();
    }
    public function get_reservaciones(){
        $id_usuario = $_SESSION["idUsuario"];
        $consulta=$this->db->query("select reserva.*, restaurante.nombre as nombre_restaurante from reserva join restaurante on reserva.id_restaurante=restaurante.id_restaurante where reserva.id_usuario = $id_usuario;");
        while($filas=$consulta->fetch_assoc()){
            $this->reservaciones[]=$filas;
        }
        return $this->reservaciones;
    }
}
?>
