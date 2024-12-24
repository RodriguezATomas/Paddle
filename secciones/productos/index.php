<?php
   session_start();
 //permite mantener un seguimiento de los productos en el carrito de compras del usuario a lo largo de su navegación.

   if (isset($_POST["add"])){ // { hasta el cierre del primer } verifica si se ha enviado un formulario para agregar un producto al carrito.
        if (isset($_SESSION["cart"])){ // Comprueba si la variable de sesión "cart" existe. Esta variable se usa para mantener un seguimiento de los productos en el carrito de compras del usuario.
            $item_array_id = array_column($_SESSION["cart"],"id_producto");
            if (!in_array($_GET["id_producto"],$item_array_id)){ //Verifica si el "id_producto" del producto que se intenta agregar no existe en el array de "id_producto" en el carrito.
              //Si el producto no está en el carrito, se crea un nuevo elemento en el carrito con el "id_producto", el nombre, el precio y la cantidad solicitada del producto. Luego, se redirige al usuario a la página de inicio.
              //Si el producto ya está en el carrito, muestra una alerta y redirige al usuario a la página de inicio.
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id_producto' => $_GET["id_producto"],
                    'nombre_producto' => $_POST["nombre_producto"],
                    'precio_producto' => $_POST["precio_producto"],
                    'cant_solicitada' => $_POST["cant_solicitada"],
                  
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="index.php"</script>';
            }else{  //maneja el caso en el que la variable de sesión "cart" aún no existe, lo que significa que el carrito está vacío. En este caso, se crea un nuevo elemento en el carrito con los detalles del producto.

                echo '<script>alert("Agregado al Carrito")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }else{
            $item_array = array(
                    'id_producto' => $_GET["id_producto"],
                    'nombre_producto' => $_POST["nombre_producto"],
                    'precio_producto' => $_POST["precio_producto"],
                    'cant_solicitada' => $_POST["cant_solicitada"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){ //maneja la eliminación de productos del carrito. Si la acción es "delete", busca y elimina el producto correspondiente del carrito.
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id_producto"] == $_GET["id_producto"]){
                    unset($_SESSION["cart"][$keys]);
                    
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Carrito</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
     body{
     
        background-size: cover;
        background-repeat: no-repeat;

     }

     .contenedor{
        display: inline-block;
        margin-left: 50px;
        
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
            <a class="nav-link" href="../clasesTomadas">Reservas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="../../cerrar.php">Cerrar Sesion</a>
        </li>
    </ul>
       
    </nav>

    </header>   

<main>
    <?php include ("../../bd.php"); ?>
    
    <br>
    <h2>Productos</h2>

    <a href="crearPR.php">Crear Producto</a><br>
    <a href="verPR.php">Ver Producto</a><br>
    <br><br>

    <?php
    $query = "SELECT * FROM `productos`";
    $resultados = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultados) > 0) {

                while ($row = mysqli_fetch_array($resultados)) {

                    ?>
<div class="contenedor">
        
        <form method="post" action="index.php?action=add&id_producto=<?php echo $row["id_producto"]; ?>">
                                
                            
                            <h5><?php echo $row["nombre_producto"]. " (" .$row['descripcion_producto'] .")"; ?></h5>
                            <input type="int" name="cant_solicitada" value="1">        
                            <br><input type="text"  name="nombre_producto" value="<?php echo $row["nombre_producto"]; ?>">
                            <br><input type="float"  name="precio_producto" value="<?php echo $row["precio_producto"]; ?>">
                            <br> <br><input type="submit" name="add" class="btn btn-dark" value="Agregar">
            
      </form>
      
      <br>
</div>
     <?php
                }
            }
    
    ?>
    
        <h3>Carrito de Compras</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total Precio</th>
                <th>Eliminar</th>
            </tr>
                
                 <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["nombre_producto"]; ?></td>
                            <td><?php echo $value["cant_solicitada"]; ?></td>
                            <td>$ <?php echo $value["precio_producto"]; ?></td>
                            
                            <td>
                                $ <?php echo number_format($value["cant_solicitada"] * $value["precio_producto"], 2); ?></td>
                            <td><a href="index.php?action=delete&id_producto=<?php echo $value["id_producto"]; ?>"><span>Eliminar</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["cant_solicitada"] * $value["precio_producto"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            
                            <td><a href="finalizar.php?action=add&id_producto=<?php echo $value["id_producto"]; ?>"><span>Finalizar Compra</span></a></td>
                                                                                    
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>

    


    <a href="finalizar.php">Ver compras</a>
    </main>
    </body>

</html>
