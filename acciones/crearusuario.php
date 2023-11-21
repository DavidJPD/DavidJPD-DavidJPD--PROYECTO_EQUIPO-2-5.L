<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];

    if(isset($nombre) && isset($correo) && isset($password)){
        include_once '../core/usuario.php';
        $user=new Usuario();
        
        $resultado=$user->InsertarUsuario($nombre,$correo,$password,$tipo=2);
        if($resultado==true){
            echo '<script>alert("Usuario registrado");</script>';
            echo '<script>window.location.href = "../login.php";</script>';
            exit; 
        }
        else{
            echo '<script>alert("Usuario no registrado");</script>';
            echo '<script>window.location.href = "../acciones/registro..php";</script>';
            exit; 
        }
    }
    else{
        echo '<script>alert("Usuario no registrado");</script>';
        echo '<script>window.location.href = "../acciones/registro..php";</script>';
        exit; 
    }

?>