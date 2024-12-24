<!DOCTYPE html>
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
	<?php 
		include ("../../bd.php");
		$info=$_GET['nro_cancha'];

		$sql="SELECT * 
		      FROM info_clase 
			  WHERE nro_cancha = '$info'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

		$cl= mysqli_fetch_array($resu);		
		?>


	
	<form name="crear_mod" action="editarCL.php" method="get">

	<br>
	<div class="mb-3">
  <label for="" class="form-label">NRO CANCHA</label>
  <input type="int"
	class="form-control" name="nrocancha" id="" value="<?php echo $cl['nro_cancha']?>" aria-describedby="helpId" placeholder="" readonly>
</div>
<div class="mb-3">
  <label for="" class="form-label">DIA CLASE</label>
  <input type="text"
	class="form-control" name="dia" id="" value="<?php echo $cl['dia_clase']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">HORARIO CLASE</label>
  <input type="time"
	class="form-control" name="horario" id="" value="<?php echo $cl['horario_clase']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">VALOR CLASE</label>
  <input type="float"
	class="form-control" name="valor" id="" value="<?php echo $cl['valor_clase']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">NOMBRE PROFESOR</label>
  <input type="text"
	class="form-control" name="nombrepf" id="" value="<?php echo $cl['nombre_profesor']?>" aria-describedby="helpId" placeholder="">
</div>

				<input type="submit" class="btn btn-dark" name="Enviar" value="Guardar">
			
				<input type="button" class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">

	</form>

</body>
</html>
