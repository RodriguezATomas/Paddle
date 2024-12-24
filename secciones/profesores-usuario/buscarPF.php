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
<a href="buscarPF1.php">Volver</a>   

<?php include ("../../bd.php"); ?>
<?php
$letra = $_GET['letra'];

$sql = "SELECT * FROM profesor WHERE nombre_profesor LIKE '$letra%'";

$resultado=mysqli_query($conn, $sql) or die ($sql . mysqli_error($conn));?>

<br><br>
<div class="table-responsive">
    <table class="table table-light">
        <thead>
            <tr>
               <th scope="col">DNI profesor</th>
               <th scope="col">Nombre</th>
               <th scope="col">Telefono</th>
               <th scope="col">Localidad</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
            <?php
            if ($resultado->num_rows > 0) {
            while ($profe = $resultado->fetch_assoc()) {?>
    
        
        <td><?php echo $profe['nombre_profesor']; ?></td>
        <td><?php echo $profe['dni_profesor']; ?></td>
        <td><?php echo $profe['telefono_profesor']; ?></td>
		<td><?php echo $profe['localidad_profesor']; ?></td>

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


<br>

    </body>
</html>
