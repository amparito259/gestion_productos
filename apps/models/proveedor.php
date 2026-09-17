<?php

require_once __DIR__ . '/../../config/Database.php';

class Proveedor {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() { 
        try {
           $sql = "SELECT * FROM proveedores";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error viene de la clase proveedor metodo getAll:" . $e->getMessage();
        }
    }

    public function getById($id){ 
        try {
        $sql = "SELECT * FROM proveedores WHERE id = :id";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error viene de la clase proveedor metodo getById:" . $e->getMessage();
        }
    }
}
