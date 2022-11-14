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

// Comprobar si hay gets vacios
function hayGetsVacios()
{
    $url = getURL();
    $url_partida = explode('?', $url);

    if (!isset($url_partida[1])) {
        return false;
    } else {
        if (!isset($url_partida[1]) || $url_partida[1] == '') {
            return false;
        }
    }

    
    // separo la URL en dos por el '?', el primer valor será la url base y el segundo serán los valores GET
    // cojo los valores GET y los separo por el '&', esto me devuelve un array de todas las variables GET
    $variables_get = explode('&', $url_partida[1]);
    
    foreach ($variables_get as $value) {
        // separo cada variable por el '=', esto me devuelve el nombre de la variable y su valor
        // si el valor no está vacío, añadirlo a una string 
        if (!isset(explode('=', $value)[1]) || explode('=', $value)[1] == '') {
            return true;
        }
    }

    return false;
}

// Generar una nueva url sin gets vacios
function eliminarVariablesGetVacias($exclude=['filtro-buscar'])
{
    $url = getURL();
    $url_partida = explode('?', $url);
    
    // separo la URL en dos por el '?', el primer valor será la url base y el segundo serán los valores GET
    // cojo los valores GET y los separo por el '&', esto me devuelve un array de todas las variables GET
    $variables_get = explode('&', $url_partida[1]);
    
    $nuevo_array_variables_get = [];
    
    foreach ($variables_get as $value) {
        // separo cada variable por el '=', esto me devuelve el nombre de la variable y su valor
        // si el valor no está vacío, añadirlo a una string 
        if (isset(explode('=', $value)[1]) && explode('=', $value)[1] != '' && !in_array(explode('=', $value)[0], $exclude)) {
            array_push($nuevo_array_variables_get, $value);
        }
    }
    
    $nueva_url = $url_partida[0].'?'.implode('&', $nuevo_array_variables_get);

    return $nueva_url;
}