<?php
/**
 * Clase que implementa un método estático para realizar la conexión a la BBDD. Obtiene los datos de conexión
 * de variables de entorno existentes en el fichero .env.
 */
class Database {
    private $db = null;

    public static function connect() {
        $host = 'localhost';
        $dbname = 'productos_informatica';

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
            $dbh = new PDO($dsn, 'root', 'password');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
