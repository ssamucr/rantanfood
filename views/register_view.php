<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rantan Food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/register.css">
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
            <button class="submit">Registrarse</button>
            <p class="signin">¿Ya tienes una cuenta? <a href="../index.php">Inicia sesión</a> </p>
        </form>
    </main>
</body>
</html>