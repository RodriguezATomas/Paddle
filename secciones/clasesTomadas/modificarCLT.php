<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $dni=$_GET['dni_socio'];
   $estado=$_GET['estado_reserva'];
   $valor=$_GET['valor'];

    $sql= "UPDATE clases_tomadas
    set estado_reserva=$valor
    WHERE dni_socio='$nombre'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

    header('location:index.php');
?>

</body>

</html>