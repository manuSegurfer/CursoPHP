<?php
$c_art = $_GET["c_art"];
$seccion = $_GET["secc"];
$numero_articulo = $_GET["n_art"];
$precio = $_GET["pre"];
$fecha = $_GET["fec"];
$importado = $_GET["imp"];
$origen = $_GET["p_ori"];

require("datos_conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");

$sql = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO,  FECHA, IMPORTADO, PAISDEORIGEN) VALUES (?, ?, ?, ?, ?, ?, ?)";

$resultado = mysqli_prepare($conexion, $sql);

$ok = mysqli_stmt_bind_param($resultado, "sssisss", $c_art, $seccion, $numero_articulo, $precio, $fecha, $importado, $origen);
$ok = mysqli_stmt_execute($resultado);

if($ok==false) echo "Error al ejecutar la consulta";
else{
    //$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
    echo "Nuevo registro agregado";
    /*while (mysqli_stmt_fetch($resultado)){
        echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
    }*/
    mysqli_stmt_close($resultado);
}

?>