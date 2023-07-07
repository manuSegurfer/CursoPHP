<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
</head>
<body>
<?php
$seccion = $_GET['seccion'];
$pais= $_GET['pais'];

try{
    $base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql= "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN = :PAIS";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":SECC"=>$seccion, ":PAIS" => $pais));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre artículo: " . $registro['NOMBREARTICULO'] . ", SECCIÓN: " . $registro['SECCION'] . " Precio: " . $registro['PRECIO'] . " País de origen: " . $registro['PAISDEORIGEN'] . "<br>";
    }
    $resultado->closeCursor();
} catch(Exception $e){
    die ('Error: ' . $e->getMessage());
}finally{
    $base=null;
}

?>
</body>
</html>