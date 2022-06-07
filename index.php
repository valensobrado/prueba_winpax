<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Winpax</title>
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>
    
    <form action="backend.php" method="POST">
        <h2>Registrar usuario nuevo:</h2>
        <input name="name" type="text" placeholder="Nombre" required>
        <input name="surname" type="text" placeholder="Apellido" required>
        <input name="email" type="text" placeholder="Correo" required>
        <input name="password" type="password" placeholder="Crear contraseña" required>
        <input name="second-password" type="password" placeholder="Repetir contraseña"required>
        <input name="btn" type="submit" value="Registrar">
    </form>
    <?php
        include('backend.php');
    ?>
</body>
</html>