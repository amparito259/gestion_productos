<?php

class database
{
    private $host = "localhost";
    private $port = "3306";
    private $dbname = "gestion_productos";
    private $user = "root";
    private $password = "";
    private $connection;

    public function connect()
    {
        try {

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";

            $this->connection = new PDO(
                $dsn,
                $this->user,
                $this->password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->connection;

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }
    }
}
?>