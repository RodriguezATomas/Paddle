
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
		$usuarios=$_GET['usuario_profesor'];

		$sql="SELECT * 
		      FROM usuario
			  WHERE usuario_profesor = '$usuarios'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

		$us= mysqli_fetch_array($resu);		
		?>

		

	<form name="usuarios_mod" action="editarUS.php" method="get">
		<br>

		<div class="mb-3">
		  <label for="" class="form-label">USUARIO PF</label>
		  <input type="varchar"
			class="form-control" name="usuario" value="<?php echo $us['usuario_profesor']?>" aria-describedby="helpId" placeholder="" readonly>
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">CLAVE PF</label>
		  <input type="varchar"
			class="form-control" name="clave" value="<?php echo $us['clave_profesor'];?>" aria-describedby="helpId" placeholder="">
		</div>

			<input type="submit" class="btn btn-dark" name="Enviar" value="Guardar">
			
			<input type="button"  class="btn btn-dark" name="volver" value="Volver" onclick="location.replace('indexUS.php');">

	</form>
</body>
</html>
