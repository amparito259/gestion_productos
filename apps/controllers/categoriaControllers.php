<?php

require_once __DIR__ . '/../models/categoria.php';

class CategoriaController {
public function index()
    {
    
        $categoriaModel = new Categoria();

        $categorias = $categoriaModel->getAll();

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}