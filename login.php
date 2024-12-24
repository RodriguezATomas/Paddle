<?php
 
session_start(); //La función session_start() en PHP se utiliza para iniciar o reanudar una sesión existente.

if($_POST){
    if(($_POST['usuario_profesor'])&&($_POST['clave_profesor'])){

      if($_POST['usuario_profesor'] == 'TomasR' && $_POST['clave_profesor'] == 'tomi123'){

        $_SESSION['usuario_profesor']=$_POST['clave_profesor'];

        header("location:index.php");
    }else{
        echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
    }
   }
} 


?>


<!doctype html>
<html lang="en">


<head>


  <title>Ingresar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
     body{
     
     background-size: cover;
     background-repeat: no-repeat;

  }       
  </style>
</head>


<body bgcolor="grey">
      
          <h2><b>Iniciar sesion</b></h2>
        
 

<form action="login.php" method="post">


<div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input type="varchar"
      class="form-control" name="usuario_profesor" id="" aria-describedby="helpId" placeholder="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input type="varchar"
      class="form-control" name="clave_profesor" id="" aria-describedby="helpId" placeholder="">
  </div>

<br>

  <input class="btn btn-dark" type="submit" value="Entrar">


</form>

  
</body>

</html>
