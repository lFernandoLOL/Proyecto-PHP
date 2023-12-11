<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Editar Perfil</title>
    <style>


        .container {
            background-color: #f9f9f9;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-left: 10px;
        }

        label {
            margin-left: 20px;
        }

        p.datos {
            margin-left: 20px;
        }

        input {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Datos del Perfil:</h2>
        <p class="datos">Nombre: <?php echo $_SESSION['nombre']; ?></p>
        <p class="datos">Apellido: <?php echo $_SESSION['apellido']; ?></p>
        <p class="datos">Correo: <?php echo $_SESSION['username'] ?> </p>
        <br>

        <h2>Editar Perfil</h2>
        <div class="form-group ml-3">
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

                <input type="submit" class="btn btn-primary" value="Actualizar Perfil">
                <br><br>
            </form>
        </div>

        <form action="index.php?controller=UserController&action=borrarUsuario" method="post"
            onsubmit="return confirm('¿Está seguro de que desea eliminar su cuenta?')">
            <input type="submit" class="btn btn-danger" value="Eliminar Cuenta" >
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
    </div>
</body>

</html>
