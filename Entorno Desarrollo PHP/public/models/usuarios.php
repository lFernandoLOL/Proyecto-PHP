<?php
require_once 'db/db.php';

class UsuarioDAO{
    public $bd_conn;
    public function __construct(){
        $this->bd_conn=Database::connect();
    }

    // Metodo que pilla los valores que hay en la tabla Users de la base de datos

    public function getUsers($username, $password) {
        $stmt = $this->bd_conn->prepare("SELECT * FROM Usuarios WHERE Correo = :username AND Contraseña = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        #$idusu = $stmt = $this->db_con->prepare("SELECT ID_Usuario FROM Usuarios WHERE Correo = $username");
        #$stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!empty($result)) {
            // El usuario existe en la base de datos si $result esta lleno
            $_SESSION["ID_Usuario"] = $result['ID_Usuario'];
            return true;
        } else {
            // El usuario no existe o las credenciales son incorrectas si $result esta vacio
            return false;
        }
    }

    public function obtenerPerfil($idUsuario) {
        $stmt = $this->bd_conn->prepare("SELECT * FROM Perfil WHERE ID_Usuario = :idUsuario");
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();
        $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
        return $perfil;
    }


    public function registroUsuario($nombres, $apellidos, $correo, $contrasena) {
        // Verificar si el correo ya está registrado
        $stmt = $this->bd_conn->prepare("SELECT COUNT(*) FROM usuarios WHERE `correo` = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $result = $stmt->fetchColumn();
    
        if ($result > 0) {
            return false;
        }
    

        $stmt = $this->bd_conn->prepare("INSERT INTO usuarios (nombre, apellido, `correo`, `contraseña`) VALUES (:nombres, :apellidos, :correo, :contrasena)");
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
    

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function recuperarContrasena($correo) {
        $stmt = $this->bd_conn->prepare("SELECT * FROM Usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!empty($result)) {
            $subject = "Recuperación de Contraseña";
            $message = "Haga clic en el siguiente enlace para restablecer su contraseña: ";
            $headers = "From: nintendophpejemplo@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";
    
            if (mail($correo, $subject, $message, $headers)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // En tu modelo de usuarios (UsuarioDAO), agrega el método getPerfil

    public function getPerfil($username)
    {
        $stmt = $this->bd_conn->prepare("SELECT ID_Perfil FROM Usuarios WHERE Correo = :correo");
        $stmt->bindParam(':correo', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            return $result['ID_Perfil'];
        } else {
            return null;
        }
}


public function actualizarNombre($username, $nombres)
{
    $stmt = $this->bd_conn->prepare("UPDATE Usuarios SET Nombre = :nombres WHERE Correo = :username");
    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':username', $username);

    return $stmt->execute();
}

public function actualizarApellido($username, $apellidos)
{
    $stmt = $this->bd_conn->prepare("UPDATE Usuarios SET Apellido = :apellidos WHERE Correo = :username");
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':username', $username);

    return $stmt->execute();
}

public function actualizarContrasena($username, $contrasena)
{
    $stmt = $this->bd_conn->prepare("UPDATE Usuarios SET Contrasena = :contrasena WHERE Correo = :username");
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':username', $username);

    return $stmt->execute();
}


public function getApellido($username){
    $stmt = $this->bd_conn->prepare("SELECT Apellido FROM Usuarios WHERE Correo = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

   if (!empty($result)) {
    return $result['Apellido'];
    } else {
    return null;
}
    
}

public function getNombre($username){
    $stmt = $this->bd_conn->prepare("SELECT Nombre FROM Usuarios WHERE Correo = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

   if (!empty($result)) {
    return $result['Nombre'];
    } else {
    return null;
}
    
}
}

?>