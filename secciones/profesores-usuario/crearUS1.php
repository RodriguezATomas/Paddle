<!DOCTYPE html>

<html>
    <body>
    <?php

include("../../bd.php");

    $usuario=$_GET['usuario_profesor'];
    $clave=$_GET['clave_profesor'];
    
    $sql="INSERT INTO usuario (usuario_profesor, clave_profesor) VALUES ('".$usuario."', '".$clave."')";
	$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));

?>
    </body>
    <script type="text/javascript">
	alert("Se agrego un nuevo usuario");
	location.replace("indexUS.php");

</script>
</html>