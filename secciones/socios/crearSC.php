<html>
  <head>
    <title>Crear</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
<style>
   body{
     
        background-size: cover;
        background-repeat: no-repeat;

     }       
</style>
</head>

<body bgcolor="grey">
    

    <?php include("../../bd.php"); ?>

    <br> 
       <h2>Datos del socio</h2> 
    <br>

    <form action="crearSC1.php" method="get">


    <div class="mb-3">
  <label for="" class="form-label">DNI</label>
  <input type="int"
    class="form-control" name="dni_socio" id="" aria-describedby="helpId" placeholder="">
</div>      
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre_socio" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input type="int"
    class="form-control" name="telefono_socio" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Localidad</label>
  <input type="text"
    class="form-control" name="localidad_socio" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha Alta</label>
  <input type="date"
    class="form-control" name="fecha_alta_socio" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha Baja</label>
  <input type="date"
    class="form-control" name="fecha_baja_socio" id="" aria-describedby="helpId" placeholder="">
</div>



  <br>  
  <input  class="btn btn-dark" type="submit" role="button" value="Agregar" onclick="location.replace('index.php');">
  <input  class="btn btn-dark" type="button" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">

    </form>
    </body>
</html>
