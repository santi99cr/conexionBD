<?php
require_once("../conexion.php");
$conexion = conectar();

if ($conexion) {
    $nombre = "Santiago";
    $correo = "santiago@gmail.com";

    $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");

    $consulta->bindParam(":nombre", $nombre);
    $consulta->bindParam(":correo", $correo);

    $consulta->execute();

    echo "Usuario insertado correctamente: ID: ". $conexion->lastInsertId();
}