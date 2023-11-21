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
            <h1>productos</h1> 
        </div>
       </div>
   </header>
   
   <section >
     <h1>Agregar nuevo producto</h1> 
     <form action="../acciones/guardarproducto.php" method="post" enctype="multipart/form-data">
                  <div class="form-outline mb-4">
                  <input type="file" id="form2ExampleImage" class="form-control" name="imagen" />
                  <label style="color: #ffffff"; class="form-label" for="form2ExampleImage">Imagen</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Introduce tu nombre" name="nombre" />
                    <label style="color: #ffffff";class="form-label" for="form2Example11">nombre</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="number" id="form2Example11" class="form-control"
                        placeholder="Introduce precio" name="precio" />
                       <label style="color: #ffffff"; class="form-label" for="form2Example11">precio</label>
                   </div>

                  <div class="form-outline mb-4">
                    <input type="number" id="form2Example22" class="form-control" name="cantidad" />
                    <label style="color: #ffffff"; class="form-label" for="form2Example22">cantidad</label>
                  </div>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  type="submit" value="Crear producto">
                  </div>                 
                </form>
                
   </section>
        </div>
    </section>
    
</body>
</html>