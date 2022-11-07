<?php

require_once '../config/conexion.php';

// Recoger filtros
$filtros = [];
foreach ($_GET as $key => $value) {
    if (in_array(explode('_',$key)[0], FILTROS)) { //comprobar que variable esté dentro de los filtros
        $filtros[$key] = mysql_real_escape_string(trim(strip_tags($value)));
    }
}

// Recoger todas las mesas
$sql = "SELECT * FROM ".BD['MESA']['TABLA']." WHERE 1=1";

// aplicar filtros
foreach ($filtros as $key => $value) {
    $sql = $sql." AND ".FILTROS['BD'][$key]." = $VALUE";
}

$sql = $sql.";";

$mesas = mysqli_query($conexion, $sql);

// Llamar a pagina
require_once '../view/index.php';