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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
    <link rel="icon" href="../images/logo_CAFECH.png">

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
                    <?php
                    if($tipo==2){
                        echo '<li><a href="carrito.php">carrito</a></li>';
                        echo '<li><a href="miscompras.php">miscompras</a></li>';
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
    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
        <div class="col">
        <br>
        <div class="aba">
            <img src="../images/sec.png" alt="" class="ic">
        </div>
        <br>
        </div>
        <div class="col">
            <h1>mis compras</h1> 
      <table class="table table-light">
      <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">cantidad</th>
            <th scope="col">precio</th>
            <th scope="col">formadepago</th>
            <th scope="col">productos</th>
            <th scope="col"></th>
        </tr>
       </thead>
        <tbody>
            <?php
                include_once '../core/usuario.php';
                $usuario=new Usuario();
                $resultado=$usuario->Obtenerventa();
                foreach ($resultado as $item) {
                    echo "<tr>";
                    echo "<td>".$item['idp']."</td>";
                    echo "<td>".$item['cantidad']."</td>";
                    echo "<td>".$item['precio']."</td>";
                    switch ($item['fpago']) {
                        case 1:      
                            echo "<td>efectivo</td>";
                            break;
                        case 2:
                            echo "<td>deposito</td>"; 
                            break;
                        }
                    echo "<td>".$item['productos']."</td>";
                    echo '<td><a href="../acciones/eliminarpedidos.php?id='.$item["id"].'"><img src="../images/Cancelar.png"/></a></td>';
                }
            ?>
        </tbody>
      </table> 
        </div>
        <div class="col"></div>
    </section>
    
</body>
</html>