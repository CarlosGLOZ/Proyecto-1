<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Validación de entrada valida

    if (!$entrada_valida) {
        echo "<script>window.location.href = '../controller/index_controller.php';</script>";
    }

    foreach ($mesas as $mesa) {
        echo "<br>";
        foreach ($mesa as $key => $value) {
            echo "[$key] -> [$value]<br>";
        }
    }
?>    
</body>
</html>