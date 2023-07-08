<?php

require ('./config.php');

class Conexion{

    protected $conexion_db;

    public function __construct(){

//---------------------------------PDO-------------------------------------------------------
        try {
           $this->conexion_db=new PDO('mysql:host=localhost; dbname=pokemon', 'root', '');

           $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $this->conexion_db->exec("SET CHARACTER SET utf8");
           return $this->conexion_db;
        } catch (Exception $e) {
            echo "La línea de error es: " . $e->getLine();
        }

    
//---------------------------------MYSQLi-------------------------------------------------------    
       /* $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
        if($this->conexion_db->connect_errno){
            echo "fallo al conectar a Mysql: " . $this->conexion_db->connect_errno;
        }
        $this->conexion_db->set_charset((DB_CHARSET));*/
    }

}

?>