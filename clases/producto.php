<?php
    class Producto{
        function __construct()
        {
            require_once('conexion.php');
            $this->conexion=new Conexion();
        }

        function mostrar(){
            $sql="SELECT * FROM producto";
            $respuesta=$this->conexion->query($sql);
            return $respuesta;
        }

        function mostrarPorId($pk_producto){
            $sql="SELECT * FROM producto p LEFT JOIN foto f ON f.fk_producto=p.pk_producto WHERE pk_producto='{$pk_producto}'";
            $respuesta=$this->conexion->query($sql);
            return $respuesta;
        }

        function mostrarNuevos(){
            $sql="SELECT * FROM producto ORDER BY fecha DESC LIMIT 9";
            $respuesta=$this->conexion->query($sql);
            return $respuesta;
        }

        function obtenerPortada($pk_producto){
            $sql="SELECT * FROM foto WHERE fk_producto='{$pk_producto}' AND portada=1";
            $respuesta=$this->conexion->query($sql);
            return $respuesta;
        }

        function agregarCarrito($fk_venta,$cantidad, $fk_producto ){
            $sql="INSERT INTO  carrito (pk_carrito, cantidad, fk_venta, fk_producto, estatus)
            VALUES (null,  '{$cantidad}', '{$fk_venta}', '{$fk_producto}', 1)";
            $respuesta=$this->conexion->query($sql);
            return $this->conexion->query($sql);
        }

        function actualizar($pk_producto,$nombre,$descripcion,$precio,$fk_marca_pro,$fk_categoria_pro, $fk_tipo_pro){
            $consulta="UPDATE producto SET nombre='{$nombre}',descripcion='{$descripcion}',precio='{$precio}',fk_marca_pro='{$fk_marca_pro}',fk_categoria_pro='{$fk_categoria_pro},fk_tipo_pro='{$fk_tipo_pro}'WHERE pk_producto='{$pk_producto}'";
            $respuesta=$this->conexion->query($consulta);
            return $respuesta;
    
        }
    
        function eliminar($pk_producto){
            $consulta=" DELETE FROM producto WHERE pk_producto='{$pk_producto}'";
            $respuesta=$this->conexion->query($consulta);
            return $respuesta;        
        }

    }
?> 