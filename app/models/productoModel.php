<?php
require_once './db/config.php';

class productoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=productos_tpe;charset=utf8', 'root', '');
    }

    public function obtenerProductos($id){
        $query = $this->db->prepare('SELECT * FROM categorias INNER JOIN productos ON productos.id_categoria = categorias.id WHERE productos.id_categoria = ?;');
        $query->execute([$id]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

}

?>