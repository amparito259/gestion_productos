<?php
require_once __DIR__ . '/../../config/Database.php';

class Categoria {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT id, nombre, descripcion FROM categorias";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT id, nombre, descripcion FROM categorias WHERE id = :id";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute([':id' => $id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}