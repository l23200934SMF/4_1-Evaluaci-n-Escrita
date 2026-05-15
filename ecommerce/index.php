<?php
// importamos el controlador de productos
require_once 'controllers/ProductoController.php';
// creamos el controlador
$controller = new ProductoController();
// mandamos a mostrar el catalogo
$controller->mostrarCatalogo();
?>