<?php
include_once("views/header.php");
if(isset($_GET['action'])){  //recibimos parametro action
    $controlador=new ProductController();


    switch($_GET['action']){
        case 'listarprod': $controlador->getAllProductos();
            break;
        case 'aniadirprod': $controlador->aniadirProduct();
            break;
    }
}
else{  //No recibimos el parametro action
    echo "Esta seria la pagina de inicio";
}


include_once("views/footer.php");





















#include("controllers/ProductsController.php");

#$cont=new ProductController();
#$cont->getAllProductos();

#$dao=new ProductoDAO();


#if ($dao->insertInto("insert into Productos (producto_id, descripcion, precio, nombre, procedencia) values(1,'Volumen',55,altavoz,1)"));





#include 'views/header.php';
#require 'models/productos.php';
/*
require('db/sql.php');
$con=Database::connect();
print_r($con);
$con = $con->prepare("SELECT * FROM productos");
$con->setFetchMode(PDO::FETCH_ASSOC);
$con->execute();

while ($row = $con->fetch()){
    echo "<br>";
    echo "ID: {$row["producto_id"]} <br>";
    echo "Descripcion: {$row["descripcion"]} <br>";
    echo "Precio: {$row["precio"]} <br>";
    echo "Nombre: {$row["nombre"]} <br>";
    echo "Procedencia: {$row["procedencia"]} <br><br>";
}
*/

/*
$p = new ProductoDAO();
$producto=$p->getAllProductos();
print_r($producto);


echo "<br>";
$a = new ProductoDAO();
$precio=$a-> getProductById(1,6);
print_r($precio);
*/


/*
$stmt = $con->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($producto as $producto){
    echo $productos->nombre . "<br>";
}
<div class="container">
<h1>Listado de productos</h1>
</div>


<?php
include 'views/footer.php';

?>
*/

?>




