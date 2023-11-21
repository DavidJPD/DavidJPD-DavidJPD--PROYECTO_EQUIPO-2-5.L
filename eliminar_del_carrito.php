<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        // Encuentra el índice del producto en el carrito y elimínalo
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['id'] == $id) {
                unset($_SESSION['carrito'][$key]);
                echo "Producto eliminado del carrito.";
                exit();
            }
        }

        echo "Error: Producto no encontrado en el carrito.";
    } else {
        echo "Error: Parámetros incorrectos.";
    }
} else {
    echo "Error: Método de solicitud no permitido.";
}
?>
