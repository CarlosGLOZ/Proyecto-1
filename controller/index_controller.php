<?php

require_once '../config/conexion.php';
require_once '../proc/func.php';
require_once '../models/mesa.php';

// Validar sesion
if (!validar_sesion()) {
    // redirect('login_controller.php?val=false');
}

// Recoger filtros
$filtros = [];
foreach ($_GET as $key => $value) {
    if (in_array(explode('_',$key)[0], FILTROS)) { //comprobar que variable esté dentro de los filtros
        $filtros[$key] = mysqli_real_escape_string(trim(strip_tags($value)));
    }
}

$mesas = Mesa::getMesas($conexion, $filtros);

// foreach ($mesas as $mesa) {
//     $mesa[BD['MESA']['ID']];
// }

// Llamar a pagina
$entrada_valida = true;
require_once '../view/index.php';