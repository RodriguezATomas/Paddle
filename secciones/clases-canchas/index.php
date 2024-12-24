<html>
    <head>
        <title>Clases</title>
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
            <a class="nav-link" href="#">Clases</a>
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

        
<?php include("../../bd.php"); ?>
<br>
<h2>Clases</h2>

        <a name="" id="" href="crearCL.php" role="button"> Agregar registro </a>
   
<br><br>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                
                    <th scope="col">Nro cancha</th>
                    <th scope="col">Dia</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Nombre PF</th>
                    <th scope="col"></th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql="SELECT *  FROM `info_clase`";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($info = mysqli_fetch_array($resultado)){
        ?>
            <tr class="">
            <td> <?php echo $info['nro_cancha']; ?></td>
  		   <td> <?php echo $info['dia_clase']; ?></td>
  		   <td> <?php echo $info['horario_clase']; ?></td>
		   <td> <?php echo $info['valor_clase']; ?></td>
           <td> <?php echo $info['nombre_profesor']; ?></td>
           <td> <?php echo $info['estado_clase']; ?></td>
           <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarCL1.php?nro_cancha=<?php echo $info['nro_cancha'];?>');"></td>
           <td>
            <?php
            if($info['estado_clase']==1){
                echo '<p><a href="modificarCL.php?valor=0&nro_cancha='.$info['nro_cancha'].'&estado_clase=2">No disponible</a></p>';
            }else if($info['estado_clase']==0){
      
                echo '<p><a href="modificarCL.php?valor=1&nro_cancha='.$info['nro_cancha'].'&estado_clase=1">Disponible</a></p>';
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

 
    </body>
    </html>