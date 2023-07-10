<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
}
?>

<h1>Bienvenidos!</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias commodi quas ab nisi impedit sed quia nesciunt rem dicta incidunt sapiente, illo quibusdam corporis, sunt natus cumque atque repudiandae adipisci.</p>
<a class="btn btn-outline-warning" href="usuario_registrado2.php">Usuarios 2</a>
<a class="btn btn-outline-warning" href="usuario_registrado3.php">Usuarios 3</a>
<a class="btn btn-outline-warning" href="usuario_registrado4.php">Usuarios 4</a>

<a class="btn btn-danger" href="cierre.php">Cerrar sesión</a>
</body>
</html>