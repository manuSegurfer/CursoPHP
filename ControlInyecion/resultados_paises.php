<?php
$pais = $_GET["buscar"];
require("datos_conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");

$sql = "SELECT CODIGOARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE PAISDEORIGEN=?";

$resultado = mysqli_prepare($conexion, $sql);

$ok = mysqli_stmt_bind_param($resultado, "s", $pais);
$ok = mysqli_stmt_execute($resultado);

if($ok==false) echo "Error al ejecutar la consulta";
else{
    $ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
    echo "Artículos encontrados: <br><br>";
    while (mysqli_stmt_fetch($resultado)){
        echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
    }
    mysqli_stmt_close($resultado);
}

?>