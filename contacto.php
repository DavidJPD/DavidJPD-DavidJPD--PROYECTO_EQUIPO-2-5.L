<?php
    session_start();
    if(isset($_SESSION["correo"])){
        $correo= $_SESSION["correo"];
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
    <title>Contacto</title>
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
<div class="cafech">
    <section class="sec">
        <div class="d-flex">
            <div class="col">
                <div style="background-color: white; border-radius: 5px;">
                    <div class="fw-bold fs-1 text-center">
                        CAFECH
                    </div>
                    <br>
                    <div class="d-flex">
                        <div>
                            <img src="images/tel.png" alt="icon" width="60px" height="60px">
                        </div>
                        <div>
                            <img src="images/face.png" alt="icon" width="60px" height="60px">
                        </div>
                        <div>
                            <img src="images/twitter2.png" alt="icon" width="60px" height="60px">
                        </div>
                        <div>
                            <img src="images/instagram.png" alt="icon" width="61px" height="61px">
                        </div>
                    </div>
                    <br>
                    <div class="fw-arial fs-3 text-justify">
                        cafech@hotmail.com
                    </div><br>
                    <div class="fw-arial fs-3 text-justify">
                        961 189 4878
                    </div>

                    <div>
                        <img src="#" alt="">
                    </div>
                    <br>
                    <div class="fw-arial fs-5 text-justify">
                        Tuxtla Gutiérrez, Chiapas
                    </div>
                </div>
            </div>
            <div class="col">
                <div style="background-color: white; border-radius: 5px;">
                    <br>
                    <div class="R">
                    <h2 >CONTACTO</h2>
                <form action="enviar.php" method="post">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre"><br>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label for="mensaje">Mensaje:</label><br>
                    <textarea id="mensaje" name="mensaje"></textarea><br>
                    <br>
                    <input type="submit" value="Enviar">
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
    <footer>
        <p  style="background-color: rgba(11, 216, 55, 0.808)">© 2023. Todos los derechos reservados Equipo 2.</p>
    </footer>
    </section>
    </div>
</body>
</html>