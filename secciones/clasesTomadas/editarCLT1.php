<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
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
	
	<?php 
		include ("../../bd.php");
		$ctomadas=$_GET['dni_socio']; //especifica una condicion que debe cumplirse para que la fila sea afectada
		$sql="SELECT * 
		      FROM clases_tomadas
			  WHERE dni_socio = '$ctomadas'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn)); 
		

		$ct= mysqli_fetch_array($resu);		
		?>

	<form name="ctomadas_mod" action="editarCLT.php" method="get"> 
		
    <div class="mb-3">
  <label for="" class="form-label">DNI SOCIO</label>
  <input type="text"
	class="form-control" name="dni" value="<?php echo $ct['dni_socio'];?>" aria-describedby="helpId" placeholder="" readonly>
</div>
<div class="mb-3">
  <label for="" class="form-label">NOMBRE PF</label>
  <input type="text"
	class="form-control" name="nombre" value="<?php echo $ct['nombre_profesor'];?>" aria-describedby="helpId" placeholder="" readonly>
</div>
<div class="mb-3">
  <label for="" class="form-label">FECHA CLASE</label>
  <input type="date"
	class="form-control" name="fecha" value="<?php echo $ct['fecha_clase'];?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">FECHA CLASE</label>
  <input type="time"
	class="form-control" name="horario" value="<?php echo $ct['horario_clase'];?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">NRO CANCHA</label>
  <input type="int"
	class="form-control" name="nrocancha" value="<?php echo $ct['nro_cancha'];?>" aria-describedby="helpId" placeholder="">
</div>

				<input type="submit" class="btn btn-dark" name="Enviar" value="Guardar">
			
				<input type="button" class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
		
	</form>
</body>
</html>

