<?php
/*
session_start();

echo "Estoy en la pagina dos y el user logeado es ".$_SESSION['user'];
echo "Datos de la sesion".'<br>';
print_r($_SESSION);

echo "eliminamos passwd de la sesion".'<br>';
unset ($_SESSION['password']);
print_r($_SESSION);
*/
session_start();
print_r($_SESSION);
if (isset($_SESSION['usuario']))
echo "estoy en la pagina 2 y el user logeado es " .$_SESSION['usuario'];

else    echo "Debes registrarte";

if (!isset($_SESSION['usuarios'])){
$_SESSION['usuario']=array();
}


?>