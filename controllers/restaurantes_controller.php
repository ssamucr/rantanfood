<?php
//Llamada al modelo
require_once("models/restaurantes_model.php");
$rest=new restaurantes_model();
$datos=$rest->get_restaurantes();
 
//Llamada a la vista
require_once("views/restaurantes_view.php");
?>
