<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Arrays</title>
</head>
<body>

<?php

$semana[]= "Lunes";
$semana[]= "Martes";
$semana[]= "Miércoles";
$semana[]= "Jueves";

for ($i = 0; $i < 4; $i++){
    echo $semana[$i] . "<br>";
}



$alimentos = array("fruta" =>array("tropical" =>"kiwi",
                                   "cítrico"=>"mandarina",
                                   "otros"=>"manzana"),
                   "leche" =>array("animal" =>"vaca",
                                   "vegetal"=>"coco"),
                   "carne" =>array("vacuno" =>"lomo",
                                   "porcino"=>"pata"));

    foreach($alimentos as $clave_alim => $alim){
            echo "$clave_alim: <br>";
            foreach($alim as $type => $aliments) {
                echo "$type = $aliments <br>";
            }
    }
?>

</body>
</html>