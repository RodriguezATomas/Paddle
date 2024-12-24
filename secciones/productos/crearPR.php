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

  <body background="fd.jpg">

<?php include("../../bd.php"); ?>

<br>
    <h2>Datos del Producto</h2>
      
<br>
    <form action="crearPR1.php" method="get">

    
<div class="mb-3">
  <label for="" class="form-label">ID producto</label>
  <input type="int"
    class="form-control" name="id_producto" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre_producto" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input type="text"
    class="form-control" name="descripcion_producto" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Precio producto</label>
  <input type="int"
    class="form-control" name="precio_producto" id="" aria-describedby="helpId" placeholder="">
</div>

  <br>
  

<br>
  <input type="submit"  class="btn btn-info" role="button" value="Agregar" onclick="location.replace('index.php');">

  <input type="button"  class="btn btn-info" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">

    </form>

    </body>
</html>
