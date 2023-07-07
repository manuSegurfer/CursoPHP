<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
</head>
<body>
<?php
$c_art = $_GET["c_art"];


try{
    $base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql="DELETE FROM PRODUCTOS WHERE CODIGOARTICULO= :c_art";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":c_art"=>$c_art));

    echo "Registro eliminado";
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        //echo "Nombre artículo: " . $registro['NOMBREARTICULO'] . ", SECCIÓN: " . $registro['SECCION'] . " Precio: " . $registro['PRECIO'] . " País de origen: " . $registro['PAISDEORIGEN'] . "<br>";
    }
    $resultado->closeCursor();
} catch(Exception $e){
    //die ('Error: ' . $e->getMessage());
}finally{
    $base=null;
}

?>
</body>
</html>