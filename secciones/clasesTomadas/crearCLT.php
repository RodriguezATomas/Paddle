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
<?php  include("../../bd.php"); ?>  

<br>
    
    <h2>Clases tomadas</h2>
    <br><br>
   
    <form action="crearCLT1.php" method="get">
  
    <div class="mb-3">
    <label for="" class="form-label">DNI SOCIO</label>
    <select class="form-select form-select-lg" name="dni_socio" id="dni_socio">
    <?php
        $sql="SELECT * 
        FROM `socio`
        ORDER BY nombre_socio";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
        while ($socios = mysqli_fetch_array($resultado)){  ?>

        <option value="<?php echo $socios['dni_socio']; ?>">
        <?php echo $socios['dni_socio']. "-" .$socios['nombre_socio']; ?></option>
      
        <?php } ?>
    </select>
   </div>

   <div class="mb-3">
    <label for="" class="form-label">NOMBRE PROFESOR</label>
    <select class="form-select form-select-lg" name="nombre_profesor" id="nombre_profesor">
    <?php
        $sql="SELECT *  FROM `info_clase`";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
        while ($info = mysqli_fetch_array($resultado)){  ?>

        <option value="<?php echo $info['nombre_profesor']; ?>">
        <?php echo $info['nombre_profesor']. "-" .$info['dia_clase']; ?></option>
      
        <?php } ?>
    </select>
   </div>


   
   <div class="mb-3">
   <label for="" class="form-label">FECHA CLASE</label>
   <input type="date"
     class="form-control" name="fecha_clase" id="" aria-describedby="helpId" placeholder="">
 </div>

   

   <div class="mb-3">
    <label for="" class="form-label">Horario Clase</label>
    <select class="form-select form-select-lg" name="horario_clase" id="horario_clase">
    <?php
        $sql="SELECT *  FROM `info_clase`";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
        while ($info = mysqli_fetch_array($resultado)){  ?>

        <option value="<?php echo $info['horario_clase']; ?>">
        <?php echo $info['horario_clase']; ?></option>
      
        <?php } ?>
    </select>
   </div>

   <div class="mb-3">
    <label for="" class="form-label">Numero Cancha</label>
    <select class="form-select form-select-lg" name="nro_cancha" id="nro_cancha">
    <?php
       $sql="SELECT * 
       FROM `cancha`
       ORDER BY nro_cancha";
       $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
           while ($cancha = mysqli_fetch_array($resultado)){ ?>

        <option value="<?php echo $cancha['nro_cancha']; ?>">
        <?php echo $cancha['nro_cancha']. "-" .$cancha['descripcion_cancha']; ?></option>
      
        <?php } ?>
    </select>
   </div>



  <br>
  <br>
  
    <input type="submit" class="btn btn-dark" role="button" value="Agregar" onclick="location.replace('index.php');"></td>
    <input type="button"  class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
   
  
   
  
  
  </form>

  </body>
  </html>