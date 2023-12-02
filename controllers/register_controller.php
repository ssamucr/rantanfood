<?php
// Iniciar la sesión si no se ha iniciado
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Llamada al modelo
require_once("../db/db.php");

// Conectar a la base de datos
$conexion = Conectar::conexion();

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

// Validar que la contraseña y la confirmación de la contraseña sean iguales
if ($contrasena !== $confirmar_contrasena) {
    // Las contraseñas no coinciden, mostrar un mensaje de error o redirigir al usuario
    echo "Error: Las contraseñas no coinciden.";
} else {
    // Las contraseñas coinciden, proceder con el registro en la base de datos

    // Hash de la contraseña
    $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    // Aquí deberías insertar los datos en la base de datos
    $consulta = $conexion->prepare("INSERT INTO usuario (nombre, apellido, correo, contrasena) VALUES (?, ?, ?, ?)");
    $consulta->bind_param("ssss", $nombre, $apellido, $correo, $hash_contrasena);
    
    if ($consulta->execute()) {
        // Registro exitoso, obtén el ID del usuario recién creado
        $_SESSION["idUsuario"] = $conexion->insert_id;

        // Registro exitoso, puedes redirigir al usuario a una página de éxito o hacer otras acciones necesarias
        echo "Registro exitoso. Usuario registrado.";
    } else {
        // Error en la ejecución de la consulta, manejar el error adecuadamente
        echo "Error en el registro. Por favor, inténtalo de nuevo.";
    }

    $consulta->close();
    header("Location: ../index.php");
}
?>
