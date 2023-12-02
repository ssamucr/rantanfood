<?php
// Iniciar la sesión si no se ha iniciado
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once("../db/db.php");
// Verifica si se han recibido datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $idRestaurante = $_POST["idrestaurante"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $adultos = $_POST["adultos"];
    $ninos = $_POST["ninos"];
    $babychair = $_POST["babychair"];
    $usuario = $_SESSION["idUsuario"];

    // Realiza la conexión a la base de datos
    $conexion = Conectar::conexion();

    // Prepara la consulta SQL para insertar los datos en la tabla correspondiente
    $consulta = $conexion->prepare("INSERT INTO reserva (fecha, hora, cantidad_adultos, cantidad_ninos, silla_bebe, id_usuario, id_restaurante) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Vincula los parámetros de la consulta con los valores recibidos del formulario
    $consulta->bind_param("ssiisii", $fecha, $hora, $adultos, $ninos, $babychair, $usuario, $idRestaurante);

    // Ejecuta la consulta
    $consulta->execute();

    // Cierra la conexión
    $conexion->close();

    header("Location: ../index.php");
    exit();
}
?>