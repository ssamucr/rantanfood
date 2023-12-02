<?php

    unset($_SESSION['idUsuario']);
    // Desvincular todas las variables de sesión
    $_SESSION = array();

    // Borrar la cookie de sesión si está definida
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    session_destroy();
    header("Location: ../index.php");