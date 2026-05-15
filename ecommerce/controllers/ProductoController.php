<?php
// importamos el modelo de productos
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    // funcion para mostrar el catalogo
    public function mostrarCatalogo() {
        // obtenemos todos los productos
        $productos = Producto::obtenerTodos();
        // aqui mandamos los datos a la vista
        require __DIR__ . '/../views/catalogo.php';
    }
}
?>