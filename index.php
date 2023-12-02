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
    <link rel="stylesheet" href="./views/styles/header.css">
    <link rel="stylesheet" href="./views/styles/home.css">
    <link rel="stylesheet" href="./views/styles/footer.css">
    <link rel="stylesheet" href="./views/styles/login.css">
    <link rel="stylesheet" href="./views/styles/reservar.css">
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
                          <button onclick="window.location.href = './controllers/reservaciones_controller.php'">
                            <svg fill="currentColor" viewBox="0 0 384 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z"/>
                            </svg>
                            <span>Reservaciones</span>
                          </button>
                        </li>
                        <li>
                          <button onclick="window.location.href = './views/soporte.php'">
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
                <a href="./index.php" title="Página de inicio de RantanFood"><img src="./img/logo.png" alt="Logo de Rantan Food" class="logo"></a>
            </div>

            <div class="search-container">
                <i class="fa fa-search search-icon"></i>
                <input type="search" class="search" placeholder="Buscar restaurante">
            </div>

            <nav class="main-menu">
                <ol class="elements-main-menu">
                    <li><a href="./controllers/reservaciones_controller.php" class="">Reservaciones</a></li>
                    <li><a href="./views/soporte.php" class="">Soporte</a></li>
                </ol>
            </nav>

            <div class="personal">
                <button id="login-open" class="login-button">Iniciar sesión</button>
                <div class="profile">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" width="2em" viewBox="0 0 448 512"><<path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    <p>Perfil<br><a href="#">Más opciones <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
                </div>
            </div>

        </div>
    </header>

    <main class="main">
        <div class="filter-container">
            <form action="" class="filter-form">                
                <div class="filter">
                    <fieldset class="filter-tipocom">
                        <legend>Tipo de comida:</legend>
                        <input type="radio" id="tipocomida-all" name="tipocomida" value="all" checked>
                        <label for="tipocomida-all">Todas</label>
                        <br>
                        <input type="radio" id="tipocomida-panamena" name="tipocomida" value="panamena">
                        <label for="tipocomida-panamena">Panameña</label>
                        <br>
                        <input type="radio" id="tipocomida-italiana" name="tipocomida" value="italiana">
                        <label for="tipocomida-italiana">Italiana</label>
                        <br>
                        <input type="radio" id="tipocomida-india" name="tipocomida" value="india">
                        <label for="tipocomida-india">India</label>
                        <br>
                        <input type="radio" id="tipocomida-venezolana" name="tipocomida" value="venezolana">
                        <label for="tipocomida-venezolana">Venezolana</label>
                        <br>
                        <input type="radio" id="tipocomida-peruana" name="tipocomida" value="peruana">
                        <label for="tipocomida-peruana">Peruana</label>
                        <br>
                        <input type="radio" id="tipocomida-brasilena" name="tipocomida" value="brasilena">
                        <label for="tipocomida-brasilena">Brasileña</label>
                    </fieldset>
                </div>

                <div class="filter">
                    <fieldset class="filter-tiporest">
                        <legend>Tipo de restaurante:</legend>
                        <input type="radio" id="tiporestaurante-all" name="tiporestaurante" value="all" checked>
                        <label for="tiporestaurante-all">Todos</label>
                        <br>
                        <input type="radio" id="tiporestaurante-foodtruck" name="tiporestaurante" value="foodtruck">
                        <label for="tiporestaurante-foodtruck">Food Truck</label>
                        <br>
                        <input type="radio" id="tiporestaurante-bistro" name="tiporestaurante" value="bistro">
                        <label for="tiporestaurante-bistro">Bistro</label>
                        <br>
                        <input type="radio" id="tiporestaurante-restaurante" name="tiporestaurante" value="restaurante">
                        <label for="tiporestaurante-restaurante">Restaurante</label>
                    </fieldset>
                </div>

                <div class="filter">
                    <fieldset class="filter-provincia">
                        <legend>Provincia:</legend>
                        <input type="radio" id="provincia-all" name="provincia" value="all" checked>
                        <label for="provincia-all">Todo el país</label>
                        <br>
                        <input type="radio" id="provincia-panama" name="provincia" value="panama">
                        <label for="provincia-panama">Panamá</label>
                        <br>
                        <input type="radio" id="provincia-west" name="provincia" value="west">
                        <label for="provincia-west">Panamá oeste</label>
                        <br>
                        <input type="radio" id="provincia-darien" name="provincia" value="darien">
                        <label for="provincia-darien">Darién</label>
                        <br>
                        <input type="radio" id="provincia-cocle" name="provincia" value="cocle">
                        <label for="provincia-cocle">Coclé</label>
                        <br>
                        <input type="radio" id="provincia-chiriqui" name="provincia" value="chiriqui">
                        <label for="provincia-chiriqui">Chiriquí</label>
                        <br>
                        <input type="radio" id="provincia-bocas" name="provincia" value="bocas">
                        <label for="provincia-bocas">Bocas del Toro</label>
                        <br>
                        <input type="radio" id="provincia-lossantos" name="provincia" value="lossantos">
                        <label for="provincia-lossantos">Los Santos</label>
                        <br>
                        <input type="radio" id="provincia-veraguas" name="provincia" value="veraguas">
                        <label for="provincia-veraguas">Veraguas</label>
                        <br>
                        <input type="radio" id="provincia-herrera" name="provincia" value="herrera">
                        <label for="provincia-herrera">Herrera</label>
                        <br>
                        <input type="radio" id="provincia-colon" name="provincia" value="colon">
                        <label for="provincia-colon">Colón</label>
                    </fieldset>
                </div>

                <div class="filter">
                    <fieldset class="filter-costo">
                        <legend>Costo:</legend>
                        <input type="radio" id="costo-all" name="costo" value="all" checked>
                        <label for="costo-all">Cualquier costo</label>
                        <br>
                        <input type="radio" id="costo-barato" name="costo" value="barato">
                        <label for="costo-barato">Barato <i class="fa-duotone fa-dollar-sign"></i></label>
                        <br>
                        <input type="radio" id="costo-regular" name="costo" value="regular">
                        <label for="costo-regular">Regular <i class="fa-duotone fa-dollar-sign"></i><i class="fa-duotone fa-dollar-sign"></i></label>
                        <br>
                        <input type="radio" id="costo-caro" name="costo" value="caro">
                        <label for="costo-caro">Caro <i class="fa-duotone fa-dollar-sign"></i><i class="fa-duotone fa-dollar-sign"></i><i class="fa-duotone fa-dollar-sign"></i></label>
                    </fieldset>
                </div>

                <div class="filter">
                    <fieldset class="filter-facilidades">
                        <legend>Facilidades:</legend>
                        <input type="radio" id="facilidades-all" name="facilidades" value="all" checked>
                        <label for="facilidades-all">Todas</label>
                        <br>
                        <input type="radio" id="facilidades-babychair" name="facilidades" value="babychair">
                        <label for="facilidades-babychair">Silla para bebés</label>
                        <br>
                        <input type="radio" id="facilidades-childremmenu" name="facilidades" value="childrenmenu">
                        <label for="facilidades-childremmenu">Menú de niños</label>
                        <br>
                        <input type="radio" id="facilidades-changingtable" name="facilidades" value="changingtable">
                        <label for="facilidades-changingtable">Cambiador</label>
                        <br>
                        <input type="radio" id="facilidades-disability" name="facilidades" value="disability">
                        <label for="facilidades-disability">Accesible a personas con discapacidad móvil</label>
                        <br>
                        <input type="radio" id="facilidades-parking" name="facilidades" value="parking">
                        <label for="facilidades-parking">Parking</label>
                    </fieldset>
                </div>

            </form>
        </div>

        <div class="content-container">
            <div class="restaurants-container">    
                <?php
                    require_once("db/db.php");
                    require_once("controllers/restaurantes_controller.php");
                ?>            
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <a href="#" title="Volver arriba"><img src="./img/logo.png" alt="Logo de Rantan Food" class="logo"></a>
            <p>© 2021 Rantan Food | Todos los derechos reservados</p>
        </div>

        <div class="footer-menu">
            <ol class="elements-footer-menu">
                <li><a href="./controllers/reservaciones_controller.php" class="">Reservaciones</a></li>
                <li><a href="./views/soporte.php" class="">Soporte</a></li>
            </ol>
        </div>
    </footer>

    <dialog id="loginmodal">
        <div class="login-container">
            <div class="login-image">
                <img src="./img/login.jpg" alt="Imagen de personas riendo en un restaurante">
            </div>
            <div class="login-content">
                <div class="login-back">
                    <button id="login-back-btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="login-logo">
                    <img src="./img/logo.png" alt="Logo de Rantan Food">
                </div>
                <h2 class="login-heading">Inicio de Sesión</h2>
                <form action="#" method="dialog" class="login-form">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Correo" required autocomplete="off">
                    <p class="create-account-link">¿No tiene una cuenta? <a href="./register.html">Crear una cuenta</a></p>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required autocomplete="off">
                    <p class="forgotpassword"><a href="#">¿Olvidó su contraseña?</a></p>
                    <button class="login-button" type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </dialog>

    <dialog id="reservarmodal">
        <div class="reservar-container">
            <div class="reservar-content">
                <div class="reservar-back">
                    <button id="reservar-back-btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="reservar-logo">
                    <img src="./img/logo.png" alt="Logo de Rantan Food">
                </div>
                <h2 class="reservar-heading">Formulario de reservación</h2>
                <form action="./controllers/reservar_controller.php" method="post" class="reservar-form">
                    <input type="text" id="idrest" name="idrestaurante" style="display: none;" value="">    

                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>

                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" name="hora" required>

                    <label for="adultos">Cantidad de adultos:</label>
                    <input type="number" id="adultos" name="adultos" required placeholder="Cantidad de adultos">

                    <label for="ninos">Cantidad de niños:</label>
                    <input type="number" id="ninos" name="ninos" required placeholder="Cantidad de niños">

                    <label for="babychair">Silla para bebé:</label>
                    <div class="babychair-radio-btn">
                        <input type="radio" id="babychairyes" name="babychair" value="1" required>
                        <label for="babychairyes">Sí</label>
                        <input type="radio" id="babychairno" name="babychair" value="0" required>
                        <label for="babychairno">No</label>
                    </div>

                    <button class="reservar-button" type="submit">Reservar</button>
                </form>
            </div>
        </div>
    </dialog>

    <script src="./views/loginmodal.js"></script>
    <script src="./views/reservarmodal.js"></script>
    <script>
        function restauranteModal(idRestaurante) {
            const idrest = document.querySelector("#idrest");

            idrest.value = idRestaurante;
        }
    </script>
</body>
</html>