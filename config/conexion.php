<?php

require_once 'config.php';
require_once '../proc/func.php';

$conexion = mysqli_connect(BD['SERVER'], BD['USER'], BD['PASSWORD'], BD['BD']);

if (!$conexion) {
    echo "<script>alert('Error conectando con la base de datos!')</script>";
    redirect('../controller/login_controller.php');
    exit();
}