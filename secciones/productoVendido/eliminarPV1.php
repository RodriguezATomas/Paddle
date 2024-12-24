<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $id=$_GET['id_producto'];
   
    $sql= "DELETE FROM producto_vendido
    WHERE id_producto='$id'"; //WHERE = permite especificar una condición que debe cumplirse para que una fila sea afectada por la consulta

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));
    header('location:index.php');
?>

</body>

</script>
</html>