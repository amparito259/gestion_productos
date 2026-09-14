<?php

require_once __DIR__ . '/../../config/Database.php';

class producto {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT 
                    p.id,
                    p.nombre, 
                    p.precio, 
                    p.descripcion, 
                    c.nombre AS categoria, 
                    prv.nombre AS proveedor_nombre 
                FROM productos p
                INNER JOIN categorias c ON p.categoria_id = c.id
                INNER JOIN proveedores prv ON p.proveedor_id = prv.id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * from productos where id = :id";
     $productoconsulta = $this->connection->prepare($sql);
     $productoconsulta->bindParam(':id', $id);
     $productoconsulta->execute();
     return $productoconsulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
        