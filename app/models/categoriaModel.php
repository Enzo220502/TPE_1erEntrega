<?php
require_once './db/config.php';

class categoriaModel{

    private $db;

    function __construct($tabla){
        $this->db = new dbConfig($tabla);
    }


}

?>