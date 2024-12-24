<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $id=$_GET['id_producto'];
   $estado=$_GET['estado_venta'];
   $valor=$_GET['valor'];

    $sql= "UPDATE producto_vendido
    set estado_venta=$valor
    WHERE id_producto='$id'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

    header('location:index.php');
?>

</body>

</html>