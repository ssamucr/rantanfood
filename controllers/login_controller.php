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

        // Obtener el correo y la contraseña ingresados por el usuario
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Obtener el hash almacenado en la base de datos (reemplaza esto con tu lógica para obtener el hash)
        $consulta = $conexion->prepare("SELECT id_usuario, nombre, apellido, contrasena FROM usuario WHERE correo = ?");
        $consulta->bind_param("s", $email);
        $consulta->execute();
        $consulta->store_result();
        $consulta->bind_result($idUsuario, $nombre, $apellido, $hash_almacenado);
        $consulta->fetch();

        // Verificar si se encontraron resultados
        if ($consulta->num_rows > 0) {
            // Verificar la contraseña utilizando password_verify
            if (password_verify($password, $hash_almacenado)) {
                // Iniciar sesión y redirigir al usuario a la página principal
                $_SESSION["idUsuario"] = $idUsuario;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["apellido"] = $apellido;
                $_SESSION['registro_error'] = "nada";

                header("Location: ../index.php"); // Redirigir a la página principal
                exit();
            } else {
                $_SESSION['registro_error'] = "El correo o la contraseña son incorrectos.";
                header("Location: ../index.php");
                exit();
            }
        } else {
            $_SESSION['registro_error'] = "El correo o la contraseña son incorrectos.";
            header("Location: ../index.php");
            exit();
        }
    }

?>
