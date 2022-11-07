<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./img/login.svg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/20a538d92d.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!--  <link rel="stylesheet" href="./css/style.css">  -->
  <script type="text/javascript" src="../static/js/validacion-login.js"></script>
  <link rel="stylesheet" href="../static/css/login.css">
  <script src="./js/function_login.js"></script>
</head>

<body>

<div class="region">
    
    <div class="widget">
            <!-- <div class="logo">
                <img src="img/Logo_Noteros.png" alt="">
            </div> -->
            <div class="form">
                <div class="login">
                <form action="../proc/login_proc.php" method="post">
                    
                    
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text altura_icono"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="correo" class="form-control input_user color" name=<?php echo LOGIN_FORM['USER'];?> required id="email"   placeholder="correo@ejemplo.com">
                    </div>
                    <div class="input-group ">
                        <div class="input-group-append">
                            <span class="input-group-text altura_icono"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name=<?php echo LOGIN_FORM['PASSWORD'];?> required id="password" class="form-control input_pass color"  placeholder="password">
                    </div>
                    <!-- <a href="#"> Not registered? Create an account</a> -->

                    <button onclick="return validaFormulario()" name="button" class="button-form" name="insesion" type="submit" value=<?php echo LOGIN_FORM['SEND'];?>>Login</button>
                    </form>  
                    <!-- <button class="button-volver" onclick="window.location.href='./index.php'">Volver</button>            -->
                </div>
                
            </div>
    </div>
</div>   
<?php
if(isset($_GET['correo'])){
    if($_GET['correo']=='mal'){
        ?>
        <script>
            email('./login.php');
        </script>
        <?php
        
    }else if($_GET['correo']=='malEstructurado'){
        ?>
        <script>
            email2('./login.php');
        </script>
        <?php
    }
}
if(isset($_GET['psw'])){
    if($_GET['psw']=='mal'){
        ?>
        <script>
            psw('./login.php');
        </script>
        <?php
    }
}

?>
</body>
</html>

