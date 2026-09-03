<?php

require_once __DIR__ . "/../models/produto.php";

class productoControllers {
    public function index()
    {
        $producto = new producto();

        $productos = $producto->getAll();

        require_once __DIR__ . "/../views/producto/index.php";
    }
}