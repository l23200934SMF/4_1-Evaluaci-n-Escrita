<?php
// importo la conexion
require_once __DIR__ . '/../config/db.php';

class Producto {
    // funcion para obtener todos los productos
    public static function obtenerTodos() {
        global $conexion;
        $sql = "SELECT * FROM productos WHERE estado = 'activo'";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>