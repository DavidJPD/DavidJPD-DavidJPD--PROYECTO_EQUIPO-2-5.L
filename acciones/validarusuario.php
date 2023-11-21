<?php
$correo=$_POST['correo'];
$password=$_POST['password'];
require_once '../core/usuario.php';
$usuario=new Usuario();
if(isset($correo)&& isset($password)){
    $resultado=$usuario->AutenticaUsuario($correo,$password);
    if(count($resultado)>0){
        foreach($resultado as $item){
            session_start();
            $_SESSION["id"] = $item['id'];
            $_SESSION["correo"] = $item['correo'];
             $_SESSION["tipo"] = $item['tipo'];
            header("Location: ../index.php");
        }
    }
    else{
            echo '<script>alert("Usuario no encontrado");</script>';
            echo '<script>window.location.href = "../login.php";</script>';
            exit; 
    }
}
else{
            echo '<script>alert("Usuario no encontrado");</script>';
            echo '<script>window.location.href = "../login.php";</script>';
            exit; 
}
?>