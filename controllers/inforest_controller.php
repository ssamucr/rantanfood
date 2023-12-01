<?php
// Verificar si el parámetro 'restaurante' está presente en la URL
if (isset($_GET['restaurante'])) {
    $_SESSION["idRestaurante"] = urldecode($_GET['restaurante']);

    //Llamada al modelo
    require_once("../db/db.php");
    require_once("../models/inforest_model.php");
    $inforest=new inforest_model();
    $facilidades=$inforest->get_facilidades();
    $platos=$inforest->get_platos();
    $telefonos=$inforest->get_telefonos();
    $info=$inforest->get_info();
    
    //Llamada a la vista
    require_once("../views/inforest_view.php");
}
?>
