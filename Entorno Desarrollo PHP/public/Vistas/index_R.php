<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario Registro</title>
  <style>
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      background-image: url('Vistas/img/fondo.jpg');
      background-size: cover;
      font-family: sans-serif;
      width: 100pc;

    }

    .form-register .avatar{
      width: 70px;
      height: 50px;
      position: absolute;
      top: 26px;
      left: 260px;
    }

    /*
    .form-register .avatar2{
      width: 70px;
      height: 50px;
      position: absolute;
      top: 17px;
      left: 290px;
    }
    */

    .form-register {
      width: 400px;
      background: #000;
      padding: 30px;
      margin: auto;
      margin-top: 100px;
      font-family: 'calibri';
      color: white;
      position: absolute;
      left: 36%;
      /*border-radius: 4px;*/
      /* box-shadow: 7px 13px 37px #000; */
    }

    .form-register h4 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .controls {
      width: 100%;
      background: #24303c;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 16px;
      border: 1px solid #b80f22;
      font-family: 'calibri';
      font-size: 18px;
      color: white;
    }

    .form-register p {
      height: 40px;
      text-align: center;
      font-size: 18px;
      line-height: 40px;
    }

    .form-register a {
      color: white;
      text-decoration: none;
    }

    .form-register a:hover {
      color: white;
      text-decoration: underline;
    }

    .form-register .botons {
      width: 100%;
      background: #b80f22;
      border: none;
      padding: 12px;
      color: white;
      margin: 16px 0;
      font-size: 16px;
    }



  
  </style>
</head>
<body>
  <section class="form-register">
    <img src="Vistas/img/mario.png" class="avatar" alt="Avatar Image">
    <h4>Formulario Registro</h4>
    <form method="post" action="index.php?controller=UserController&action=registrarUsu">
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
      <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña" required>
      <input class="botons" type="submit" name="submit" value="Registrar">
      <?php echo $data; 
       ?>
    </form>
    <p><a href="index.php?controller=UserController&action=iniciarsesion">¿Ya tengo Cuenta?</a></p>
  </section>
</body>
</html>
