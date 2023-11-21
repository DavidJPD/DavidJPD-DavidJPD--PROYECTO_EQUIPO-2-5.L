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
<?php
include 'conexion.php';

try {
    $conexion = new Conexion('localhost', 'id21479625_cafech', 'id21479625_admin', 'C@fech2023');

    $sql = "SELECT * FROM productos";
    $result = $conexion->query($sql);
} catch (Exception $e) {
    // Manejo de errores de conexión
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}

// Función para agregar productos al carrito
function agregarAlCarrito($id, $nombre, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Agrega el producto al carrito
    $_SESSION['carrito'][] = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo_CAFECH.png">
    <title>Productos</title>
    <style>
    /* Estilos generales aquí */

    .producto-container {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .producto-container h2 {
        /* Estilos específicos para el título */
        color: #333;
    }

    .producto-container p {
        /* Estilos específicos para los párrafos */
        color: #555;
    }

    .producto-container button {
        /* Estilos específicos para los botones */
        background-color: #4caf50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .producto-container button:hover {
        background-color: #45a049;
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
                    if($tipo==1){
                          echo '<li><a href="../administrador/pedidos.php">Pedidos</a></li>';
                        echo '<li><a href="../administrador/adusuarios.php">Usuarios</a></li>';
                         echo '<li><a href="../administrador/inventario.php">inventario</a></li>';
                    }
                    ?>
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
        <div class="col-md-6 col-lg-4" class="aba">
            <img src="images/sec.png" alt="" class="ic">
        </div>
        <br>
        </div>
        <div class="col-md-6 col-lg-4" class="col">
    <article> 
    <h1>Tienda de productos</h1>

<?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='producto-container' style='background-color: black; border: solid 1px green; text-align: center; '>";
        echo "<img src='".$row["imagen"]."' alt='' width='300px' height='200px' style=''";
        echo "<br>";
        echo "<h2 style='color: white;'>" . $row["nombre"] . "</h2>";
        echo "<p style='color: white;'>Precio: $" . $row["precio"] . "</p>";
        echo "<p style='color: white;'>" . $row["cantidad"] . " gr. </p>";
                    if($tipo==2){
                        echo "<center><button onclick=\"agregarAlCarrito('" . $row["idp"] . "', '" . $row["nombre"] . "', " . $row["precio"] . ")\">Agregar al carrito</button></center>";
                    }
        echo "<hr>";
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}
?>

<button onclick="verCarrito()">Ver Carrito</button>

<script>
    function agregarAlCarrito(idProducto, nombreProducto, precioProducto) {
        // Utiliza AJAX para enviar la información del producto al servidor
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "agregar_al_carrito.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText); // Muestra la respuesta del servidor (puedes personalizar el mensaje)
            }
        };
        xhr.send("id=" + idProducto + "&nombre=" + encodeURIComponent(nombreProducto) + "&precio=" + precioProducto);
    }

    function verCarrito() {
        // Puedes implementar aquí la lógica para redirigir a la página de carrito o mostrar información del carrito.
        alert("Ver Carrito");
    }
</script>
        </div>
        <div class="col"></div>
    </section>
    </section>
</body>
</html>


