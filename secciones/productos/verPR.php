<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
     body{
     
     background-size: cover;
     background-repeat: no-repeat;

  }
  a{
    color:black;
  }       
</style>

</head>

   <body bgcolor="grey">
    
<?php include("../../bd.php"); ?>
<br>
<h2>Productos</h2>
<br>
<input type="button" class="btn btn-dark" name="volver" value="Volver al Menu" onclick="location.replace('index.php');">
<br>
<br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">ID producto</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
                <th scope="col">Modificar</th>
                <th scope="col">Estado</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>

        <?php
      $sql="SELECT *
       FROM `productos`
       ORDER BY nombre_producto";
      $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
      while ($productos=mysqli_fetch_array($resultado)){ 
      ?>

            <tr>  
              <td scope="row"><?php echo $productos['id_producto']; ?></td>
		      <td scope="row"><?php echo $productos['nombre_producto']; ?></td>
              <td scope="row"><?php echo $productos['descripcion_producto']; ?></td>
			  <td scope="row"><?php echo $productos['precio_producto']; ?></td>
              <td scope="row"><?php echo $productos['estado_producto']; ?></td>

              <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarPR1.php?id_producto=<?php echo $productos['id_producto'];?>');"></td>
             
              <td>
              <?php
               if($productos['estado_producto']==1){
                echo '<p><a href="modificarPR.php?valor=0&id_producto='.$productos['id_producto'].'&estado_producto=2">No Disponible</a></p>';
               }else if($productos['estado_producto']==0){
                echo '<p><a href="modificarPR.php?valor=1&id_producto='.$productos['id_producto'].'&estado_producto=1">Disponible</a></p>';
               }
               ?>
             </td>

             <td><input type="button" class="btn btn-dark" value ="Eliminar" onclick="location.replace('eliminarPR.php?id_producto=<?php echo $productos['id_producto'];?>');"></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>


   

    
</body>
</html>