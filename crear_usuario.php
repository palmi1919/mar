<?php
include("clases/usuario.php");

$usuario=new Usuario();
$correo=$_POST["correo"];
$nombre_cuenta=$_POST["nombre_cuenta"];
$contraseña=$_POST["contraseña"];

$respuesta=$usuario->insertar($correo, $nombre_cuenta, $contraseña);

if($respuesta){
    include("clases/persona.php");

    $persona=new Persona();
    $nombre=$_POST["nombres"];
    $apaterno=$_POST["apaterno"];
    $amaterno=$_POST["amaterno"];    
    $fecha_nac=$_POST["fecha_nac"];
    $sexo=$_POST["sexo"];
    $edad=$_POST["edad"];

    $fk_usuario=$respuesta;

    $respuesta2=$persona->insertar($nombre, $apaterno, $amaterno, $fecha_nac, $sexo, $edad);
    if($respuesta2){
        echo "<script>
        alert('cuentra creada');
        location.href='login.php';
        </script>";
    }else{
        echo "Que hisite mal loco";
    }
}
?>