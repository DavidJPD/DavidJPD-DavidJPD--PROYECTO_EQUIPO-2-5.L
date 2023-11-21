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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo_CAFECH.png">
    <title>Document</title>
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
    <section class="pagos">
     <h1>Seleccione una forma de pago:</h1>
     <style type="text/css">
    .boton{

    background-color: transparent;
    color: white;
    border: solid 1px green;
    padding: 10px;
    font-size: 18.5px;
    cursor: pointer;
    }
    .links a{
    text-decoration: none;
    color: black;
    display: block;
    padding: 13px;
    }
    .links{
    background-color: green;
    width: 185px;
    display: none;
    }
    .links a:hover{
    background-color: gray;
    }
    .deplegable:hover .links{
    display: block;
    }
    .deplegable{
    position: absolute;
    }
    .efectivo{
    padding: 200px;
    text-align: center;
    }
    .form-control{
    border: solid 2px green;
    }
    .form-select-sm{
        border: solid 2px green;
    }
     </style>
     <div class="deplegable">
        <button class="boton">Elegir...</button>
        <div class="links">
            <a href="efectivo.php">Efectivo</a>
            <a href="tarjeta.php">Tarjeta</a>
        </div>
     </div>
    </section>
    <section class="efectivo">
    <div class="row">
        <div class="col">
            <input type="text" color="white" class="form-control" placeholder="Nombre" aria-label="Nombre">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
        </div>
    </div>
    <br>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Seleccione una sucursal para realizar el pago...</option>
        <option value="1">AURRERA</option>
        <option value="2">OXXO</option>
        <option value="3">Ban Coppel.</option>
    </select>
    <br>
    <button type="button" class="btn btn-success">Confirmar.</button>
    </section>
</body>
</html>