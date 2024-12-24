<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $nrocancha=$_GET['nrocancha'];
        $dia=$_GET['dia'];
        $horario=$_GET['horario'];
        $valor=$_GET['valor'];
        $nombrepf=$_GET['nombrepf'];
        
        
                
        $sql = "UPDATE info_clase
                SET dia_clase = '$dia', horario_clase = '$horario', valor_clase = '$valor', nombre_profesor = '$nombrepf'
                WHERE nro_cancha ='$nrocancha'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico la cancha");
	location.replace("index.php");

</script>
</html>