<html>
    <head>
        <title>Usuarios</title>
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
<br>
<h2>Usuarios</h2>


<br>

    <input type="button" class="btn btn-dark" name="volver" value="Volver atras" onclick="location.replace('crearPF1.php');">

  <br><br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Baja</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Estado</th>
            
            </tr>
        </thead>
        <tbody>
        <?php 

            
         $sql="SELECT * FROM `usuario` ORDER BY usuario_profesor";
         $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
         while ($usuario = mysqli_fetch_array($resultado)){ 
         ?>
            <tr class="">
            <td><?php echo $usuario['usuario_profesor']; ?></td>
		    <td><?php echo $usuario['clave_profesor']; ?></td>
            <td><?php echo $usuario['baja_usuario']; ?></td>

			<td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarUS1.php?usuario_profesor=<?php echo $usuario['usuario_profesor'];?>');"></td>
            <td>
            <?php
            if($usuario['baja_usuario']==1){
                echo '<p><a href="eliminarUS1.php?valor=0&usuario_profesor='.$usuario['usuario_profesor'].'&baja_usuario=1">Inactivo</a></p>';
            }else if($usuario['baja_usuario']==0){
      
                echo '<p><a href="eliminarUS1.php?valor=1&usuario_profesor='.$usuario['usuario_profesor'].'&baja_usuario=0">Activo</a></p>';;
            }
            ?>
           </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


    
</body>
</html>

