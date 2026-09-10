<?php
require_once __DIR__ . "/../apps/controllers/productoControllers.php";
require_once __DIR__ . "/../apps/controllers/clientesControllers.php";
require_once __DIR__ . "/../apps/controllers/proveedorControllers.php";
require_once __DIR__ . "/../apps/controllers/categoriaControllers.php";

$productoControllers = new productoControllers();
$productoControllers->index();

$clientesController = new ClientesController();
$clientesController->index();

$proveedorControllers = new proveedorController();
$proveedorControllers->index();

$categoriaControllers = new CategoriaController();
$categoriaControllers->index();