<html>
    <head>
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
        <br>
        <a href="buscarSC1.php">Volver</a>
<?php

include ("../../bd.php"); 

$letra = $_GET['letra'];

$sql = "SELECT * FROM socio WHERE nombre_socio LIKE '$letra%'";

$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));?>

<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Telefono</th>
                <th scope="col">Localidad</th>
            </tr>
        </thead>
        <tbody>
  
            <tr class="">

    <?php
    if ($resultado->num_rows > 0) {
    while ($socio = $resultado->fetch_assoc()) {?>
        <td><?php echo $socio['nombre_socio']; ?></td>
        <td><?php echo $socio['dni_socio']; ?></td>
        <td><?php echo $socio['telefono_socio']; ?></td>
		<td><?php echo $socio['localidad_socio']; ?></td>	
        
    <?php
    }
    } else {
    echo "No se encontro </br></br>";
    }
?>
            </tr>
        
        </tbody>
    </table>
</div>



    </body>
</html>
