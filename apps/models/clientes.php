<?php

require_once __DIR__ . '/../../config/Database.php';

class clientes {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT id, nombre, documento, correo, telefono FROM clientes";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT id, nombre, documento, correo, telefono FROM clientes WHERE id = :id";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute([':id' => $id]);
        return $consulta->fetch(PDO::FETCH_ASSOC); 
    }
}