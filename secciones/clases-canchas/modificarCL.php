<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $numero=$_GET['nro_cancha'];
   $estado_clase=$_GET['estado_clase'];
   $valor=$_GET['valor'];

    $sql= "UPDATE info_clase
    set estado_clase=$valor
    WHERE nro_cancha='$numero'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

    header('location:index.php');
?>

</body>

</html>