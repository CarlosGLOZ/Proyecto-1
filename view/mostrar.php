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
          <a class="nav-link active" href="#">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privada</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav">
          <a onclick="aviso3();" class="nav-link bg-light" aria-pressed='true' aria-current="page" role='button'>Log out</a>
        </div>
  </div>
</nav>
<!-- <div id="test"></div> -->
<div class="region">
    <div class="bloque">
  
      <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    
      <div>
        <!-- <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button> -->
          
        <br><br>
        <button type="button" class="button-form2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ocultar
</button>
        <!-- <a type="button" class="button-form2" onclick="test()">
          Ocupar
</a> -->
      
    <button  type="button" onclick="aviso();" class="button-form">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
  </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa4-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
    
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa6-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
         
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>

</div>
<div class="region">
    <div class="bloque">
  
      <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    
      <div>
      <br><br>
    <button href="#resultado"  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa4-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa6-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>

    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
         
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
    
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>

</div>

<div class="region">
    <div class="bloque">
  
      <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    
      <div>
      <br><br>
    <button href="#resultado"  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>

    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa4-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
   
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa6-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
   
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>
        
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/mesa2-verde.PNG" alt="">
    <div>
    <br><br>
    <button  name="button" class="button-form2" name="insesion" type="submit">Ocupar</button>
  
    <button  name="button" onclick="aviso();" class="button-form" name="insesion" type="submit">Liberar</button>
    </div>
     <!-- <div>
     <button  name="button" class="button-form" name="insesion" type="submit">Mantenimiento</button>
     </div>  -->
  </a>
    </div>

</div>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<script src="../static/js/function_logout.js"></script>
</body>
</html>