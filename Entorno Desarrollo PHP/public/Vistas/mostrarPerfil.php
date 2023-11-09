<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Perfil</title>
</head>
<body>
    <h2><br>Datos del Perfil:</h2>
    <p>Nombre:  <?php echo $_SESSION['nombre']; ?></p>
    <p>Apellido: <?php echo $_SESSION['apellido']; ?></p>
    <p>Correo: <?php echo $_SESSION['username']?> </p>
    <br>

    <h2>Editar Perfil</h2>
    <form action="index.php?controller=UserController&action=actualizarPerfil" method="post">
        <label for="nombres">Nuevo Nombre:</label>
        <input type="text" id="nombres" name="nombres"><br><br>
        
        <label for="apellidos">Nuevo Apellido:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>
        
        <label for="contrasena">Nueva Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena">
        <input type="button" value="Mostrar" onclick="mostrarContrasena('contrasena')"><br><br>

        <label for="contrasena_repetida">Repite la nueva Contraseña:</label>
        <input type="password" id="contrasena_repetida" name="contrasena_repetida">
        <input type="button" value="Mostrar" onclick="mostrarContrasena('contrasena_repetida')"><br><br>

        <input type="submit" value="Actualizar Perfil">

    </form>

    <form action="index.php?controller=UserController&action=borrarUsuario" method="post" onsubmit="return confirm('¿Está seguro de que desea eliminar su cuenta?')">
        <input type="submit" value="Eliminar Cuenta" style="background-color:red; color:white;">
    </form>
    <?php echo $data ?>
    <br>
    <script>
    function mostrarContrasena(id) {
        var contrasenaInput = document.getElementById(id);
        if (contrasenaInput.type === "password") {
            contrasenaInput.type = "text";
        } else {
            contrasenaInput.type = "password";
        }
    }
    </script>
</body>
</html>
