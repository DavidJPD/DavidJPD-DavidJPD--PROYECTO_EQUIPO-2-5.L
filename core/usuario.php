<?php
    class Usuario{
        //para el logueo 
        public function AutenticaUsuario($correo,$password){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM usuarios
            WHERE correo = :correo AND password = :password");
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":password",$password,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
            public function InsertarUsuario($nombre, $correo, $password){
    try {
        include '../conexion.php';
        $conexion = new Conexion();
        $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, correo, password, tipo) VALUES (:nombre, :correo, :password, 2)");
        $consulta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $consulta->bindParam(":correo", $correo, PDO::PARAM_STR);
        $consulta->bindParam(":password", $password, PDO::PARAM_STR);
        $consulta->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
         public function InsertarUsuarios($nombre, $correo, $password, $tipo){
    try {
        include '../conexion.php';
        $conexion = new Conexion();
        $consulta = $conexion->prepare("INSERT INTO usuarios (
            nombre, correo, password, tipo
            ) VALUES (:nombre, :correo, :password, :tipo)");
        $consulta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $consulta->bindParam(":correo", $correo, PDO::PARAM_STR);
        $consulta->bindParam(":password", $password, PDO::PARAM_STR);
        $consulta->bindParam(":tipo",$tipo, PDO::PARAM_INT);
        $consulta->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
        public function InsertarUsuarios1($nombre, $precio, $cantidad, $imagen){
    try {
        include '../conexion.php';
        $conexion = new Conexion();
        
        // No need to move the file here, it was already moved in Parte 1

        // Insertar los datos en la base de datos
        $consulta = $conexion->prepare("INSERT INTO productos (
            nombre, precio, cantidad, imagen
            ) VALUES (:nombre, :precio, :cantidad, :imagen)");
        $consulta->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $consulta->bindParam(":precio", $precio, PDO::PARAM_STR);
        $consulta->bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
        $consulta->bindParam(":imagen", $imagen, PDO::PARAM_STR); // Corrected from :ruta_imagen
        $consulta->execute();

        return true;
    } catch (Exception $e) {
        return false;
    }
}


        public function ModificarUsuario($id,$nombre,$correo){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("UPDATE usuarios SET
                nombre=:nombre ,correo=:correo where id=:id ");
                $consulta->bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $consulta->bindParam(':correo',$correo, PDO::PARAM_STR);               
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
         public function modificarproductos($id,$nombre,$precio,$cantidad){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("UPDATE productos SET
                nombre=:nombre, precio=:precio, cantidad=:cantidad where id=:id ");
                $consulta->bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $consulta->bindParam(':precio',$precio, PDO::PARAM_STR);  
                $consulta->bindParam(':cantidad',$cantidad, PDO::PARAM_STR); 
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
        public function EliminarUsuario($id){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("DELETE FROM usuarios WHERE id=:id");            
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
         public function Eliminarproducto($id){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("DELETE FROM productos WHERE id=:id");            
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
         public function Eliminarpedidos($id){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("DELETE FROM pedidos WHERE id=:id");            
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
        public function ObtenerUsuarios(){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM usuarios");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
        public function ObtenerUsuariosId($id){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM usuarios
            WHERE id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetch();
        }
        public function ObtenerUsuariosId2($id){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM productos
            WHERE id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetch();
        }
         public function Obtenerventas(){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM pedidos");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
        public function Obtenerventa(){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM clientesp");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
         public function Obtenerinventario(){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM productos");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
        
    }
?>