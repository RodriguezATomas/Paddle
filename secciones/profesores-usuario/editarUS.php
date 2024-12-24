<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $usuario=$_GET['usuario'];
        $clave=$_GET['clave'];
        
                
        $sql = "UPDATE usuario
                SET clave_profesor = '$clave'
                WHERE usuario_profesor ='$usuario'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
        ?>
    </body>
    <script type="text/javascript">
	alert("Se modifico el Usuario");
	location.replace("indexUS.php");

</script>
</html>