<?php

require_once __DIR__ . '/../models/producto.php';

class productoControllers {
    public function index() {
        $productoModel = new producto();

        $productos = $productoModel->getAll();

        $productoConsultado = $productoModel->getAll();

        require_once __DIR__ . '/../views/producto/index.php';
    }
}
