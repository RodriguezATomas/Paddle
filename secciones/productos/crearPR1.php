<!DOCTYPE html>

<html>
    <body>
    <?php
include("../../bd.php");


    $id_producto=$_GET['id_producto'];
    $nombre=$_GET['nombre_producto'];
    $descripcion=$_GET['descripcion_producto'];
    $precio=$_GET['precio_producto'];
    
 
    $sql="INSERT INTO `productos` (id_producto, nombre_producto, descripcion_producto, precio_producto) VALUES ('".$id_producto."','".$nombre."','".$descripcion."', '".$precio."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn)); //INSERT INTO se utiliza para insertar nuevos registros en una tabla de una base de datos. 



?>
    </body>
    <script type="text/javascript">
	alert("Se agrego una producto");
	location.replace("index.php");

</script>
</html>