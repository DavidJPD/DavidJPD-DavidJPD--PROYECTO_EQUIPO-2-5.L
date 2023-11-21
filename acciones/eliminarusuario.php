<?php
$id=$_GET['id'];
echo $id;
include_once '../core/usuario.php';
$usuario=new Usuario();
$resultado=$usuario->EliminarUsuario($id);
if ($resultado==true){
        echo '<script>alert("Eliminado");</script>';
        echo '<script>window.location.href = "../administrador/adusuarios.php";</script>';
        exit; 
}
?>