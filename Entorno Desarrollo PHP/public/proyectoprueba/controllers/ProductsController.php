<?php
include("views/View.php");
class ProductController {
    public function getAllProductos (){
        include ("models/productos.php");
        $pDao=new ProductoDAO();
        $products=$pDao->getAllProductos();
        //include ("views/showProducts.php");
        View::show("showProducts",$products);
    }


    public function aniadirProduct(){
        $errores=array();
        if (isset($_POST['insertar'])){
            if(!isset($_POST['nombre'])||strlen($_POST['nombre'])==0)
                $errores['nombre']="El nombre no puede estar vacio";
            if(!isset($_POST['descripcion'])||strlen($_POST['descripcion'])<10)
                $errores['descripcion']="La descripicion debe tener al menos 10 caracteres";
            if(!isset($_POST['precio'])||strlen($_POST['precio'])==0)
                $errores['precio']="El precio no puede estar vacio";   
            $pDao=new ProductoDAO();
            if ($pDao -> insertInto ($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['procedencia']))
            $this->getAllProductos();
            else{
                $errores['general']="Problemas al insertar";
                View::show("addProduct",$errores);
            }
        }
        else View::show("addProduct",$errores);
    }
}



?>