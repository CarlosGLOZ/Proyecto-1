<?php

require_once '../config/conexion.php';
require_once '../models/mesa.php';
require_once 'func.php';
//No hacemos require de config porque ya lo contiene conexion.php

$id_mesa = $_GET[BD['MESA']['ID']]; //Recupera el valor del id dentro de la const mesa 
$estado_mesa = $_GET[BD['MESA']['ESTADO']];

//llamar a la funcion de mesa

Mesa::cambiarEstadoMesa($conexion,$id_mesa,$estado_mesa);

redirect('../controller/index_controller.php');



