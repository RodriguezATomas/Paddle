<!DOCTYPE html>

<html>
    <body>
    <?php

include("../../bd.php");


    $dni=$_GET['dni_socio'];
    $nombre=$_GET['nombre_socio'];
    $telefono=$_GET['telefono_socio'];
    $localidad=$_GET['localidad_socio'];
    $fecha_alta=$_GET['fecha_alta_socio'];
    $fecha_baja=$_GET['fecha_baja_socio'];
    $buscar=$_GET['buscar'];

    $sql="INSERT INTO socio (dni_socio,nombre_socio, telefono_socio, localidad_socio, fecha_alta_socio, fecha_baja_socio) VALUES ('".$dni."','".$nombre."', '".$telefono."', '".$localidad."', '".$fecha_alta."', '".$fecha_baja."')";
	$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));

?>
    </body>
    <script type="text/javascript">
	alert("Se agrego un nuevo socio");
	location.replace("index.php");

</script>
</html>