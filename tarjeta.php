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
    .tarjeta{
        background-color: white;
        padding: 200px;
        margin: 160px;
        border: solid 3px green;
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
    <br>
    <section class="tarjeta">
        <div class="titulo">
            <center>
            <h2>Pago con tarjeta</h2>
            <h3>Ingrese los datos que se le solcitan.</h3>
            </center>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Visa
            </label>
            <img src="images/visa.jpg" alt="" width="50px" height="30px">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Second default radio
                <img src="images/bbva.webp" alt="" width="50px" height="30px">
            </label>
        </div>
        <br>
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Numero de tarjeta" aria-label="NumeroTarjeta">
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="MM" aria-label="Mes">
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="AA" aria-label="Año">
            </div>
        </div>
        <br>
        <div class="col-sm-7">
            <input type="text" class="form-control" placeholder="Codigo de seguridad" aria-label="Seguridad">
        </div>
        <br>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Acepto terminos y condiciones.
                </label>
            </div>
        </div>
        <br>
        <div class="col-12">
            <button type="button" class="btn btn-success">Confirmar.</button>
        </div>
    </section>
    
</body>
</html>