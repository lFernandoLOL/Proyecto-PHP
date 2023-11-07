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

        $stmt = $this->bd_conn->prepare("INSERT INTO usuarios (nombre, apellido, `correo`, `contraseña`) VALUES (:nombres, :apellidos, :correo, :contrasena)");
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
    
        if ($stmt->execute()) {
            return true; // o puede retornar un mensaje de éxito, según lo que necesites
        } else {
            return false; // o puede retornar un mensaje de error, según lo que necesites
        }
    }
    
    
}

?>