<?php
// importo el modelo
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    // funcion para mostrar el catalogo
    public function mostrarCatalogo() {
        $productos = Producto::obtenerTodos();
        // mando los datos a la vista
        require __DIR__ . '/../views/catalogo.php';
    }
}
?>