<?php
session_start();
session_destroy(); //La función session_destroy() en PHP se utiliza para destruir completamente todos los datos asociados con la sesión actual. Se utiliza para finalizar una sesión y eliminar todas las variables de sesión almacenadas.
header("location:./login.php");
?>