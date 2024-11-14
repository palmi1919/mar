<?php 
include('clases/persona.php');

$persona=new Persona();
$pk_persona=$_POST['pk_persona'];
$nombres=$_POST['nombres'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$fecha_nac=$_POST['fecha_nac'];
$sexo=$_POST['sexo'];	
$edad=$_POST['edad'];


$respuesta=$persona->actualizar($pk_persona, $nombres, $apaterno, $amaterno, $fecha_nac, $sexo, $edad);

if($respuesta){
	echo "Guardado";
}else{
	echo "Error";
}

?>