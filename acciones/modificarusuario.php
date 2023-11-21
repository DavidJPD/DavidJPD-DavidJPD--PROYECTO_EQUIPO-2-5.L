<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
if(isset($nombre) && isset($correo)){
    include_once '../core/usuario.php';
    $user=new Usuario();
    
    $resultado=$user->ModificarUsuario($id,$nombre,$correo);
    if($resultado==true){
        echo '<script>alert("Usuario modificado");</script>';
        echo '<script>window.location.href = "../administrador/adusuarios.php";</script>';
        exit; 
    }
    else{
        echo '<script>alert("No se guardo");</script>';
        echo '<script>window.location.href = "../administrador/editarusuario.php";</script>';
        exit; 
    }
}
else{
     echo '<script>alert("no registrado");</script>';
     echo '<script>window.location.href = "registrarusuario.php";</script>';
     exit; 
}
?>