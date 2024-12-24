<!DOCTYPE html>

<html>
    <body>
    <?php
    include("../../bd.php");

    
    $numero=$_GET['nro_cancha'];
   // $fecha=$_GET['fecha_clase'];
    $dia=$_GET['dia_clase'];
    $horario=$_GET['horario_clase'];
    $valor=$_GET['valor_clase'];
    $nombre=$_GET['nombre_profesor'];

    $sql="INSERT INTO `info_clase` (nro_cancha,dia_clase, horario_clase, valor_clase, nombre_profesor) VALUES('".$numero."','".$dia."', '".$horario."', '".$valor."', '".$nombre."')";
    $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));


 ?>
    </body>
    <script type="text/javascript">
	alert("Se agrego una clase");
	location.replace("index.php");

</script>
</html>