<?php
session_start();
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include ("Vistas/View.php");
class ProductController {

    //Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
    public function GetAllProducts (){
        require_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->GetAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }

      //Metodo mediante el cual se obtiene un producto de la base de datos buscandolo por su Identificador que obtendremos mediante el metodo GET.
    public function ProductByID (){
        if (isset($_GET['id'])){
            require_once ("models/productos.php");
            $pDAO=new ProductoDAO();
            $products=$pDAO->GetProductById($_GET['id']);
            $pDAO=null;
            View::show("ProductById", $products);
        }

    }
    
    
    public function guardarProducto()
    {
        // Verificar si el formulario se ha enviado
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtener los datos del formulario
            $nombre_prod = $_POST["nombre_prod"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $categoria = $_POST["categoria"];
      
            include_once("models/productos.php");
            $pDAO = new productoDAO();
    
            // método guardaProducto
            $pDAO->guardaProducto($nombre_prod, $descripcion, $precio, $categoria);
            $pDAO=null;
            $this->GetAllProducts();
            
    }else{
        View::show("addProduct", null);
    }
    }


    public function borrarproducto(){
        include_once 'models/productos.php';
        if (isset($_GET['id'])){
            $pDAO=new ProductoDAO();
            $products=$pDAO->borrarprod($_GET['id']);
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }


    public function MostrarContacto(){
        View::show("contacto",null);
    }

    public function MostrarAcercade(){
        View::show("acercade",null);
    }







    
    public function aniadirCarrito(){
        if (!isset ($_SESSION['carrito'])) {
            $_SESSION['carrito']=array();
        }
        if (isset($_GET['id'])){
            array_push($_SESSION['carrito'],$_GET['id']);  
            include_once 'models/productos.php';    
            $pDAO=new ProductoDAO();
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }

    public function verCarrito(){
    

        include_once 'models/productos.php';
        $pDAO=new ProductoDAO();
        $arrayCarrito= array();
        if (isset ($_SESSION['carrito'])) {
        
        foreach($_SESSION['carrito'] as $id){
            $producto=$pDAO-> getProductById($id);
            array_push($arrayCarrito,$producto);
        }
        }
        View::show("elcarrito", $arrayCarrito);
    }

public function eliminarDelCarrito()
{
    // si se proporciona un ID de producto en la URL
    if (isset($_GET['id'])) {
        $idProducto = $_GET['id'];

        // busca el ID de producto en el array del carrito
        $key = array_search($idProducto, $_SESSION['carrito']);

        // si se encontró el producto en el carrito
        if ($key !== false) {
            // elimina el producto del carrito
            unset($_SESSION['carrito'][$key]);
        }
    }

    // Mostrar el carrito actualizado
    $this->verCarrito();
}


public function buscarProductos()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["searchInput"])) {
        $searchTerm = $_POST["searchInput"];
        
        include_once("models/productos.php");
        $pDAO = new ProductoDAO();

        //productos que coincidan con el término de búsqueda
        $products = $pDAO->searchProducts($searchTerm);

        // Mostrar los productos encontrados
        $pDAO = null;
        View::show("showProducts", $products);
    } else {
        $this->GetAllProducts();
    }
}

    

public function filtrarProductos() {
    // Recupera la categoría y el término de búsqueda desde el formulario
    include_once("models/productos.php");
    $pDAO = new ProductoDAO();

    $category = $_POST["category"];
    $searchInput = $_POST["searchInput"];

    if (empty($category)) {
        // Si la categoría está vacía, aplicamos el filtro solo al nombre del producto
        $filteredProducts = $pDAO->searchProducts($searchInput);
    } else {
        // Si se selecciona una categoría, aplicamos el filtro por categoría y término de búsqueda
        $filteredProducts = $pDAO->getProductsByCategory($category);

        if (!empty($searchInput)) {
            // Comprueba si se ha ingresado un término de búsqueda
            $searchTerm = strtolower($searchInput);
            $filteredProductsResult = array();
            foreach ($filteredProducts as $product) {
                $productName = strtolower($product["Nombre_Prod"]);
                if (strpos($productName, $searchTerm) !== false) {
                    //strpos verifica si $searchTerm está contenido en el nombre del producto $productName. Si se encuentra el término de búsqueda en el nombre del producto, ese producto se agrega al array $filteredProducts.
                    $filteredProductsResult[] = $product;
                }
            }
            $filteredProducts = $filteredProductsResult;
        }
    }

    View::show("showProducts", $filteredProducts);
}


public function editarVista()
{
    $id_producto = $_GET['id'];

    include_once("models/productos.php");
    $pDAO = new ProductoDAO();
    $producto = $pDAO->getProductById($id_producto);

    View::show("editarProducto", $producto);
}


public function editarproducto()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre_prod = $_POST["nombre_prod"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $categoria = $_POST["categoria"];

        include_once("models/productos.php");
        $pDAO = new ProductoDAO();
        $result = $pDAO->editarProducto($id, $nombre_prod, $descripcion, $precio, $categoria);

        if (empty($result)) {
            header("Location: index.php?controller=ProductController&action=getAllProducts");
        } else {
            echo "Error al actualizar el producto. Por favor, inténtalo de nuevo.";
        }
    }  
}






public function prueba(){
    try {
        include_once("models/productos.php");
        $pDAO = new ProductoDAO();
        $data = $pDAO->prueba();
        View::show("prueba",$data);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}





}




    
?>