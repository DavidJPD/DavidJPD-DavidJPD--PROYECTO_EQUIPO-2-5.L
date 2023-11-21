<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["precio"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];

        agregarAlCarrito($id, $nombre, $precio);

        echo "Producto agregado al carrito: $nombre";
    } else {
        echo "Error: Parámetros incorrectos.";
    }
} else {
    echo "Error: Método de solicitud no permitido.";
}

function agregarAlCarrito($id, $nombre, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Agrega el producto al carrito
    $_SESSION['carrito'][] = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio);
}
?>
