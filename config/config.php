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
        'ID' => 'id_mesa',
        'CAPACIDAD' => 'capacidad_mesa',
        'ESTADO' => 'estado_mesa',
        'SALA' => 'fk_num_sala'
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

const FILTROS = 
[
    'SALA' => 'filtro_sala',
    'CAPACIDAD' => 'filtro_capacidad',
    'DISPONIBILIDAD' => 'filtro_disponibilidad',

    'BD' => // nombres de los filtros en la base de datos
    [
        'filtro_sala' => 'fk_num_sala',
        'filtro_capacidad' => 'capacidad_mesa',
        'filtro_disponibilidad' => 'estado_mesa'
    ]
];