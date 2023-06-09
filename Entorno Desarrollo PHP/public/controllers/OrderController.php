<?php
#include ("Vistas/View.php");
#include ("Vistas/View2.php");
class OrderController{

public function mostrarPedido(){
    require_once ("models/pedidos.php");
    $oDAO=new pedidoDAO();
    $pedidos=$oDAO->GetPedidos();
    $oDAO=null;
    View::show("verpedidos", $pedidos);

}



public function hacerPedido(){
    require_once ("models/pedidos.php");

    $oDAO=new pedidoDAO();
    if (!isset($_SESSION['ID_Usuario'])) {
        // Redirigir al index_L.php si no ha iniciado sesión
        Ver2::show2("index_L", null);
        return;
    }

    if (!empty($_SESSION['carrito'])) {
        $idUsuario = $_SESSION['ID_Usuario'];

        $fecha = date('Y-m-d');
        // Crear el pedido en la base de datos
        $pedidoId = $oDAO->crearPedido($fecha, $idUsuario);

        foreach ($_SESSION['carrito'] as $productoId) {
            $cantidad = 1;
            $oDAO->guardarProductoPedido($pedidoId, $productoId, $cantidad);
        }

        $_SESSION['carrito'] = array();

        //página de ver pedidos
        #$this->MostrarPedidoID();
        View::show("confirmacion",null);
    } else {
        
    }

    $oDAO = null;


    }

    public function GetproductsByPedido() {
        // Verificar si el usuario ha iniciado sesión
        if (!isset($_SESSION['username'])) {
            // Redirigir al inicio de sesión si no ha iniciado sesión
            header("Location: index.php?controller=UserController&action=iniciosesion");
            exit();
        }
    
        // Obtener el ID de pedido de la URL
        if (isset($_GET['pedido_id'])) {
            $pedidoID = $_GET['pedido_id'];
    
            // Crear una instancia del modelo Pedido
            include_once('models/pedidos.php');
            $pedido = new PedidoDAO();
    
            // Obtener los productos del pedido
            $productosPedido = $pedido->getProductosByPedidoID($pedidoID);

            #header("Location: detalles_pedido.php?pedido_id=" . $pedidoID);
            View::show("pedido", $productosPedido);
            exit();
        }
    }
    




public function MostrarPedidoID() {
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['username'])) {
        header("Location: index.php?controller=UserController&action=iniciosesion");
        exit();
    }

    $userID = $_SESSION["ID_Usuario"];

    // Crear una instancia del modelo Pedido
    include_once("models/pedidos.php");
    $pedido = new pedidoDAO();

    // Obtener los pedidos del usuario
    $misPedidos = $pedido->getPedidosByUserID($userID);

    View::show("vermispedidos", $misPedidos);
    
    exit();
}


}
?>