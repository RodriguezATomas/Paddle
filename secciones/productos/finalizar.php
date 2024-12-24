<html>
    <head>
        <title>Ventas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php
session_start();
?>
 <a href="index.php">Volver</a><br>
<?php

// Verifica si la sesión del carrito no está vacía
if (!empty($_SESSION["cart"])) {
    include ("../../bd.php"); // Incluye el archivo de conexión a la base de datos

    // Crear una tabla para mostrar los productos y cantidades
    echo '<table border=1>';
    echo '<thead><tr><th>ID Producto</th><th> Nombre Producto</th><th>Cantidad Solicitada</th><th>Precio Producto</th></tr></thead>';
    echo '<tbody>';

    // Itera a través de los elementos del carrito
    foreach ($_SESSION["cart"] as $key => $value) {
        $id_producto = $value["id_producto"];
        $cant_solicitada = $value["cant_solicitada"];
        $nombre_producto = $value["nombre_producto"];
        $precio_producto = $value["precio_producto"];

        // Inserta los datos en la tabla vendido
        $query = "INSERT INTO vendido (id_producto, cant_solicitada) 
                  VALUES ('$id_producto', '$cant_solicitada')";

        $productos_query = "SELECT nombre_producto, precio_producto FROM productos WHERE id_producto = $id_producto"; // Ajusta la consulta según tu estructura de base de datos
        $productos_result = mysqli_query($conn, $productos_query);
        
        if (mysqli_query($conn, $query)) {
            // Si la inserción fue exitosa, puedes eliminar el elemento del carrito
            unset($_SESSION["cart"][$key]);
        }

        // Muestra los datos en la tabla
        echo "SU COMPRA ES:";
        echo"<br>";
        echo '<tr>';
        echo '<td>' . $id_producto . '</td>';
        echo '<td>' . $nombre_producto . '</td>';
        echo '<td>' . $cant_solicitada . '</td>';
        echo '<td>' . $precio_producto . '</td>';
        echo '</tr>';
        
    }

    // Cierra la tabla
    echo '</tbody></table>';
}
?>
    </body>
</html>




