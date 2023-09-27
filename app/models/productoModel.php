<?php
require_once './db/config.php';

class productoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=productos_tpe;charset=utf8', 'root', '');
    }


}

?>