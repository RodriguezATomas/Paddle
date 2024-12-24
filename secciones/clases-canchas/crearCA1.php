<!DOCTYPE html>

<html>
    <body>
    <?php
    include("../../bd.php");

    
    $numero=$_GET['nro_cancha'];
    $descripcion=$_GET['descripcion_cancha'];
    $capacidad=$_GET['capacidad_cancha'];
    

    $sql="INSERT INTO `cancha` (nro_cancha, descripcion_cancha, capacidad_cancha) VALUES('".$numero."','".$descripcion."', '".$capacidad."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));


 ?>
    </body>
    <script type="text/javascript">
	alert("Se agrego una cancha");
	location.replace("indexCA.php");

</script>
</html>