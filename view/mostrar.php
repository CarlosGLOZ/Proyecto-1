<?php
session_start();
if(!isset($_SESSION["nom_empleado"])){
    echo "<script>window.location.href='./login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/css/mostrar.css">
    <title>Document</title>
    
</head>
<body>
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
          <a onClick="aviso3();" class="nav-link bg-light" aria-pressed='true' aria-current="page" role='button'>Log out</a>
        </div>
  </div>
</nav>

<div class="region">
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>

</div>
<div class="region">
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>
    <div class="bloque">
    <a href=""><img class="mesa" src="../static/img/logores.png" alt=""></a>
    </div>

</div>

<script src="../static/js/function_logout.js"></script>
</body>
</html>