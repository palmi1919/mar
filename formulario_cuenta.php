<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Crear cuenta</title>
</head>
<body>

<section class="vh-100" style="background-color: rgba(0,0,0,0.1); ">
<div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem; ">
        <div class="card-body p-9 text-center">
        
            <form class="col-10 offset-1" action="crear_usuario.php" method="post" >
                <h1>Crear Cuenta</h1>
                <div class="row">
                <div class="col-11 col-lg-9" >
                    <label for="">Nombres</label>
                    <input type="text" class="form-control" name="nombres" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apaterno" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="amaterno" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">Edad</label>
                    <input type="numeric" class="form-control" name="edad" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="fecha_nac" required>
                </div>

                
                <div class="col-11 col-lg-9">
                    <label for="">Sexo</label>
                    <select name="sexo" id="" required>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    </select>

                <div class="col-11 col-lg-9">
                    <label for="">nombre de usuario</label>
                    <input type="text" class="form-control" name="nombre_cuenta" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">correo</label>
                    <input type="text" class="form-control" name="correo" required>
                </div>

                <div class="col-11 col-lg-9">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" required>
                </div>

                <button type="submit">Iniciar Sesion</button>
            </form>
</section>
</div>
</body>
</html>