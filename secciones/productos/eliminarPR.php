<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $id=$_GET['id_producto'];
   
    $sql= "DELETE FROM productos
    WHERE id_producto='$id'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

?>

</body>
    <script type="text/javascript">
	alert("Se elimino un producto");
	location.replace("verPR.php");

</script>
</html>