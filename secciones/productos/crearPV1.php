<!DOCTYPE html>

<html>
    <body>
    <?php
    include("../../bd.php");

    $id=$_GET['id_producto'];
    $cantidad=$_GET['cantidad_solicitada'];
    $dni=$_GET['dni_socio']; 
    $fecha=$_GET['fecha_clase'];
    $horario=$_GET['horario_clase'];
    $numero=$_GET['nro_cancha'];
    $precioP=$_GET['precio_producto'];
    $precioT=$_GET['precio_total'];

    $sql="INSERT INTO `producto_vendido` (id_producto, cantidad_solicitada, dni_socio ,fecha_clase, horario_clase, nro_cancha, precio_producto, precio_total) VALUES('".$id."','".$cantidad."','".$dni."','".$fecha."', '".$horario."', '".$numero."', '".$precioP."', '".$precioT."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));

    header('location:index.php');
 ?>
 
    </body>

</script>
</html>