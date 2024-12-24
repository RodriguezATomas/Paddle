<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $id_prod=$_GET['id_prod'];
        $nombre_prod=$_GET['nombre_prod'];
        $descripcion_prod=$_GET['descripcion_prod'];
        $precio_prod=$_GET['precio_prod'];
       
        
                
        $sql = "UPDATE productos
                SET nombre_producto = '$nombre_prod', descripcion_producto = '$descripcion_prod', precio_producto = '$precio_prod'
                WHERE id_producto ='$id_prod'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        
        ?>
        
    </body>
    <script type="text/javascript">
	alert("Se modifico el producto");
	location.replace("verPR.php");


</script>
</html>
