<html>
    <head>
        <title>Canchas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
             body{
     
     background-size: cover;
     background-repeat: no-repeat;

  }       
            a{
                color:black
            }
        </style> 
    </head>
    <body bgcolor="grey">

<?php include("../../bd.php"); ?>

<br>
<h2>Canchas</h2>


<br>
<input type="button" class="btn btn-dark" name="volver" value="Volver atras" onclick="location.replace('crearCL.php');">

<br>
  
<br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                    <th scope="col">Nro cancha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col"></th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql="SELECT * 
        FROM `cancha`
        ORDER BY nro_cancha";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($cancha = mysqli_fetch_array($resultado)){
        ?>
            <tr class="">
            <td> <?php echo $cancha['nro_cancha'];//columnas ?></td> 
  		   <td> <?php echo $cancha['descripcion_cancha']; ?></td>
  		   <td> <?php echo $cancha['capacidad_cancha']; ?></td>
           <td> <?php echo $cancha['estado_cancha']; ?></td>
	        
           <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarCA1.php?nro_cancha=<?php echo $cancha['nro_cancha'];?>');"></td>
           <td>
            <?php
            if($cancha['estado_cancha']==1){
                echo '<p><a href="modificarCA.php?valor=0&nro_cancha='.$cancha['nro_cancha'].'&estado_cancha=2">No disponible</a></p>';
            }else if($cancha['estado_cancha']==0){
      
                echo '<p><a href="modificarCA.php?valor=1&nro_cancha='.$cancha['nro_cancha'].'&estado_cancha=1">Disponible</a></p>';
            }
            ?>
           </td>
           <td><input type="button" class="btn btn-dark" value ="Eliminar" onclick="location.replace('eliminarCA.php?nro_cancha=<?php echo $cancha['nro_cancha'];?>');"></td>

            </tr>
            <?php
}
  ?>   
        </tbody>
    </table>
</div>



    </body>
</html>  

