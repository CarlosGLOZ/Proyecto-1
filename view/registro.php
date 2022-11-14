<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/css/registro.css">
    <title>Document</title>
    
</head>
<body>

            
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index_controller.php?<?php FILTROS['MESA']?>=1"><img class="foto" src="../static/img/logores.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarNav">  
     <ul class="navbar-nav">
          <li class="nav-item">
          <form>
            <select class="form-select form-select-md" aria-label=".form-select-sm example" id="<?php echo FILTROS['MESA'];?>">
            <option value=''>-</option>
                <?php
                  foreach ($mesas as $mesa) {
                    if (array_key_exists(FILTROS['MESA'], $filtros)) {
                        if ($filtros[FILTROS['MESA']] == $mesa[BD['MESA']['NUMERO']]) {
                            echo "<option selected='selected' value=".$mesa[BD['MESA']['NUMERO']].">".$mesa[BD['MESA']['NUMERO']]."</option>";
                        } else {
                            echo "<option value=".$mesa[BD['MESA']['NUMERO']].">".$mesa[BD['MESA']['NUMERO']]."</option>";
                        }
                    }else {
                        echo "<option value=".$mesa[BD['MESA']['NUMERO']].">".$mesa[BD['MESA']['NUMERO']]."</option>";
                    }
                  }
                ?>
            </select> 
        </form>
        </li>
         
        <li class="nav-item">
        <input class="form-control" type="number" min="1" max="10" placeholder="Comensales" aria-label="Search" id="<?php echo FILTROS['COMENSALES'];?>">
        
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-success" onclick="enviarFiltros('<?php echo $url_base;?>', [<?php echo FILTROS['MESA'].', '.FILTROS['COMENSALES'] ;?>]);">Filtrar</button>
          <button class="btn btn-outline-danger" onclick="limpiarFiltros('<?php echo $url_base;?>');">Limpiar Filtros</button>
        </li>
      </ul> 
    </div>
    <div class="navbar-nav">
      <a onClick="index.php" class="nav-link bg-light" aria-pressed='true' aria-current="page" role='button'>Volver</a>
    </div>
  </div>
</nav>
<div class="area" >
    <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            

<h2>REGISTROS</h2>
<div class="tabla-container">
  <table class="container tabla-fixedh">
      <thead>
        <tr>
          <?php
            foreach ($registros as $registro) {
              foreach ($registro as $key => $value) {
                echo "<th><h1>$key</h1></th>";
              }
              break;
            }
          ?>
        </tr>
      </thead>
      <div class="test">
        <tbody>
          <?php
            foreach ($registros as $registro) {
              echo "<tr>";
              foreach ($registro as $value) {
                echo "<td>$value</td>";
              }
              echo "</tr>";
            }
          ?>
        </tbody>
      </div>
  </table>
</div>

<script src="../static/js/filtros.js"></script>
</body>
</html>