<?php

class telefonos
{
    function __construct()
    {
        require_once("conexion.php");
        $this->conexion=new conexion();

    }

    function insertar($num_tel, $fk_persona){
        $consulta="INSERT INTO tel_persona (pk_num_tel, num_tel, fk_persona) VALUES(NULL,'{$num_tel},{$fk_persona}'";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;

    }

    function mostrartodo(){
        $consulta="SELECT * FROM tel_persona tel INNER JOIN persona p ON tel.fk_persona=p.pk_persona";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizar($num_tel){
        $consulta="UPDATE tel_persona SET num_tel='{$num_tel}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }

}
?>