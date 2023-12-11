<?php
class restaurantes_model{
    private $db;
    private $restaurantes;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->restaurantes=array();
    }
    public function get_restaurantes($query){
        $consulta=$this->db->query($query);
        while($filas=$consulta->fetch_assoc()){
            $this->restaurantes[]=$filas;
        }
        return $this->restaurantes;
    }
}
?>
