<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../static/img/logores.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/css/mostrar.css">

    <title>Document</title>
    
</head>
<body>
  <?php
  if (!$entrada_valida) {
    echo "<script>window.location.href = '../controller/index_controller.php';</script>";
}
  ?>

  <script src="../static/js/function_logout.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="foto" src="../static/img/logores.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="?<?php echo FILTROS['SALA']?>=1">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?<?php echo FILTROS['SALA']?>=2">Comedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?<?php echo FILTROS['SALA']?>=3">Privada</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav">
      <a onclick="aviso3();" class="nav-link bg-light" aria-pressed='true' aria-current="page" role='button'>Log out</a>
    </div>
  </div>
</nav>

<div id="contenido-comensal" >

</div>
<!-- Loop -->
<div class="region">
  <?php
  $cont=0;
    foreach ($mesas as $mesa) {
      // 4 mesas por region
      if ($cont == 4) {
        $cont = 0;
        echo '
          </div>
          <div class="region">
        ';
      }

      echo "
        <div class='bloque'>
          <a href='registros_controller.php?filtro_mesa=".$mesa[BD['MESA']['ID']]."'><img class='mesa' src='../static/img/mesa".$mesa[BD['MESA']['CAPACIDAD']]."-".COLORES_MESAS[$mesa[BD['MESA']['ESTADO']]].".png'></a>";
      
      // Mostrar botones según estado de la mesa
      echo "<div><br><br>";
      if ($mesa[BD['MESA']['ESTADO']] == 0) {
        echo "<button onclick='comensal(".$mesa[BD['MESA']['ID']].")' name='id_mesa' class='button-form2' name='insesion' type='submit' data-toggle='modal' data-target='#exampleModal'>Ocupar</button>";
        // Boton mantenimiento
        //echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'> Launch demo modal</button>";



      } elseif ($mesa[BD['MESA']['ESTADO']] == 1) {
        echo "<button  type='button' onclick='aviso();' class='button-form'>Liberar</button>";
        
        // boton mantenimiento
      } elseif ($mesa[BD['MESA']['ESTADO']] == 2) {
        echo "<button  name='button' class='button-form2' name='insesion' type='submit'>Ocupar</button>";
        echo "<button  type='button' onclick='insert_comensales();' class='button-form'>Liberar</button>";
      }
      
      echo "</div></div>
      ";

      $cont++;
    }
  ?>



<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



</div>
<!-- /Loop -->

<script src="../static/js/function_index.js"></script>
<script src="../static/js/insert_comensales.js"></script>

</body>
</html>