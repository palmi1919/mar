<?php
class Usuario
{
    function __construct()
    {
        require_once('conexion.php');
        $this->conexion=new conexion();
    }
    function insertar($correo, $nombre_cuenta, $contraseña){
        $consulta="INSERT INTO usuario(pk_usuario, correo, nombre_cuenta, contraseña, fk_tipo_usuario) values (null, '{$correo}','{$nombre_cuenta}','{$contraseña}', 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }
    
    function mostrarPorCorreo($correo){
        $consulta="SELECT * FROM usuario WHERE correo='{$correo}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function mostrarTodos(){
        $consulta="SELECT * FROM usuario u INNER JOIN tipo_usuario t ON u.fk_tipo_usuario=t.pk_tipo_usuario";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }
    function validar($correo, $contraseña){
        $consulta="SELECT * FROM usuario WHERE correo='{$correo}' AND contraseña='{$contraseña}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function eliminar($pk_usuario){
        $consulta=" DELETE FROM usuario WHERE pk_usuario ='{$pk_usuario}' AND contraseña";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;        
    }

    function actualizar($pk_usuario,$nombre_usuario,$contraseña){
        $consulta="UPDATE usuario SET nombre_usuario='{$nombre_usuario}',contaseña='{$contraseña}',WHERE pk_usuario='{$pk_usuario}' AND contraseña";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }
}

?> 