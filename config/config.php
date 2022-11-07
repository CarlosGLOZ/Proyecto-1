<?php

const BD = 
[
    'SERVER' => 'localhost',
    'USER' => 'root',
    'PASSWORD' => '',
    'BD' => 'bd_restaurante',

    'EMPLEADO' => 
    [
        'TABLA' => 'tbl_camareros',
        'ID' => 'id_camarero',
        'NOMBRE' => 'nom_camarero',
        'PASSWORD' => 'password_camarero'
    ],

    'SALA' =>
    [
        'TABLA' => 'tbl_sala',
        'ID' => 'id_sala'
    ],

    'MESA' =>
    [
        'TABLA' => 'tbl_mesa',
        'ID' => 'id_mesa'
    ],

    'REGISTRO' =>
    [
        'TABLA' => 'tbl_registros',
        'ID' => 'id_registro'
    ],
];

const LOGIN_FORM = 
[
    'USER' => 'user',
    'PASSWORD' => 'password',
    'SEND' => 'Entrar'
];