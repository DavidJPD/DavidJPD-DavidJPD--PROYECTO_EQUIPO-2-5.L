<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logo_CAFECH.png">
    <title>Registrarse</title>
</head>
<body>

    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
        <div class="col"></div>

        <div class="col"> <br>
            <div class="bg-white p-5 rounded-5 text-secundary shadow" width="30rem">
                <div class="d-flex justify-content-center">
                    <img src="../images/log in.png" alt="login-icon" height="90px">
                </div>
                
                <div class="text-center fs-1 fw-bold">Registrarse</div><br>
                <form action="crearusuario.php" method="post">
                <div>
                    <input class="form-control bg-light" type="nombre" placeholder="nombre" name="nombre">
                    
                </div>
                <br>
                <div>
                    <input class="form-control bg-light" type="correo" placeholder="correo" name="correo">

                </div>
                <br>
                <div>
                    <input class="form-control bg-light" type="password" placeholder="password" name="password">
        
                </div>

                <div class>
                    <input class="btn btn-info text-white w-100 mt-4 shadow-5m"  type="submit" value="Registrarme">
                </div>
                </form>
            </div>
        </div>
        <br>

        <div class="col"></div>
    </section>
    
</body>
</html>