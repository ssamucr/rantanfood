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
        $consulta=$this->db->query("select * from reserva where id_usuario = $id_usuario;");
        while($filas=$consulta->fetch_assoc()){
            $this->reservaciones[]=$filas;
        }
        return $this->reservaciones;
    }
}
?>
