<html>
<head>
  <title>Crear</title>
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

    
      <h2>Datos de la clase</h2>
    <br>

    <a name="" id="" href="crearCA.php" role="button"> Agregar Canchas </a>
<br>
    <a name=""  id="" href="indexCA.php" role="button"> Ver Canchas </a>
<br><br>


    <form action="crearCL1.php" method="get">

    <div class="mb-3">
  <label for="" class="form-label">Nro cancha</label>
  <select class="form-select form-select-lg" name="nro_cancha" id="nro_cancha">
  <?php
      $sql="SELECT * FROM `cancha` 
            ORDER BY nro_cancha";

			$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
			while ($cancha = mysqli_fetch_array($resultado)){ ?>

        <option value="<?php echo $cancha['nro_cancha']; ?>">
        <?php echo $cancha['nro_cancha'] . "-" . $cancha['descripcion_cancha']; ?></option>  
      
        <?php } ?>  
  </select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Dia Clase</label>
  <input type="text"
    class="form-control" name="dia_clase" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Horario Clase</label>
  <input type="time"
    class="form-control" name="horario_clase" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="mb-3">
  <label for="" class="form-label">Valor Clase</label>
  <input type="float"
    class="form-control" name="valor_clase" id="" aria-describedby="helpId" placeholder="">
</div>


<div class="mb-3">
  <label for="" class="form-label">Nombre pf</label>
  <select class="form-select form-select-lg" name="nombre_profesor" id="nombre_profesor">
  <?php
      $sql="SELECT * FROM `profesor` 
            ORDER BY dni_profesor";

			$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
			while ($profesor = mysqli_fetch_array($resultado)){ ?>

        <option value="<?php echo $profesor['nombre_profesor']; ?>">
        <?php echo $profesor['nombre_profesor']. "-" .$profesor['dni_profesor'] ; ?></option>
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
    