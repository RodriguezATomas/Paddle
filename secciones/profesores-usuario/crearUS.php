<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
                   body{
     
     background-size: cover;
     background-repeat: no-repeat;

  }
            a{
                color:black
            }
        </style> 
</head>
  <body bgcolor="grey">
    
<?php include("../../bd.php"); ?>


<br>
    <h2>Datos del usuario</h2>
<br>


<form action="crearUS1.php" method="get">
<div class="mb-3">
  <label for="" class="form-label">Usuario</label>
  <input type="varchar"
    class="form-control" name="usuario_profesor" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Clave</label>
  <input type="varchar"
    class="form-control" name="clave_profesor" id="" aria-describedby="helpId" placeholder="">
</div>
  <br>
  <input type="submit" class="btn btn-dark" role="button" value="Agregar" onclick="location.replace('indexUS.php');"></td>
  <input type="button" class="btn btn-dark" name="volver" value="Volver" onclick="location.replace('crearPF1.php');"></td>
  
</form>


</body>
</html>
