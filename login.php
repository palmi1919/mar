<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>logearce</title>
    
</head>
<body>
    <div class = "login">
        <form action="validar.php" method="POST">
            <h1> Iniciar Sesion</h1>
            <label>Correo de Usuario</label>
            <input type="text" name="correo">
            <label>Contraseña</label>
            <input type="password" name="contraseña">
            <p>¿No Tienes Cuenta?<a href="formulario_cuenta.php">  Crear cuenta</a></p>
            <button>Ingresar</button>

        </form>
    </div>
</body>
</html>