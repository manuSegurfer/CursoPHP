<?php

class Coche {

    protected $ruedas;

    var $color;

    var $motor;

    function __construct(){//Método constructor
    //Para referenciar propiedades o métodos dentro de la clase coche
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
    function arrancar() {
        echo "Estoy arrancando <br>";
    }

    function getRuedas(){
        return $this->ruedas;
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

class Camion extends Coche {

    function __construct(){//Método constructor
        //Para referenciar propiedades o métodos dentro de la clase coche
            $this->ruedas = 8;
            $this->color = "Gris";
            $this->motor = 2600;
        }

    function establece_color($color_camion, $nombre_camion){
        $this->color = $color_camion;
        echo "El color del coche de marca " .  $nombre_camion . " es " . $this->color . "<br>";
    }

    function arrancar(){
        parent::arrancar();
        echo "Camión arrancado";
    }


}

$renault = new Coche();//Estado inicial al objeto o instancia
$peugeot = new Coche();
?>