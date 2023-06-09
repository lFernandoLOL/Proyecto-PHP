<?php
include('db/sql.php');
class ProductoDAO {
    public $db_con;
    public function __construct(){
        $this->db_con=Database::connect();
    }
    public function getAllProductos(){
        $stmt= $this->db_con->prepare("Select * from Productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();
        return $stmt->fetchAll();


    }

    public function getProductById ($num1,$num2){
        $stmt = $this->db_con->prepare(("Select * from productos where precio between $num1 and $num2"));
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $stmt -> execute();
        return $stmt -> fetch();
    }

    public function insertInto(){
        // prepare
        $stmt = $this->db_con->prepare("insert into Productos (producto_id, descripcion, precio, nombre, procedencia) values(1,'Volumen',55,altavoz,1)");

        // execute
        $stmt->execute();
    }
}

?>