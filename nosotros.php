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
    <title>Nosotros</title>
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
                            echo '<li><a href="miscompras.php">miscompras</a></li>';
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
    <section class="sec">
        <div>
            <div class="title">
                <h2 class="h1">CAFECH</h2>
            </div>
            <br>
            <div class="text">
                <p>
                    <B>CAFECH</B> es regional y artesanal, un café de excelente calidad gracias a la especial
                    selección de granos con los que se elabora, <b>100%</b> orgullosamente <b>Chiapaneco</b>.
                </p>
            </div>
        </div><br>

        <div class="d-flex p-5px">
            <div class="text text-white fw-arial fs-4 text-justify"><br><br>
                Nuestra Visión es formar parte de la vida cotidiana de nuestros clientes, proporcionandoles
                productos de la máxima calidad posible a partir de nuestros productos producidos en nuestros
                estado.
            </div>
            <img src="images/vis.png" width="250px" height="250px">
        </div>
        <br>

        <div class="d-flex p-5px m-5px">
            <img src="images/mis.png" width="250px" height="250px">
            <div class="text text-white fw-arial fs-4 text-justify"><br><br>
                Nuestra Misión es apoyar a los pueblos indígenas, productores y pequeños productores de nuestro
                estado, comprando su materia prima para fabricar y vender empresa productos de la mayor calidad
                posible.
            </div>
        </div>
        <br><br><br>

        <div class="d-flex">
            <div class="col">
                <div class="item-center">
                    <img src="images/img_nos.png" width="300px" height="250px">
                </div>
                <div style="color:#138c36" class="fw-semibold  fs-4 text-center">
                    Hecho 100% con café organico
                </div>
                <div class="fw-arial text-white fs-5 text-justify p-5px m-5px">
                    Granos que se cultivan bajo manejo ecológico. No se utilizan pesticidas, fertilizantes
                    ni quimicos similares; conservando los suelos y preservando la flora, fauna y aves de la
                    selva norte de Chiapas.
                </div>
                <br>
            </div><br>

            <div class="col">
                <div class="aling-items-center">
                    <img src="images/img_nos2.png" width="300px" height="250px">
                </div>
                <div style="color:#138c36" class="fw-semibold  fs-4 text-center">
                    Granos de café recolectados a mano
                </div>
                <div class="text fw-arial text-white fs-5 text-justify">
                    Café regional, a diferencia de otros tipos de cafés que son recolectados a maquina,
                    es cortado a mano, grano a grano, con la finalidad de cuidar su selección y calidad.
                </div>
            </div>

            <div class="col">
                <div class="aling-items-center">
                    <img src="images/img_nos3.png" width="300px" height="250px">
                </div>
                <div style="color:#138c36" class="fw-semibold  fs-4 text-center">
                    Apoyo a pequeños productores
                </div>
                <div class="text fw-arial text-arial text-white fs-5 text-justify">
                    Como empresa Chiapaneca, nos importa apoyar a las comunidades índigenas,
                    por ello compramos la materia prima a pequeños productores chiapanecos
                    de comercio justo.
                </div>
            </div>
        </div><br>
    </section>
    
</body>
</html>