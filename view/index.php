<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/insert_comensales.js"></script>
</head>
<body>
<?php
    // Validación de entrada valida

    if (!$entrada_valida) {
        echo "<script>window.location.href = '../controller/index_controller.php';</script>";
    }
    
    foreach ($mesas as $mesa) {
        echo "<br>";
        // foreach ($mesa as $key => $value) {
        //     echo "[$key] -> [$value]<br>";
        // }

        //Array de los estados
        $estados = [ 
            1 => 'ocupado',
            0 => 'libre',
            2 => 'En mantenimiento',
        ];
        
        echo 'Mesa nº'.$mesa [BD['MESA']['NUMERO']].' '.$estados[$mesa[BD['MESA']['ESTADO']]];
        //llama al Nª Mesa        llama al estado y con $estado lo muestra segun el array de $estados
        ?> 

        <!-- Funcion redirigir para enviar el value del estado a cambiar_estado_mesa.php -->
        <script>
            function redirigir(url) {window.location.href=url;}
        </script>
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=1'?>');">Ocupar</button>
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=0'?>');">Liberar</button>
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=2'?>');">Mantenimiento</button>
        <!-- <form action="../proc/cambiar_estado_mesa.php" method="get">
           

        </form> -->
        
        <?php
    }
?>    
</body>
</html>