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
        sassion_start();
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