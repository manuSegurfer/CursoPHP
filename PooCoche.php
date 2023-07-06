<?php

class Coche {

    var $ruedas;

    var $color;

    var $motor;

    function __construct(){//Método constructor
    //Para referenciar propiedades o métodos dentro de la clase coche
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
    function arrancar() {
        echo "Estoy arrancando";
    }

    function girar() {
        echo "Estoy girando<br>";
    }

    function frenar() {
        echo "Estoy frenando";
    }

    function establece_color($color_coche, $nombre_coche){
        $this->color = $color_coche;
        echo "El color del coche de marca " .  $nombre_coche . " es " . $this->color . "<br>";
    }


}

$renault = new Coche();//Estado inicial al objeto o instancia
$peugeot = new Coche();

//$peugeot->girar();
//echo $peugeot->ruedas;
//Clase 24
$peugeot->establece_color('Rojo', "Peugeot");
?>