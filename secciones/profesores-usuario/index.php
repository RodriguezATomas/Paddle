<html>
    <head>
        <title>Profesores</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
             body{
     
     background-size: cover;
     background-repeat: no-repeat;

  }       
            a{
                color:black
            }

             /*NAV*/  
  nav{
    background-color:black;
    height:45px;
    padding-top: 10px;
  }

  nav a{
    color:white;
  }
  
        </style>    
    </head>

    <body bgcolor="grey">   
    <header>
    <nav <ul class="nav justify-content-center  ">
        
        <li class="nav-item">
            <a class="nav-link" href="../../index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../socios">Socios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profesores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../clases-canchas">Clases</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../clasesTomadas">Reservas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../productos">Productos</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="../../cerrar.php">Cerrar Sesion</a>
        </li>
    </ul>
       
    </nav>

    </header>    
    
<main>
<?php include("../../bd.php"); ?>
<br>
<h2>Profesores</h2>

     <a name="" id="" href="crearPF1.php" role="button"> Agregar Profesor </a>
<br>
    <a href="buscarPF1.php" role="button"> Buscar Profesor </a>
<br>    <br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                    <th scope="col">DNI profesor</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">Baja</th>
                    <th scope="col">Fecha Alta</th>
                    <th scope="col">Fecha Baja</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            
        <?php 
			$sql="SELECT * FROM `profesor` 
            ORDER BY nombre_profesor";
			$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
			while ($profesor = mysqli_fetch_array($resultado)){ 
			?>

            <tr class="">
            <td><?php echo $profesor['dni_profesor']; ?></td>
		    <td><?php echo $profesor['nombre_profesor']; ?></td>
            <td><?php echo $profesor['telefono_profesor']; ?></td>
			<td><?php echo $profesor['localidad_profesor']; ?></td>
            <td><?php echo $profesor['baja_profesor']; ?></td>
            <td><?php echo $profesor['fecha_alta_profesor']; ?></td>
            <td><?php echo $profesor['fecha_baja_profesor']; ?></td>
            <td><?php echo $profesor['usuario_profesor']; ?></td>
				
			<td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarPF1.php?dni_profesor=<?php echo $profesor['dni_profesor'];?>');"></td>
            <td>
            <?php
            if($profesor['baja_profesor']==1){
                echo '<p><a href="modificarPF2.php?valor=0&dni_profesor='.$profesor['dni_profesor'].'&baja_profesor=1">Inactivo</a></p>';
            }else if($profesor['baja_profesor']==0){
      
                echo '<p><a href="modificarPF.php?valor=1&dni_profesor='.$profesor['dni_profesor'].'&baja_profesor=0">Activo</a></p>';;
            }
            ?>
           </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>


<br>
   
</main>
    </body>
</html>