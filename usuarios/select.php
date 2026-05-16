<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuarios</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h2>Lista de Usuarios</h2>

        <?php

        include_once("../conexion.php");

        $conexion = conectar();

        if ($conexion) {
            try {
                $consulta = $conexion->prepare("SELECT id, nombre, correo FROM usuarios");
                $consulta->execute();

                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <a href="create.php">Nuevo Usuario</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Correo</th>
            </tr>

        <?php
                foreach ($resultado as $usuario) {
                ?>
                    <tr>
                        <td><?= $usuario["id"]; ?></td>
                        <td><?= $usuario["nombre"]; ?></td>
                        <td><?= $usuario["correo"]; ?></td>
                    </tr>
                <?php
                }
        ?>
        </table>

        <?php
            } catch (\Throwable $th) {
                echo "{$th->getMessage()}";
            }
        }

        ?>



    </body>
</html>