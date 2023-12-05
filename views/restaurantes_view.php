<?php
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    foreach ($datos as $dato) {
        echo '<div class="restaurant">';
        echo '<a href="./controllers/inforest_controller.php?restaurante=' . urlencode($dato["id_restaurante"]) . '">';
        echo '<img src="' . $dato["imagen"] .'" alt="Imagen de restaurante ' . $dato["nombre"] . '" class="restaurant-picture">';
        echo '</a>';
        echo '<div class="restaurant-content">';
        echo '<div class="restaurant-description">';
        echo '<h2>' . $dato["nombre"] . '</h2>';
        echo '<p><i class="fa-solid fa-location-dot"></i> ' . $dato["direccion"] . '</p>';
        echo '<p><i class="fa-solid fa-bowl-food"></i> ' . $dato["tipo_comida"] . ' | <i class="fa-solid fa-tag"></i> ' . $dato["costo"] . ' </p>';
        echo '<p>Tipo: ' . $dato["tipo_restaurante"] . '</p>';
        echo '</div>';
        echo '<div class="restaurant-reservar">';
        if (!isset($_SESSION["idUsuario"])) {
            echo '<button onclick="Login.showModal();" class="reservar-button">Reservar <i class="fa-solid fa-book"></i></button>';
        } else {
            echo '<button onclick="restauranteModal('. $dato["id_restaurante"] .'); reservarModalShow();" class="reservar-button">Reservar <i class="fa-solid fa-book"></i></button>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
?>