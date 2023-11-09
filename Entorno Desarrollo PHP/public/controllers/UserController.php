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

public function contra(){
    Ver2::show2("recuperarcontra");
}

public function verPerfil()
{
    /*
    include_once('models/usuarios.php');
    $username = $_SESSION["username"];
    $uDAO=new UsuarioDAO();
    $apellido = $uDAO->getApellido($username);
    $uDAO=null;
    View::show("mostrarPerfil", array('apellido' => $apellido)) ;
    */
    View::show("mostrarPerfil");
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
            $perfil = $uDAO->getPerfil($username);
            $_SESSION['perfil'] = $perfil;
            
            $apellido= $uDAO->getApellido($username);
            $_SESSION['apellido'] = $apellido;

            $nombre= $uDAO->getNombre($username);
            $_SESSION['nombre'] = $nombre;
            #$_SESSION['ID_Usuario'] = $ID_Usuario;
            #header("Location: index.php");
            #View::show("showProducts");
            header("Location: index.php?controller=ProductController&action=getAllProducts");
        } else {
            $error_message = "Usuario o contraseña incorrectos";
            $_POST['error']= $error_message;
            Ver2::show2("index_L", $_POST['error']);
        }
    }
}

public function registrarUsu()
{
    if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $errores = false;
        $mensaje_error = "";
        
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
      
        // Validamos los campos del formulario
        if (empty($nombres) || strlen($nombres) < 2) {
            $errores = true;
            $mensaje_error .= "El nombre debe tener al menos 2 caracteres.";
        }
      
        if (empty($apellidos) || strlen($apellidos) < 2) {
            $errores = true;
            $mensaje_error .= "Los apellidos deben tener al menos 2 caracteres.";
        }
      
        if (empty($correo)) {
            $errores = true;
            $mensaje_error .= "Por favor ingrese un correo válido.<br>";
        }
      

        if (empty($contrasena) || strlen($contrasena) < 10 ) {
            $errores = true;
            $mensaje_error .= "La contraseña debe tener al menos 10 caracteres. <br>";
        }
      
        $cuentaNumero = 0;
        for ($i = 0; $i < strlen($contrasena); $i++) {
            if (is_numeric($contrasena[$i])) {
                $cuentaNumero++;
                if ($cuentaNumero >= 2) {
                    break;
                }
            }
        }

        if ($cuentaNumero< 2) {
            $errores = true;
            $mensaje_error .= "La contraseña debe contener al menos 2 números.<br>";
        }
        }

        // Si no se encontraron errores, se envía el formulario
        if ($errores == false) {
            include_once("models/usuarios.php");
            $uDAO = new UsuarioDAO();
            $result = $uDAO->registroUsuario($nombres, $apellidos, $correo, $contrasena);

            if ($result) {
                $exito = "Usuario registrado correctamente";
                Ver2::show2("index_L",$exito);
            } else {
                $mensaje_error .= "Error al insertar el registro en la base de datos.<br>";
                Ver2::show2("index_R", $mensaje_error);
            }
        } else {
            Ver2::show2("index_R", $mensaje_error);
        }
    }



public function recuperarContrasena()
{
    if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo = $_POST['correo'];

        if (empty($correo)) {
            $mensaje_error = "Por favor ingrese un correo válido.";
            Ver2::show2("index_R", $mensaje_error);
        } else {
            include_once("models/usuarios.php");
            $uDAO = new UsuarioDAO();
            $result = $uDAO->recuperarContrasena($correo);

            if ($result == true) {
                $exito = "Se ha enviado un correo con instrucciones para recuperar la contraseña";
                Ver2::show2("index_L", $exito);
            } else {
                $mensaje_error = "El correo ingresado no existe en nuestros registros.";
                Ver2::show2("index_R", $mensaje_error);
            }
        }
    }else{
        echo "error";
    }
}

public function actualizarPerfil()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $contrasena = $_POST['contrasena'];

        $mensaje_error = "";
        
        if (!empty($nombres)){
            include_once("models/usuarios.php");
            $uDAO = new UsuarioDAO();
            $result = $uDAO->actualizarNombre($_SESSION['username'], $nombres);

            if ($result) {
                $exito = "Nombre actualizado correctamente";
                Ver2::show2("mostrarPerfil", $exito);
            } else {
                $mensaje_error = "Error al actualizar el nombre.";
                View::show("mostrarPerfil", $mensaje_error);
            }
        }

        if (!empty($apellidos)){
            include_once("models/usuarios.php");
            $uDAO = new UsuarioDAO();
            $result = $uDAO->actualizarApellido($_SESSION['username'], $apellidos);

            if ($result) {
                $exito = "Apellido actualizado correctamente";
                View::show("mostrarPerfil", $exito);
            } else {
                $mensaje_error .= "<br>Error al actualizar el apellido.";
                View::show("mostrarPerfil", $mensaje_error);
            }
        }

        $cuentaNumero = 0;
        for ($i = 0; $i < strlen($contrasena); $i++) {
            if (is_numeric($contrasena[$i])) {
                $cuentaNumero++;
            }
        }

        if (!empty($_POST['contrasena']) && $_POST['contrasena'] === $_POST['contrasena_repetida']) {
            if (empty($contrasena) || strlen($contrasena) < 10 || $cuentaNumero < 2) {
                $mensaje_error .= "La contraseña debe tener al menos 10 caracteres y al menos 2 números. <br>";
            } else {
                include_once("models/usuarios.php");
                $uDAO = new UsuarioDAO();
                $result = $uDAO->actualizarContrasena($_SESSION['username'], $contrasena);

                if ($result) {
                    $exito = "Contraseña actualizada correctamente";
                    View::show("mostrarPerfil", $exito);
                } else {
                    $mensaje_error .= "<br>Error al actualizar la contraseña.";
                    View::show("mostrarPerfil", $mensaje_error);
                }
            }
        } else {
            $mensaje_error .= "Las contraseñas no coinciden.<br>";
        }

        if (!empty($mensaje_error)) {
            View::show("mostrarPerfil", $mensaje_error);
        }
    }
}

public function borrarUsuario(){
    
}


    

}
    



?>