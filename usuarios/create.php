<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form action="./store.php" method="POST">
        <label for="">Nombre</label> <br>
        <input type="text" name="nombre"> <br>

        <label for="">Correo</label> <br>
        <input type="email" name="correo"> <br>

        <button>Guardar Usuario</button>
    </form>
</body>
</html>