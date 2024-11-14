<?php

class persona
{
    function __construct()
    {
        require_once("conexion.php");
        $this->conexion=new conexion();

    }

    function insertar($nombres, $apaterno, $amaterno, $fecha_nac, $sexo, $edad, ){
        $consulta="INSERT INTO persona(pk_persona, nombres, apaterno, amaterno, fecha_nac, sexo, edad) VALUES(NULL,'{$nombres}','{$apaterno}','{$amaterno}','{$fecha_nac}','{$sexo}','{$edad}')";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;

    }

    function insertar_num_tel($num_tel){
        $consulta="INSERT INTO num_tel(pk_num_tel, num_tel) VALUES(NULL,'{$num_tel}'";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    
    function buscar($pk_persona){
        $consulta="SELECT * FROM persona WHERE pk_persona='{$pk_persona}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }

    function mostrartodo(){
        $consulta="SELECT * FROM persona p INNER JOIN usuario u ON p.pk_persona=u.fk_persona";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizar($pk_persona,$nombres,$apaterno,$amaterno,$fecha_nac, $sexo, $edad){
        $consulta="UPDATE persona SET nombres='{$nombres}',apaterno='{$apaterno}',amaterno='{$amaterno}',fecha_nac='{$fecha_nac}', sexo='{$sexo}',edad='{$edad}'WHERE pk_persona='{$pk_persona}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;

    }


}
?>