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
		$profesor=$_GET['dni_profesor'];

		$sql="SELECT * 
		      FROM profesor
			  WHERE dni_profesor = '$profesor'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
		$pf= mysqli_fetch_array($resu);		
		?>


	<form name="profesor_mod" action="editarPF.php" method="get">
		<br>
	
		<div class="mb-3">
  <label for="" class="form-label">DNI</label>
  <input type="int"
	class="form-control" name="dnipf" value="<?php echo $pf['dni_profesor']?>" aria-describedby="helpId" placeholder="" readonly>
</div>
<div class="mb-3">
  <label for="" class="form-label">NOMBRE</label>
  <input type="text"
	class="form-control" name="nombrepf" value="<?php echo $pf['nombre_profesor']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">TELEFONO</label>
  <input type="int"
	class="form-control" name="telefonopf" value="<?php echo $pf['telefono_profesor']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">LOCALIDAD</label>
  <input type="text"
	class="form-control" name="localidadpf" value="<?php echo $pf['localidad_profesor']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">FECHA ALTA</label>
  <input type="date"
	class="form-control" name="altapf" value="<?php echo $pf['fecha_alta_profesor']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">FECHA BAJA</label>
  <input type="date"
	class="form-control" name="bajapf" value="<?php echo $pf['fecha_baja_profesor']?>" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">USUARIO PROFESOR</label>
  <input type="varchar"
	class="form-control" name="usuariopf" value="<?php echo $pf['usuario_profesor']?>" aria-describedby="helpId" placeholder="">
</div>

			    <br>
				<input type="submit" class="btn btn-dark" name="Enviar" value="Guardar">
			
				<input type="button" class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
		
		


	</form>
</body>
</html>
