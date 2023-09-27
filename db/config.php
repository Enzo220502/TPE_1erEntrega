<?php

class dbConfig{

    private $db;

    function __construct(){
        generarDb();
        $this->db = new PDO();
    }

    function __construct($nombreTabla){
        
        $this->db = new PDO('mysql:host=localhost;'.'dbname=$nombreTabla;charset=utf8', 'root', '');
    }

    public function generarDb(){
        
    }

}
?>
