<?php
include ("Vistas/View2.php");
class UserController{
   

// Metodo que cierra la sesion y te envia de nuevo al login
public function cerrarsesion(){
    session_destroy();
    Ver2::show2("index_L");
}

public function iniciarsesion(){
    Ver2::show2("index_L");
}
public function registro(){
    Ver2::show2("index_R");
}


public function iniciosesion()
{
    #header("Location: index.php");
    // Verificar si se ha enviado el formulario de inicio de sesión
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Si la validación y autenticación son correctas
        include_once('models/productos.php');
        include_once('models/usuarios.php');

        //Usar $_SESSION=_$POST['username']?? para el header y tal
        $uDAO=new UsuarioDAO();

        if ($uDAO->getUsers($username, $password) == true) {
            $_SESSION['username'] = $username;
            #$_SESSION['ID_Usuario'] = $ID_Usuario;
            #header("Location: index.php");
            #View::show("showProducts");
            header("Location: index.php?controller=ProductController&action=getAllProducts");
        } else {
            $error_message = "Usuario o contraseña incorrectos"; // Añade este mensaje de error
            $_POST['error']= $error_message;
            Ver2::show2("index_L", $_POST['error']);
        }
    }
}
    }


    



?>