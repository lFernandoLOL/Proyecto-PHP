<?php
include_once 'db/db.php';

class productoDAO{
    public $bd_conn;

    public function __construct() {
        $this->bd_conn=Database::connect();
    }



    public function GetAllProducts(){
        $stmt=$this->bd_conn->prepare("Select * from Productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    try{
        $stmt->execute();
    } catch (PDOException $a) {
        echo $a->getMessage();
    }

    return $stmt->fetchAll();
}


    public function GetProductById($id){
        $stmt=$this->bd_conn->prepare("Select * from Productos where ID_Producto=$id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        try {
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }
        

        return $stmt->fetch();
    }


    public function guardaProducto($nombre_prod, $descripcion, $precio, $categoria) {
        $stmt = $this->bd_conn->prepare("INSERT INTO Productos (Nombre_Prod, Descripcion, Precio, Categoria) VALUES (:nombre_prod, :descripcion, :precio, :categoria)");
    
        // Vincular los valores de los parámetros con los datos del formulario
        $stmt->bindParam(':nombre_prod', $nombre_prod);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':categoria', $categoria);
        
        try {
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }
    }
    

    public function borrarprod($id){
        $stmt= $this->bd_conn->prepare("Delete from Productos where ID_Producto=$id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();       
    }




    public function searchProducts($searchTerm)
    {
        $stmt = $this->bd_conn->prepare("SELECT * FROM Productos WHERE Nombre_Prod LIKE :searchTerm");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $searchTerm = "%$searchTerm%";
        $stmt->bindParam(':searchTerm', $searchTerm);

        try {
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }

        return $stmt->fetchAll();


        // Modelo.php

    }

    public function getProductsByCategory($category) {
        // Conecta a la base de datos y ejecuta una consulta para obtener los productos por categoría
        $stmt = $this->bd_conn->prepare("SELECT * FROM productos WHERE id_cat = :category");
        $stmt->bindParam(':category', $category);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    
    public function editarProducto($id, $nombre, $descripcion, $precio, $categoria)
{
    $stmt = $this->bd_conn->prepare("UPDATE Productos SET Nombre_Prod = :nombre, Descripcion = :descripcion, Precio = :precio, ID_Cat = :categoria WHERE ID_Producto = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':categoria', $categoria);

    try{
    $stmt->execute();
    } catch (PDOException $a) {
        echo $a->getMessage();
    }

}

    public function prueba(){
        $stmt = $this->bd_conn->prepare("SELECT * FROM productos WHERE ID_Cat = 1");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

}
?>