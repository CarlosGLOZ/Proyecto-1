<?php

function redirect($path)
{
    echo "<script>window.location.href = '$path';</script>";
}

function registrar_array_en_sesion($vars, $subarray = null)
{
    if (gettype($vars) != 'array') {
        return false;
    }
    
    try {
        session_start();
        if ($subarray != null) {
            foreach ($vars as $key => $value) {
                $_SESSION[$subarray][$key] = $var;
            }
        }else {
            foreach ($vars as $key => $value) {
                $_SESSION[$key] = $var;
            }
        }
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}

function validar_sesion()
{
    require_once '../config/config.php';

    session_start();
    if (!isset($_SESSION[GESTOR['email']])) {
        echo "<script>window.location.href = '../view/login.html?error=errorSesion';</script>";
    }
}