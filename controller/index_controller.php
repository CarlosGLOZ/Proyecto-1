<?php

require_once '../config/conexion.php';
require_once '../proc/func.php';
require_once '../models/mesa.php';

// Validar sesion
if (!validar_sesion()) {
    redirect('login_controller.php?val=false');
}

// Recoger filtros
$filtros = [];
foreach ($_GET as $key => $value) {
    if (in_array($key, FILTROS)) { //comprobar que variable esté dentro de los filtros
        $filtros[$key] = mysqli_real_escape_string($conexion, trim(strip_tags($value)));
    }
}

if (!isset($filtros[FILTROS['SALA']])) {
    $filtros[FILTROS['SALA']] = 1;
}

$mesas = Mesa::getMesas($conexion, $filtros);


// foreach ($mesas as $mesa) {
//     foreach ($mesa as $key => $value) {
//         echo "[$key] -> [$value]<br>";
//     }
//     echo "<br>";
// }
// die();

// Llamar a pagina
$entrada_valida = true;

require_once '../view/registro.php';