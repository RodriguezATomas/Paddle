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
       <h2>Datos de la cancha</h2> 
 <br>
        
 

    <form action="crearCA1.php" method="get">
 
    <div class="mb-3">
   <label for="" class="form-label">Nro Cancha</label>
   <input type="int"
     class="form-control" name="nro_cancha" id="" aria-describedby="helpId" placeholder="">
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Descripcion</label>
   <input type="text"
     class="form-control" name="descripcion_cancha" id="" aria-describedby="helpId" placeholder="">
 </div>
 <div class="mb-3">
   <label for="" class="form-label">Capacidad</label>
   <input type="varchar"
     class="form-control" name="capacidad_cancha" id="" aria-describedby="helpId" placeholder="">
 </div>

  <br>
  <br>
  <input type="submit" class="btn btn-dark"  role="button" value="Agregar" onclick="location.replace('indexCA.php');">
  <input type="button" class="btn btn-dark" name="volver" value="Volver atras" onclick="location.replace('crearCL.php');">

</form>

 </body>
</html>