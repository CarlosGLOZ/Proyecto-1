<?php

require_once '../config/conexion.php';

// Recoger todas las mesas
/**
 * Organización array mesas
 * 
 *  Mesas =
 *      [
 *          mesa => 
 *          [
 *              // Todos los valores de la tabla mesa
 *              ...
 *              estado = 0,1,2 // estado de ocupación de la mesa (0 = libre, 1 = ocupada, 2 = en mantenimiento)
 *          ]
 *      ]
*/




// Llamar a pagina
require_once '../view/index.php';