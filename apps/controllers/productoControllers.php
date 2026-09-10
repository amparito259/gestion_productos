<?php

require_once __DIR__ . "/../models/producto.php";

class productoControllers {
    public function index()
    {
        $producto = new producto();

        $productos = $producto->getAll();

        $productoConsultado = $producto->getById(5);

        require_once __DIR__ . "/../views/producto/index.php";
    }
}