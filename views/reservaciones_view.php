<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rantan Food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../views/styles/header.css">
    <link rel="stylesheet" href="../views/styles/reservaciones.css">
    <link rel="stylesheet" href="../views/styles/footer.css">
    <link rel="stylesheet" href="../views/styles/login.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="logo-container">
                <label class="popup">
                    <input type="checkbox">
                    <div class="burger" tabindex="0">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <nav class="popup-window">
                      <legend>Acciones</legend>
                      <ul>
                        <li>
                          <button>
                            <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                              <circle r="4" cy="7" cx="9"></circle>
                              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Perfil</span>
                          </button>
                        </li>
                        <li>
                          <button onclick="Login.showModal()">
                            <svg fill="currentColor" viewBox="0 0 512 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
                            </svg>
                            <span>Iniciar sesión</span>
                          </button>
                        </li>
                        <hr>
                        <li>
                          <button onclick="window.location.href = './reservaciones_controller.php'">
                            <svg fill="currentColor" viewBox="0 0 384 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z"/>
                            </svg>
                            <span>Reservaciones</span>
                          </button>
                        </li>
                        <li>
                          <button onclick="window.location.href = '../views/soporte.php'">
                            <svg fill="currentColor" viewBox="0 0 512 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>
                            <span>Soporte</span>
                          </button>
                        </li>
                        <hr>
                        <li>
                          <button>
                            <svg fill="currentColor" viewBox="0 0 512 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                            </svg>
                            <span>Cerrar sesión</span>
                          </button>
                        </li>
                      </ul>
                    </nav>
                </label>
                <a href="../index.php" title="Página principal de RantanFood"><img src="../img/logo.png" alt="Logo de Rantan Food" class="logo"></a>
            </div>

            <div class="search-container">
                <i class="fa fa-search search-icon"></i>
                <input type="search" class="search" placeholder="Buscar restaurante">
            </div>

            <nav class="main-menu">
                <ol class="elements-main-menu">
                    <li><a href="./reservaciones_controller.php" class="selected">Reservaciones</a></li>
                    <li><a href="../views/soporte.php" class="">Soporte</a></li>
                </ol>
            </nav>

            <div class="personal">
                <div class="profile">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" width="2em" viewBox="0 0 448 512"><<path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    <p>Perfil<br><a href="#">Más opciones <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                </div>
            </div>

        </div>
    </header>

    <main class="main">
        <div class="reservaciones-container">                
            
            <?php
                foreach ($datos as $reserva) {
                    echo '<div class="reservacion">';
                    echo '<h2>Restaurante: <a href="../controllers/inforest_controller.php?restaurante=' . urlencode($reserva["id_restaurante"]) . '">' . $reserva["nombre_restaurante"] . '</a></h2>';
                    echo '<div class="reservacion-content">';
                    echo '<div class="reservacion-date">';
                    echo '<p>Fecha: ' . $reserva["fecha"] . '</p>';
                    echo '<p>Hora: ' . $reserva["hora"] . '</p>';
                    echo '</div>';
                    echo '<div class="reservacion-count">';
                    echo '<p>Cantidad de adultos: ' . $reserva["cantidad_adultos"] . '</p>';
                    echo '<p>Cantidad de niños: ' . $reserva["cantidad_ninos"] . '</p>';
                    if ($reserva["silla_bebe"] == 0) {
                        echo '<p>Sillas para bebé: No <i class="fa-solid fa-circle-xmark"></i></p>';
                    } elseif ($reserva["silla_bebe"] == 1) {
                        echo '<p>Sillas para bebé: Sí <i class="fa-solid fa-circle-check"></i></p>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="reservacion-cancelar">';
                    echo '<button onclick="cancelarReserva('. $reserva["id_reserva"] . ')" class="reservacion-cancelar-btn">Cancelar</button>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <a href="#" title="Volver arriba"><img src="../img/logo.png" alt="Logo de Rantan Food" class="logo"></a>
            <p>© 2021 Rantan Food | Todos los derechos reservados</p>
        </div>

        <div class="footer-menu">
            <ol class="elements-footer-menu">
                <li><a href="./reservaciones_controller.php" class="selected">Reservaciones</a></li>
                <li><a href="../views/soporte.php" class="">Soporte</a></li>
            </ol>
        </div>
    </footer>

    <script>
        function cancelarReserva(id_reserva) {
            window.location.href = "../controllers/cancelar_controller.php?cancelar=" + id_reserva.toString();
        }
    </script>

</body>
</html>