<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

       //GET=se utiliza para recopilar datos enviados a través de una solicitud GET. Cuando se envía una solicitud GET a través de un formulario HTML o mediante una URL, los datos se adjuntan a la URL en forma de parámetros de consulta.
        $id_prod=$_GET['id_prod'];
        $cant=$_GET['cant'];
        $dni=$_GET['dni']; //son parámetros de consulta que se envían mediante una solicitud GET. Para acceder a estos valores en PHP, puedes utilizar la superglobal $_GET. 
        $fecha=$_GET['fecha'];
        $horario=$_GET['horario'];
        $numero=$_GET['nrocancha'];
        $precio=$_GET['preciototal'];
        
        
        //UPDATE se utiliza para modificar los registros existentes en una tabla de una base de datos.        
        $sql = "UPDATE producto_vendido 
                SET cantidad_solicitada = '$cant', dni_socio = '$dni', fecha_clase = '$fecha', horario_clase = '$horario', nro_cancha='$numero', precio_total ='$precio'
                WHERE id_producto ='$id_prod'"; 
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        header('location:index.php');
        ?>
    </body>
   

</script>
</html>