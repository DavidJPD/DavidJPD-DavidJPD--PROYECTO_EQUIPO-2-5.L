<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
if(isset($nombre) && isset($precio) && isset($cantidad)){
    include_once '../core/usuario.php';
    $user=new Usuario();
    
    $resultado=$user->modificarproductos($id,$nombre,$precio,$cantidad);
    if($resultado==true){
        echo '<script>alert("producto modificado");</script>';
        echo '<script>window.location.href = "../administrador/inventario.php";</script>';
        exit; 
    }
    else{
        echo '<script>alert("No se guardo");</script>';
        echo '<script>window.location.href = "../administrador/editarproducto.php";</script>';
        exit; 
    }
}
else{
     echo '<script>alert("no funciono");</script>';
     echo '<script>window.location.href = "../administrador/inventario.php";</script>';
     exit; 
}
?>