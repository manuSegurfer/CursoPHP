<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// include("PooVehiculos.php");
// $peugeot=new Coche;
// $pegaso = new Camion;
// echo "El peugeot tiene " . $peugeot->getRuedas() . " ruedas <br>";
// echo "El pegaso tiene " . $pegaso->getRuedas() . " ruedas <br>";
include("concesionario.php");


Compra_vehiculo::descuento_gobierno();

$compra_Antonio = new Compra_vehiculo("compacto");
$compra_Antonio->climatizador();
$compra_Antonio->tapiceria_cuero("blanco");
echo $compra_Antonio->precio_final();
echo "<br>";

$compra_Ana = new Compra_vehiculo("compacto");
$compra_Ana->climatizador();
$compra_Ana->tapiceria_cuero("rojo");
echo $compra_Ana->precio_final();

?>
</body>
</html>