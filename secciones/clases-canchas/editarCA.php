<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $nro=$_GET['nro'];
        $descripcion=$_GET['descripcion'];
        $capacidad=$_GET['capacidad'];
       
        
                
        $sql = "UPDATE cancha
                SET descripcion_cancha = '$descripcion', capacidad_cancha = '$capacidad'
                WHERE nro_cancha ='$nro'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico la cancha");
	location.replace("indexCA.php");

</script>
</html>
