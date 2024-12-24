<!DOCTYPE html>

<html>
    <body>
    <?php
    include("../../bd.php");

    $dni=$_GET['dni_socio']; 
    $nombre=$_GET['nombre_profesor'];
    $fecha=$_GET['fecha_clase'];
    $horario=$_GET['horario_clase'];
    $numero=$_GET['nro_cancha'];

    $sql="INSERT INTO `clases_tomadas` (dni_socio ,nombre_profesor, fecha_clase, horario_clase, nro_cancha) VALUES('".$dni."','".$nombre."','".$fecha."', '".$horario."', '".$numero."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));


    

 ?>
    </body>
    <script type="text/javascript">
	alert("Clase Tomada");
	location.replace("index.php");

</script>
</html>