<?php
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include ("views/View.php");
include ("models/productos.php");

class ProductController {

    /**
     * Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     */
    public function getAllProducts (){
        $pDAO = new ProductoDAO();
        $products = $pDAO->getAllProducts();
        View::show("showProducts", $products);
    }

    /**
     * Método que añade un producto a la BBDD recogiendo los datos que llegan a través de $_POST. Previo
     * a la inserción realiza la validación de los datos.
     */
    public function addProduct (){
        $errores=array();
        
        /* Si se ha pulsado en el botón insertar se validan los datos y en caso de error, éstos se almacenan
        en el array $errores*/
        if (isset($_POST['insertar'])){
            if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0) 
                $errores['nombre']="El nombre no puede estar vacío.";
            if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10) 
                $errores['descripcion']="La descripción debe tener al menos 10 caracteres";    
            if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) 
                $errores['precio']="El precio no puede estar vacío.";
            
            /**
             * Si el array está vacío es que no hay errores. Si instancia un ProductoDAO y se trata de insertar
             * el nuevo producto en la BBDD. 
             * Si se produce la inserción, se llama al método que muestra todos los productos de la tienda.
             * Si hay error, se muestra la vista de inserción pasándole el array de errores.
             */
            if (empty($errores)){
                $pDAO = new ProductoDAO();
                if ($pDAO->addProduct($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['marca'], $_POST['modelo'])) {
                    $this->getAllProducts(); 
                }
                else {
                    $errores['general']="Problemas al insertar";
                    View::show("addProduct", $errores);  
                }     
            }
            else {
                View::show("addProduct", $errores);               
            }
        }
        // Si no se pulsó el botón insertar, se muestra la vista con el formulario.
        else {
            View::show("addProduct", null);
        }
    }

    /**
     * Método que elimina un producto de la BBDD recogiendo el id del producto que se quiere eliminar
     * a través de $_GET. Si la eliminación es exitosa, se llama al método que muestra todos los productos
     * de la tienda. Si hay algún problema, se muestra un mensaje de error.
     */
    public function deleteProduct (){
        if (isset($_GET['id'])){
            $pDAO = new ProductoDAO();
            if ($pDAO->deleteProduct($_GET['id'])){
                $this->getAllProducts();
            }
            else {
                echo "Error al eliminar el producto";
            }
        }
        else {
            echo "No se ha";
        }
    }

    /**
 * Método que muestra un formulario con los datos del producto que se desea editar. En caso de que se haya
 * pulsado el botón actualizar, se validan los datos y se actualiza el producto en la BBDD. Si la 
 * actualización es exitosa, se llama al método que muestra todos los productos de la tienda. Si hay algún 
 * problema, se muestra un mensaje de error.
 */
public function editProduct (){
    if (isset($_GET['id'])){
        $pDAO = new ProductDAO();
        $product = $pDAO->getProduct($_GET['id']);
        if ($product){
            // Si se pulsó el botón actualizar
            if (isset($_POST['actualizar'])){
                $errores=array();
                if (!isset($_POST['nombre']) || strlen($_POST['nombre'])==0) 
                    $errores['nombre']="El nombre no puede estar vacío.";
                if (!isset($_POST['descripcion']) || strlen($_POST['descripcion'])<10) 
                    $errores['descripcion']="La descripción debe tener al menos 10 caracteres";    
                if (!isset($_POST['precio']) || strlen($_POST['precio'])==0) 
                    $errores['precio']="El precio no puede estar vacío.";
                if (empty($errores)){
                    if ($pDAO->updateProduct($_GET['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['marca'], $_POST['modelo'])){
                        $this->getAllProducts();
                    }
                    else {
                        echo "Error al actualizar el producto";
                    }
                }
                else {
                    View::show("editProduct", array('product'=>$product, 'errores'=>$errores));
                }
            }
            else {
                View::show("editProduct", array('product'=>$product, 'errores'=>null));
            }
        }
        else {
            echo "No se ha encontrado el producto.";
        }
    }
    else {
        echo "No se ha especificado el producto a editar.";
    }
}

}
?>


