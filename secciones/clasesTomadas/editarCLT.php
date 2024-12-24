<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

       
        $dni=$_GET['dni']; 
        $nombre=$_GET['nombre']; 
        $fecha=$_GET['fecha'];
        $horario=$_GET['horario'];
        $numero=$_GET['nrocancha'];
        
        
                
        $sql = "UPDATE clases_tomadas
                SET nombre_profesor='$nombre', fecha_clase = '$fecha', horario_clase = '$horario', nro_cancha='$numero'
                WHERE dni_socio ='$dni'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico la reserva");
	location.replace("index.php");

</script>
</html>