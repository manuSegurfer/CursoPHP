<!DOCTYPE html>
<html>

<head>
    <meta chearset= "utf-8">
    <title>Documento sin título</title>
</head>
<body>
<?php
try{
    $base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
} catch(Exception $e){
    die ('Error: ' . $e->getMessage());
}finally{
    $base=null;
}

?>
</body>
</html>