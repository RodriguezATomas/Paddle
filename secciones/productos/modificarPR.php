<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $id=$_GET['id_producto'];
   $estado=$_GET['estado_producto'];
   $valor=$_GET['valor'];

    $sql= "UPDATE productos
    set estado_producto=$valor
    WHERE id_producto='$id'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

    header('location:verPR.php');
?>

</body>

</html>