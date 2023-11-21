<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $tipo=$_POST['tipo'];
    if(isset($nombre) && isset($correo) && isset($password)){
        include_once '../core/usuario.php';
        $user=new Usuario();
        
        $resultado=$user->InsertarUsuarios($nombre,$correo,$password,$tipo);
        if($resultado==true){
            echo '<script>alert("Usuario registrado");</script>';
            echo '<script>window.location.href = "../administrador/adusuarios.php";</script>';
            exit; 
        }
        else{
            echo '<script>alert("No se guardo");</script>';
            echo '<script>window.location.href = "../administrador/nuevousuario.php";</script>';
            exit; 
        }
    }
    else{
        echo '<script>alert("registrado");</script>';
        echo '<script>window.location.href = "../administrador/registro.php";</script>';
        exit; 
    }

?>