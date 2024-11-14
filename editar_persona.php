// <?php
//require_once('clases/persona.php');
//$persona=new Persona();
//$persona=$_GET['persona'];
//$respuesta=$persona->buscar($pk_persona);
//$datos=mysqli_fetch_assoc($respuesta);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once("index.php");
            require_once('clases/persona.php');
            $resultados=$persona->mostrartodo();
    ?>

    <div class= "container">
    <form class="col-6 offset-3" action="actualizar_persona.php" method="post">
        <h2> Actualización </h2>
        <input type="hidden" name="pk_persona" value="<?=$datos['pk_persona']?>">
        <div class="row">
            <div class="col-12 col-lg-6">
                <label>NOMBRE</label>
                <input value="<?=$datos['nombres']?>" class="form-control" type="text" name="nombres">
            </div>
            <div class="col-12 col-lg-3">
                <label>APELLIDO PATERNO</label>
                <input value="<?=$datos['apaterno']?>" class="form-control" type="text" name="apaterno">
            </div>
            <div class="col-12 col-lg-3">
                <label>APELLIDO MATERNO</label>
                <input value="<?=$datos['amaterno']?>" class="form-control" type="text" name="amaterno">
            </div>
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

                </select>
            </div>
        </div> 
        </div>
        <div align="center">
            <input class="btn btn-primary"type="submit" value="Guardar">
        </div>
    </form>
    </div>
</body>
</html>