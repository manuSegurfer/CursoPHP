<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require("datos_conexion.php");

    $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);

        if ($conexion->connect_errno) {
            echo "Falló la conexión " . $conexion->connect_errno;
        }

        $conexion->set_charset("utf-8");

        $sql = "SELECT * FROM PRODUCTOS";
        $resultado = $conexion->query($sql);

        if($conexion->errno){
            die($conexion->error);
        }
        /*while($fila=$resultado-> fetch_assoc()){
            echo "<table><tr><td>";
            echo $fila['CODIGOARTICULO'] . "</td><td>";
            echo $fila['NOMBREARTICULO'] . "</td><td>";
            echo $fila['SECCION'] . "</td><td>";
            echo $fila['IMPORTADO'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td>";
            echo $fila['PAISDEORIGEN'] . "</td><td></tr></table>";

            echo "<br>";
            echo "<br>";
        }*/
        while($fila=$resultado-> fetch_array()){
            echo "<table><tr><td>";
            echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td>";
            echo $fila[3] . "</td><td>";
            echo $fila[5] . "</td><td>";
            echo $fila[6] . "</td><td></tr></table>";

            echo "<br>";
            echo "<br>";
        }

        $conexion->close();
    ?>
</body>
</html>