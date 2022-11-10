
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../static/css/mostrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
</head>
<body>
<script src="../static/js/styles.js"></script>
    <?php
    // $nombre=$_SESSION['nom_empleado'];
    // $filtroon=false;
    // include '../config/conexion.php';
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="foto" src="./img/logores.png" alt=""></a>
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
      <h2 class="text-center">MESA 1</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
        <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 2</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa4-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 3</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa6-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
        <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 4</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
</div> 
<div class="region2">
 
    <div class="bloque">
      <h2 class="text-center">MESA 5</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 6</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 7</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
  <div class="bloque">
  <h2 class="text-center">MESA 8</h2>
      <div class="lightbox-gallery">
        <div class="text-center">
          <a href="">
          <img src="../static/img/mesa2-verde.PNG" data-image-hd="https://picsum.photos/id/343/600/600" alt="" >
          </a>
          
        </div>
      </div>
      <div class="text-center github-link">
  
      <button class="btn btn-success" href=""> Ocupar</button>
        <button class="btn btn-danger" href=""> Liberar</button>
        <button class="btn btn-secondary" href=""> Mantenimiento</button>
      </div>
  </div>
</div> 

<script src="../static/js/function_logout.js"></script>
<br>

</body>
</html>