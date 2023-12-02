<?php
class reservaciones_model{
    private $db;
    private $reservaciones;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->reservaciones=array();
    }
    public function get_reservaciones(){
        $id_usuario = 1;
        $consulta=$this->db->query("select reserva.*, restaurante.nombre as nombre_restaurante from reserva join restaurante on reserva.id_restaurante=restaurante.id_restaurante where reserva.id_usuario = $id_usuario;");
        while($filas=$consulta->fetch_assoc()){
            $this->reservaciones[]=$filas;
        }
        return $this->reservaciones;
    }
}
?>
