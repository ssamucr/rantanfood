<?php
class inforest_model{
    private $db;
    private $facilidades;
    private $platos;
    private $telefonos;
    private $info;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->facilidades=array();
        $this->platos=array();
        $this->telefonos=array();
        $this->info=array();
    }
    public function get_facilidades(){
        $idRestaurante = $_SESSION['idRestaurante'];
        $consulta=$this->db->query("select tipofacilidad.facilidad from tipofacilidad left join facilidad on tipofacilidad.id_facilidad = facilidad.id_facilidad where facilidad.id_restaurante = $idRestaurante;");

        while($filas=$consulta->fetch_assoc()){
            $this->facilidades[]=$filas;
        }
        return $this->facilidades;
    }
    public function get_platos(){
        $idRestaurante = $_SESSION['idRestaurante'];
        $consulta=$this->db->query("select * from plato where id_restaurante = $idRestaurante;");
        while($filas=$consulta->fetch_assoc()){
            $this->platos[]=$filas;
        }
        return $this->platos;
    }
    public function get_telefonos(){
        $idRestaurante = $_SESSION['idRestaurante'];
        $consulta=$this->db->query("select * from telefono where id_restaurante = $idRestaurante;");
        while($filas=$consulta->fetch_assoc()){
            $this->telefonos[]=$filas;
        }
        return $this->telefonos;
    }
    public function get_info(){
        $idRestaurante = $_SESSION['idRestaurante'];
        $consulta=$this->db->query("select * from restaurante where id_restaurante = $idRestaurante;");
        while($filas=$consulta->fetch_assoc()){
            $this->info[]=$filas;
        }
        return $this->info;
    }
}
?>
