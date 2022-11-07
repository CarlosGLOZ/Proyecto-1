<?php
require_once '../config/conexion.php';
require_once 'func.php';

// Validar entrada
if (!isset($_POST[LOGIN_FORM['SEND']])) {
    redirect('../view/login.php');
}

// Recoger y encriptar datos de POST, guardarlos en array $params
$params = [];
foreach ($_POST as $key => $value) {
    if ($key == LOGIN_FORM['PASSWORD']) {
        $params[$key] = sha1(trim(strip_tags($value)));
    } else {
        $params[$key] = trim(strip_tags($value));
    }
}

// Validar datos con la BDD
$sql = "SELECT * FROM ".BD['EMPLEADO']['TABLA']." WHERE ".BD['EMPLEADO']['NOMBRE']." = ".$params[LOGIN_FORM['USER']].";";

echo $sql;
die();

$result = mysqli_fetch_assoc(mysqli_query($conexion, $sql));

if ($params[BD['EMPLEADO']['NOMBRE']] != $result[BD['EMPLEADO']['PASSWORD']]) {
    redirect('../view/login.php?val=false');
}

// Iniciar sesión
if (registrar_array_en_sesion($result, 'user')) { // Registra los valores de un array en la sesión (utiliza las keys del array) en un subarray 'user'
    redirect('../controller/index_controller.php');
}

exit();