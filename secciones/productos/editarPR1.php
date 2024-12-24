<!DOCTYPE html>
<html>
<head>
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
		$productos=$_GET['id_producto'];

		$sql="SELECT * 
		      FROM productos 
			  WHERE id_producto = '$productos'";

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

		$pr= mysqli_fetch_array($resu);		
		?>
	<form name="producto_mod" action="editarPR.php" method="get">
		<br>
	
				ID PRODUCTO <input type="int" name="id_prod" value="<?php echo $pr['id_producto'];?>" readonly>
			<br><br>
				NOMBRE <input type="text" name="nombre_prod" value="<?php echo $pr['nombre_producto']?>"></td>
			<br><br>
				DESCRIPCION <input type="text" name="descripcion_prod" value="<?php echo $pr['descripcion_producto'];?>"></td>
			<br><br>
				PRECIO <input type="float" name="precio_prod" value="<?php echo $pr['precio_producto'];?>">
			<br><br>
		
				<input class="btn btn-dark" type="submit" name="Enviar" value="Guardar">
			
				<input class="btn btn-dark" type="button" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
	

	</form>
</body>
</html>
