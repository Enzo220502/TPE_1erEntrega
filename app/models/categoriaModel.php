<?php
require_once './db/config.php';

class categoriaModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=productos_tpe;charset=utf8', 'root', '');
    }

    public function obtenerCategorias(){
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }


    public function addCategoria($nueva){
        $query = $this->db->prepare("INSERT INTO categorias (categoria) VALUES (?)");
        $query->execute([$nueva]);
        return $query;
    }

    public function obtenerPorId($id){
        $query = $this->db->prepare('SELECT * FROM categorias WHERE id=?');
        $query->execute([$id]);
        $cat = $query->fetch(PDO::FETCH_OBJ);
        return $cat;
    }

    public function borrarCategoria($id){
        $query = $this->db->prepare('DELETE FROM categorias WHERE categorias.id = ?');
        $query->execute([$id]);
        return;
    }

    public function subirCambios($id,$nombre){
        $query = $this->db->prepare('UPDATE categorias SET categoria = ? WHERE id= ?');
        $query->execute([$nombre,$id]);
        return $query;
    }

}

?>