<!DOCTYPE html>

<html>
    <body>
        <?php
        include ("../../bd.php");

   
   $nro=$_GET['nro_cancha'];
   
    $sql= "DELETE FROM cancha
    WHERE nro_cancha='$nro'";

    $resultado = mysqli_query($conn,$sql) or die($sql . mysqli_error($conn));

?>

</body>
    <script type="text/javascript">
	alert("Se elimino una cancha");
	location.replace("indexCA.php");

</script>
</html>