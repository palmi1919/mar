<?php

class venta
{
    function __construct()
    {
        require_once ('conexion.php');
        $this->conexion=new conexion();
    }

    function insertar($folio, $total, $fk_usuario, $estatus){
        $sql="INSERT INTO venta (pk_venta, hora, total, fecha, folio,  fk_usuario, estatus) values (NULL, '{$folio}', NOW(), NOW(), '{$total}', '{$fk_usuario}', '{$estatus}')";
        $respuesta=$this->conexion->query($sql);
        $id=$this->conexion->insert_id;
        return $id;
    }
    function insertarDetalle($fk_producto,$fk_venta, $cantidad){
        $sql="INSERT INTO detalle_venta (pk_detalle, fk_producto, fk_venta, cantidad,subtotal, estatus) VALUES (null,'{$fk_producto}', '{$fk_venta}', '{$cantidad}',1";
        $respuesta=$this->conexion->query($sql);
        $id=$this->conexion->insert_id;
        return $this->conexion->insert_id;
    }
    function verCarrito($pk_usuario){
        $sql="SELECT * FROM venta WHERE fk_usuario = '{$pk_usuario}' AND estatus=0";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
    function mostrarVenta($pk_usuario, $estatus){
        $sql="SELECT * FROM venta v LEFT JOIN detalle_venta d ON v.pk_venta=d.fk_venta INNER JOIN producto p ON p.pk_producto=d.fk_producto WHERE v.fk_usuario = '{$pk_usuario}' AND v.estatus='{$estatus}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
}

?>