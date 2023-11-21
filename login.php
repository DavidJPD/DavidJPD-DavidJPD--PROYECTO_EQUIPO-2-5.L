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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo_CAFECH.png">
    <title>Iniciar sesión</title>
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

    <section class="bg-gray d-flex justify-content-center align-items-center vh-100">
        <div class="col"></div>

        <div class="col-md-6 col-lg-4"> <!-- Ajustar el tamaño del formulario según el tamaño de la pantalla -->
            <br>
            <div class="bg-white p-5 rounded-5 text-secondary shadow">
            <div class="d-flex justify-content-center">
                    <img src="images/log in.png" alt="login-icon" height="90px">
                </div>
                <div class="text-center fs-1 fw-bold">Iniciar sesión</div>
                <form action="acciones/validarusuario.php" method="post">
                <div>
                    <input class="form-control bg-light" type="email" placeholder="correo" name="correo">
                    
                </div>
                <br>
                <div>
                    <input class="form-control bg-light" type="password" placeholder="Password" name="password">
                </div>
                <div class>
                <input class="btn btn-info text-white w-100 mt-4 shadow-5m"  type="submit" value="Iniciar Sesión">
                </div>
                </form>

                <div class="d-flex justify-content-around aling-items-center gap-1">
                    <input class="form-check-input" type="checkbox">
                    <div class="pt-1 fs-0.9rem">Recuerdame</div>
                </div>

                <div class="pt-1">
                    <a href="#" style="color:#138c36" class="text-decoration-none  fw-semibold fst-italic fs-0.9rem">¿Olvidaste tu contraseña?</a>
                </div>

                <div class="d-flex gap-1 justify-content-center mt-1">
                    <div>¿No tienes una cuenta?</div>
                    <a href="acciones/registro.php" style="color:#138c36" class="text-decoration-none  fw-semibold">Registrarse</a>
                </div>

                <div class="p-3 shadow-5m">
                    <div class="border-bottom text-center" style="height: 0.9rem">
                        <span class="bg-white px-3">o</span>
                    </div>
                </div>
                <div class="btn d-flex gap-2 justify-content-center border mt-3">
                    <img src="images/google.png" alt="google-icom" height="30px">
                    
                    <div class="fw-semibold text-secundary">Ingresar con Google</div>
                </div>
            </div>
        </div>
            </div>
        </div>

        <div class="col"><br><br><br><br><br><br>
            <div class="d-flex justify-content-center">
                <img src="images/logo_CAFECH.png" alt="logo-icon" class="img-fluid" width="350px" height="350px">
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>