<?php
require_once("../conexion.php");
$conexion = conectar();

if ($conexion) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");

    $consulta->bindParam(":nombre", $nombre);
    $consulta->bindParam(":correo", $correo);

    $consulta->execute();

    header("location: ./select.php");

    echo "Usuario insertado correctamente: ID: ". $conexion->lastInsertId();
}