<?php
session_start();
echo "<a href='sesion2.php'> Enlace a pagina 2 </a>";
if(isset($_POST['Ingresar'])){
   ;
    $_SESSION['usuario']=$_POST['usuario'];
}

print_r($_SESSION);
?>
<html>

<form id="loginform" method='POST'>
        <input type="text" name="usuario" placeholder="Usuario" required>

        <input type="password" placeholder="Contraseña" name="password" required>

        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
    </form>

</html>