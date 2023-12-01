<?php
class restaurantes_model{
    private $db;
    private $restaurantes;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->restaurantes=array();
    }
    public function get_restaurantes(){
        $consulta=$this->db->query("select * from restaurante;");
        while($filas=$consulta->fetch_assoc()){
            $this->restaurantes[]=$filas;
        }
        return $this->restaurantes;
    }
}
?>
