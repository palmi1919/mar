<?php

class metodo_pago
{
    function __construct()
    {
        require_once("conexion.php");
        $this->conexion=new conexion();

    }
    function met_pago($metodo, $estatus){
        $mostrar="SELECT * FROM met_pago(pk_met_pago, metodo, 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;

    }
}

?>