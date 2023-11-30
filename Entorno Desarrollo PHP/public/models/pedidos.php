<?php
include_once 'db/db.php';


class pedidoDAO{
    public $bd_conn;


    public function __construct() {
        $this->bd_conn=Database::connect();
    }



    public function GetPedidos() {
        $stmt = $this->bd_conn->prepare("SELECT * FROM Pedidos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        try {
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }

        $pedidos = $stmt->fetchAll();

        foreach ($pedidos as &$pedido) {
            $correo = $this->getCorreoPorUsuario($pedido['ID_Usuario']);
            $pedido['Correo'] = $correo;
        }

        return $pedidos;
    }

    private function getCorreoPorUsuario($idUsuario) {
        $stmt = $this->bd_conn->prepare("SELECT Correo FROM Usuarios WHERE ID_Usuario = :idUsuario");
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->execute();

        return $stmt->fetchColumn();
    }


    public function guardarProductoPedido($pedidoId, $productoId, $cantidad)
    {

      $query = "INSERT INTO Prod_Pedidos (ID_Pedido, ID_Producto, Cantidad) VALUES (:pedidoId, :productoId, :cantidad)";
      $stmt = $this->bd_conn->prepare($query);
      $stmt->bindParam(':pedidoId', $pedidoId);
      $stmt->bindParam(':productoId', $productoId);
      $stmt->bindParam(':cantidad', $cantidad);
      $stmt->execute();
      $stmt->closeCursor();
    }


    public function crearPedido($fecha, $usuarioId)
    {
        $query = "INSERT INTO Pedidos (fecha, ID_Usuario) VALUES (:fecha, :usuarioId)";
        $stmt = $this->bd_conn->prepare($query);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':usuarioId', $usuarioId);
        $stmt->execute();
        $lastid= $this->bd_conn->lastInsertId();
        return $lastid;
    }


    public function getPedidosByUserID($userID) {
      $stmt = $this->bd_conn->prepare("SELECT * FROM Pedidos WHERE ID_Usuario = :userID");
      $stmt->bindParam(':userID', $userID);
      $stmt->execute();
  
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
      return $result;
  }
  
  public function getProductosByPedidoID($pedidoID) {
    $stmt = $this->bd_conn->prepare("
        SELECT
            Prod_Pedidos.ID_Pedido,
            Prod_Pedidos.Cantidad,
            Productos.Nombre_Prod,
            Productos.Precio,
            Usuarios.Correo
        FROM
            Prod_Pedidos
        INNER JOIN Productos ON Prod_Pedidos.ID_Producto = Productos.ID_Producto
        INNER JOIN Pedidos ON Prod_Pedidos.ID_Pedido = Pedidos.ID_Pedido
        INNER JOIN Usuarios ON Pedidos.ID_Usuario = Usuarios.ID_Usuario
        WHERE Prod_Pedidos.ID_Pedido = :pedidoID
    ");
    $stmt->bindParam(':pedidoID', $pedidoID);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}


public function guardarCambiosEstado($cambiosEstado) {
  $stmt = $this->bd_conn->prepare("UPDATE Pedidos SET Estado = :nuevoEstado WHERE ID_Pedido = :pedidoID");
  
  foreach ($cambiosEstado as $pedidoID => $nuevoEstado) {
      $stmt->bindParam(':nuevoEstado', $nuevoEstado);
      $stmt->bindParam(':pedidoID', $pedidoID);
      $stmt->execute();
  }

  return true; 
}

public function borrarPedido($pedidoID) {
  $stmt = $this->bd_conn->prepare("DELETE FROM Pedidos WHERE ID_Pedido = :pedidoID");
  $stmt->bindParam(':pedidoID', $pedidoID);
  $stmt->execute();

  return true;  
}


}




  
/*
  public function hacerPedido(){
    $stmt=$this->bd_conn->prepare("Insert into pedidos");
  }
*/


?>