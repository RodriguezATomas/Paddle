<?php
session_start();

if (isset($_GET['producto'])) {
    $producto = $_GET['producto'];
    $index = array_search($producto, $_SESSION['carrito']);
    if ($index !== false) {
        unset($_SESSION['carrito'][$index]);
    }
}

header("Location: carrito.php");
