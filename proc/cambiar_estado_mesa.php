<?php

require_once '../config/conexion.php';
require_once '../models/mesa.php';
require_once 'func.php';
//No hacemos require de config porque ya lo contiene conexion.php

$id_mesa = $_POST[BD['MESA']['ID']]; //Recupera el valor del id dentro de la const mesa 
$estado_mesa = $_POST[BD['MESA']['ESTADO']];
$comensales = null;
$desc_inc = null;
$estado_actual = Mesa::getEstadoMesa($conexion, $id_mesa);


// Validaciones

    // Si la mesa no es valida
    if (!Mesa::mesaExiste($conexion, $id_mesa)) {
        redirect('../controller/index_controller.php?error=true');
    } 
    
    // Si el estado no es valido
    if (!array_key_exists($estado_mesa, BD['MESA']['ESTADOS'])) {
        redirect('../controller/index_controller.php?error=true');
    }
    // die();
    
    // Si el estado de la mesa es el mismo, devolver a index
    if ($estado_mesa == $estado_actual) {
        redirect('../controller/index_controller.php?error=true');
    }

    if ($estado_mesa == 1) {

        // Si el estado es ocupado y no esta seteado el valor de comensales o es un valor invalido
        if (!isset($_POST[BD['REGISTRO']['COMENSALES']])) {
            redirect('../controller/index_controller.php?error=true');
        }
        if (!Mesa::validarComensales($conexion, $id_mesa, $_POST[BD['REGISTRO']['COMENSALES']])) {
            redirect('../controller/index_controller.php?error=true');
        } 

        $comensales = $_POST[BD['REGISTRO']['COMENSALES']];
    } elseif ($estado_mesa == 2) {
        
        // Si el estado es incidencia y no está seteado el valor de desc_inc
        if (!isset($_POST[BD['INCIDENCIA']['NOMBRE']])) {
            redirect('../controller/index_controller.php?error=true');
        } 
        
        if (trim(strip_tags($_POST[BD['INCIDENCIA']['NOMBRE']])) == '') {
            redirect('../controller/index_controller.php?error=true');
        }

        $desc_inc = trim(strip_tags($_POST[BD['INCIDENCIA']['NOMBRE']]));

    }

// Acciones
    if ($estado_actual == 0) {
        if ($estado_mesa == 1) {
            Mesa::crearRegistroMesa($conexion, $id_mesa, $comensales);
        } elseif ($estado_mesa == 2) {
            Mesa::crearIncidenciaMesa($conexion, $id_mesa, $desc_inc);
        } else {
            redirect('../controller/index_controller.php?error=true');
        }
    } elseif ($estado_actual == 1) {
        if ($estado_mesa == 0) {
            Mesa::cerrarRegistroMesa($conexion, $id_mesa);
        } elseif ($estado_mesa == 2) {
            Mesa::cerrarRegistroMesa($conexion, $id_mesa);
            Mesa::crearIncidenciaMesa($conexion, $id_mesa, $desc_inc);
        } else {
            redirect('../controller/index_controller.php?error=true');
        }
    } elseif ($estado_actual == 2) {
        if ($estado_mesa == 0) {
            Mesa::cerrarIncidenciaMesa($conexion, $id_mesa);
        } elseif ($estado_mesa == 1) {
            
            Mesa::cerrarIncidenciaMesa($conexion, $id_mesa);
            Mesa::crearRegistroMesa($conexion, $id_mesa, $comensales);
        } else {
            redirect('../controller/index_controller.php?error=true');
        }
    } else {
        redirect('../controller/index_controller.php?error=true');
    }

//llamar a la funcion de mesa
if (!Mesa::cambiarEstadoMesa($conexion, $id_mesa, $estado_mesa)) {
    redirect('../controller/index_controller.php?error=true');
}


redirect('../controller/index_controller.php');