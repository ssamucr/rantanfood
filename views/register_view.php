<?php
    // Iniciar la sesión si no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rantan Food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="main">
        <form action="../controllers/register_controller.php" method="post" class="register-form">
            <p class="register-title">Registro</p>
            <p class="register-message">¡Regístrate! para realizar reservaciones.</p>
            <div class="flex">
                <label>
                    <span>Nombre</span>
                    <input required="" name="nombre" placeholder="Nombre" type="text" class="input">
                </label>
        
                <label>
                    <span>Apellido</span>
                    <input required="" name="apellido" placeholder="Apellido" type="text" class="input">
                </label>
            </div>
                    
            <label>
                <span>Correo</span>
                <input required="" name="correo" placeholder="Correo" type="email" class="input">
            </label> 
                
            <label>
                <span>Contraseña</span>
                <input required="" name="contrasena" placeholder="Contraseña" type="password" class="input">
            </label>
            <label>
                <span>Confirma tu contraseña</span>
                <input required="" name="confirmar_contrasena" placeholder="Confirma tu contraseña" type="password" class="input">
            </label>
            <?php
                if (isset($_SESSION['registro_error']) && $_SESSION['registro_error'] != 'nada') {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['registro_error'] . '</div>';
                    unset($_SESSION['registro_error']);
                }
            ?>
            <button class="submit">Registrarse</button>
            <p class="signin">¿Ya tienes una cuenta? <a href="../index.php">Inicia sesión</a> </p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>