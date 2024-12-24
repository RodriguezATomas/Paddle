<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $dnipf=$_GET['dnipf'];
        $nombrepf=$_GET['nombrepf'];
        $telefonopf=$_GET['telefonopf'];
        $localidadpf=$_GET['localidadpf'];
        $altapf=$_GET['altapf'];
        $bajapf=$_GET['bajapf'];
        $usuariopf=$_GET['usuariopf'];
        
        
                
        $sql = "UPDATE profesor
                SET nombre_profesor = '$nombrepf', telefono_profesor = '$telefonopf', localidad_profesor = '$localidadpf', fecha_alta_profesor = '$altapf', fecha_baja_profesor = '$bajapf', usuario_profesor = '$usuariopf'
                WHERE dni_profesor ='$dnipf'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico el profesor");
	location.replace("index.php");

</script>
</html>
