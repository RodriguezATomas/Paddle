<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $dni=$_GET['dni_socio'];
        $fechaB=$_GET['fecha_baja_socio'];
        $baja=$_GET['baja_socio'];
        $valor=$_GET['valor'];
        
    
       $sql = "UPDATE socio 
        set baja_socio=$valor, fecha_baja_socio=now()
        WHERE dni_socio = '$dni'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

        header('location:index.php');
        ?>

</script>
</html>

