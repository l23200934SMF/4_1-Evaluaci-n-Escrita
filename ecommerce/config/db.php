<?php
// datos para conectarnos a la base de datos
$host = "127.0.0.1";
$port = "3306";
$dbname = "ecommerce";
$user = "root";
$password = "";

try {
    // aqui hacemos la conexion con mysql
    $conexion = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
        $user,
        $password
    );
    // esto sirve para mostrar errores en caso de que existan
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // si ocurre un error se mostrara el siguiente mensaje
    die("Error de conexión: " . $e->getMessage());
}
?>