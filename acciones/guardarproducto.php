<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $imagen_nombre = $_FILES['imagen']['name'];
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $carpeta_destino = '../images/'; // Ruta donde se guardarán las imágenes

    // Mueve la imagen a una ubicación permanente
    $ruta_imagen = $carpeta_destino . $imagen_nombre;
    move_uploaded_file($imagen_temporal, $ruta_imagen);

    include_once '../core/usuario.php';
    $user = new Usuario();

    $resultado = $user->InsertarUsuarios1($nombre, $precio, $cantidad, $ruta_imagen);

    if ($resultado == true) {
        echo '<script>alert("Producto registrado");</script>';
        echo '<script>window.location.href = "../administrador/inventario.php";</script>';
        exit;
    } else {
        echo '<script>alert("No se guardó");</script>';
        echo '<script>window.location.href = "../administrador/nuevoproducto.php";</script>';
        exit;
    }
} else {
    echo '<script>alert("No funcionó");</script>';
    echo '<script>window.location.href = "../administrador/inventario.php";</script>';
    exit;
}
?>
