<?php
if (isset($_POST["tipocomida"])) {
    // Lógica de filtros
    $tipocomida = $_POST["tipocomida"];
    $tiporestaurante = $_POST["tiporestaurante"];
    $provincia = $_POST["provincia"];
    $costo = $_POST["costo"];
    $facilidades = $_POST["facilidades"];
    $term = $_POST["search"];

    // Se construye la sentencia select
    if ($tipocomida == "all" && $tiporestaurante == "all" && $provincia == "all" && $costo == "all" && $facilidades == "all" && $term == "") {
        $query = "SELECT restaurante.* FROM restaurante;";
    } else {
        $query = "SELECT restaurante.* FROM restaurante ";
        if ($facilidades != "all") {
            $query .= "JOIN facilidad ON restaurante.id_restaurante = facilidad.id_restaurante JOIN tipofacilidad ON tipofacilidad.id_facilidad = facilidad.id_facilidad WHERE tipofacilidad.facilidad = '$facilidades' AND ";
            if ($tipocomida != "all") {
                $query .= "tipo_comida = '$tipocomida' AND ";
            }
            if ($tiporestaurante != "all") {
                $query .= "tipo_restaurante = '$tiporestaurante' AND ";
            }
            if ($provincia != "all") {
                $query .= "provincia = '$provincia' AND ";
            }
            if ($costo != "all") {
                $query .= "costo = '$costo' AND ";
            }
            if ($term != "") {
                $query .= "nombre LIKE '%$term%' AND ";
            }
        } else {
            $query .= "WHERE ";
            if ($tipocomida != "all") {
                $query .= "tipo_comida = '$tipocomida' AND ";
            }
            if ($tiporestaurante != "all") {
                $query .= "tipo_restaurante = '$tiporestaurante' AND ";
            }
            if ($provincia != "all") {
                $query .= "provincia = '$provincia' AND ";
            }
            if ($costo != "all") {
                $query .= "costo = '$costo' AND ";
            }
            if ($term != "") {
                $query .= "nombre LIKE '%$term%' AND ";
            }
        }
        // Agrega el ; final
        $query .= "1=1;";
    }

    //Llamada al modelo
    require_once("../db/db.php");
    require_once("../models/restaurantes_model.php");
    $rest=new restaurantes_model();
    $datos=$rest->get_restaurantes($query);
    
    //Llamada a la vista
    require_once("../views/restaurantes_view.php");
    exit();
} else {
    $query = "SELECT * FROM restaurante;";
}

//Llamada al modelo
require_once("models/restaurantes_model.php");
$rest=new restaurantes_model();
$datos=$rest->get_restaurantes($query);
 
//Llamada a la vista
require_once("views/restaurantes_view.php");
?>
