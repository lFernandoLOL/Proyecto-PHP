<?php
include_once 'db/db.php';


class pedidoDAO{
    public $bd_conn;


    public function __construct() {
        $this->bd_conn=Database::connect();
    }



    public function GetPedidos(){
     $stmt=$this->bd_conn->prepare("Select * from Pedidos");
     $stmt->setFetchMode(PDO::FETCH_ASSOC);

    try{
     $stmt->execute();
    } catch (PDOException $a) {
      echo $a->getMessage();
    }

    return $stmt->fetchAll();
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
    $stmt = $this->bd_conn->prepare("SELECT Prod_Pedidos.Cantidad, Productos.Nombre_Prod, Productos.Precio FROM Prod_Pedidos INNER JOIN Productos ON Prod_Pedidos.ID_Producto = Productos.ID_Producto WHERE Prod_Pedidos.ID_Pedido = :pedidoID");
    $stmt->bindParam(':pedidoID', $pedidoID);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}



  
/*
  public function hacerPedido(){
    $stmt=$this->bd_conn->prepare("Insert into pedidos");
  }
*/

}
?>