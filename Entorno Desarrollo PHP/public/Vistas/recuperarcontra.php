<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Contraseña</title>
    <style>
        body {
            font-family: sans-serif;
            background-image: url('Vistas/img/bg.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        form {
            background-color: #000;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #b80f22;
            color: #fff;
            cursor: pointer;
        }

        p {
            font-size: 12px;
            line-height: 20px;
            color: #808080; 
            

        }

        p a {
            color: #808080; 
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline; 
        }

    </style>
</head>
<body>

<form action="index.php?controller=UserController&action=recuperarContrasena" method="post">
    <h2>Recuperar Contraseña</h2>

    <label for="correo">Introduzca su correo electrónico:</label><br><br>
    <input type="text" id="correo" name="correo" required>
    <p><a href="index.php?controller=UserController&action=iniciarsesion">¿Ya la recuerdas?</a></p>

    <input type="submit" value="Enviar" name="submit"> 
</form>

</body>
</html>
