<html>

<head>
    <title>Reservas</title>
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
            <a class="nav-link" href="../profesores-usuario">Profesores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../clases-canchas">Clases</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Reservas</a>
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

<?php include("../../bd.php"); ?>    
<br>
<h2>Reservas</h2>



<br>     
        <a name="" id="" href="crearCLT.php" role="button"> Agregar registro </a>

<br><br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                    <th scope="col">DNI socio</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Nro cancha</th>
                    <th scope="col"></th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql="SELECT *  FROM `clases_tomadas`
        ORDER BY fecha_clase";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($ctomadas = mysqli_fetch_array($resultado)){
        ?>
  
            <tr class="">
            <td> <?php echo $ctomadas['dni_socio']; ?></td>
            <td> <?php echo $ctomadas['nombre_profesor']; ?></td>
  		   <td> <?php echo $ctomadas['fecha_clase']; ?></td>
  		   <td> <?php echo $ctomadas['horario_clase']; ?></td>
		   <td> <?php echo $ctomadas['nro_cancha']; ?></td>
           <td> <?php echo $ctomadas['estado_reserva']; ?></td>

           <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarCLT1.php?dni_socio=<?php echo $ctomadas['dni_socio'];?>');"></td>
           <td>
           <?php
            if($ctomadas['estado_reserva']==1){
                echo '<p><a href="modificarCLT.php?valor=0&dni_socio='.$ctomadas['dni_socio'].'&estado_reserva=2">No Asistio</a></p>';
            }else if($ctomadas['estado_reserva']==0){
                echo '<p><a href="modificarCLT.php?valor=1&dni_socio='.$ctomadas['dni_socio'].'&estado_reserva=1">Asistio</a></p>';
            }
            ?>
           </td>
        
            </tr>
            <?php
        }
        ?>     
        </tbody>
    </table>
</div>



        <table>
	<tr>
        
	<?php /* $fecha_actual=date('Y-m');
		$sql="  SELECT socio.dni_socio, COUNT(clases_tomadas.dni_socio) AS CLASE
            FROM clases_tomadas 
            INNER JOIN socio ON clases_tomadas.dni_socio = socio.dni_socio
            WHERE DATE_FORMAT(fecha_clase, '%Y-%m') = $fecha_actual
            GROUP BY socio.dni_socio, socio.nombre_socio
            ORDER BY CLASE DESC";

            $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($ctomadas = mysqli_fetch_array($resultado)){	 
		?>
		</tr><th><?php echo "DNI: ".$ctomadas["dni_socio"];?></th></tr>
	<?php } ?>
	</tr>

	<tr>
		<?php
		$sql="SELECT socio.dni_socio,socio.nombre_socio, COUNT(clases_tomadas.dni_socio) AS CLASE
            FROM clases_tomadas
            INNER JOIN socio ON clases_tomadas.dni_socio = socio.dni_socio
            WHERE DATE_FORMAT(fecha_clase, '%Y-%m') = $fecha_actual
            GROUP BY socio.dni_socio, socio.nombre_socio
            ORDER BY CLASE DESC";

            $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($ctomadas = mysqli_fetch_array($resultado)){	 
		?>

		<td><h4><?php echo $ctomadas['nombre_socio']; ?> </h4></td>
		<?php } */?>
	</tr>
	</table>
    </div>



    </body>
    </html>