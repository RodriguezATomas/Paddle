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
      <h2>Datos del Profesor</h2>  
  
    
    <a name="" id="" href="crearUS.php" role="button"> Agregar Usuario </a> <br>
    <a name="" id="" href="indexUS.php" role="button"> Ver Usuarios </a>

  <br><br>

  <form action="crearPF.php" method="get">
    <div class="mb-3">
  <label for="" class="form-label">DNI profesor</label>
  <input type="int"
    class="form-control" name="dni_profesor" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombre profesor</label>
  <input type="text"
    class="form-control" name="nombre_profesor" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Telefono profesor</label>
  <input type="int"
    class="form-control" name="telefono_profesor" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Localidad profesor</label>
  <input type="text"
    class="form-control" name="localidad_profesor" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha Alta</label>
  <input type="date"
    class="form-control" name="fecha_alta_profesor" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Usuarios</label>
  <select class="form-select form-select-lg" name="usuario_profesor" id="usuario_profesor">
  <?php
    $sql="SELECT * FROM `usuario` 
    ORDER BY usuario_profesor";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
    while ($usuario = mysqli_fetch_array($resultado)){  ?>

        <option value="<?php echo $usuario['usuario_profesor']; ?>">
        <?php echo $usuario['usuario_profesor']; ?></option>
      
        <?php } ?>
        
  </select>
</div>

  
  <br>
  <br>
  <input type="submit" class="btn btn-dark" role="button" value="Agregar" onclick="location.replace('index.php');">
  <input type="button" class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
  
    </form>

    </body>
</html>
