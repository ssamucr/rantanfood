<?php
    // Iniciar la sesión si no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conectar a la base de datos (reemplaza los valores con los tuyos)
        require_once("../db/db.php");
        $conexion = Conectar::conexion();

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        // Obtener los valores del formulario
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Consulta para verificar si las credenciales son válidas
        $consulta = $conexion->prepare("SELECT id_usuario, nombre, apellido FROM usuario WHERE correo = ? AND contrasena = ?");
        $consulta->bind_param("ss", $email, $password);
        $consulta->execute();
        $consulta->store_result();

        // Verificar si se encontraron resultados
        if ($consulta->num_rows > 0) {
            // Iniciar sesión y redirigir al usuario a la página principal
            $consulta->bind_result($idUsuario, $nombre, $apellido);
            $consulta->fetch();

            $_SESSION["idUsuario"] = $idUsuario;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["apellido"] = $apellido;

            header("Location: ../index.php"); // Redirigir a la página principal
            exit();
        } else {
            $error = "Correo electrónico o contraseña incorrectos";
        }

        // Cerrar la conexión
        $consulta->close();
        $conexion->close();
    }
?>
