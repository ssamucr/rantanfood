<?php
    require_once("../db/db.php");
    $id_cancelar_reserva = urldecode($_GET['cancelar']);
    $db = Conectar::conexion();
    $consulta_eliminar = $db->query("DELETE FROM reserva WHERE id_reserva = $id_cancelar_reserva");

    header("Location: ../controllers/reservaciones_controller.php");
?>