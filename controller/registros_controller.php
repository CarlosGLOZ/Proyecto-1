<?php

require_once '../config/conexion.php';
require_once '../models/mesa.php';

// Validar sesion
if (!validar_sesion()) {
    redirect('login_controller.php?val=false');
}

// Validar que mesa está seteado y que es una mesa valida

if (!isset($_GET['filtro_mesa']) || !Mesa::mesaExiste($conexion, $_GET['filtro_mesa'])) {
    redirect('index_controller.php');
}

// Recoger filtros
$filtros = [];
foreach ($_GET as $key => $value) {
    if (in_array($key, FILTROS)) { //comprobar que variable esté dentro de los filtros
        $filtros[$key] = mysqli_real_escape_string($conexion, trim(strip_tags($value)));
    }
}

// Recoger registros
$registros = Mesa::getRegistros($conexion, $filtros);

// Llamar a pagina
$entrada_valida = true;
require_once '../view/registros.php';