<?php

require_once __DIR__ . "/../models/clientes.php";

class ClientesController {
    public function index()
    {
    
        $clienteModel = new clientes();

        $clientes = $clienteModel->getAll();

        require_once __DIR__ . "/../views/clientes/index.php";
    }
}
?>