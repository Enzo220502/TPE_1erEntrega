<?php

class dbConfig{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=productos_tpe;charset=utf8', 'root', '');
    }

    public function generarDb(){
        
    }

}
?>
