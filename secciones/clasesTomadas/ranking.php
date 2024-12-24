<html>
<head>
    <title>Ranking</title>
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
 <a href="index.php">Volver</a>   
<?php
include("../../bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFin = $_POST["fechaFin"];

    if ($fechaInicio > $fechaFin) {
        echo "La fecha de inicio debe ser anterior a la fecha de fin.";
    } else {
        // Consulta SQL para obtener el ranking de guardias por la cantidad de jornadas dentro del rango de fechas
        $sql = "SELECT s.dni_socio, s.nombre_socio, s.telefono_socio, COUNT(*) AS CLASE
                FROM socio s INNER JOIN clases_tomadas c ON g.DNI = c.dni_socio
                WHERE c.fecha_clase BETWEEN '$fechaInicio' AND '$fechaFin'
                GROUP BY s.dni_socio, s.nombre_socio, s.telefono_socio
                ORDER BY CantidadJornadas DESC";

        $resultado = $conect->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<h2>Ranking de Guardias para el rango de fechas $fechaInicio - $fechaFin:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Cantidad de Jornadas</th></tr>";

            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row["dni_socio"] . "</td><td>" . $row["nombre_socio"] . "</td><td>" . $row["telefono_socio"] . "</td><td>" . $row["CLASE"] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No se encontraron resultados para el rango de fechas $fechaInicio - $fechaFin.";
        }
    }
}
?>
</body>
</html>