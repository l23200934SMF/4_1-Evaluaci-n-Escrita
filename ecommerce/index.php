<?php
// importo el controlador
require_once 'controllers/ProductoController.php';
$controller = new ProductoController();
$controller->mostrarCatalogo();
?>