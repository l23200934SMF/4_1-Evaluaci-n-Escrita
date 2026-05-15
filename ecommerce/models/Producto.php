<?php
// importamos la conexion a la base de datos
require_once __DIR__ . '/../config/db.php';

class Producto {
    // funcion para obtener todos los productos
    public static function obtenerTodos() {
        // usamos la conexion
        global $conexion;
        // consulta para mostrar productos activos
        $sql = "SELECT * FROM productos WHERE estado = 'activo'";
        // preparamos la consulta
        $stmt = $conexion->prepare($sql);
        // ejecutamos la consulta
        $stmt->execute();
        // devolvemos todos los productos
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>