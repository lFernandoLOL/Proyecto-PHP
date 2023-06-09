<?php
    require('valform.php');
    $errores=0;
    $nombre='';
    $errornombre="";
    if (isset($_POST['EnviarDatos'])){
        $nombre=limpiarcadena($_POST['nombre']);

        if (strlen($nombre)<2){
            $errornombre="El nombre debe tener al menos 3 caracteres";
         }

        if (empty($nombre)){
            $errornombre= "Campo de nombre obligatorio";
        }
    }

    $errorpassword="";
    if (isset($_POST['EnviarDatos'])){
        $password=limpiarcadena($_POST['password']);
        if (strlen($password)<8){
           $errorpassword="La contrasenia debe tener una longitud de 8 caracteres";
           $errores=1;
        }

        if(empty($_POST['password'])){
            $errorpassword="Rellena el campo contrasenia";
            $errores=1;
        }
    }

    $erroremail="";
    $email="";
    if(isset($_POST['EnviarDatos'])){
        $email=limpiarcadena($_POST['email']);
        if(empty($_POST['email'])){
            $erroremail="Campo email obligatorio";
            $errores=1;
        }

    }



?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FORMULARIO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      </head>
<body>
    <br>
    <center>
    <h1>&#128064; FORMULARIO &#128064;</h1>
    </center>
    <div class="container">
    <form class="form-horizontal" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post">
       
        <div class="mb-3 mt-3">
        <label class="form-label" for="Nombre">Nombre:&#129333;</label>
        <input class="form-control" type="text" name="nombre" maxlength="50" placeholder="Escriba un nombre..." value="<?php echo $nombre;?>">
        <?php
        echo $errornombre;
        ?> <br>
        </div>
        
        <div class="mb-3 mt-3">
        <label class="form-label" for="pwd">Contraseña:&#128273;</label>
        <input class="form-control" type="password" name="password" placeholder="Escriba su contraseña...">
        <?php
        echo $errorpassword;
        ?> <br>
        </div>

        <div class="mb-3 mt-3">
        <label class="form-label" for="Educación">Educación:&#x1F4DA;</label>
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion-profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select> <br>
        </div>

        <div class="mb-3 mt-3">
        <label class="form-label" for="nacionalidad">Nacionalidad:&#x1F3F4;</label>
        <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
        <input type="radio" name="nacionalidad" value="otra">Otra</input><br>
        </div>

        <div class="mb-3 mt-3">
        <label class="form-label" for="idiomas">Idiomas: &#x1F5E3;</label>
        <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
        <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
        <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
        <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input>
        <input type="checkbox" name="idiomas[]" value="italiano">Italiano</input><br>
        </div>

        <div class="mb-3 mt-3">
        <label class="form-label" for="email">Email:</label>
        <input class="form-control" type="text" name="email" placeholder="Escriba su correo electronico....">
        <?php
        echo $erroremail;
        ?> <br>
        </div>

        <div class="mb-3 mt-3">
        <label class="form-label" for="sitioweb">Sitio Web &#128421;</label>
        <input type="text" name="sitioweb" placeholder="www.ejemplo.com"><br>
        <input class="form-control" type="submit" name="EnviarDatos" value="Enviar">
        </div>
    </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <a href="listado.php">Enlace a listado2.php</a>
    </body>
</html>

<?php
if ($errores==0){
$usuario=new Usuario($nombre,$passwd,$email);
}
?>