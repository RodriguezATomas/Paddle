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
		$cancha=$_GET['nro_cancha'];

		$sql="SELECT * 
		      FROM cancha
			  WHERE nro_cancha = '$cancha'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

		$ch= mysqli_fetch_array($resu);		
		?>

	

	<form name="cancha_mod" action="editarCA.php" method="get">
	<div class="mb-3">
		  <label for="" class="form-label">NRO CANCHA</label>
		  <input type="int"
			class="form-control" name="nro" value="<?php echo $ch['nro_cancha'];?>" aria-describedby="helpId" placeholder="" readonly>
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">DESCRIPCION</label>
		  <input type="text"
			class="form-control" name="descripcion" value="<?php echo $ch['descripcion_cancha'];?>" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">CAPACIDAD</label>
		  <input type="varchar"
			class="form-control" name="capacidad" value="<?php echo $ch['capacidad_cancha'];?>" aria-describedby="helpId" placeholder="">
		</div>

				<input type="submit" class="btn btn-dark" name="Enviar" value="Guardar">
			
				<input type="button" class="btn btn-dark" name="volver" value="Volver" onclick="location.replace('indexCA.php');">
		
	</form>
</body>
</html>
