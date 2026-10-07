<?php
$host = "localhost";
$usuario = "bastian";
$password = "admin1234";   
$baseDatos = "escuela";

$conexion = new mysqli($host, $usuario, $password, $baseDatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>