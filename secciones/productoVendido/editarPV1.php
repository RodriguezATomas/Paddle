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

<body background="fd.jpg">
	<?php 
		include ("../../bd.php");
		$pvendido=$_GET['id_producto']; //para acceder a los datos enviados 

		$sql="SELECT * 
		      FROM producto_vendido
			  WHERE id_producto = '$pvendido'"; //se utiliza para obtener todas las columnas de una tabla en la base de datos cuando el valor de la columna "id" coincide con un valor específico. El resultado será todas las filas que cumplan con esta condición.

		$resu= mysqli_query($conn,$sql) or die($sql . mysqli_error($conn)); //mysqli_query() se utiliza para enviar una consulta SQL a la base de datos y recuperar los resultados, si los hay. Esta función toma dos parámetros principales: la conexión a la base de datos y la consulta SQL que se desea ejecutar
        //Cuando se ejecuta una consulta utilizando mysqli_query() y ocurre un error, mysqli_error() se puede llamar inmediatamente después para obtener una descripción detallada del error. Esta función toma como parámetro la conexión a la base de datos y devuelve una cadena de texto que contiene el mensaje de error específico generado por la base de datos.

		$pv= mysqli_fetch_array($resu) //Cuando se ejecuta una consulta SELECT en la base de datos utilizando mysqli_query, el resultado se almacena temporalmente en el servidor de la base de datos. mysqli_fetch_array se utiliza para extraer una fila de ese conjunto de resultados y representarla como un array, para que pueda ser utilizada en el código de PHP.
		?>

		

	<form name="pvendido_mod" action="editarPV.php" method="get"> <?php // GET = se utiliza para enviar datos a través de la URL desde un formulario HTML o desde enlaces ?>
		
	    <br>
		<div class="mb-3">
		  <label for="" class="form-label">ID PRODUCTO</label>
		  <input type="int"
			class="form-control" name="id_prod" value="<?php echo $pv['id_producto']?>" id="" aria-describedby="helpId" placeholder=""  readonly>
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">CANTIDAD SOLICITADA</label>
		  <input type="int"
			class="form-control" name="cant" value="<?php echo $pv['cantidad_solicitada']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">DNI SOCIO</label>
		  <input type="int"
			class="form-control" name="dni" value="<?php echo $pv['dni_socio']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">FECHA CLASE</label>
		  <input type="date"
			class="form-control" name="fecha" value="<?php echo $pv['fecha_clase']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">HORARIO CLASE</label>
		  <input type="time"
			class="form-control" name="horario" value="<?php echo $pv['horario_clase']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">NRO CANCHA</label>
		  <input type="int"
			class="form-control" name="nrocancha" value="<?php echo $pv['nro_cancha']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="" class="form-label">PRECIO TOTAL</label>
		  <input type="float"
			class="form-control" name="preciototal" value="<?php echo $pv['precio_total']?>" id="" aria-describedby="helpId" placeholder="">
		</div>
			
				<input type="submit" class="btn btn-info"  name="Enviar" value="Guardar">
			
				<input type="button" class="btn btn-info" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">


	</form>
</body>
</html>
