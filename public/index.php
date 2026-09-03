<?php
require_once __DIR__ . "/../apps/controllers/productoControllers.php";

$productoControllers = new productoControllers();
$productoControllers->index();
