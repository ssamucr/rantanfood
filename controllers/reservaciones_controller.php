<?php
    require_once("../db/db.php");

    //Llamada al modelo
    require_once("../models/reservaciones_model.php");
    $reserv=new reservaciones_model();
    $datos=$reserv->get_reservaciones();
    
    //Llamada a la vista
    require_once("../views/reservaciones_view.php");
?>
