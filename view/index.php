<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
</head>
<body>
<?php
    // Validación de entrada valida

    if (!$entrada_valida) {
        echo "<script>window.location.href = '../controller/index_controller.php';</script>";
    }
    
    echo "<button onclick='redirigir(\"../test/liberar_mesas.php\");'>Liberar Mesas (testeo)</button>";

    foreach ($mesas as $mesa) {
        echo "<br>";
        
        echo 'Mesa nº'.$mesa[BD['MESA']['NUMERO']].' '.BD['MESA']['ESTADOS'][$mesa[BD['MESA']['ESTADO']]];
        //llama al Nª Mesa        llama al estado y con $estado lo muestra segun el array de $estados
        ?> 

        <!-- Funcion redirigir para enviar el value del estado a cambiar_estado_mesa.php -->
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=1'?>&num_comensales=1');">Ocupar</button>
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=0'?>');">Liberar</button>
        <button onclick="redirigir('../proc/cambiar_estado_mesa.php?<?php echo BD['MESA']['ID'].'='.$mesa[BD['MESA']['ID']];?>&<?php echo BD['MESA']['ESTADO'].'=2'?>&nom_inc=test');">Mantenimiento</button>
        <!-- <form action="../proc/cambiar_estado_mesa.php" method="get">
           

        </form> -->
        
        <?php
    }
?>    
<script src="../static/js/index.js"></script>
</body>
</html>