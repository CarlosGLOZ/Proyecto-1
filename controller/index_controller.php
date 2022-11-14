<?php

require_once '../config/conexion.php';
require_once '../proc/func.php';
require_once '../models/mesa.php';

// Validar sesion
if (!validar_sesion()) {
    redirect('login_controller.php?val=false');
}

// Generar url base para filtros
if (!isset($_GET[FILTROS['SALA']])) {
    echo "<script>window.location.href='./index_controller.php?".FILTROS['SALA']."=1'</script>";
} else {
    $url_raw = getURL();
    $url_base = explode('?', $url_raw)[0];
}

// Comprobar si hay algun get vacío
if (hayGetsVacios()) {
    // Generamos una URL sin las variables GET vacías para hacerlo más limpio
    $nueva_url = eliminarVariablesGetVacias();
    // echo $nueva_url;
    echo "<script>window.location.href = '$nueva_url';</script>";
    exit();
}

// Recoger filtros
$filtros = [];
foreach ($_GET as $key => $value) {
    if (in_array($key, FILTROS)) { //comprobar que variable esté dentro de los filtros
        $filtros[$key] = mysqli_real_escape_string($conexion, trim(strip_tags($value)));
    }
}

$mesas = Mesa::getMesas($conexion, $filtros);
$capacidades = Mesa::getCapacidades($conexion);

// foreach ($mesas as $mesa) {
//     foreach ($mesa as $key => $value) {
//         echo "[$key] -> [$value]<br>";
//     }
//     echo "<br>";
// }
// die();

// Llamar a pagina
$entrada_valida = true;

require_once '../view/index.php';