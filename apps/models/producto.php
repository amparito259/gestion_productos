<?php
require_once __DIR__ . "/../../config/Database.php";

class producto {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT 
                    producto.id,
                    producto.nombre,
                    producto.precio,
                    producto.categoria,
                    proveedores.nombre AS proveedor_nombre
                FROM producto 
                INNER JOIN proveedores 
                ON producto.id_proveedor = proveedores.id_proveedor";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>