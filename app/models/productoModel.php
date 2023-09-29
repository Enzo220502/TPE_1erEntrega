<?php
require_once './db/config.php';

class productoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=productos_tpe;charset=utf8', 'root', '');
    }

    public function obtenerProductos() {
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    public function obtengoById($id){
        $query = $this->db->prepare("SELECT * FROM productos where `id`=$id");
        $query->execute([$id]);
        $registroDeProducto = $query->fetchAll(PDO::FETCH_OBJ);
        return $registroDeProducto;
    }


}

?>