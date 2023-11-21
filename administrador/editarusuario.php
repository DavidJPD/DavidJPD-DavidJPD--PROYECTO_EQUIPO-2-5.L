<?php
$id=$_GET['id'];
include_once '../core/usuario.php';
$usuario=new Usuario();
$resultado=$usuario->ObtenerUsuariosId($id);
if ($resultado==true){
    $nombre= $resultado['nombre'];
    $correo= $resultado['correo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        form {
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-top: 30px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <img src="../images/logo_CAFECH.png" width="60px" class="logotype">
                <ul class="textbutton">
                    <li>
                        <a href="../index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="../nosotros.php">Nosotros</a>
                    </li>
                    <li>
                        <a href="../galeria.php">Galería</a>
                    </li>
                    <li>
                    <a href="../productos.php">Productos</a>
                    </li>
                    <li>
                        <a href="../contacto.php">Contacto</a>
                    </li>
                    <?php
                    if($tipo==1){
                          echo '<li><a href="../administrador/pedidos.php">Pedidos</a></li>';
                        echo '<li><a href="../administrador/adusuarios.php">Usuarios</a></li>';
                         echo '<li><a href="../administrador/inventario.php">inventario</a></li>';
                    }
                    ?>
                    <li>
                        <?php
                        if($correo==''){
                            echo '<a class="sesion" href="../login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<p style="color: #ffffff; font-size: 16px;">'.$correo.'</p>';
                            echo '<a class="sesion" href="../logout.php"><img src="../images/logout.png" alt="Cerrar sesión" width="50" height="50">Cerrar sesión</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <form action="../acciones/modificarusuario.php" method="post">
        <label for="">Id:</label>
        <input type="text" name="id" readonly value="<?php echo $id ?>">
        <label for="">nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <label for="">correo:</label>
        <input type="text" name="correo" value="<?php echo $correo ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>