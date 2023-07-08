<?php
require 'devProductos.php';
$paisIntr= $_GET["pais"];
$productos = new DevuelveProductos();
//$array_productos=$productos->getProducts();
$productoPorPais = $productos->getProduct($paisIntr);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// foreach($array_productos as $elemento){
//     echo "<table><tr><td>";
//     echo $elemento['CODIGOARTICULO'] . "</td><td>";
//     echo $elemento['NOMBREARTICULO'] . "</td><td>";
//     echo $elemento['SECCION'] . "</td><td>";
//     echo $elemento['IMPORTADO'] . "</td><td>";
//     echo $elemento['FECHA'] . "</td><td>";
//     echo $elemento['PRECIO'] . "</td><td>";
//     echo $elemento['PAISDEORIGEN'] . "</td><td></tr></table>";

//     echo "<br>";
//     echo "<br>";
// }
foreach($productoPorPais as $elemento){
    echo "<table><tr><td>";
    echo $elemento['CODIGOARTICULO'] . "</td><td>";
    echo $elemento['NOMBREARTICULO'] . "</td><td>";
    echo $elemento['SECCION'] . "</td><td>";
    echo $elemento['IMPORTADO'] . "</td><td>";
    echo $elemento['FECHA'] . "</td><td>";
    echo $elemento['PRECIO'] . "</td><td>";
    echo $elemento['PAISDEORIGEN'] . "</td><td></tr></table>";

    echo "<br>";
    echo "<br>";
}
    ?>
</body>
</html>