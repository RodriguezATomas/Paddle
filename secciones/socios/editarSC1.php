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
	</style>
	</head>

<body bgcolor="grey">
	<?php 
		include ("../../bd.php");
		
		$socios=$_GET['dni_socio']; 

		$sql="SELECT * 
		      FROM socio
			  WHERE dni_socio = '$socios'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

		$sc= mysqli_fetch_array($resu);		
		?>

		
	<form name="socio_mod" action="editarSC.php" method="get">
		<br>
		<div class="mb-3">
		  <label for="" class="form-label">DNI</label>
		  <input type="int"
			class="form-control" name="dni" value="<?php echo $sc['dni_socio']?>" aria-describedby="helpId">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">NOMBRE</label>
		  <input type="text"
			class="form-control" name="nombre" value="<?php echo $sc['nombre_socio']?>" aria-describedby="helpId">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">TELEFONO</label>
		  <input type="int"
			class="form-control" name="telefono" value="<?php echo $sc['telefono_socio']?>" aria-describedby="helpId">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">LOCALIDAD</label>
		  <input type="text"
			class="form-control" name="localidad" value="<?php echo $sc['localidad_socio']?>" aria-describedby="helpId">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">FECHA ALTA</label>
		  <input type="date"
			class="form-control" name="alta" value="<?php echo $sc['fecha_alta_socio']?>" aria-describedby="helpId">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">FECHA BAJA</label>
		  <input type="date"
			class="form-control" name="baja" value="<?php echo $sc['fecha_baja_socio']?>" aria-describedby="helpId">
		</div>
			
		<input name="Enviar" class="btn btn-dark" type="submit" value="Guardar">
           
		<input type="button" name="volver" class="btn btn-dark" value="Volver al Menu" onclick="location.replace('index.php');">
		

	</form>
</body>
</html>

