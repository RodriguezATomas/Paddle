<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

        $usuario=$_GET['usuario_profesor'];
        $baja=$_GET['baja_usuario'];
        $valor=$_GET['valor'];
    
                
        $sql = "UPDATE usuario
        set baja_usuario=$valor
        WHERE usuario_profesor = '$usuario'";
                
        $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

        header('location:indexUS.php');
        ?>

</script>
</html>
