<?php

function redirect($path)
{
    echo "<script>window.location.href = '$path';</script>";
    die();
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
                $_SESSION[$subarray][$key] = $value;
            }
        }else {
            foreach ($vars as $key => $value) {
                $_SESSION[$key] = $value;
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
    if (!isset($_SESSION['USER'][BD['EMPLEADO']['EMAIL']])) {
        return false;
    }
    return true;
}

function getURL()
{
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
         $url = "https://";
    else
         $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];

    return $url;
}
