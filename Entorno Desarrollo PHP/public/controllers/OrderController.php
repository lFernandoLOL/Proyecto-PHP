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



public function hacerPedido() {
    require_once ("models/pedidos.php");
    $oDAO = new pedidoDAO();

    if (!isset($_SESSION['ID_Usuario'])) {
        // Redirige al index_L.php si no ha iniciado sesión
        Ver2::show2("index_L", null);
        return;
    }

    if (!empty($_SESSION['carrito'])) {
        $idUsuario = $_SESSION['ID_Usuario'];
        $fecha = date('Y-m-d');
        
        // Crea el pedido en la base de datos
        $pedidoId = $oDAO->crearPedido($fecha, $idUsuario);

        // Obtiene la cantidad de cada producto en el carrito
        $productosAgrupados = array_count_values($_SESSION['carrito']);

        // Guarda cada producto en la tabla Prod_Pedidos
        foreach ($productosAgrupados as $productoId => $cantidad) {
            $oDAO->guardarProductoPedido($pedidoId, $productoId, $cantidad);
        }
        // Limpiar el carrito después de realizar el pedido
        $_SESSION['carrito'] = array();

       
        View::show("confirmacion", null);
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


public function guardarCambiosEstado() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cambiosEstado = $_POST;
        include_once("models/pedidos.php");
        $oDAO = new pedidoDAO();
        $result = $oDAO->guardarCambiosEstado($cambiosEstado);
        if ($result) {
            header("Location: index.php?controller=OrderController&action=mostrarPedido");
        } else {
            echo "Error al guardar cambios";
        }
    }
}

public function borrarPedido() {
    if (isset($_POST['borrarPedido'])) {
        $pedidoID = $_POST['borrarPedido'];
        
        require_once("models/pedidos.php");
        $oDAO = new pedidoDAO();
        
        $result = $oDAO->borrarPedido($pedidoID);
        
        if ($result) {
            header("Location: index.php?controller=OrderController&action=mostrarPedido");
        } else {
            echo "Error al borrar el pedido";
        }
    }
}


}
?>