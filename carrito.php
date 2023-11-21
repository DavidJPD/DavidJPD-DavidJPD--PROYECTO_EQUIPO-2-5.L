<?php
    session_start();
    if(isset($_SESSION["correo"])){
        $correo=$_SESSION["correo"];
        $tipo=$_SESSION["tipo"];
    }else{
        $correo='';
        $tipo='';
    } 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
    <link rel="icon" href="images/logo_CAFECH.png">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        .carrito-container {
            width: 70%;
            margin-top: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .producto-en-carrito {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .producto-en-carrito p {
            margin: 0;
        }

        .eliminar-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .eliminar-btn:hover {
            background-color: #c82333;
        }

        .realizar-compra-btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .realizar-compra-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <header>
        <nav id="navbar">
            <div class="container">
                <img src="images/logo_CAFECH.png" width="60px" class="logotype">
                <ul class="textbutton">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="nosotros.php">Nosotros</a>
                    </li>
                    <li>
                        <a href="galeria.php">Galería</a>
                    </li>
                    <li>
                    <a href="productos.php">Productos</a>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                    <?php
                    if($tipo==2){
                        echo '<li><a href="carrito.php">carrito</a></li>';
                        echo '<li><a href="miscompras.php">miscompras</a></li>';
                    }
                    ?>
                    <li>
                        <?php
                        if($correo==''){
                            echo '<a class="sesion" href="login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<p style="color: #ffffff; font-size: 16px;">'.$correo.'</p>';
                            echo '<a class="sesion" href="logout.php"><img src="images/logout.png" alt="Cerrar sesión" width="50" height="50">Cerrar sesión</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
        <div class="col">
        <br>
        <div class="carrito-container" class="aba">
            <img src="images/sec.png" alt="" class="ic">
        </div>
        <br>
        </div>
        <div class="carrito-container" class="col">
        <?php

// Verifica si hay un carrito en la sesión
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "El carrito está vacío.";
} else {
    // Muestra los productos en el carrito
    echo "<h2>Carrito de Compras</h2>";

    foreach ($_SESSION['carrito'] as $producto) {
        echo "<div class='producto-en-carrito'>";
        echo "<p>ID: " . $producto['id'] . "</p>";
        echo "<p>Nombre: " . $producto['nombre'] . "</p>";
        echo "<p>Precio: $" . $producto['precio'] . "</p>";
        echo "<button onclick=\"eliminarDelCarrito('" . $producto['id'] . "')\">Eliminar</button>";
        echo "</div>";
    }

    // Agrega un botón para realizar la compra
    echo "<button onclick=\"realizarCompra()\">Realizar Compra</button>";
}

?>

<script>
    function eliminarDelCarrito(idProducto) {
        // Utiliza AJAX para enviar la información de eliminación al servidor
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "eliminar_del_carrito.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText); // Muestra la respuesta del servidor (puedes personalizar el mensaje)
                // Recarga la página para reflejar los cambios
                location.reload();
            }
        };
        xhr.send("id=" + idProducto);
    }

    function realizarCompra() {
        // Puedes implementar aquí la lógica para procesar la compra
        if (confirm("¿Seguro que quieres realizar la compra y vaciar el carrito?")) {
            // Limpia el carrito después de realizar la compra
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "vaciar_carrito.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert(xhr.responseText); // Muestra la respuesta del servidor (puedes personalizar el mensaje)
                    // Recarga la página para reflejar los cambios
                    window.location.href = "fpagos.php";
                }
            };
            xhr.send();
        }
    }
</script>

        </div>
    </section>
</body>
</html>