<?php

include('clases/Usuario.php');
$usuario= new Usuario();

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$resultado=$usuario->validar($correo, $contraseña);
$num_rows=mysqli_num_rows($resultado);

$datos=mysqli_fetch_assoc($resultado);

if ($num_rows<=0) {
    echo"<script>
    alert('valla hubo un error ');
    location.href='login.php';
    </script>";
}else{
    echo 'existe';
    //iniciamos seción en la app
    session_start();
    //creamos variables de sesión, solo funcionarán mientras esté iniciada la sesión
    $_SESSION['pk_usuario']=$datos['pk_usuario'];
    $_SESSION['fk_tipo_usuario']=$datos['fk_tipo_usuario'];
    $_SESSION['correo']=$correo;

    if ($_SESSION['fk_tipo_usuario']==1){
        echo"<script>
        alert('bienvenido');
        location.href='index.php';
        </script>";
    }else{
        echo"<script>
        alert('bienvenido');
        location.href='index.php';
        </script>";
    }
}
?>