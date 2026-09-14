<?php

require_once __DIR__ . '/../models/producto.php';

class productoControllers {
    public function index() {
        $productoModel = new producto();

        $productos = $productoModel->getAll();

        $productoConsultado = $productoModel->getById("0 OR 1 = 1");

        require_once __DIR__ . '/../views/producto/index.php';
    }
}