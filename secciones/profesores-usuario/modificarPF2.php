<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $dni=$_GET['dni_profesor'];
        $fechaA=$_GET['fecha_alta_profesor'];
        $baja=$_GET['baja_profesor'];
        $valor=$_GET['valor'];
                
        $sql = "UPDATE profesor 
        set baja_profesor=$valor, fecha_alta_profesor=now()
        WHERE dni_profesor = '$dni'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

        header('location:index.php');
        ?>

</script>
</html>
