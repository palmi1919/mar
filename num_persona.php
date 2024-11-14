<?php
include("clases/persona.php");
$persona=new persona();
$num_tel=$_POST["num_tel"];

$respuesta=$usuario->insertar_num_tel($num_tel);

?>