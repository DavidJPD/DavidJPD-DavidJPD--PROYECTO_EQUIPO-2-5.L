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
    <link rel="icon" href="images/logo_CAFECH.png">
    <title>Galeria</title>
     <style>
        .gallery {
            cursor: pointer;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .gallery:hover {
            transform: scale(1.1);
        }
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .gallery {
            cursor: pointer;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .gallery.expanded {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .gallery.expanded img {
            width: 100%;
            height: 100%;
            object-fit: contain;
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
    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
        <div class="col">
        <br>
        <div class="seccion">
            <img src="images/sec.png" alt="Descripción de la imagen" class="ic">
        </div>
        <br>
        </div>
        <div class="col">
        <div class="container">
<div class="gallery" onclick="expandImage(this)">
  <img src="images/cafe1.jfif" alt="Café 1" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/cafe2.jfif" alt="Café 2" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/cafe3.jfif" alt="Café 3" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/caf3.jfif" alt="Café 3" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/cafe4.jfif" alt="Café 4" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/caf4.jfif" alt="Café 3" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/caf5.jfif" alt="Café 3" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/caf1.pnj.jfif" alt="Café 3" width="600" height="400">
</div>

<div class="gallery" onclick="expandImage(this)">
  <img src="images/car2.jfif" alt="Café 3" width="600" height="400">
</div>

</div>
        </div>
    </section>

<script>
    function expandImage(element) {
        $(element).toggleClass('expanded');
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>