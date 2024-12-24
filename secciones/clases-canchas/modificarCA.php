<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $numero=$_GET['nro_cancha'];
   $estado=$_GET['estado_cancha'];
   $valor=$_GET['valor'];

    $sql= "UPDATE cancha
    set estado_cancha=$valor
    WHERE nro_cancha='$numero'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

    header('location:indexCA.php');
?>

</body>

</html>