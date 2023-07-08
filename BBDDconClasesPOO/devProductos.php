<?php
require './conexion.php' ;

class DevuelveProductos extends Conexion{

    public function __construct(){

        parent::__construct();
    }
   //!---------------------------------PDO-------------------------------------------------------     
    public function getProduct($dato){
        $sql="SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN=' " . $dato .  " ' ";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
    }

//!---------------------------------MYSQLi-------------------------------------------------------    

  /*  public function getProducts(){
        $resultado=$this->conexion_db->query("SELECT * FROM PRODUCTOS");
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }

    public function getProduct($dato){
        $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS   WHERE  PAISDEORIGEN="' . $dato . '"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }*/
}


?>