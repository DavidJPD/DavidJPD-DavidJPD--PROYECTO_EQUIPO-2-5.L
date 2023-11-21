<?php
session_start();

// Vacía el carrito
unset($_SESSION['carrito']);

echo "Carrito vaciado.";
?>
