<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recuperar Contraseña</title>
</head>
<body>

<h2>Recuperar Contraseña</h2>

<form action="index.php?controller=UserController&action=recuperarContrasena" method="post">
    <label for="email">Introduzca su correo electrónico:</label>
    <input type="text" id="correo" name="correo" required>
    <input type="submit" value="Enviar" name="submit"> 
</form>

</body>
</html>
