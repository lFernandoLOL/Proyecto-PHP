<?php
session_start();
#array_push($_SESSION)['usuario'] $usuario);
function limpiarcadena ($cadena){
    $cadena=trim ($cadena);
    $cadena=htmlspecialchars($cadena);
    return $cadena;
}

class Usuario {
    public $nombre;
    public $password;
    public $email;
    public $idioma;

#    public _construct($nombre,$password,$email,$idioma);
}

?>






