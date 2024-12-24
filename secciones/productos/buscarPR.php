<td><a href="index.php?action=add&id_producto=<?php echo $value["id_producto"]; ?>"><span class="text-danger">Finalizar Compra</span></a></td>
<td><a href="finalizar.php">Finalizar</a></td>


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
        
<?php include ("../../bd.php"); ?>
<?php
$letra = $_GET['letra']; 

$sql = "SELECT * FROM productos WHERE descripcion_producto LIKE '%$letra%'"; //se puede buscar registros que coincidan con un patrón específico. Por ejemplo, la consulta "SELECT * FROM tabla WHERE columna LIKE '%patron%'" buscará todos los registros en la tabla donde la columna coincida con el patrón especificado.

$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));?>

<br>
<div id="main-container">
   <table>
      <thead>
      <tr>
                <th>ID producto</th>
                <th>Nombre Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
      <tr>
</thead>

<?php
if ($resultado->num_rows > 0) {
    while ($productos = $resultado->fetch_assoc()) { //FETCH_ASSOC = se utiliza en PHP para obtener una fila de resultados de una consulta MySQL en forma de un array asociativo. ?>
    
    <tr>

              <td><?php echo $productos['id_producto']; ?></td>
		      <td><?php echo $productos['nombre_producto']; ?></td>
              <td><?php echo $productos['descripcion_producto']; ?></td>
			  <td><?php echo $productos['precio_producto']; ?></td>
        
    </tr>
    
    
<?php
}
} else {
    echo "No se encontro </br></br>";
    
}
?>

    </table>
    </div>
    </body>
</html>
