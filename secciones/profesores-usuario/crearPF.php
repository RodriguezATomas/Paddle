<!DOCTYPE html>

<html>
    <body>
    <?php
include("../../bd.php");


    $dnipf=$_GET['dni_profesor'];
    $nombrepf=$_GET['nombre_profesor'];
    $telefonopf=$_GET['telefono_profesor'];
    $localidadpf=$_GET['localidad_profesor'];
    $fecha_alta=$_GET['fecha_alta_profesor'];
    $fecha_baja=$_GET['fecha_baja_profesor'];
    $usuario=$_GET['usuario_profesor'];
 
    $sql="INSERT INTO `profesor` (dni_profesor, nombre_profesor, telefono_profesor, localidad_profesor, fecha_alta_profesor, fecha_baja_profesor, usuario_profesor) VALUES ('".$dnipf."','".$nombrepf."','".$telefonopf."', '".$localidadpf."', '".$fecha_alta."', '".$fecha_baja."', '".$usuario."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));



?>
    </body>
    <script type="text/javascript">
	alert("Se agrego un profesor");
	location.replace("index.php");

</script>
</html>