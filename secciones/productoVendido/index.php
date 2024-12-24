<html>
    <head>
        <title>Ventas</title>
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
            <a class="nav-link" href="../profesores-usuarios">Profesores</a>
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
    
      <h2>Ventas</h2>
      <a href="../../index.php">Volver</a>
      <br><br>
  
 
<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                    <th scope="col">ID producto</th>
                    <th scope="col">Precio Producto</th>
                  
                    <th scope="col">Cantidad solicitada</th>
                    <th scope="col">Precio total</th>
                    <th scope="col"></th>
               
            </tr>
        </thead>
        <tbody>
        <?php
        $sql="SELECT *  FROM `vendido`";
        $resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));
            while ($pvendido = mysqli_fetch_array($resultado)){
        ?>

            <tr class="">
            <td> <?php echo $pvendido['id_venta']; ?></td>
            <td> <?php echo $pvendido['id_producto']; ?></td>
           <td> <?php echo $pvendido['cant_solicitada']; ?></td>
          
         
           <td></td>

           <td><input type="button" class="btn btn-dark" value ="Modificar" onclick="location.replace('editarPV1.php?id_producto=<?php echo $pvendido['id_producto'];?>');"></td>
          
        
           <td><input type="button" class="btn btn-dark" value ="Eliminar" onclick="location.replace('eliminarPV1.php?id_producto=<?php echo $pvendido['id_producto'];?>');"></td>
        
            </tr>

            <?php
             }
           ?>  
        </tbody>
    </table>
</div>



<br>

<br>
   </main>
    </body>
</html>

