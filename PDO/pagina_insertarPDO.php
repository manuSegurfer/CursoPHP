<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
</head>
<body>
<?php
$c_art = $_GET["c_art"];
$seccion = $_GET["secc"];
$n_art = $_GET["n_art"];
$precio = $_GET["pre"];
$fecha = $_GET["fec"];
$importado = $_GET["imp"];
$p_orig = $_GET["p_ori"];

try{
    $base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql="INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUE (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig )";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":c_art"=>$c_art, ":seccion" => $seccion, ":n_art" => $n_art, ":precio" => $precio, ":fecha" => $fecha, ":importado" => $importado, ":p_orig" => $p_orig));
//Opción Delete
    $sql="DELETE FROM PRODUCTOS WHERE CODIGOARTICULO= :c_art";
    $resultado = $base->prepare($sql);
    $resultado-> execute(array(":c_art"=>$c_art));
//Opción Delete
    echo "Registro insertado";
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