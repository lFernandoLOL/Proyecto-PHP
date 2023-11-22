<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Kart</title>
    </style>
   <link rel="stylesheet" href="Vistas/login.css">
  </head>
  <body>

    <div class="login-box">
      <img style="border: 3px solid; color: #b80f22;" src="Vistas/img/prueba.png" class="avatar" alt="Avatar Image">
      <h1>Inicio sesión</h1>
      <form action="index.php?controller=UserController&action=iniciosesion" method="POST">
        <!-- CORREO -->
        <label for="usuario">Correo</label>
        <input type="text" name="username" placeholder="Introduzca el correo">
        <!-- PASSWORD -->
        <label for="contrasena">Contraseña</label>
        <input type="password" name="password" placeholder="Introduzca la contraseña">
        <input type="submit" value="Iniciar Sesion">
        <a href="index.php?controller=UserController&action=contra">¿No te acuerdas de la contraseña?</a><br>
        <a href="index.php?controller=UserController&action=registro">¿Aún sin cuenta? Regístrate</a>
        <?php 
        if (isset($data)) {
          echo "<br>";
          if (isset($_POST['error'])){
          echo "<span style='color:#FF0000'>".$data."</span>";
          }else{
            echo "<span style='color:#00FF00'>".$data."</span>";
          }
        }
        /*
        if (!empty($_POST['error'])){
          echo "<br>";
          echo $_POST['error'];
        }
        */
        ?>
        
      </form>
    </div>
  </body>
</html>