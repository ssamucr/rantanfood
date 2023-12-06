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

if (validarCorreo($correo)) {
    $consulta = $conexion->query("SELECT * FROM usuario WHERE correo = '$correo';");
    $check_correo = $consulta->fetch_assoc();
    if ($check_correo) {
        $_SESSION['registro_error'] = "Ya existe un usuario registrado con este correo.";
        header("Location: ../views/register_view.php");
        exit();
    }
} else {
    $_SESSION['registro_error'] = "El correo ingresado no tiene un formato válido.";
    header("Location: ../views/register_view.php");
    exit();
}

if (!validarContrasena($contrasena)) {
    header("Location: ../views/register_view.php");
    exit();
}

// Validar que la contraseña y la confirmación de la contraseña sean iguales
if ($contrasena !== $confirmar_contrasena) {
    // Las contraseñas no coinciden, mostrar un mensaje de error o redirigir al usuario
    $_SESSION['registro_error'] = "Las contraseñas no coinciden.";
    header("Location: ../views/register_view.php");
    exit();
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
    $_SESSION['registro_error'] = "nada";
    header("Location: ../index.php");
}

function validarCorreo($correo) {
    // Verificar el formato del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return false; // El correo electrónico no tiene un formato válido
    }

    if (strlen($correo) > 255) {
        return false; // El correo electrónico es demasiado largo
    }

    return true; // El correo electrónico tiene un formato válido
}

function validarContrasena($contrasena) {
    // Verificar longitud entre 8 y 20 caracteres
    if (strlen($contrasena) <= 8) {
        $_SESSION['registro_error'] = "La contraseña debe tener mínimo 8 caracteres.";
        return false;
    } elseif (strlen($contrasena) > 20) {
        $_SESSION['registro_error'] = "La contraseña debe tener máximo 20 caracteres";
        return false;
    }

    // Verificar al menos una mayúscula, una minúscula y un número
    if (!preg_match('/[A-Z]/', $contrasena)) {
        $_SESSION['registro_error'] = "La contraseña debe contener al menos una letra mayúscula.";
        return false;
    } elseif (!preg_match('/[a-z]/', $contrasena)) {
        $_SESSION['registro_error'] = "La contraseña debe contener al menos una letra minúscula.";
        return false;
    } elseif (!preg_match('/[0-9]/', $contrasena)) {
        $_SESSION['registro_error'] = "La contraseña debe contener al menos un número.";
        return false;
    }

    // Devolver true si cumple con todos los requisitos, false de lo contrario
    return true;
}
?>
