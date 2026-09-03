<?php
class database{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;
    private $connection;

    public function __construct(){
        $env = parse_ini_file(__DIR__ . "/../.env");

        $this->host = $env["BD_HOST"];
        $this->port = $env["BD_PORT"];
        $this->dbname = $env["BD_NAME"];
        $this->user = $env["BD_USER"];
        $this->password = $env["BD_PASSWORD"];
    }

    public function connect(){
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname}";

        $this->connection = new PDO ($dsn,$this->user,-$this->password);

        return $this->connection;
    }

    }
?>