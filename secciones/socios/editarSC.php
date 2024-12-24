<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $dni=$_GET['dni'];
        $nombre=$_GET['nombre'];
        $telefono=$_GET['telefono'];
        $localidad=$_GET['localidad'];
        $alta=$_GET['alta'];
        $baja=$_GET['baja'];
        
                
        $sql = "UPDATE socio
                SET nombre_socio = '$nombre', telefono_socio = '$telefono', localidad_socio = '$localidad', fecha_alta_socio = '$alta', fecha_baja_socio = '$baja'
                WHERE dni_socio ='$dni'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico el Socio");
	location.replace("index.php");

</script>
</html>
