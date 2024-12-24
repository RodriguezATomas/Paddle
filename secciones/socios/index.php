<html>
  <head>
    <title>Socios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
     
     background-size: cover;
     background-repeat: no-repeat;

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

    a{
    color:black
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
            <a class="nav-link" href="#">Socios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../profesores-usuario">Profesores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../clases-canchas">Clases</a>
        </li>
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
<h2>Socios</h2>



<a  href="crearSC.php" role="button"> Agregar Socio </a> <br>
<a  href="buscarSC1.php" role="button"> Buscar Socio </a>



<br>
<br>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Localidad</th>
                <th scope="col">Fecha Alta</th>
                <th scope="col">Fecha Baja</th>
                <th scope="col">Modificar</th>
                <th scope="col">Estado</th>
                
            </tr>
        </thead>


        <tbody>
        <?php 
            
			$sql="SELECT * FROM socio ";
			$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
			while ($socios = mysqli_fetch_array($resultado)){ 
			
                if ($socios['baja_socio'] == 0) {
                    $socios['fecha_baja_socio']="";
                }         
            
            
            ?>



            <tr class=""> 
            <td><?php echo $socios['dni_socio']; ?></td>
		    <td><?php echo $socios['nombre_socio']; ?></td>
            <td><?php echo $socios['telefono_socio']; ?></td>
			<td><?php echo $socios['localidad_socio']; ?></td>	
            <td><?php echo $socios['fecha_alta_socio']; ?></td>
            <td><?php echo $socios['fecha_baja_socio']; ?> </td>	
            <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarSC1.php?dni_socio=<?php echo $socios['dni_socio'];?>');"></td>
            <td>
    <?php
    if ($socios['baja_socio'] == 1) {
        echo '<p><a href="modificarSC2.php?valor=0&dni_socio=' . $socios['dni_socio'] . '&baja_socio=1">Inactivo</a></p>';
    } else if ($socios['baja_socio'] == 0) {
        echo '<p><a href="modificarSC.php?valor=1&dni_socio=' . $socios['dni_socio'] . '&baja_socio=0">Activo</a></p>';
    }
    ?>
</td>



            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</main>
      
    </body>
</html>
